<?php

/**
 * about-us view.
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
                    <h2>درباره ما</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="about_us padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="about_us_content">
                    <h5>هدف ما</h5>
                    <h3>هدف ما در این مجموعه تولید محصولات زیبا و با کیفیت در راستای جلب رضایت شماست.</h3>
                    <div class="about_us_video">
                        <img src="<?= get_template_directory_uri() . '/assets/img/about_us_video.png' ?>" alt="#" class="img-fluid">
                        <a class="about_video_icon popup-youtube" href="https://www.youtube.com/watch?v=DWHB6nTyKDI"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- feature part here -->
<?php require(get_template_directory() . "/templates/parts/feature-part.php") ?>
<!-- feature part end -->



<!-- subscribe part here -->
<?php require(get_template_directory() . "/templates/parts/subscribe-part.php") ?>
<!-- subscribe part end -->
<?php get_footer() ?>