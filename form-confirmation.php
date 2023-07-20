<?php
/**
 * Template Name: Form Confirmation
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Pre_Launch_WP
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">
                <div class="w-20 mt-11">
                    <img src="<?php the_field('header_image_wp',  'option'); ?>"
                         alt="Company Logo">
                </div>

                <p class="md:mt-10"><?php the_field('subtitle'); ?></p>
                <h1 class="uppercase text-2xl md:text-3xl md:mb-3"><?php the_field('title'); ?></h1>
                <p class="mb-5"><?php the_field('explination'); ?></p>

                <?php if (get_field('button_link')): ?>
                    <a href="<?php the_field('button_link'); ?>">
                        <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300 mb-10">
                            <?php the_field('button_text') ?>
                        </button>
                    </a>
                <?php endif; ?>

                <?php if (get_field('resource_link')): ?>
                    <a href="<?php the_field('resource_link'); ?>">
                        <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300 mb-10">
                            <?php the_field('resource_text') ?>
                        </button>
                    </a>
                <?php endif; ?>

            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                    rgba(0, 0, 0, 0.1),
                    rgba(0, 0, 0, 0.1)
                    ), url('<?php the_field('side_image') ?>') center center;
                    height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();