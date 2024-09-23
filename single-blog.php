<?php get_header(); ?>
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <a href="<?php echo esc_url(get_permalink()); ?>"> <!-- Echo the permalink -->
                        <img src="<?php echo esc_url(get_field('image')); ?>" class="img-fluid w-100 rounded-top" alt="Image"> <!-- Echo blog image from ACF field -->
                    </a>
                </div>
                <div>
                    <h4 class="text-primary"><?php the_title(); ?></h4>
                    <h6 class="text-primary fas fa-clock me-2"><?php echo esc_html(get_field('date_of_publish')); ?></h6>
                    <h1 class="display-5 mb-4"><?php echo get_field('heading');?></h1>
                    <p class="mb-5"><?php echo get_field('content');?></p>
                    <p class="mb-4"><?php echo esc_html(get_field('about_us')); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>