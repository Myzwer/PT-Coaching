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
                height: <?php the_sub_field('background_height'); ?>vh;">
            <div class="absolute bottom-10 left-5 md:left-10 text-white">
                <h1 class="text-4xl md:text-5xl mb-3"><?php the_sub_field('page_title'); ?></h1>
                <p class="text-xl md:text-2xl mb-3"><?php the_sub_field('page_description'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('podcast_1')): ?>
    <?php while (have_rows('podcast_1')): the_row(); ?>
        <div class="bg-gray bio pb-5">
            <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">

                <div class="col-span-12 md:col-span-4 text-center mx-auto my-2 md:my-5 px-3">
                    <img class = "shadow-lg rounded-lg" src="<?php the_sub_field('podcast_logo'); ?>" alt="">
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

                    <?php if (get_sub_field('apple_music_link')): ?>
                        <a href="<?php the_sub_field('apple_music_link'); ?>">
                        <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            <?php the_sub_field('apple_music_button_text'); ?>
                        </button>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('podcast_2')): ?>
    <?php while (have_rows('podcast_2')): the_row(); ?>
        <div class="bg-gray-light bio pb-5">
            <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">

                <div class="col-span-12 md:col-span-4 text-center mx-auto my-2 md:my-5 px-3">
                    <img class = "shadow-lg rounded-lg" src="<?php the_sub_field('podcast_logo'); ?>" alt="">
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

                    <?php if (get_sub_field('apple_music_link')): ?>
                        <a href="<?php the_sub_field('apple_music_link'); ?>">
                            <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                <?php the_sub_field('apple_music_button_text'); ?>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer();