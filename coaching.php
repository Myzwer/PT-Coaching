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

    <div class="bg-gray bio">
        <div class="md:w-11/12 lg:w-3/4 mx-auto grid grid-cols-12 p-5">

            <div class="col-span-12 md:col-span-4 md:col-span-5 bg-gray-dark text-white px-5 relative rounded-t-xl md:rounded-t-none md:rounded-l-xl">
                <div class="content-middle-medium mx-auto p-3 md:w-10/12">
                    <h3 class="text-2xl mb-1 font-bold"><?php the_field('invite_title'); ?></h3>
                    <p><?php the_field('invite_text'); ?></p>
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
                    <p class = "text-sm text-gray-dark">This site is protected by reCAPTCHA and the Google
                        <a class = "underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a class = "underline" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();