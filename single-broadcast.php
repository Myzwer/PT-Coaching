<?php

/**
 * Template Name: Broadcast - Single Post
 **/

get_header();
?>

    <div class="bg-gray pb-5 pt-12">
        <div class="md:w-8/12 mx-auto grid grid-cols-12 p-2">

            <div class="col-span-12 ">
                <div class="relative video-wrapper">
                    <?php the_field('video_link'); ?>
                </div>
            </div>
            <div class="col-span-12 p-5 bg-gray-light shadow-lg rounded-b-xl">
                <h3 class="text-xl md:text-2xl mb-1 font-bold"><?php echo the_title(); ?>
                    </h3>
                <p><?php the_date(); ?></p>
                <hr class = "my-5">
                <p><?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    else:
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                    ?></p>

            </div>
        </div>
    </div>

<?php
$terms = get_the_terms($post, 'format');
$formatName = "";
$formatNameSingle = "";
foreach ($terms as $term) {
    $formatName = " " . $term->name; // will result in " Podcasts"
    $formatNameSingle = " " . rtrim($formatName, "s"); // will result in " Podcast"
    break;
}
?>

    <div class="bg-gray pb-5">
        <div class="md:w-8/12 mx-auto grid grid-cols-12 p-2">

            <div class="col-span-12 p-5 bg-gray-light text-center shadow-lg rounded-xl">
                <a href="">
                    <?php next_post_link('%link', '<button class="uppercase inline-block rounded-md my-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">Next' . $formatNameSingle . '</button>', true, "", 'format'); ?>
                </a>

                <a href="/<?php
                if (get_field('video_link')) { //check to see if the video ACF field is being used
                    echo "watch";
                } else {
                    echo "listen";
                } ?>">
                    <!-- If $formatName is empty, then it will just say "All". Otherwise it would say "All Podcasts" -->
                    <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                        <?php echo "All" . $formatName ?>
                    </button>
                </a>
                <a href="">
                    <?php previous_post_link('%link', '<button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">Previous' . $formatNameSingle . '</button>', true, "", 'format'); ?>
                </a>
            </div>
        </div>
    </div>


<?php
get_footer();