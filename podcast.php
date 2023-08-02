<?php
/**
 * Template Name: Podcast
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PT_Coaching
 * @since 1.0.0
 */

get_header(); ?>

<?php if (have_rows('photo_background_section')): ?>
    <?php while (have_rows('photo_background_section')): the_row(); ?>
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level'); ?>),
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level'); ?>)
                ), url('<?php the_sub_field('background_image_url'); ?>') <?php the_sub_field('bg-pos-x'); ?> <?php the_sub_field('bg-pos-y'); ?>;
                height: <?php the_sub_field('background_height'); ?>vh;  background-repeat: no-repeat; background-size: cover;">
            <div class="absolute bottom-10 left-5 md:left-10 text-white">
                <h1 class="text-4xl md:text-5xl mb-3"><?php the_sub_field('page_title'); ?></h1>
                <p class="text-xl md:text-2xl mb-3"><?php the_sub_field('page_description'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('podcast_1')): ?>
    <?php while (have_rows('podcast_1')): the_row(); ?>
        <div class="bg-gray-light bio pb-5">
            <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">

                <div class="col-span-12 md:col-span-4 text-center mx-auto my-2 md:my-5 px-3">
                    <img class="shadow-lg rounded-lg" src="<?php the_sub_field('podcast_logo'); ?>" alt="">
                </div>

                <div class="col-span-12 my-2 md:col-span-8 mt-5 px-3">
                    <h3 class="text-xl md:text-2xl mb-1 font-bold"><?php the_sub_field('podcast_title'); ?></h3>
                    <p><?php the_sub_field('podcast_description'); ?></p>

                    <?php if (get_sub_field('spotify_link')): ?>
                        <a href="<?php the_sub_field('spotify_link'); ?>">
                            <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                <?php the_sub_field('spotify_button_text'); ?>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


    <div class="bg-white">
        <div class="md:w-3/4 mx-auto">
            <div class="grid grid-cols-12 gap-4 py-10 px-5">
                <?php

                if (have_rows('podcast_links')):
                    while (have_rows('podcast_links')) : the_row();
                        ?>

                        <div class="col-span-12 p-5 mb-8 bg-gray-light shadow-lg rounded-lg">
                            <h5 class="text-md uppercase font-bold">Trent Stewart Leadership Podcast</h5>
                            <h3 class="text-xl md:text-2xl font-bold"><?php the_sub_field('title'); ?></h3>
                            <p class="font-bold pb-3"><?php the_sub_field('date'); ?></p>
                            <p><?php the_sub_field('excerpt'); ?></p>
                            <a href="<?php the_sub_field('podcast_link'); ?>">
                                <button class="uppercase inline-block rounded-md mt-3 mr-2 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                    Listen Now
                                </button>
                            </a>

                            <a href="<?php the_sub_field('notes'); ?>" target="_blank">
                                <button class="uppercase inline-block rounded-md mt-3 py-2 px-6 text-black border-2 border-black hover:text-white hover:bg-gray-dark transition duration-300">
                                    Download Show Notes
                                </button>
                            </a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <div class="bg-gray bio">
        <div class="md:w-11/12 lg:w-3/4 mx-auto grid grid-cols-12 p-5">

            <div class="col-span-12 md:col-span-4 md:col-span-5 bg-gray-dark text-white px-5 relative rounded-t-xl md:rounded-t-none md:rounded-l-xl">
                <div class="content-middle-medium mx-auto p-3 md:w-10/12">
                    <h3 class="text-2xl mb-1 font-bold"><?php the_field('sn_title'); ?></h3>
                    <p><?php the_field('sn_description'); ?></p>
                </div>
            </div>

            <div class="col-span-12 md:col-span-7 bg-gray-lightest rounded-b-xl md:rounded-b-none md:rounded-r-xl">
                <div class="text-left p-10 text-black form">
                    <h2 class="text-xl md:text-3xl mb-5 font-bold"><?php the_field('cta_text'); ?></h2>
                    <!-- This will generate your form when you add it in WP Admin. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                    <p class="text-sm text-gray-dark">This site is protected by reCAPTCHA and the Google
                        <a class="underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a class="underline" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();