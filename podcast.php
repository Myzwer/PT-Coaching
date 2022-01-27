<?php
/**
 * Template Name: Podcast
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
        <h1 class="text-4xl md:text-5xl mb-3 absolute bottom-10 left-10 text-white ">Podcasts</h1>
    </div>


    <div class="bg-gray bio pb-5">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">

            <div class="col-span-12 md:col-span-4 text-center mx-auto my-2 md:my-5 px-3">
                <img src="https://pastor-trent-coaching.local/wp-content/uploads/2020/04/icon-dark.png" alt="">
            </div>

            <div class="col-span-12 my-2 md:col-span-8 mt-5 px-3">
                <h3 class = "text-xl md:text-2xl mb-1 font-bold">Busy Pastor Podcast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem eius eum ipsam qui quod veritatis vitae. Amet, assumenda distinctio dolore iusto molestias nihil optio quia similique unde voluptates?</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Spotify
                </button>

                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Apple Music
                </button>
            </div>
        </div>
    </div>

    <div class="bg-gray-light bio pb-5">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 gap-4 p-2">

            <div class="col-span-12 md:col-span-4 text-center mx-auto my-2 md:my-5 px-3">
                <img src="https://pastor-trent-coaching.local/wp-content/uploads/2020/04/icon-dark.png" alt="">
            </div>

            <div class="col-span-12 my-2 md:col-span-8 mt-5 px-3">
                <h3 class = "text-xl md:text-2xl mb-1 font-bold">Busy Pastor Podcast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem eius eum ipsam qui quod veritatis vitae. Amet, assumenda distinctio dolore iusto molestias nihil optio quia similique unde voluptates?</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Spotify
                </button>

                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Apple Music
                </button>
            </div>
        </div>
    </div>




<?php get_footer();