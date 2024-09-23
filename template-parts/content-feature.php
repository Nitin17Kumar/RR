<!-- feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row g-4">
            <?php 
            $args = array(
                'post_type' => 'feature',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $custom_query = new WP_Query($args);

            // Check if there are posts
            if($custom_query->have_posts()) :
                while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="<?php echo get_field('back_image') ?>" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <?php 
                                    $heading = get_field('heading');
                                    $sub_heading = get_field('sub_heading');
                                    ?>
                                    
                                    <h4 class="text-white"><?php echo esc_html($heading ? $heading : 'Default Heading'); ?></h4>
                                    <p class="text-white"><?php echo esc_html($sub_heading ? $sub_heading : 'Default Sub Heading'); ?></p>
                                    
                                    <!-- Correctly echo the permalink -->
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No features found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
