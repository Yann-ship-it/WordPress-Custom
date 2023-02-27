<?php get_header();
//Template Name: Contact
?>

<h2 class="title"><?php the_title()?></h2>

<div class="form">
    <?php echo apply_shortcodes( '[contact-form-7 id="32" title="Formulaire de contact 1"]' ); ?>
</div>

<div class="map">
    <?php echo apply_shortcodes( '[wpgmza id="1"]' ); ?>
</div>


<?php get_footer(); ?>
