<?php
/**
 * Template Name: About
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


<div class="bg-gray-light bio pb-20">


    <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">
        <div class="col-span-12 md:col-span-12 lg:col-span-8 mt-5 px-3">
            <h2 class = "text-3xl md:text-4xl mb-1 font-bold"><?php the_field('bio_section_title'); ?></h2>
            <?php the_field('bio'); ?>
        </div>

        <div class="col-span-12 lg:col-span-4 px-3">

            <div class="grid grid-cols-12 gap-4 lg:pt-16">
                <div class="col-span-12 md:col-span-6 lg:col-span-12">
                    <div class="bg-gray-lightest shadow-lg rounded-lg p-5">
                        <h3 class = "text-2xl md:text-3xl mb-1 font-bold"><?php the_field('cta_title_1'); ?></h3>
                        <?php if (have_rows('cta_button')): ?>
                            <?php while (have_rows('cta_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link') ?>">
                                    <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                        <?php the_sub_field('button_text') ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-12">
                    <div class="bg-gray-lightest shadow-lg rounded-lg p-5">
                        <h3 class = "text-2xl md:text-3xl' mb-1 font-bold"><?php the_field('socials_title'); ?></h3>

                        <?php if( have_rows('social_links') ):
                            // Loop through rows.
                            while( have_rows('social_links') ) : the_row();?>
                                <a href="<?php the_sub_field('social_link') ?>" target="_blank">
                                    <button class="uppercase inline-block rounded-md mt-3 py-1 px-3 gray-dark border-2 border-gray-dark transition duration-300">
                                        <?php the_sub_field('button_title') ?>
                                    </button>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer();