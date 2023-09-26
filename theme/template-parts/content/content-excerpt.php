<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php get_permalink($post_id) ?>">

	<div class="relative flex bg-black w-[350px] h-[300] overflow-hidden">
		
		<img class="hover:scale-150 transition-all w-full  justify-self-center bg-blend-darken" src="<?php echo get_the_post_thumbnail_url($post_id,'full') ?>" alt="post thumb">
		<div class=" items-center absolute flex inset-0 w-full h-full bg-black/60 ">
			<div class="justify-center space-y-3 w-full items-end">
				<p class="text-3xl italic font-bold text-white"><?php echo get_the_title($post_id) ?></p>
				<svg viewBox="0 0 1024 1024" class="icon mx-auto w-3 h-3" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
			</div>
		</div>
	</div>	
</a>

</article><!-- #post-${ID} -->



