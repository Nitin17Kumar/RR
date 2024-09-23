<!-- Blog Start -->
<div class="container-fluid blog ">
    <div class="container ">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog</h4>
            <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
            <p class="mb-0">Come & Enjoy This Summer</p>
        </div>
        <div class="row g-4">
            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged // Enable pagination
            );
            $custom_query = new WP_Query($args);
            if($custom_query->have_posts()) :
                while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"> <!-- Echo the permalink -->
                                        <img src="<?php echo esc_url(get_field('image')); ?>" class="img-fluid w-100 rounded-top" alt="Image"> <!-- Echo blog image from ACF field -->
                                    </a>
                                    <div class="blog-category py-2 px-4">
                                    <?php 
                                        $categories = get_field('category'); // Retrieve the relationship field
                                        if ($categories) {
                                            $category_links = array();
                                            foreach ($categories as $category) {
                                                $category_title = get_the_title($category); // Get title of the related post  
                                                $category_link = get_permalink($category); // Get the permalink of the related post
                                                // Create a clickable link for each category with inline styling for white color
                                                $category_links[] = '<a href="' . esc_url($category_link) . '" style="color: white;">' . esc_html($category_title) . '</a>';
                                            }
                                            // Display category titles as clickable links, separated by commas
                                            echo implode(', ', $category_links);
                                        } else {
                                            echo 'No categories'; // Handle the case when there are no related posts
                                        }
                                    ?>
                                    </div>

                                    <div class="blog-date"><i class="fas fa-clock me-2"></i><?php echo esc_html(get_field('date_of_publish')); ?></div> <!-- Echo date of publish from ACF -->
                                </div>
                                <div class="blog-content p-4">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="h4 d-inline-block mb-4"><?php the_title(); ?></a> <!-- Echo blog title -->
                                    <p class="mb-4"><?php echo esc_html(get_field('about_us')); ?></p> <!-- Echo 'about_us' field -->
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a> <!-- Echo permalink again -->
                                </div>
                            </div>
                        </div>
                <?php endwhile; ?>

                <div class="pagination">
                    <?php 
                    // Display pagination links
                    echo paginate_links(array(
                        'total' => $custom_query->max_num_pages, // Total number of pages
                        'current' => $paged, // Current page number
                        'prev_text' => __('« Prev'),
                        'next_text' => __('Next »')
                    ));
                    ?>
                </div>

                <?php wp_reset_postdata(); // Reset post data
            else : 
                echo '<p>No blogs found.</p>';
            endif; 
            ?>
        </div>
    </div>
</div>
