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
<section class="trending_items">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>محصولات جدید</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <div class="single_product_item_thumb">
                        <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_1.png' ?>" alt="#" class="img-fluid">
                    </div>
                    <h3> <a href="single-product.html">بالش دور گردنی مخصوص مسافرت
                        </a> </h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_2.png' ?>" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">بالشتک های طبی از جنس فوم</a> </h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_3.png' ?>" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">بالش های طبی از جنس فوم و کتان</a> </h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_4.png' ?>" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html"></a> بالش دور گردنی مخصوص مسافرت</h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_5.png' ?>" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">فوم و کتان مخصوص بالش های طبی</a> </h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/tranding_item/tranding_item_6.png' ?>" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">بالش دور گردنی طبی مخصوص مسافرت</a> </h3>
                    <p>شروع قیمت از 20000 تومان</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trending item end-->


<!-- feature part here -->
<?php require(get_template_directory() . "/templates/parts/feature-part.php") ?>
<!-- feature part end -->

<!-- subscribe part here -->
<?php require(get_template_directory() . "/templates/parts/subscribe-part.php") ?>
<!-- subscribe part end -->
<?php get_footer() ?>