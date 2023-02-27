<?php get_header();
//Template Name: Recette
?>

<section class="recette">
    <h2 class="title"><?php the_title()?></h2>

    <article class="antipasti">
        <?php if ( have_rows( 'groupe-antipasti' ) ) : ?>
	        <?php while ( have_rows( 'groupe-antipasti' ) ) : the_row(); ?>
		        <h2><?php the_sub_field( 'titre' ); ?></h2>
                <div class="ingr">
                    <p>Ingrédients : <?php the_sub_field( 'ingredients' ); ?></p>
                    <p>Préparation : <?php the_sub_field( 'preparation' ); ?></p>
                    <p>Conseils : <?php the_sub_field( 'conseils' ); ?></p>
                    <p><?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
	        <?php endwhile; ?>
        <?php endif; ?>
    </article>

    <article class="risotto">
        <?php if ( have_rows( 'groupe-risotto' ) ) : ?>
	        <?php while ( have_rows( 'groupe-risotto' ) ) : the_row(); ?>
		        <h2><?php the_sub_field( 'titre' ); ?></h2>
                <div class="ingr">
                    <p>Ingrédients : <?php the_sub_field( 'ingredients' ); ?></p>
                    <p>Préparation : <?php the_sub_field( 'preparation' ); ?></p>
                    <p>Conseils : <?php the_sub_field( 'conseils' ); ?></p>
                    <p><?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
	        <?php endwhile; ?>
        <?php endif; ?>
    </article>

    <article class="dessert">
        <?php if ( have_rows( 'groupe-dessert' ) ) : ?>
	        <?php while ( have_rows( 'groupe-dessert' ) ) : the_row(); ?>
		        <h2><?php the_sub_field( 'titre' ); ?></h2>
                <div class="ingr">
                    <p>Ingrédients : <?php the_sub_field( 'ingredients' ); ?></p>
                    <p>Préparation : <?php the_sub_field( 'preparation' ); ?></p>
                    <p>Conseils : <?php the_sub_field( 'conseils' ); ?></p>
                    <p><?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
	        <?php endwhile; ?>
        <?php endif; ?>
    </article>
</section>

<?php get_footer(); ?>
