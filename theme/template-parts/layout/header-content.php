<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

?>


<header  class=" w-full flex fixed z-30 bg-black items-center justify-center pb-6">

	<div class="flex w-full items-center justify-between text-center">
		<
		<?php
		if ( is_front_page() ) :
			?>
			<h1><img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" id="logo" class=" mx-auto w-28 h-8 mt-5"></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" id="logo" class=" mx-auto w-28 h-8 mt-5"></a></p>
			<?php
		endif;
		?>
			<img src="https://thebmegroup.com/wp-content/themes/bme/img/menu-btn.svg" alt="menu" class="float-right w-7 h-4 mr-10 mt-7">
	</div>
	
	

	<nav id="site-navigation" class="hidden" aria-label="<?php esc_attr_e( 'Main Navigation', 'bme' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bme' ); ?></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
	

</header><!-- #masthead -->


<!-- <div id="navbar" class=" w-full h-20 flex fixed z-40 " >
		<img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="logo" id="logo" class=" mx-auto w-28 h-8 mt-5">
		<img src="https://thebmegroup.com/wp-content/themes/bme/img/menu-btn.svg" alt="menu" class="w-7 h-4 mr-10 mt-7">
	</div>
<script>
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor = "";
  }
}
</script> -->