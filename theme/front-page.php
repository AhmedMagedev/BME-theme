<?php

get_header();
?>

	<section id="primary">
		<main id="main" class="relative">
			<div class="sticky flex top-0">
				<video src="<?php the_field('hero_video') ?>" autoplay muted loop class="w-full h-screen bg-black object-cover object-center"></video>
				<div class="z-10 mx-auto absolute top-0 h-full w-full flex justify-center items-center bg-gradient-to-t from-black">
				<div>
					<h1 class="text-white font-bold text-5xl italic mx-auto flex text-center"><?php the_field('hero_headhline') ?></h1>
					<a href="https://vimeo.com/720300427" class="flex text-white space-x-3 items-center justify-center mt-5">
				
							<img src="https://thebmegroup.com/wp-content/themes/bme/img/play-btn.png" alt="play" class="w-10 h-10">
							<div class="border-white border-b hover:pr-5 transition-all delay-200 pr-2">
								<p class=" text-left uppercase"><?php the_field('hero_sub_headline') ?></p>
							</div>
						</a>
				</div>
			</div>
		</div>
		<div class="w-full h-96 sticky top-0 text-center justify-center flex items-center text-white bg-black">
			<div class="grid-cols-2 justify-center space-x-96">
				<p class="text-4xl italic uppercase font-bold text-left"><?php the_field('mid_section_tagline') ?></p>
                <a href="#" class="border-b border-white justify-between pb-1 w-[6vw] flex">
                    <p class="text-sm text-right uppercase object-left "><?php the_field('mid_section_subline') ?></p>
                    <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                </a>
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
    <section x-ref="splide" class="splide " aria-label="Splide/Alpine.js Carousel Example ">
        <div class="splide__track">
        <?php 
$videos = get_field('video_carousel');
if( $videos ): ?>
    <ul class="splide__list">
        <?php foreach( $videos as $video ): ?>
            <li class="splide__slide h-full sticky flex top-0">
                 <video src="<?php echo esc_url($video['url']); ?>" autoplay muted loop class="w-full object-cover aspect-video lg:aspect-[3/1]"></video>
                <div class="grid-cols-2 justify-center space-x-60 absolute inset-0 h-full w-full flex  items-center bg-gradient-to-t  from-black via-transparent to-black">
					<p class="text-white uppercase  font-extrabold text-4xl text-center"><?php echo esc_html($video['title']); ?></p>
					<a href="http://localhost:8080/bme/wordpress/work/<?php echo esc_html($video['title']); ?>/" class="border-b space-x-4 transition duration-150 ease-in-out border-white justify-between flex">
                        <p class="text-sm hover:pr-3 transition-all delay-200 text-white text-center uppercase my-auto">read more</p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                </div>
                </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
        </div>
    </section>

    

    <div class=" sticky flex top-0 w-full h-screen text-center justify-center items-center text-white bg-black leading-loose">
			<div>
				<p class="text-4xl uppercase font-extrabold text-left leading-relaxed tracking-wide"><?php the_field('cta_tagline') ?></p>
                <div class="flex justify-center space-x-4 pt-4">
                    <a href="#" class="border-b space-x-4 border-white justify-between flex">
                        <p class="hover:pr-3 transition-all delay-200 text-md text-center uppercase my-auto"><?php the_field('cta_option_1') ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                    <?php 
                        $link = get_field('cta_option_2');
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>              
                    <a href="<?php echo esc_url( $link_url ); ?>" class="border-b space-x-4 border-white justify-between flex"> 
                        <p class="text-sm text-center hover:pr-3 transition-all delay-200 uppercase my-auto"><?php echo esc_html( $link_title ); ?></p>
                        <svg viewBox="0 0 1024 1024" class="icon my-auto w-4 h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffffff"></path></g></svg>
                    </a>
                    <?php endif; ?>

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


