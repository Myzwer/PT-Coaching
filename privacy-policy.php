<?php
/**
 * Template Name: Privacy Policy
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


    <div class="m-4 md:m-10 lg:max-w-4xl lg:mx-auto privacy-policy">
        <div class="grid grid-cols-12 gap-4">
	        <div class="col-span-12 p-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else: ?>
                <p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
	        </div>
        </div>
    </div>


<?php get_footer();
