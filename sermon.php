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


    <div class="bg-gray bio pb-5">
        <div class="md:w-3/4 mx-auto grid grid-cols-12 p-2">

            <!-- Featured Sermon -->
            <div class="col-span-12 text-center mx-auto mt-10">
                <h3 class="text2xl md:text-3xl mb-3 font-bold"><?php the_field('body_title_1'); ?></h3>
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
                <h3 class="text2xl md:text-3xl mb-3 font-bold"><?php the_field('body_title_2'); ?></h3>
            </div>


            <?php
            // WP_Query arguments
            $args = array(
                'post_type' => array('broadcast'),
                'post_status' => array('publish'),
                'nopaging' => false,
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
                        <h3 class="text-xl md:text-2xl mb-1 font-bold"><?php echo get_the_title();?></h3>
                        <p class = "font-bold"><?php echo get_the_date();?></p>
                        <p><?php echo the_excerpt();?></p>
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