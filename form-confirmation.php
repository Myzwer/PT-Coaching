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
                    <img src="<?php the_field('icon', 1238); ?>"
                         alt="Company Logo">
                </div>

                <p class="md:mt-10"><?php the_field('subtitle', 1238); ?></p>
                <h1 class="uppercase text-2xl md:text-3xl md:mb-3"><?php the_field('title', 1238); ?></h1>
                <p class = "mb-5" ><?php the_field('explination', 1238); ?></p>
                <a href="<?php the_field('button_link', 1238); ?>">
                <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300 mb-10">
                    <?php the_field('button_text', 1238) ?>
                </button>
                </a>

            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                    rgba(0, 0, 0, 0.1),
                    rgba(0, 0, 0, 0.1)
                    ), url('<?php the_field('side_image', 1238) ?>') center center;
                    height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();