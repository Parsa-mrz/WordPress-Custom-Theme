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
        <!-- breadcrumb part start-->
        <section class="breadcrumb_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <h2><?php the_title() ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb part end-->
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                            </div>
                            <div class="blog_details">
                                <h2><?php the_title() ?></h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a><i class="far fa-user"></i> <?php the_author() ?></a></li>
                                    <li><a><i class="far fa-comments"></i> 3 نظر</a></li>
                                </ul>
                                <p class="excert">
                                    <?php the_excerpt() ?>
                                </p>

                                <div class="quote-wrapper">
                                    <div class="quotes">
                                        برای اطلاع از آخرین اخبار مربوط به تکنولوژی می توانید به این سایت مراجعه کنید.
                                    </div>
                                </div>
                                <p>
                                    <?php the_content() ?>
                                </p>

                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">
                                <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> </p>
                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                    <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                                </div>
                                <ul class="social-icons" dir="ltr">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="navigation-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="img/post/preview.png" alt="">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>مطلب قبل</p>
                                            <?php previous_post_link() ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>مطلب بعد</p>
                                            <?php next_post_link() ?>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="img/post/next.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="<?= get_template_directory_uri() . '/assets/img/blog/author.png' ?>" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4><?php the_author() ?></h4>
                                    </a>
                                    <p>برنامه نویسی وب از طراحی وب سایت ها تا نوشتن برنامه های تحت وب را شامل می شود. برنامه نویسی در این حوزه بسایر لذت بخش است. کارهای که شما در این حوزه انجام میدهید را خیلی ها میبینند. شما می توانید به راحتی برای خودتان و یا بسیاری از شرکتها کار کنید. هرچند در حال حاضر تقریبا هر سازمان، شرکت و شخصی یک وب سایت دارد و همچنین تعداد برنامه نویسان این حوزه خیلی زیاد هست اما برنامه نویسان وب با استفاده از خلاقیت و پشتکار می توانند براحتی در هرکدام از شرکت ها یا سازمان ها مشغول به کار شوند .</p>
                                </div>
                            </div>
                        </div>
                        // Check if comments are open or if there are comments.
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <?php require(__DIR__ . "/sidebar-archive.php") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area end =================-->
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>