<div class="container-fluid testimonial py-5" style="margin-top: 100px;">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php echo get_field('heading_test'); ?></h4>
            <h1 class="display-5 text-white mb-4"><?php echo get_field('sub_heading'); ?></h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4"><?php echo get_field('testimonial_' . $i . '_text'); ?></p>
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="<?php echo esc_url(get_field('testimonial_' . $i . '_image')); ?>" class="img-fluid" alt="Image">
                            <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i></div>
                        </div>
                        <div class="ms-4">
                            <h4><?php echo get_field('testimonial_' . $i . '_name'); ?></h4>
                            <p class="text-start text-white"><?php echo get_field('testimonial_' . $i . '_profession'); ?></p>
                            <div class="d-flex text-primary">
                                <!-- Example rating, customize as needed -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
