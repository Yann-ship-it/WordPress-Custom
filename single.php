<?php get_header();
?>

<main id="single">
<h2 class="title"><?php the_title()?></h2>
    <!-- boucle wordpress -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<article> 
<!-- affiche le contenu     -->
<?php the_content(); ?>
<!-- fin affiche le contenu     -->

<!-- affiche l'image mise en avant     -->
<?php the_post_thumbnail();?>
<!-- fin affiche l'image mise en avant     -->

<span class="creator">Opérateur : <?php the_author();?></span>

<div id="container">
</div>
</article>
<?php endwhile; ?>
    <?php endif; ?>
     <!-- fin boucle wordpress -->
</main>

<?php get_footer(); ?>


