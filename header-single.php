<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <?php require_once get_template_directory() . '/cores.php';?>
</head>
<body <?php body_class(  ); ?>>
<header>
    <div class="container">
        <div class="menu-tabs">
            <div class="logo-header">
                <a href="/">
                    <img src="http://plugexemplo.esy.es/wp-content/uploads/2021/08/LOGO-PNG.png" alt="">
                </a>
            </div>
            <nav class="options-menu">
                <a href="/">
                    Home
                </a>
                <a href="<?php echo get_site_url('','/#programacao')?>">
                    Programação
                </a>
                <a href="<?php echo get_site_url('','/#equipe')?>">
                    Equipe
                </a>
                <a href="<?php echo get_site_url('','/#contato')?>">
                    Contato
                </a>
            </nav>
            <i class="fas fa-bars menu"></i> 
        </div>
    </div>
</header>
<audio id="link-streaming" src="https://icecast.sistemaplug.com:18406/radio"></audio>
<section id="player">
    <div class="container">
        <div class="box-player">
            <div class="foto-progra">
                <div class="foto">
                    <img src="https://source.unsplash.com/250x250/?person" alt="">
                </div>
                <div class="textos">
                    <p>Café com proza</p>
                    <p>com:</p>
                    <p>Marcio Viera</p>
                </div>
            </div>
            <div class="btns">

                <div>
                    <i id="volMenos" class="fas fa-minus"></i>
                    <i id="btnPlay" class="fas fa-play"></i>
                    <img class="img-load" src="https://cultura97.com.br/wp-content/themes/classic-wp/assets/images/load.gif" alt="">
                    <i  id="volMais" class="fas fa-plus"></i>
                </div>
                
                <div class="mt-1">
                    <div class="boxContainer">
                    <div class="box box1"></div>
                    <div class="box box2"></div>
                    <div class="box box3"></div>
                    <div class="box box4"></div>
                    <div class="box box5"></div>
                    <div class="box box6"></div>
                    <div class="box box7"></div>
                    <div class="box box8"></div>
                    <div class="box box9"></div>
                    <div class="box box10"></div>
                    <div class="box box11"></div>
                    </div>
                </div>
            </div>
            <div class="tempo">
                <a class="weatherwidget-io" href="https://forecast7.com/pt/n24d96n53d46/cascavel/" data-label_1="CASCAVEL" data-days="3" data-theme="original" data-basecolor="#1B0F21" >CASCAVEL</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>
        </div>
    </div>
</section>


<nav id="menu-mobile">
    <i class="far fa-window-close close"></i>
    <ul>
        <li>
            <a href="/">
                Home
            </a>
        </li>
        <li>
            <a href="<?php echo get_site_url('','/#programacao')?>">
                Programação
            </a>
        </li>
        <li>
            <a href="<?php echo get_site_url('','/#equipe')?>">
                Equipe
            </a>
        </li>
        <li>
            <a href="<?php echo get_site_url('','/#contato')?>">
                Contato
            </a>
        </li>
    </ul>
</nav>

