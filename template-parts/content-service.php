<div class="container-fluid service py-5" style="margin-top: 100px;">
    <div class="container service-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Service</h4>
            <h1 class="display-5 text-white mb-4">Explore Waterland Park service</h1>
            <p class="mb-0 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-days p-4">
                        <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>11:00 AM - 16:00 PM</p></div>
                        <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div>
                        <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0">Holiday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div>
                    </div>
                </div>
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>


                <?php 
                $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $custom_query = new WP_Query($args);

                // Check if there are posts
                if($custom_query->have_posts()) :
                    while($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <i class="fas <?php echo get_field('icon_class'); ?> fa-4x"></i>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3"><?php echo get_field('title');?></a>
                            <p class="mb-0"><?php echo get_field('sub_title');?></p>
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
</div>