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
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ), url('https://images.unsplash.com/photo-1501612780327-45045538702b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2100&q=80') center center;
         height: 40vh;">
        <h1 class="text-4xl md:text-5xl mb-3 absolute bottom-10 left-5 md:left-10 text-white ">Contact</h1>
    </div>

<div class="bg-gray-light pb-10">
    <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 bg-gray-lightest rounded-xl shadow-xl mb-10">
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
                        <div class="bg-gray-lightest rounded-lg shadow-xl">
                            <div class="text-left p-10 text-black">
                                <h3 class = "text-2xl md:text-3xl mb-1 font-bold">Stay Connected</h3>
                                <a href="https://www.facebook.com/trentonjstewart"><i class="fa fa-facebook" aria-label="Trent Stewart Facebook"></i></a>
                                <a href="https://www.instagram.com/trentonjstewart/?hl=en"><i class="fa fa-instagram" aria-label="Trent Stewart Instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UC2_Vo0eFmYaMq3SiA0PQLaQ"><i class="fa fa-youtube" aria-label="Trent Stewart Youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();