<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Meet Our Team</h4>
            <h1 class="display-5 mb-4"><?php echo get_field('heading_team'); ?></h1>
            <p class="mb-0"><?php echo get_field('sub_heading'); ?></p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php for($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item p-4">
                    <div class="team-content">
                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0"><?php echo get_field('name_' . $i); ?></h4>
                                <p class="mb-0"><?php echo get_field('profession_' . $i); ?></p>
                            </div>
                            <div>
                                <img src="<?php echo get_field('image_' . $i. '_team'); ?>" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0"><?php echo get_field('review' . $i); ?></p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
