<?php
/**
 * Template Name: Coaching
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PT_Coaching
 * @since 1.0.0
 */

get_header(); ?>
<?php if( have_rows('photo_background_section') ): ?>
    <?php while( have_rows('photo_background_section') ): the_row();?>
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


    <div class="bg-gray-light text-center mx-auto py-10">
        <div class="col-span-12 my-2 md:my-5 px-3 text-left md:text-center">
            <h2 class = "text-3xl md:text-4xl mb-1 font-bold"><?php the_field('cta_text'); ?></h2>
        </div>
<!--        <?php /*if (have_rows('cta_button')): */?>
            <?php /*while (have_rows('cta_button')): the_row(); */?>
                <a href="<?php /*the_sub_field('button_link') */?>">
                    <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                        <?php /*the_sub_field('button_text') */?>
                    </button>
                </a>
            <?php /*endwhile; */?>
        --><?php /*endif; */?>
    </div>

    <div class="bg-gray bio">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-5">
            <div class="col-span-12 md:col-span-8 md:col-span-4">
                <h3 class = "text-xl md:text-2xl mb-1 font-bold"><?php the_field('invite_title'); ?></h3>
                <p><?php the_field('invite_text'); ?></p>
            </div>
            <div class="col-span-12 md:col-span-6 bg-gray-lightest rounded-lg shadow-xl">
                <div class="text-left p-10 text-black form">

                    <!-- This will generate your form when you add it in WP Admin. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>


<?php get_footer();