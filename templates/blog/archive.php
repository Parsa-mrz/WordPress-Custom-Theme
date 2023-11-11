<?php

/**
 * blog.archive view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>وبلاگ</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php the_post_thumbnail('card-img rounded-0') ?>
                                    <a href="#" class="blog_item_date">
                                        <h3><?php the_time('d') ?></h3>
                                        <p><?php the_time('F') ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?= get_permalink() ?>">
                                        <h2><?php the_title() ?></h2>
                                    </a>
                                    <p><?php the_excerpt() ?></p>
                                    <ul class="blog-info-link">
                                        <li><a><i class="far fa-user"></i><?php the_author() ?></a></li>
                                        <li><a><i class="far fa-comments"></i> <?php get_comments_number() ?> نظر</a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="قبلی">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="بعدی">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <?php require_once(__DIR__ . '/sidebar-archive.php'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<?php get_footer() ?>