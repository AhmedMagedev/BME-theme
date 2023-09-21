<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BME
 */

get_header();
?>

	<section id="primary">
		<main id="main">
			<div class="relative">
				<video src="https://thebmegroup.com/wp-content/uploads/2022/06/showreel-cutdownn.mp4" autoplay muted loop class="w-full h-screen bg-black object-cover object-center"></video>
				<div class="z-10 mx-auto absolute top-0 h-full w-full flex justify-center items-center bg-gradient-to-t from-black">
				<div>
					<h1 class="text-white font-bold text-5xl italic mx-auto flex text-center">“We connect you to consumers through<br/> amazing brand experiences.”</h1>
					<a href="#" class="flex text-white space-x-3 items-center justify-center mt-5">
				
							<img src="https://thebmegroup.com/wp-content/themes/bme/img/play-btn.png" alt="play" class="w-10 h-10">
							<div>
								<p class=" text-left uppercase">watch</p>
								<p class=" text-left uppercase underline-offset-8 underline ">showreel&nbsp;&nbsp;&nbsp;&nbsp;</p>
							</div>
						</a>
				</div>
			</div>
		</div>
		<div class="w-full h-96 text-center justify-center flex items-center text-white bg-black">
			<div>
				<p class="text-4xl italic uppercase font-bold text-left">building<br/> momentous<br/> experiences</p>
				<p class="text-sm text-right uppercase underline-offset-8 underline pl-80">know more <span></span></p>
			</div>
		</div>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>

<style>
    .splide__pagination__page.is-active {
        background: #333;
    }
</style>

<div
    x-data="{
        init() {
            new Splide(this.$refs.splide, {
                perPage: 1,
                gap: '0rem',
                
            }).mount()
        },
    }"
>
    <section x-ref="splide" class="splide" aria-label="Splide/Alpine.js Carousel Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide flex flex-col items-center justify-center  bg-black pb-8 ">
                <video src="https://thebmegroup.com/wp-content/uploads/2022/04/safemode.mp4" autoplay muted loop class="w-full  bg-black object-contain "></video>
					<p class="absolute top-0 text-white text-5xl inset-0">I'm some text</p>
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                <video src="https://thebmegroup.com/wp-content/uploads/2022/11/cutdown-superdome_1.mp4" autoplay muted loop class="w-full  bg-black object-contain "></video>
					<p class="absolute top-0 text-white text-5xl inset-0">I'm some text</p>
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <video src="https://thebmegroup.com/wp-content/uploads/2022/04/insomnia.mp4" autoplay muted loop class="w-full  bg-black object-contain "></video>
					<p class="absolute top-0 text-white text-5xl inset-0">I'm some text</p>mg class="w-full" src="https://thebmegroup.com/wp-content/uploads/2022/04/insomnia.mp4" alt="placeholder image">
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <video src="https://thebmegroup.com/wp-content/uploads/2022/05/Playstation.mp4" autoplay muted loop class="w-full  bg-black object-contain "></video>
					<p class="absolute top-0 text-white text-5xl inset-0">I'm some text</p>
                </li>
            </ul>
        </div>
    </section>
</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();


