<div class="container-fluid gallery pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Gallery</h4>
            <h1 class="display-5 mb-4"><?php echo get_field('heading_gallery');?></h1>
            <p class="mb-0"><?php echo get_field('sub_heading');?></p>
        </div>
        <div class="row g-4">
            <div class="col-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_1');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_2');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_3');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_4');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_5');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="<?php echo get_field('gallery_6');?>" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>