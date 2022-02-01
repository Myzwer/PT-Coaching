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
            <h2 class = "text-3xl md:text-4xl mb-1 font-bold">Pastor Trent works for Courage to Lead - Pastor Division</h2>
        </div>
        <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
            Take Your First Step
        </button>
    </div>

    <div class="bg-gray bio">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-5">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mt-5 px-3 video-wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/G44xTr8D_bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-span-12">
                <h3 class = "text-xl md:text-2xl mb-1 font-bold">HELPING CHURCHES CREATE HEALTHY ENVIRONMENTS THAT GROW HEALTHY MINISTRIES</h3>
                <p>Every church is unique and requires a tailored approach. With our detailed coaching process, our aim is to help you create a healthy environment that will lead to a culture of multiplying disciples for God’s Kingdom. We have also partnered with the organization Courage to Lead to provide you an opportunity lead at the next level through leadership coaching. If you're ready to take your next step as a leader, contact us today.</p>
            </div>
        </div>
    </div>

<?php get_footer();