<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-6 text-dark"><i class="fas fa-swimmer text-primary me-3"></i><?php bloginfo()?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0 nav-item nav-link">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation',
                            'menu_class'     => 'navbar-nav mx-auto py-0 px-2 gap-3',
                            'container_class'=> 'collapse navbar-collapse',
                            'container_id'   => 'navbarCollapse',
                            'fallback_cb'    => false,
                            'walker'         => new Custom_Walker_Nav_Menu(), // Use the custom walker here
                        ));
                        ?>

                    
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                            <a class="navbar-color"><?php wp_nav_menu(array(
                                    'theme_location' =>'header_nav_sub'
                                ))
                                ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="site-header__util">
                        <?php if(is_user_logged_in()) { ?>
                            <a href="<?php echo wp_logout_url(); ?>" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">
                                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 25); ?></span>
                                <span class="btn__text">Log Out</span>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo wp_registration_url(); ?>" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Get Started</a>
                        <?php } ?>
                            
                    </div>
                </div>
            </nav>
        </div>
    <?php
        if (!is_front_page()) {
            ?>
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php the_title(); ?></h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item active text-primary"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
            <!-- Header End -->
            <?php
        }
    ?>
