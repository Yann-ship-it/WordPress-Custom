<!DOCTYPE html>
<head <?php language_attributes(); ?>>
   <meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php the_title(); ?> </title>
<?php wp_head(); ?> 
</head>

<body>

<header>
  <div class="nav">
  <h1><?php bloginfo('name'); ?></h1>
  <?php
wp_nav_menu(array(
  'menu' => 'Menu principal',
  'container' => 'nav'
));
?>
  </div>
    <section class="hero">
    </section>
    </header>