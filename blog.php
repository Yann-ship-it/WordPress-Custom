<?php get_header();
//Template Name: Blog
?>

<main id="blog">

<h2 class="title"><?php the_title()?></h2>

    <!-- affiche 8 extraits d'article -->
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<!-- fin affiche 8 extraits d'article -->

<!-- boucle wordpress pour afficher les extraits d'article -->
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<article class="post">
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<?php the_post_thumbnail();?>

<!-- permet d'afficher un extrait d'article -->
<?php the_excerpt(); ?>
</article>
<!-- fin permet d'afficher un extrait d'article -->
<?php endwhile; ?>
    <!-- fin boucle wordpress pour afficher les extraits d'article -->
    </main>
<?php get_footer(); ?>
