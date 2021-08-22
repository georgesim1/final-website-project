<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0" > 

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <?php wp_head();?>

  <title>So'Extreme | Activités de sports extrêmes pour tous dans le Verdon 

</title>
</head>

<body>
   <!-- Back to Top button -->
  <div id="container">
 <!-- Back to Top button -->

    <!-- Navigation menu -->
    <header>
      <nav class="my-nav navbar navbar-light navbar-expand-lg navbar-inverse">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        
          <ul class="navbar-nav">
            <li class="nav-item dropdown">

            <?php
        wp_nav_menu( array(
            'menu_location'     => 'primary',
            'depth'             => 2,
            'container'         => 'false',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
      </nav>

    </header>


    <!-- Navigation menu -->


    <!-- Sidebar menu -->
    <div class="lateral-nav position-fixed">
      <a href="http://f2i-cp21-sm-dt-ag-gs.online"><img class="logo roll-in-blurred-left" src="<?php bloginfo('template_directory');?>/img/so.png" alt="logo"></a>
      <div class="socialbox ">
        <a href="#"><img class="fa fa-facebook" src="<?php bloginfo('template_directory');?>/img/facebook.png" alt=""></a>
        <a href="#"><img class="fa fa-youtube" src="<?php bloginfo('template_directory');?>/img/youtube.png" alt=""></a>
        <a href="#"><img class="fa fa-instagram" src="<?php bloginfo('template_directory');?>/img/instagram(1).png" alt=""></a>
      </div>
    </div>
    <!-- Sidebar menu -->

