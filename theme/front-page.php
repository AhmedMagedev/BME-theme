<!-- Header-start -->
<?php

get_header();
?>
<!-- Header-end -->


<!-- Hero section start -->
	<section id="primary">
		<main id="main" class="relative">
			<div class="sm:sticky sm:flex sm:top-0 relative">
				<video src="<?php the_field('hero_video') ?>" autoplay muted loop class="w-full h-screen bg-black object-cover object-center"></video>
				<div class="z-10 mx-auto absolute top-0 h-full w-full flex justify-center items-center bg-gradient-to-t from-black">
				<div>
					<h1 class="text-white font-bold max-w-prose text-3xl sm:text-5xl italic mx-auto flex text-center"><?php the_field('hero_headhline') ?></h1>
                        <div x-data="{ open: false }" class="flex justify-center">
					        <div x-on:click="open = true" class="flex cursor-pointer text-white space-x-3 items-center justify-center mt-5">
							<img src="<?php the_field('hero_sub_headline_button') ?>" alt="play" class="sm:w-10 sm:h-10 w-8 h-8">
							<div class="border-white border-b hover:pr-5 transition-all pr-2">
								<p class=" text-sm sm:text-base text-left uppercase"><?php the_field('hero_sub_headline') ?></p>
							</div>
					        </div>
                                <div
                                x-dialog
                                x-model="open"
                                style="display: none"
                                class="fixed w-fit inset-0 overflow-y-auto z-10"
                                >
                            <!-- Overlay -->
                            <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

                            <!-- Panel -->
                            <div
                                class="relative min-h-screen flex items-center justify-center p-4"
                            >
                                <div
                                    x-dialog:panel
                                    x-transition
                                    class="relative bg-black rounded-xl shadow-lg w-auto"
                                >
                                    <!-- Close Button -->
                                    <div class="absolute top-0 right-0 pt-4 pr-4">
                                        <button type="button" @click="$dialog.close()" class="bg-gray-50 rounded-lg p-2 text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                                            <span class="sr-only">Close modal</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- Body -->
                                    <div class="p-8">
                                    <iframe src="<?php the_field('hero_play_video') ?>" class="aspect-video lg:aspect-[3/1]" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>  
                        
				</div>
			</div>
		</div>
<!-- Hero section end  -->

<!-- Mid section cta start  -->
		<div class=" h-96 sticky top-0 items-center flex text-white bg-black">
            <div class="sm:w-1/3 mx-auto flex flex-col">
                <p class="leading-6 text-2xl sm:text-4xl text-left uppercase font-extrabold">
                <?php the_field('mid_section_tagline') ?>
                </p>
                <a href="#" class="hover:translate-x-1.5 group transition-all border-b space-x-4 ml-auto border-white justify-between flex mt-8"> 
                        <p class="text-sm text-center uppercase transition-all group-hover:pr-3 my-auto"><?php the_field('mid_section_subline') ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
            </div>
		</div>
<!-- Mid section cta end -->


<!-- Carousel-start -->
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
   <section x-ref="splide" class="splide " aria-label="Splide/Alpine.js Carousel Example ">
        <div class="splide__track">
        <?php if( have_rows('video_carousel') ): ?>
            <ul class="splide__list">
          <?php  while( have_rows('video_carousel') ) : the_row();
                            $video_field = get_sub_field('video'); 
                            $text_field = get_sub_field('overlay_text');
                            $link_field = get_sub_field('post_link');
                             ?>
            <li class="splide__slide h-full sticky flex top-0">
                 <video src="<?php echo esc_url($video_field); ?>" autoplay muted loop class="w-full object-cover aspect-video lg:aspect-[3/1]"></video>
                <div class="justify-center sm:space-x-60 absolute inset-0 h-full w-full grid grid-rows-2 sm:grid-rows-1 grid-flow-col items-center bg-gradient-to-t from-black via-transparent to-black">
					<p class="tracking-widest text-white uppercase sm:col-span-4 text-2xl col-span-4 font-extrabold sm:text-4xl text-center bottom-0 sm:text-left"><?php echo esc_html($text_field); ?></p>
					<a href="<?php echo esc_url($video_field); ?>" class="group sm:col-span-4 text-sm items-center sm:row-start-1 row-start-2 col-start-2 col-span-2 border-b space-x-4 border-white justify-between flex ">
                        <p class="group-hover:pr-3 transition-all text-white text-center uppercase my-auto">read more</p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                </div>
                </li>
                <?php endwhile; ?>
            </ul>
    <?php endif; ?>
<!-- Carousel-end -->

<!-- Main cta start -->
        </div>
    </section>
    <div class=" sticky flex top-0 w-full h-screen text-center justify-center items-center text-white bg-black leading-loose">
			<div>
				<p class="sm:text-4xl text-3xl uppercase font-extrabold text-center leading-relaxed tracking-wide"><?php the_field('cta_tagline') ?></p>
                <div class="flex justify-center space-x-4 pt-4">
                    <a href="#" class="border-b space-x-4 group text-sm sm:text-md border-white justify-between flex">
                        <p class="group-hover:pr-3 transition-all  text-center uppercase my-auto"><?php the_field('cta_option_1') ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                    <?php 
                        $link = get_field('cta_option_2');
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>              
                    <a href="<?php echo esc_url( $link_url ); ?>" class="group text-sm sm:text-md border-b space-x-4 border-white justify-between flex"> 
                        <p class="text-sm text-center group-hover:pr-3 transition-all  uppercase my-auto"><?php echo esc_html( $link_title ); ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                    <?php endif; ?>

                </div>
			</div>
		</div>
</div>
<!-- Main cta end  -->

</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();


