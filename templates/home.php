<?php

/**
 * home view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>بالاترین کیفیت
                            بالش و کوسن</h1>
                        <p>تنوع در طرح و رنگ، انواع طبی و تزئینی</p>
                        <a href="product_list.html" class="btn_1">همین الان خرید کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_img">
        <img src="<?= get_template_directory_uri() . '/assets/img/banner.png' ?>" alt="#" class="img-fluid">
        <img src="<?= get_template_directory_uri() . '/assets/img/banner_pattern.png' ?> " alt="#" class="pattern_img img-fluid">
    </div>
</section>
<!-- banner part start-->

<!-- product list start-->
<section class="single_product_list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= get_template_directory_uri() . '/assets/img/single_product_1.png'  ?>" class="img-fluid" alt="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/product_overlay.png' ?>" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>شروع قیمت از 50000 تومان</h5>
                                <h2> <a href="single-product.html"></a> کوسن مربعی طرح دار پر شده با الیاف مصنوعی</h2>
                                <a href="product_list.html" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= get_template_directory_uri() . '/assets/img/single_product_2.png' ?>" class="img-fluid" alt="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/product_overlay.png' ?>" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>شروع قیمت از 50000 تومان</h5>
                                <h2> <a href="single-product.html">کوسن مربعی پر شده با الیاف مصنوعی</a> </h2>
                                <a href="product_list.html" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= get_template_directory_uri() . '/assets/img/single_product_3.png' ?>" class="img-fluid" alt="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/product_overlay.png' ?>" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>شروع قیمت از 50000 تومان</h5>
                                <h2> <a href="single-product.html">فوم قابل استفاده در بالش</a> </h2>
                                <a href="product_list.html" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list end-->

<!-- trending item start-->
<?php do_action("trending_part_section") ?>
<!-- trending item end-->

<!-- feature part here -->
<?php do_action("feature_part_section") ?>
<!-- feature part end -->

<!-- subscribe part here -->
<?php do_action("subscribe_part_section") ?>
<!-- subscribe part end -->
<?php get_footer() ?>