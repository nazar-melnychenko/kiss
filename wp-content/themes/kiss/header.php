<?php defined( 'ABSPATH' ) || exit; ?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <title>KiSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords" content="KiSS"/>

    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<!-- main -->
<div id="home">
    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal modal-window">
        <div class="phone">
            <hr/>
            <div class="phone-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>м.Івано-Франківськ вул.Галицька 112в</span>
            </div>
            <div class="phone-item">
                <i class="fas fa-mobile-alt"></i>
                <a href="tel:38(095)7646964">+38 (095) 76 46 964</a>
            </div>
            <hr/>
            <div class="phone-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>м.Калуш вул.Сівецька 2</span>
            </div>
            <div class="phone-item">
                <i class="fas fa-mobile-alt"></i>
                <a href="tel:38(095)7646964">+38 (095) 76 46 964</a>
            </div>
            <hr/>
        </div>
    </div>
    <header>
        <?php get_template_part('template-parts/navigation'); ?>
    </header>
</div>
<!-- //main -->