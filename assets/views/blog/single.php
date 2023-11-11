<?php

/**
 * blog.single view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <section>
            <div class="container-fluid section-one-sb mt-5">
                <div></div>
                <div class="row justify-content-center py-5">
                    <div class="col-10 col-md-3 text-center text-white">
                        <h1><?= the_title() ?></h1>
                        <span><?php the_time('j F Y'); ?></span>
                    </div>
                </div>
                <!-- white container -->
                <div class="container white-color rounded-4 px-5 box-shadow-container">
                    <div class="row rounded-4">
                        <div class="col-12 text-center white-color rounded-4 py-5 px-0">
                            <?php
                            if (has_post_thumbnail()) :
                                the_post_thumbnail('single-post');
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <p class="d-none d-md-block">
                            <?= the_content() ?>
                        </p>
                    </div>
                </div>

                <!-- blogs container start -->
                <div class="row hp-blogs-container my-5 p-4">
                    <div class="d-flex justify-content-between my-3">
                        <span class="blogs-htext">
                            آخـرین مقالـات
                            <span>هایسان</span>
                        </span>
                        <a href="#" style="color:#F11F19  !important;">
                            مشاهده بیشتر
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.09 4.07992L8.57 10.5999C7.8 11.3699 7.8 12.6299 8.57 13.3999L15.09 19.9199" stroke="#F11F19" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="row blogs-image-container justify-content-around m-auto">
                        <?php
                        $related = get_posts(array(
                            'category__in' => wp_get_post_categories($post->ID),
                            'numberposts' => 4,
                            'post_not_in' => array($post->ID)

                        ));
                        ?>
                        <?php foreach ($related as $post) : setup_postdata($post) ?>
                            <div class="col position-relative blogs-cards-container p-0 mx-1">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('single-post');
                                else :
                                ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/woocommerce-placeholder.png'; ?>"> <?php
                                                                                                                                    endif;
                                                                                                                                        ?>
                                <div class="border position-absolute blogs-card-hover">
                                    <button><?php the_time('j F Y'); ?></button>
                                    <span><?= the_title() ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="comment-box">
                        <div class="related-header">
                            <h4>نظرات : </h4>
                        </div>
                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>
                    </div>
                    <!-- blogs container start -->

                </div>
                <div class="container pb-5 d-none d-md-block">
                    <div class="back-to-top-btn d-inline-block ">
                        <a href="#nav" class="btn btn-danger py-0"><span class="material-symbols-outlined text-white mt-1">
                                navigate_before
                            </span><span class="material-symbols-outlined text-white mt-1">
                                navigate_before
                            </span><span class="material-symbols-outlined text-white mt-1">
                                navigate_before
                            </span></a>
                        <div class="mt-2 text-center">بازگشت به بالا</div>
                    </div>

                </div>

        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>