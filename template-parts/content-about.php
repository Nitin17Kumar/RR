<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About RR</h4>
                    <h1 class="display-5 mb-4"><?php echo esc_html(get_field('heading_about')); ?></h1>
                    <p class="mb-5"><?php echo esc_html(get_field('content_about')); ?></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Food & Drinks</h4>
                                    <p>Fast and good quality of food served.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Many Attractions</h4>
                                    <p>Pool and food also available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Affordable Price</h4>
                                    <p>Everything at affordable price.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-lock fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Safety Lockers</h4>
                                    <p>We ensure your safety first.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative rounded">
                    <div class="rounded" style="margin-top: 40px;">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="rounded mb-4">
                                    <img src="<?php echo esc_url(get_field('image_about')); ?>" class="img-fluid rounded w-100" alt="">
                                </div>
                                <div class="row gx-4 gy-0">
                                    <div class="col-6">
                                        <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up"><?php echo esc_html(get_field('likes')); ?></span>
                                                <span class="h1 fw-bold text-white">K +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Happy Visitors</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-certificate fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up"><?php echo esc_html(get_field('no_of_awards')); ?></span>
                                                <span class="h1 fw-bold text-white"> +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Awards Winning</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center" style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                        <h3 class="mb-0 text-white"><?php echo esc_html(get_field('experience')); ?> Years Experience</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
