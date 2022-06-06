<?php 

/**
 * Template Name: Front Page
 */

get_header(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">

                <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                <?php endif; ?>
                <a href="#" class="btn btn-sm btn-success"data-bs-toggle="modal" data-bs-target="#signupModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Sign-up to Get Started</a>
            </div>
            <div class="col-lg-6 col-md-6">
                
                <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</header>

<section class="features pt-3 pb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mytel logo.png" alt="Some Features">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">Featured Heading</h3>
                        <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mytel logo.png" alt="Some Features">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">Featured Heading</h3>
                        <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mytel logo.png" alt="Some Features">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="fs-6 fw-600 mt-3">Featured Heading</h3>
                        <p>This is some content from a media component. You can replace this with any content and adjust it as needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-cat pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course-cat-text text-center small">
                    <h2 class="fs-5 fw-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolore inventore atque doloremque tenetur</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, perferendis! Vitae officia porro maiores voluptatum laudantium quidem reiciendis odit quod, explicabo, doloremque qui. Ducimus nulla itaque repudiandae id nihil necessitatibus.</p>
                    <a href="#" class="btn btn-sm btn-success"data-bs-toggle="modal" data-bs-target="#signupModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Sign-up to Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>