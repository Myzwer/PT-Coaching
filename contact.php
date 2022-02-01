<?php
/**
 * Template Name: Contact
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

<div class="bg-gray-light pb-10">
    <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 bg-gray-lightest rounded-lg shadow-xl mb-10">
                <div class="text-center p-5 md:p-10 text-black">
                    <h2 class="text-3xl text-left">Want to Contact Me?</h2>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cum distinctio dolorem doloribus earum esse eum expedita, explicabo, harum magnam nulla optio porro quibusdam quidem sapiente sint tenetur veritatis voluptatibus?</p>
                </div>
            </div>

            <div class="col-span-12 md:col-span-8 bg-gray-lightest rounded-lg shadow-xl">
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

            <div class="col-span-12 md:col-span-4">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="bg-gray-lightest shadow-lg rounded-lg p-5 text-left">
                            <h3 class = "text-2xl md:text-3xl mb-1 font-bold">Stay Connected</h3>
                            <a href="https://www.facebook.com/trentonjstewart">
                                <button class="uppercase inline-block rounded-md mt-3 py-1 px-3 gray-dark border-2 border-gray-dark transition duration-300">
                                    Facebook <i class="fas fa-external-link-alt"></i>
                                </button>
                            </a>
                            <a href="https://www.instagram.com/trentonjstewart/?hl=en">
                                <button class="uppercase inline-block rounded-md mt-3 py-1 px-3 gray-dark border-2 border-gray-dark transition duration-300">
                                    Instagram <i class="fas fa-external-link-alt"></i>
                                </button>
                            </a>
                            <a href="https://www.youtube.com/channel/UC2_Vo0eFmYaMq3SiA0PQLaQ">
                                <button class="uppercase inline-block rounded-md mt-3 py-1 px-3 gray-dark border-2 border-gray-dark transition duration-300">
                                    Youtube <i class="fas fa-external-link-alt"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();