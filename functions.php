<?php 

require_once get_template_directory() . "/painel-admin/paginas-categorias/paginas-categorias.php";



function classic_wp_load_scripts() {

    //Theme's main styleheet
    wp_enqueue_style( 'classic-wp-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'classic-wp-owl-style',  get_template_directory_uri() . '/inc/owlCarousel/css/owl.carousel.min.css' , array(), '1.0', 'all' );
    wp_enqueue_style( 'classic-wp-owld-style',  get_template_directory_uri() . '/inc/owlCarousel/css/owl.theme.default.min.css' , array(), '1.0', 'all' );
  
    //FontAwesome
    wp_enqueue_script( 'classic-wp-font-awesome', 'https://kit.fontawesome.com/500b5b939a.js', array(), '', true );
    wp_enqueue_script( 'classic-wp-owl-js', get_template_directory_uri() . '/inc/owlCarousel/js/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.js', array(), '', true );
    wp_enqueue_script( 'pag-js', get_template_directory_uri() . '/assets/js/paginacao-programacao.js', array(), '', true );
    wp_enqueue_script( 'play-js', get_template_directory_uri() . '/assets/js/page-player-desktop.js', array(), '', true );
    wp_enqueue_script( 'btns-js', get_template_directory_uri() . '/assets/js/actions-buttons.js', array(), '', true );
    wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/assets/js/menu-mobile.js', array(), '', true );
    wp_enqueue_script('jquery'); 
}


function class_wp_setup() {
    
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'classic_wp_main_menu' 	=> esc_html__( 'Classic Wp Menu Topo', 'classic_wp' ),
			'classic_wp_mobile_menu' => esc_html__( 'Classic Wp Mobile Menu', 'classic_wp' ),
            'classic_wp_categorias_footer' => esc_html__( 'Classic Wp Categorias Footer', 'classic_wp' ),
            'classic_wp_links_footer' => esc_html__( 'Classic Wp links úteis Footer', 'classic_wp' ),
		)
	);

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    # indica que o tema suporta menus
    add_theme_support( 'menus' );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 190,
            'width'       => 190,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom line height.
    add_theme_support( 'custom-line-height' );

    add_theme_support( 'editor-styles' );

}

function criar_menus_painel() {

    # cria os menus necessários para os temas caso nao tenha
    if ( wp_get_nav_menu_items( 'MenuTopo' ) == false ) {
        wp_create_nav_menu( "MenuTopo" );
    }

    if ( wp_get_nav_menu_items( 'MenuFooterCategorias' ) == false ) {
        wp_create_nav_menu( "MenuFooterCategorias" );
    }

    if ( wp_get_nav_menu_items( 'MenuMobile' ) == false ) {
        wp_create_nav_menu( "MenuMobile" );
    }

    if ( wp_get_nav_menu_items( 'MenuLinkUteis' ) == false ) {
        wp_create_nav_menu( "MenuLinkUteis" );
    }
    
}


/** Classe Responsavel por adiconar o icone de Drop Drow */
class fluent_themes_custom_walker_nav_menu extends Walker_Nav_Menu {
    private $blog_sidebar_pos = "";
    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = Array() ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'dropdown-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? '' : '' ),
            'menu-depth-' . $display_depth
            );
        $class_names = implode( ' ', $classes );
    
        // build html
    
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
    
    // add main/sub classes to li's and links
     function start_el( &$output, $item, $depth = 0, $args = Array(), $id = 0 ) {
        global $wp_query, $wpdb;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
    
        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? '' : '' ), //class for the top level menu which got sub-menu
            ( $depth >=1 ? '' : 'dropdown' ), //class for the level-1 sub-menu which got level-2 sub-menu
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ), //class for the level-2 sub-menu which got level-3 sub-menu
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
    
        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
    
        // build html
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
    
        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        //$attributes .= ' class="' . ( $depth > 0 ? '' : '' ) . '"';
    
        // Check if menu item is in main menu
        $table_name = $wpdb->prefix . 'postmeta';
        $has_children = $wpdb->get_var("SELECT COUNT(meta_id)
                                FROM $table_name
                                WHERE meta_key='_menu_item_menu_item_parent'
                                AND meta_value='".$item->ID."'");
    
        if ( $depth == 0 && $has_children > 0  ) {
            // These lines adds your custom class and attribute
            $attributes .= ' class="dropdown-toggle"';
            $attributes .= ' data-toggle="dropdown"';
            $attributes .= ' data-hover="dropdown"';
            $attributes .= ' data-animations="fadeInUp"';
        }
        $description  = ! empty( $item->description ) ? '<i class="fa '.esc_attr( $item->description ).'" aria-hidden="true"></i>' : '';
    
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $description.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after; //If you want the description to be output after <a>
        //$item_output .= $description.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after; //If you want the description to be output before </a>
    
        // Add the caret if menu level is 0
        if ( $depth == 0 && $has_children > 0  ) {
            $item_output .= ' &nbsp;<i class="fa fa-caret-down"></i>';
        }
    
        $item_output .= '</a>';
        $item_output .= $args->after;
    
        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
    }
} //End Walker_N    


add_action( 'init', 'criar_menus_painel' );
add_action( 'wp_enqueue_scripts', 'classic_wp_load_scripts' );
add_action( 'after_setup_theme', 'class_wp_setup' );

