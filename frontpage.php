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
           src="https://pastor-trent-coaching.local/wp-content/uploads/2021/01/PT-Background-Jan-2021.mp4" autoplay loop
           playsinline muted></video>

    <div class="video-overlay">
        <h1 class="text-white m-auto text-center tracking-wider text-4xl md:text-6xl">Dr. Trent Stewart</h1>
        <img class="m-auto text-center -mt-20 md:-mt-32 w-36 md:w-56"
             src="https://pastor-trent-coaching.local/wp-content/uploads/2020/04/outline-logo.png"
             alt="">
    </div>

    <div class="bg-white pb-5 md:pb-0.5">
        <div class="m-4 md:m-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="text-left px-2 mb-1">
                        <h2 class="text-2xl pb-3 md:pr-5 inline-block">Helping pastors create healthy environments that grow healthy
                            churches.</h2>
                        <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            Take Your First Step
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();