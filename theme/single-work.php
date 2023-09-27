<?php

get_header();
?>

	<section id="primary">
		<main id="main">
			<div class="sticky flex top-0">
				<video src="<?php the_field('post_video') ?>" autoplay muted loop class="w-full h-screen bg-black object-cover object-center"></video>
				<div class="z-10 absolute inset-0 h-screen w-full flex justify-start items-center bg-gradient-to-t from-black">
				<div class="ml-60 space-y-4">
                    <img class="w-44 h-7" src="<?php the_field('hero_logo') ?>" alt="logo-hero">
					<h2 class="text-white font-extrabold text-2xl tracking-widest text-center"><?php the_field('hero_label') ?></h2>
                    <div x-data="{ open: false }" class="flex text-white space-x-3 items-center">
					        <div x-on:click="open = true" class="flex cursor-pointer text-white space-x-3 items-center justify-center">
							<img src="<?php the_field('hero_play_video_thumb') ?>" alt="play-hero" class="sm:w-10 sm:h-10 w-8 h-8">
							<div class="border-white border-b hover:pr-5 transition-all pr-2">
								<p class=" text-left uppercase"><?php the_field('hero_play_text') ?></p>
							</div>
                            </div>
                                <div
                                x-dialog
                                x-model="open"
                                style="display: none"
                                class="fixed w-full inset-0 overflow-y-auto z-10"
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
                                    <iframe src="<?php the_field('hero_play_video') ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>  
				</div>
			</div>
		</div>
   
		<div class="w-full  bg-black sticky flex top-0">
			<div class="py-20 mx-auto container w-1/2 justify-center text-left grid-cols-1 md:grid-cols-2 lg:grid-cols-3 flex space-x-10">
            <?php
                    if( have_rows('desc_col') ):
                        while( have_rows('desc_col') ) : the_row();
                            $head_field = get_sub_field('desc_first_col-heading'); 
                            $sub_field = get_sub_field('desc_first_col'); ?>
				<div class="max-w-prose">
                    <h3 class="text-2xl uppercase text-white font-extrabold"><?php echo ( $head_field ); ?></h3>
                    <p class="text-white/90 italic text-sm  leading-tight"><?php echo  ($sub_field)  ?></p>
                </div>
                <?php endwhile;
                else :
                endif; ?>
                <div class="space-y-5">
				<?php
                    if( have_rows('achievements_') ):
                        while( have_rows('achievements_') ) : the_row();
                            $head_field = get_sub_field('headline'); 
                            $sub_field = get_sub_field('subline'); ?>
                            <div>
                                <h3 class="text-3xl text-white font-bold"><?php echo esc_html( $head_field ); ?></h3>
                                <p class="text-white italic text-xs"><?php echo esc_html( $sub_field ); ?></p>
                            </div>
                <?php endwhile;
                else :
                endif; ?>
                </div>
				<div class="space-y-5">
				<?php
                    if( have_rows('achievements__col_2') ):
                        while( have_rows('achievements__col_2') ) : the_row();
                            $head_field = get_sub_field('headline'); 
                            $sub_field = get_sub_field('subline'); ?>
                            <div>
                                <h3 class="text-3xl text-white font-bold"><?php echo esc_html( $head_field ); ?></h3>
                                <p class="text-white italic text-xs"><?php echo esc_html( $sub_field ); ?></p>
                            </div>
                <?php endwhile;
                else :
                endif; ?>
                </div>
			</div>
		</div>

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

<?php 
$images = get_field('carousel');
if( $images ): ?>
    <ul class="splide__list">
        <?php foreach( $images as $image ): ?>
            <li class="splide__slide h-screen">
            <img class="object-cover w-full h-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="absolute inset-0 h-full w-full flex justify-center items-center bg-gradient-to-t  from-black via-transparent to-black">	
                </div>
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>          
        </div>
    </section>
</div>
<div class="relative flex items-center justify-center">
    <img class="h-[60vh] object-cover w-full" src="<?php echo get_the_post_thumbnail_url($post_id,'full') ?>" alt="bg">
    <div x-data="{ open: false }" class="flex justify-center">
        <img x-on:click="open = true" class="absolute transition-all cursor-pointer hover:scale-125 w-20 h-20 inset-0 mx-auto my-auto" src="<?php the_field('mid_section_video_play') ?>" alt="play-btn">
        <div
                            x-dialog
                            x-model="open"
                            style="display: none"
                            class="fixed w-full inset-0 overflow-y-auto z-10"
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
                                    class="relative  bg-black rounded-xl shadow-lg w-auto"
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
                                    <iframe src="<?php the_field('mid_section_video') ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>      
				</div>
			</div>
    </div> 
</div>

    <div class="flex top-0 w-full h-screen text-center justify-center items-center text-white bg-black leading-loose">
			<div>
				<p class="text-4xl uppercase font-extrabold text-left leading-relaxed tracking-wide"><?php the_field('cta_tagline') ?></p>
                <?php 
                        $link = get_field('cta_option');
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>              
                <div class="flex justify-center space-x-4 pt-4">
                    <a href="<?php echo esc_url( $link_url ); ?>" class="border-b space-x-4 border-white justify-between flex">
                        <p class="text-md text-center uppercase my-auto"><?php echo esc_html( $link_title ); ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                </div>
                <?php endif; ?>
			</div>
		</div>
</div>

<!-- Include these scripts somewhere on the page: --> 

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();


