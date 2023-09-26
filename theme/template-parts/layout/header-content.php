<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

?>


<header id="navbar"  class="transition-all ease-in-out delay-200 w-full flex fixed z-30 items-center justify-center pb-6">

	<div class="flex w-full items-center justify-between text-center">
		<div class="">.</div>
		<?php
		if ( is_front_page() ) :
			?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

        <h1><img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" id="logo" class=" mx-auto w-28"></h1>
      </a>
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
    <img id="showNav" src="https://thebmegroup.com/wp-content/themes/bme/img/menu-btn.svg" alt="menu" class="cursor-pointer float-right w-7 h-4 mr-10 mt-7">
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
                x-transition:enter="transition ease-in duration-300"
                x-transition:enter-start="opacity-0 scale-100"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-100"
                class="h-full w-full"
            >
                <div class="h-full flex flex-col justify-between bg-black bg-nav-bg bg-no-repeat bg-left shadow-lg ">
                    <!-- Close Button -->
                    <div class="absolute top-0 right-0 mr-10 mt-7">       
							        <svg fill="#ffffff" @click="$dialog.close()" class="w-7 h-7 cursor-pointer" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path> </g></svg>
                    </div>
                    <!-- Body -->
                    <div class="p-3 flex-col">
                        <img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" id="logo" class=" mx-auto w-28 h-8 mt-5">
                    </div>         
					 <div id="nav" class="h-screen text-center items-center justify-center flex mb-40 ">
              <?php 
              $args = array(
                  'container'     => '',
                  'menu_class' => 'text-white text-lg font-extrabold flex space-x-5',        
                  'theme_location' => 'menu-1',
                  'depth'         => 1,
                  'fallback_cb'   => false,
                  'link_class'   => 'hover:opacity-50 transition-all'
              );
              wp_nav_menu( $args ); 
              ?>
					 </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
	</div>
	
	



	<script>
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.backgroundColor = "black";
    document.getElementById("navbar").style.paddingTop = "15px";
    document.getElementById("navbar").style.height = "50px";
  } else {
    document.getElementById("navbar").style.backgroundColor = "";
    document.getElementById("navbar").style.paddingTop = "20px";
    document.getElementById("navbar").style.height = "70px";
  }
}


    document.getElementById('showNav').addEventListener('click', function(){
        document.getElementById('nav').classList.remove('scale-0');
        document.getElementById('nav').classList.add('scale-100');
    });


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