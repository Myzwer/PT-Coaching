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
            <h2 class = "text-3xl md:text-4xl mb-1 font-bold">About Pastor Trent</h2>
            <p>Dr. Trent Stewart is the lead pastor of Foothills Church, a multisite church in Maryville and Knoxville TN. The church is the heart and vision of Pastor Trent who planted FC in 2009 with the support of Grace Baptist Church in Knoxville and Pastor Trent’s father, Dr. Ron Stewart – the longtime lead pastor of GBC. Since 2009, Pastor Trent’s vision and hope for FC derives from a deep passion to develop mature disciples of Christ in relational environments. Through the ministry of Foothills Church, he and the FC staff have seen phenomenal growth and ministry take place in their city and even across the globe.</p>
            <p>Dr. Trent Stewart is the lead pastor of Foothills Church, a multisite church in Maryville and Knoxville TN. The church is the heart and vision of Pastor Trent who planted FC in 2009 with the support of Grace Baptist Church in Knoxville and Pastor Trent’s father, Dr. Ron Stewart – the longtime lead pastor of GBC. Since 2009, Pastor Trent’s vision and hope for FC derives from a deep passion to develop mature disciples of Christ in relational environments. Through the ministry of Foothills Church, he and the FC staff have seen phenomenal growth and ministry take place in their city and even across the globe.</p>
        </div>

        <div class="col-span-12 lg:col-span-4 px-3">

            <div class="grid grid-cols-12 gap-4 lg:pt-16">
                <div class="col-span-12 md:col-span-6 lg:col-span-12">
                    <div class="bg-gray-lightest shadow-lg rounded-lg p-5">
                        <h3 class = "text-2xl md:text-3xl mb-1 font-bold">Want Certified Coaching?</h3>
                        <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            Take Your First Step
                        </button>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-12">
                    <div class="bg-gray-lightest shadow-lg rounded-lg p-5">
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


<?php get_footer();