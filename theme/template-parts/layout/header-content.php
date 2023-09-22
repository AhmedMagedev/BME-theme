<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

?>


<header id="navbar"  class=" w-full flex fixed z-30 items-center justify-center pb-6">

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
		
		<div x-data="{ open: false }" class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="open = true">
    <img src="https://thebmegroup.com/wp-content/themes/bme/img/menu-btn.svg" alt="menu" class="cursor-pointer float-right w-7 h-4 mr-10 mt-7">
    </span>
 
    <!-- Slideover -->
    <div
        x-dialog
        x-model="open"
        style="display: none"
        class="fixed inset-0 overflow-hidden z-10"
    >
        <!-- Overlay -->
        <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>
 
        <!-- Panel -->
        <div class="fixed h-full w-full">
            <div
                x-dialog:panel
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="h-full w-full"
            >
                <div class="h-full flex flex-col justify-between bg-black bg-nav-bg shadow-lg overflow-y-auto">
                    <!-- Close Button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="$dialog.close()" class="bg-gray-50 rounded-lg p-2 text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                            <span class="sr-only">Close slideover</span>
 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
 
                    <!-- Body -->
                    <div class="p-3 flex-col">
                        <!-- Title -->
                        <img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" id="logo" class=" mx-auto w-28 h-8 mt-5">
 
                        <!-- Content -->
                        <p class="my-auto text-white text-5xl flex-grow">Your slideout text and content goes here.</p>
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>
			
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
	<!-- Include these scripts somewhere on the page: -->

	<script>
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor = "";
  }
}
</script>
	

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