<?php
/**
 * Template Name: Courses
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
            height: <?php the_sub_field('background_height'); ?>vh; background-repeat: no-repeat; background-size: cover;">
            <div class="absolute bottom-10 left-5 md:left-10 text-white">
                <h1 class="text-4xl md:text-5xl mb-3"><?php the_sub_field('page_title'); ?></h1>
                <p class="text-xl md:text-2xl mb-3"><?php the_sub_field('page_description'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="bg-gray py-10">
        <div class="md:w-2/3 mx-auto grid grid-cols-12 gap-4 p-4">
            <div class="col-span-12 mx-auto">
                <h1 class = "text-4xl uppercase"><?php the_field('cta_text') ?></h1>
                <p class = "mb-5 text-black"><?php the_field('cta_copy') ?></p>

                <?php if (have_rows('cta_button')): ?>
                    <?php while (have_rows('cta_button')): the_row(); ?>
                        <a href="<?php the_sub_field('button_link') ?>">
                            <button class="uppercase md:inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300 mb-5">
                                <?php the_sub_field('button_text') ?>
                            </button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('cta_button_2')): ?>
                    <?php while (have_rows('cta_button_2')): the_row(); ?>
                        <a href="<?php the_sub_field('button_link') ?>">
                            <button class="uppercase inline-block rounded-md py-3 px-6 text-black border-2 border-black hover:drop-shadow-lg transition duration-300">
                                <?php the_sub_field('button_text') ?>
                            </button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer();
