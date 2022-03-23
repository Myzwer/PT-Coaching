<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the PT Coaching Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage PT_Coaching
 * @since 1.0.0
 */

get_header(); ?>

    <video class="header-video"
           src="<?php the_field('video_background_url') ?>" autoplay loop
           playsinline muted></video>

    <div class="video-overlay">
        <img class="m-auto text-center -mt-20 md:-mt-18 w-56 md:w-60"
             src="<?php the_field('knockout_logo') ?>"
             alt="">
    </div>

    <div class="bg-white pb-5 md:pb-0.5">
        <div class="md:m-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12 text-center mx-auto">
                    <div class="px-2 mb-1">
                        <h2 class="text-2xl pb-3 md:pr-5 md:inline-block"><?php the_field('primary_cta_text') ?></h2>

                        <?php if (have_rows('primary_cta_button')): ?>
                            <?php while (have_rows('primary_cta_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link') ?>">
                                    <button class="uppercase md:inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                        <?php the_sub_field('button_text') ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray py-20">
        <div class="md:w-2/3 mx-auto grid grid-cols-12 gap-4 p-4">
            <div class="col-span-12 md:col-span-4">
                <img class = "rounded-lg shadow-lg" src="<?php the_field('section_1_graphic') ?>" alt="">
            </div>

            <div class="col-span-12 md:col-start-6 md:col-span-7 lg:pt-12">
                <h3 class="text-2xl font-bold"><?php the_field('section_1_title') ?></h3>
                <p class="pb-5"><?php the_field('section_1_paragraph') ?></p>

                <?php if (have_rows('section_1_cta_button')): ?>
                    <?php while (have_rows('section_1_cta_button')): the_row(); ?>
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

    <div class="bg-white">
        <div class=" lg:text-center lg:mx-auto">
            <div class="grid grid-cols-12">

                <?php if (have_rows('slot_1')): ?>
                    <?php while (have_rows('slot_1')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4 text-center bg-gray-middle py-14 px-4">
                            <h3 class="text-xl"><?php the_sub_field('title') ?></h3>
                            <p class = "lg:h-14"><?php the_sub_field('body_text') ?></p>

                            <a href="<?php the_sub_field('button_link') ?>">
                                <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                                    <?php the_sub_field('button_text') ?>
                                </button>
                            </a>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('slot_2')): ?>
                    <?php while (have_rows('slot_2')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4 text-center bg-gray-light py-14 px-4">
                            <h3 class="text-xl"><?php the_sub_field('title') ?></h3>
                            <p class = "lg:h-14"><?php the_sub_field('body_text') ?></p>

                            <a href="<?php the_sub_field('button_link') ?>">
                                <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                                    <?php the_sub_field('button_text') ?>
                                </button>
                            </a>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('slot_3')): ?>
                    <?php while (have_rows('slot_3')): the_row(); ?>
                        <div class="col-span-12 md:col-span-4 text-center bg-gray-lightest py-14 px-4">
                            <h3 class="text-xl"><?php the_sub_field('title') ?></h3>
                            <p class = "lg:h-14"><?php the_sub_field('body_text') ?></p>

                            <a href="<?php the_sub_field('button_link') ?>">
                                <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                                    <?php the_sub_field('button_text') ?>
                                </button>
                            </a>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php
get_footer();