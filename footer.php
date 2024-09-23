<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-0">
                        <h4 class="text-white mb-4"><i class="fas fa-swimmer text-primary me-3"></i><?php bloginfo('name'); ?></h4>
                    </a>
                    <p class="mb-2"><?php bloginfo('description'); ?></p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0">New Delhi , India</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0"><?php echo get_bloginfo('admin_email'); ?></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0"><?php echo get_theme_mod('phone_number', '123-456-7890'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer1MenuLocation',
                        ));
                        ?>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Support</h4>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer2MenuLocation',
                        ));
                        ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Opening Hours</h4>
                    <div class="opening-date mb-3 pb-3">
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Monday - Friday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 11:00 AM - 16:00 PM</p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Saturday - Sunday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Holiday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-white mb-2">Payment Accepted</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/payment.png'); ?>" class="img-fluid" alt="Payment Methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i><?php bloginfo('name'); ?></a>, All rights reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-white" href="#">Nitin Kumar</a> 
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>