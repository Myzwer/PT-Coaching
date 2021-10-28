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
        <div class="md:m-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="text-left px-2 mb-1">
                        <h2 class="text-2xl pb-3 md:pr-5 inline-block">Helping pastors create healthy environments that
                            grow healthy
                            churches.</h2>
                        <button class="uppercase inline-block rounded-md py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            Take Your First Step
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray py-20">
        <div class="md:w-2/3 mx-auto grid grid-cols-12 gap-4 p-4">
            <div class="col-span-12 md:col-span-4">
                <img src="https://pastor-trent-coaching.local/wp-content/uploads/2021/10/Pt-Coaching.png" alt="">
            </div>

            <div class="col-span-12 md:col-start-6 md:col-span-7 lg:pt-12">
                <h3 class="text-2xl font-bold">Every church is unique and requires a tailored approach.</h3>
                <p>With our detailed coaching process, our team aims to create a healthy environment that will lead to a
                    culture of multiplying disciples for God's Kingdom. I love God's Church, and we desire to see
                    disciples created for His glory. There is no secret to growth. However, we do know God will do his
                    part. The question remains, 'Will you do yours?’</p>
                <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                    Take Your First Step
                </button>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class=" lg:text-center lg:mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-4 text-center bg-gray-middle py-14 px-2">
                    <h3 class = "text-xl">Watch a Sermon</h3>
                    <p>Lorem ipsum dolor as eguer sit amet, consectetur adipisicing elit. Ab aspernatur commodi, consectetur,</p>
                    <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                        Stream a Sermon <i class="fas fa-angle-right"></i>
                    </button>
                </div>

                <div class="col-span-12 md:col-span-4 text-center bg-gray-light py-14 px-2">
                    <h3 class = "text-xl">Watch Pastor Trent Live</h3>
                    <p>Lorem ipsum dolor as eguer sit amet, consectetur adipisicing elit. Ab aspernatur commodi, consectetur,</p>
                    <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                        Stream A Service <i class="fas fa-external-link-alt"></i>
                    </button>
                </div>

                <div class="col-span-12 md:col-span-4 text-center bg-gray-lightest py-14 px-2">
                    <h3 class = "text-xl">Watch On YouTube</h3>
                    <p>Lorem ipsum dolor as eguer sit amet, consectetur adipisicing elit. Ab aspernatur commodi, consectetur,</p>
                    <button class="rounded-md py-3 px-6 mt-4 text-black bg-gray hover:bg-white-true transition duration-300 drop-shadow-lg">
                        Go To Youtube <i class="fas fa-external-link-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>



<?php
get_footer();