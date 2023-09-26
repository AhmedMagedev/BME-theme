<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

get_header();
?>
<?php if ( have_posts() ) : ?>

	<section id="primary" >
		<main id="main" class="bg-black h-screen" >
			<div class="bg-black h-40 w-full"></div>
			<div class="justify-center text-center object-center items-center">
				<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title text-white">', '</h1>' ); ?>
				</header><!-- .page-header -->
				<p class="text-yellow-600 text-base">Featured</p>
				<div class="pt-10 w-3/5 container justify-center text-center items-center mx-auto grid gap-y-4 grid-cols-3">
					
				<?php

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content', 'excerpt' );

	// End the loop.
endwhile;

// Previous/next page navigation.
am_the_posts_navigation();

else :

// If no content, include the "No posts found" template.
get_template_part( 'template-parts/content/content', 'none' );

endif;
?>
					
					
				</div>
			</div>
			<div>
		</main><!-- #main -->
	</section><!-- #primary -->





<?php
get_footer();

 