<?php


/* função criada para criar todas as paginas padrôes create standard categories*/
function create_standard_pages(){

    global $wpdb;

    $tableName =  $wpdb->prefix . 'posts';

    $sql1 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Home'";
    $result1 = $wpdb->get_results($sql1);

    $sql2 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Contato'";
    $result2 = $wpdb->get_results($sql2);

    $sql3 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Equipe'";
    $result3 = $wpdb->get_results($sql3);

    $sql4 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'Player'";
    $result4 = $wpdb->get_results($sql4);

    $sql5 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_name = 'CDN'";
    $result5 = $wpdb->get_results($sql5);

    $sql6 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Mobile'";
    $result6 = $wpdb->get_results($sql6);

    $sql7 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Sobre'";
    $result7 = $wpdb->get_results($sql7);

    $sql8 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Sobre-Mobile'";
    $result8 = $wpdb->get_results($sql8);

    $sql9 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Programação'";
    $result9 = $wpdb->get_results($sql9);

    $sql10 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Galeria'";
    $result10 = $wpdb->get_results($sql10);

    $sql11 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Live'";
    $result11 = $wpdb->get_results($sql11);

    $sql12 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Manutenção'";
    $result12 = $wpdb->get_results($sql12);

    $sql13 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Política Privacidade'";
    $result13 = $wpdb->get_results($sql13);

    $sql14 = "SELECT post_type, post_name FROM $tableName WHERE post_type = 'page' AND post_title = 'Termos'";
    $result14 = $wpdb->get_results($sql14);

 
    if( sizeof($result1) > 0 ) {
            //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );
    }

    if( sizeof($result2) > 0 ) {
            //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Contato',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );
    }

    if( sizeof($result3) > 0 ) {
            //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Equipe',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result4) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Player',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result5) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'CDN',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result6) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Mobile',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result7) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Sobre',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result8) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Sobre-Mobile',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result9) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Programação',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result10) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Galeria',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result11) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Live',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result12) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Manutenção',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result13) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Política Privacidade',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }

    if( sizeof($result14) > 0 ) {
        //TODO
    }else {
        $homepage = array(
            'post_type'    => 'page',
            'post_title'    => 'Termos',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => 1
        ); 
        $homepage_id =  wp_insert_post( $homepage );    
    }
}

/* função criada para criar todas as categorias padrôes create standard categories*/
function create_standard_categories(){

    $categorias = array();

    $my_cat_2 = array('cat_name' => 'Destaques', 
    'category_description' => 'Destaques',
    'category_nicename' => 'destaques',
    'category_parent' => '');

    $my_cat_3 = array('cat_name' => 'Economia', 
    'category_description' => 'Economia',
    'category_nicename' => 'economia',
    'category_parent' => '');

    $my_cat_4 = array('cat_name' => 'Educação', 
    'category_description' => 'Educação',
    'category_nicename' => 'educação',
    'category_parent' => '');

    $my_cat_5 = array('cat_name' => 'Entretenimento', 
    'category_description' => 'Entretenimento',
    'category_nicename' => 'entretenimento',
    'category_parent' => '');

    $my_cat_6 = array('cat_name' => 'Esporte', 
    'category_description' => 'Esporte',
    'category_nicename' => 'esporte',
    'category_parent' => '');

    $my_cat_7 = array('cat_name' => 'Lateral', 
    'category_description' => 'Lateral',
    'category_nicename' => 'Lateral',
    'category_parent' => '');

    $my_cat_8 = array('cat_name' => 'Locais/Regionais', 
    'category_description' => 'Locais/Regionais',
    'category_nicename' => 'locaisregionais',
    'category_parent' => '');

    $my_cat_9 = array('cat_name' => 'Mundo', 
    'category_description' => 'Mundo',
    'category_nicename' => 'mundo',
    'category_parent' => '');

    $my_cat_10 = array('cat_name' => 'Política', 
    'category_description' => 'Política',
    'category_nicename' => 'politica',
    'category_parent' => '');

    $my_cat_11 = array('cat_name' => 'Saúde', 
    'category_description' => 'Saúde',
    'category_nicename' => 'saude',
    'category_parent' => '');

    $my_cat_12 = array('cat_name' => 'Slide', 
    'category_description' => 'Categoria para notícias da sessão topo',
    'category_nicename' => 'slide',
    'category_parent' => '');


    $my_cat_14 = array('cat_name' => 'Tecnologia', 
    'category_description' => 'Tecnologia',
    'category_nicename' => 'tecnologia',
    'category_parent' => '');

    $my_cat_15 = array('cat_name' => 'Mais Pedidas', 
    'category_description' => 'Mais Pedidas',
    'category_nicename' => 'maisPedidad',
    'category_parent' => '');
    
    array_push( 
        $categorias, 
        $my_cat_2, $my_cat_3, 
        $my_cat_4, $my_cat_5, $my_cat_6, 
        $my_cat_7, $my_cat_8, $my_cat_9, 
        $my_cat_10, $my_cat_10, $my_cat_11,
        $my_cat_12, $my_cat_14,$my_cat_15
    ); 
    
    for( $i = 0; $i < sizeof( $categorias ); $i++ ) {
        wp_insert_category( $categorias[$i] );
    }

}

add_action( 'admin_init', 'create_standard_pages' );
add_action( 'admin_init','create_standard_categories' );