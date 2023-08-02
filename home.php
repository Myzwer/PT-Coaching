<?php
/**
 * Template Name: Posts Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage PT_Coaching
 * @since 1.0.0
 */

get_header(); ?>


<?php
// Get the post ID for use later in the page
$post_id = false;
if (is_home()) {
    $post_id = 9; // specif ID of home page
}
?>

<?php if (have_rows('photo_background_section', $post_id)): ?>
    <?php while (have_rows('photo_background_section', $post_id)): the_row(); ?>
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level', $post_id); ?>),
                rgba(0, 0, 0, 0.<?php the_sub_field('tint_level', $post_id); ?>)
                ), url('<?php the_sub_field('background_image_url', $post_id); ?>') <?php the_sub_field('bg-pos-x'); ?> <?php the_sub_field('bg-pos-y'); ?>;
                height: <?php the_sub_field('background_height', $post_id); ?>vh; background-repeat: no-repeat; background-size: cover;">
            <div class="absolute bottom-10 left-5 md:left-10 text-white">
                <h1 class="text-4xl md:text-5xl mb-3"><?php the_sub_field('page_title', $post_id); ?></h1>
                <p class="text-xl md:text-2xl mb-3"><?php the_sub_field('page_description', $post_id); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="bg-gray-light">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('blog_header', $post_id) ?>') center center;  background-repeat: no-repeat; background-size: cover;">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number
            $posts_query = new WP_Query(array(
                'posts_per_page' => 1,
                'paged' => $paged // Pass the current page number to the query
            ));
            while ($posts_query->have_posts()) : $posts_query->the_post();
                if ($paged === 1) { // Only display the featured post on the first page
                    ?>
                    <div class="lg:max-w-5xl lg:text-center lg:mx-auto py-5 md:py-10 px-5">
                        <div class="grid grid-cols-12 text-black shadow-xl rounded-xl ">
                            <div class="col-span-12 lg:col-span-7 rounded-xl">
                                <div class="bg-no-repeat bg-scroll bg-cover relative featured-background "
                                     style="background: linear-gradient(
                                             rgba(0, 0, 0, 0.0),
                                             rgba(0, 0, 0, 0.0)
                                             ), url('<?php the_post_thumbnail_url(); ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                                </div>
                            </div>

                            <div class="col-span-12 lg:col-span-5 text-left relative bg-gray featured-card">
                                <div class="content-middle-card px-5 py-10">
                                    <h6 class="">
                                        <span class="font-bold">Latest Post</span> - <span
                                                class="opacity-60"> <?php echo get_the_date(); ?> </span>
                                    </h6>

                                    <h2 class="text-3xl font-bold capitalize"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>

                                    <a href="<?php echo get_permalink(); ?>">
                                        <button class="bg-gray-dark uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover my-4">
                                            Read More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } else {
                    ?>
                    <div class="lg:max-w-5xl lg:text-center lg:mx-auto py-5 md:py-20 px-5">
                        <div class="text-white">
                            <h1 class="text-4xl mb-7 px-2">Older Posts</h1>
                        </div>
                    </div>
                    <?php
                }
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>

<div class="bg-white">
    <!-- Start All Other Posts -->
    <div class="md:w-7/12 mx-auto">
        <div class="grid grid-cols-12 gap-4 py-10 px-5">

            <!-- "All sermons" text -->
            <div class="col-span-12 text-center mx-auto">
                <h3 class="text-2xl md:text-3xl mb-3 font-bold"><?php the_field('body_title_2', $post_id); ?></h3>
            </div>
            <!-- End "All sermons" text -->

            <?php
            /*
             * This little php block handles a few things.
             * Overrides Wordpress' posts per page in admin.
             * Setting this here allows for you to have it different somewhere else.
             * Skip the first post since it is shown above in the featured post
             * The if/else statement fixes pagination so it doesn't skip those too.
             * Credit for the fix: https://wordpress.stackexchange.com/questions/261405/wp-query-with-offset-breaks-wp-pagenavi-or-any-pagination/335115#335115?newreg=0217492f5a8a47e28bf0c8a72200ebb9
             *
             */
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $per_page = 2; // How many posts do you want per page?
            $default_offset = 1; // How much offset do you want?

            if ($paged == 1) {
                $offset = $default_offset;
            } else {
                $offset = (($paged - 1) * $per_page) + $default_offset;
            }

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'order' => 'DESC',
                'offset' => $offset,
                'paged' => $paged
            );
            $loop = new WP_Query($args);

            // Start loop for all posts.
            while ($loop->have_posts()) :
                $loop->the_post();
                ?>

                <div class="col-span-12 md:col-span-6 lg:col-span-4  bg-gray-light shadow-lg rounded-lg">
                    <img class = "rounded-t-xl" src="<?php echo the_post_thumbnail_url() ?>" alt="">
                    <div class="p-5 mb-8">
                    <h3 class="text-xl md:text-2xl font-bold"><?php echo get_the_title(); ?></h3>
                    <p class="font-bold pb-3"><?php echo get_the_date(); ?> | <?php the_author(); ?></p>
                    <p><?php echo the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <button class="uppercase inline-block rounded-md mt-3 py-3 px-6 text-white bg-gray-dark hover:bg-gray-darkest transition duration-300">
                            Read More
                        </button>
                    </a>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <?php wpbeginner_numeric_posts_nav(); ?>

    </div>
</div>

<?php
get_footer();

