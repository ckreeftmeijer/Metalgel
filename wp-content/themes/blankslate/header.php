<!doctype html>

  <html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Metalgel - Home</title>
    <meta name="description" content="METALGEL is een verfgel dat direct kan worden aangebracht op staal, ijzer en roest. Voorbehandelen is niet nodig omdat Metalgel over een 3-in-1 formule beschikt. Metalgel stopt roest, werkt als een primer én toplaag in één.">
    <meta name="author" content="ckreeftmeijer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.slicknav.min.js"></script> -->
  </head>
  <body>

  <header>
    <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_text.png" alt="logo metalgel" />
    <ul id="menu">
      <li><a class="active" href="">Home</a></li>
      <li><a href="">Nieuws</a></li>
      <li><a href="">Inspiratie</a></li>
      <li><a href="">Technische eigenschappen</a></li>
      <li><a href="">Downloads</a></li>
      <li><a href="">Contact</a></li>
  </ul>
  </header>

  <script>
    jQuery(function($) {
      $(function(){
        $('#menu').slicknav();
        $('.slicknav_menu').prepend('<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_text.png" alt="logo metalgel" />');
      });
    });
  </script>
