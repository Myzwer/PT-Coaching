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

<?php if (have_rows('photo_background_section')): ?>
    <?php while (have_rows('photo_background_section')): the_row(); ?>
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level'); ?>),
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level'); ?>)
                ), url('<?php the_sub_field('background_image_url'); ?>') <?php the_sub_field('bg-pos-x'); ?> <?php the_sub_field('bg-pos-y'); ?>;
                height: <?php the_sub_field('background_height'); ?>vh;  background-repeat: no-repeat; background-size: cover;">
            <div class="absolute bottom-10 left-5 md:left-10 text-white">
                <h1 class="text-4xl md:text-5xl mb-3"><?php the_sub_field('page_title'); ?></h1>
                <p class="text-xl md:text-2xl mb-3"><?php the_sub_field('page_description'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


    <div class="bg-gray pb-5">
        <div class="md:w-9/12 mx-auto grid grid-cols-12 p-5">

            <!-- ******** THE FEATURED SERMON ******** -->
            <!-- "Latest sermon" text -->
            <div class="col-span-12 text-center mx-auto mt-10">
                <h3 class="text2xl md:text-3xl mb-3 font-bold"><?php the_field('body_title_1'); ?></h3>
            </div>

            <!-- Start the actual card -->
                <?php
                //Drop into php to call the latest post title and link
                $recent_posts = wp_get_recent_posts(array(
                        'post_type' => 'broadcast',
                        'numberposts' => 1, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'tax_query' => array( // Only Show the video posts, not podcasts.
                            array(
                                'taxonomy' => 'format',
                                'terms' => 'videos',
                                'field' => 'slug'
                            ),
                        )
                    )
                );

                foreach ($recent_posts as $post) : ?>
                <div class="col-span-12 lg:col-span-6 text-center bg-gray-light lg:rounded-l-lg">
                    <div class="bg-no-repeat bg-scroll bg-cover relative shadow-lg rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                         style="background: url('<?php echo get_the_post_thumbnail_url($post['ID'], 'post-thumbnail');?>') no-repeat center center scroll;
                                 background-size: cover; height: 40vh;">
                    </div>

<!--                    -->                </div>
                <div class="col-span-12 lg:col-span-6 p-5 bg-gray-light shadow-lg rounded-b-lg md:rounded-b-none md:rounded-r-lg">
                    <h3 class="text-xl md:text-2xl mb-1 font-bold">
                        <?php echo $post['post_title'] ?>
                    </h3>

                    <p><?php echo wp_trim_words(get_the_content(null, false, $post['ID']), 55) ?></p>

                    <a href="<?php echo get_permalink($post['ID']) ?>">
                        <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            Watch Now
                        </button>
                    </a>
                <?php endforeach;
                wp_reset_query(); ?>

            </div>
            <!-- End Featured Sermon -->

            <!-- All Sermons -->
            <div class="col-span-12 text-center mx-auto mt-10">
                <h3 class="text2xl md:text-3xl mb-3 font-bold"><?php the_field('body_title_2'); ?></h3>
            </div>


            <?php
            // WP_Query arguments
            $latest_post_args = array(
                'post_type'     => 'broadcast',
                'numberposts'   => 1,
                'fields'        => 'ids',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'format',
                        'terms' => 'videos',
                        'field' => 'slug'
                    )
                )
            );

            $latest_post_ids = get_posts( $latest_post_args );

            $args = array(
                'post_type' => array('broadcast'),
                'post_status' => array('publish'),
                'nopaging' => false,
                'post__not_in' => $latest_post_ids,
                'order' => 'DESC',
                'orderby' => 'date',
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'format',
                        'terms' => 'videos',
                        'field' => 'slug'
                    )
                )
            );

            // The Query
            $broadcasts = new WP_Query($args);

            // The Loop
            if ($broadcasts->have_posts()) {
                while ($broadcasts->have_posts()) {
                    $broadcasts->the_post();

                    ?>

                    <div class="col-span-12 p-5 mb-8 bg-gray-light shadow-lg rounded-lg">
                        <h3 class="text-xl md:text-2xl font-bold"><?php echo get_the_title(); ?></h3>
                        <p class="font-bold pb-3"><?php echo get_the_date(); ?></p>
                        <p><?php echo the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                                Watch Now
                            </button>
                        </a>
                    </div>
                <?php } ?>


                <!-- Start Pagination-->
                <div class="col-span-12 p-5 mb-8 pagination text-center">
                    <?php

                    echo paginate_links(array(
                        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'total' => $broadcasts->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'format' => '?paged=%#%',
                        'show_all' => false,
                        'type' => 'list',
                        'end_size' => 2,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => sprintf('<i></i> %1$s', __('Newer Videos', 'text-domain')),
                        'next_text' => sprintf('%1$s <i></i>', __('Older Videos', 'text-domain')),
                        'add_args' => false,
                        'add_fragment' => '',
                    ));
                    ?>
                </div>

                <?php
            } else {
                echo 'there are no posts.'; // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
            ?>
            <!-- End Pagination -->
        </div>
    </div>


<?php get_footer();