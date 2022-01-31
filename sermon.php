<?php
/**
 * Template Name: All Sermons
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
        <h1 class="text-4xl md:text-5xl mb-3 absolute bottom-10 left-10 text-white ">Sermons</h1>
    </div>


    <div class="bg-gray bio pb-5">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 p-2">

            <!-- Featured Sermon -->
            <div class="col-span-12 text-center mx-auto mt-10">
                <h3 class="text2xl md:text-3xl mb-3 font-bold">Latest Sermon</h3>
            </div>

            <div class="col-span-12 lg:col-span-6 text-center mx-auto bg-gray-light lg:rounded-l-lg">
                <img class="shadow-lg rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                     src="https://pastor-trent-coaching.local/wp-content/uploads/2021/10/10-17-21-Sermon.jpg" alt="">
            </div>
            <div class="col-span-12 lg:col-span-6 p-5 bg-gray-light shadow-lg rounded-b-lg md:rounded-b-none md:rounded-r-lg">
                <h3 class="text-xl md:text-2xl mb-1 font-bold">Why Share? | Gospel Voice</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem eius eum ipsam
                    qui quod veritatis vitae. Amet, assumenda distinctio dolore iusto molestias nihil optio quia
                    similique unde voluptates?</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Watch Now
                </button>
            </div>
            <!-- End Featured Sermon -->

            <!-- All Sermons -->
            <div class="col-span-12 text-center mx-auto mt-10">
                <h3 class="text2xl md:text-3xl mb-3 font-bold">All Sermons</h3>
            </div>

            <div class="col-span-12 p-5 mb-8 bg-gray-light shadow-lg rounded-lg">
                <h3 class="text-xl md:text-2xl mb-1 font-bold">Busy Pastor Podcast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem eius eum ipsam
                    qui quod veritatis vitae. Amet, assumenda distinctio dolore iusto molestias nihil optio quia
                    similique unde voluptates?</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Watch Now
                </button>
            </div>

            <div class="col-span-12 p-5 mb-8 bg-gray-light shadow-lg rounded-lg">
                <h3 class="text-xl md:text-2xl mb-1 font-bold">Busy Pastor Podcast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem eius eum ipsam
                    qui quod veritatis vitae. Amet, assumenda distinctio dolore iusto molestias nihil optio quia
                    similique unde voluptates?</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Watch Now
                </button>
            </div>

            <!-- End Featured Sermon -->
        </div>
    </div>


<?php get_footer();