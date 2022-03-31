<?php
/**
 * Template Name: 404 Error
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage PT_Coaching
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">
                <div class="w-20 mt-11">
                    <img src="<?php the_field('icon', 218); ?>"
                         alt="Company Logo">
                </div>

                <p class="md:mt-10"><?php the_field('subtitle', 218); ?></p>
                <h1 class="uppercase text-2xl md:text-3xl md:mb-3"><?php the_field('title', 218); ?></h1>
                <p class = "mb-5" ><?php the_field('explination', 218); ?></p>
                <ahref="<?php the_field('button_link', 218); ?>">
                    <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300 mb-10">
                        <?php the_field('button_text', 218) ?>
                    </button>
                </a>

            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
				  rgba(0, 0, 0, 0.45),
				  rgba(0, 0, 0, 0.45)
				), url('<?php the_field('side_image', 218) ?>') center center;
				 height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();
