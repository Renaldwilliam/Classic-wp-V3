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
    <div class="menu-tabs">
        <a href="">
            <i class="fas fa-home"></i>
            Home
        </a>
        <a href="">
            <i class="far fa-clock"></i>
            Programação
        </a>
        <a href="">
            <i class="fas fa-users"></i>
            Equipe
        </a>
        <a href="">
            <i class="fas fa-address-book"></i>
            Contato
        </a>
    </div>
</header>
