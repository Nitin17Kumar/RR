<?php get_header(); ?>

<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="<?php echo esc_url(get_field('banner_1')); ?>" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container align-items-center py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                        <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4"><?php the_title(); ?></h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">The Biggest Theme & Amusement Park</h1>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                            <div class="d-flex flex-shrink-0">
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="<?php echo esc_url(home_url('/package')); ?>">Our Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">Book Your Ticket</h2>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="tel" class="form-control border-0 py-2" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select border-0 py-2" aria-label="Default select example" required>
                                            <option selected>Select Packages</option>
                                            <option value="1">Family Packages</option>
                                            <option value="2">Basic Packages</option>
                                            <option value="3">Premium Packages</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control border-0 py-2" type="date" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="header-carousel-item">
        <img src="<?php echo esc_url(get_field('banner_2')); ?>" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                        <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">
                                <?php
                                $welcome_message = get_field('welcome_message');
                                if ($welcome_message) {
                                    echo esc_html($welcome_message);
                                }
                                ?>
                            </h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">The Greatest Water and Amusement Park</h1>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                            <div class="d-flex flex-shrink-0">
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">Book Your Ticket</h2>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="tel" class="form-control border-0 py-2" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select border-0 py-2" aria-label="Default select example" required>
                                            <option selected>Select Packages</option>
                                            <option value="1">Family Packages</option>
                                            <option value="2">Basic Packages</option>
                                            <option value="3">Premium Packages</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control border-0 py-2" type="date" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest" required>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<?php
get_template_part('template-parts/content-about');
?>
<!-- About End -->

<!-- Service Start -->
<?php get_template_part('template-parts/content-service'); ?>
<!-- Service End -->

<!-- Feature Start -->
<?php
get_template_part('template-parts/content-feature');
?>
<!-- Feature End -->

<!-- Gallery Start -->
<?php
get_template_part('template-parts/content-gallery');
?>
<!-- Gallery End -->

<!-- Ticket Packages Start -->
<?php get_template_part('template-parts/content-package'); ?>
<!-- Ticket Packages End -->

<!-- Attractions Start -->
<?php get_template_part('template-parts/content-attraction'); ?>
<!-- Attractions End -->

<!-- Blog Start -->
<?php get_template_part('template-parts/content-blog'); ?>
<!-- Blog End -->

<!-- Team Start -->
<?php
get_template_part('template-parts/content-team');
?>
<!-- Team End -->

<!-- Testimonial Start -->
<?php get_template_part('template-parts/content-testimonial'); ?>
<!-- Testimonial End -->

<?php get_footer(); ?>
