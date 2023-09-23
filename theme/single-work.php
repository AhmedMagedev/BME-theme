<?php

get_header();
?>

	<section id="primary">
		<main id="main">
			<div class="relative">
				<video src="<?php the_field('post_video') ?>" autoplay muted loop class="w-full h-screen bg-black object-cover object-center"></video>
				<div class="z-10 absolute inset-0 h-screen w-full flex justify-start  items-center bg-gradient-to-t from-black">
				<div class="ml-60 space-y-4">
                    <img class="w-44 h-7" src="<?php the_field('hero_logo') ?>" alt="logo">
					<h2 class="text-white font-extrabold text-2xl tracking-widest text-center"><?php the_field('hero_label') ?></h2>

					<a href="#" class="flex text-white space-x-3 items-center">
							<img src="<?php the_field('hero_play_video_thumb') ?>" alt="play" class="w-10 h-10">
							<div class="border-white border-b">
								<p class=" text-left uppercase"><?php the_field('hero_play_text') ?></p>
							</div>
						</a>
				</div>
			</div>
		</div>
		<div class="w-full justify-center flex items-center text-white bg-black pb-20">
			<div class="w-1/2 flex space-x-10">
				<div>
                    <h3 class="text-2xl uppercase text-white font-extrabold">3 days gaming and entertainment paradise</h3>
                    <p class="text-white/90 italic text-md leading-tight"><?php the_field('desc_first_col') ?></p>
                </div>
				<div>
                    <h3 class="text-3xl text-white font-bold">3 days gaming and entertainment paradise</h3>
                    <p class="text-white italic text-xs"><?php the_field('desc_first_col') ?></p>
                </div>
				<div>
                    <h3 class="text-3xl text-white font-bold">3 days gaming and entertainment paradise</h3>
                    <p class="text-white italic text-xs"><?php the_field('desc_first_col') ?></p>
                </div>
			</div>
		</div>
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
        <div class="splide__track ">
            <ul class="splide__list">
                <li class="splide__slide flex flex-col items-center justify-center">
                    <img class="w-full" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
                    <div class="absolute inset-0 h-full w-full flex justify-center items-center bg-gradient-to-t  from-black via-transparent to-black">	
                </div>
                </li>

                <li class="splide__slide flex flex-col items-center justify-center ">
                    <img class="w-full" src="https://picsum.photos/800/400?random=2" alt="placeholder image">
                </li>

                <li class="splide__slide flex flex-col items-center justify-center">
                    <img class="w-full" src="https://picsum.photos/800/400?random=3" alt="placeholder image">
                </li>
            </ul>
        </div>
    </section>
</div>


    
    <div class="w-full h-screen text-center justify-center flex items-center text-white bg-black leading-loose">
			<div>
				<p class="text-4xl uppercase font-extrabold text-left leading-relaxed tracking-wide"><?php the_field('cta_tagline') ?></p>
                <div class="flex justify-center space-x-4 pt-4">
                    <div class="border-b space-x-4 border-white justify-between flex">
                        <p class="text-md text-center uppercase my-auto"><?php the_field('cta_option_1') ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </div>
                    <div class="border-b space-x-4 border-white justify-between flex">
                        <p class="text-md text-center uppercase my-auto"><?php the_field('cta_option_2') ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </div>

                </div>
			</div>
		</div>
</div>

<!-- Include these scripts somewhere on the page: -->
<script defer src="https://unpkg.com/@alpinejs/ui@3.13.0-beta.0/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/@alpinejs/focus@3.13.0/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.13.0/dist/cdn.min.js"></script>
 

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();


