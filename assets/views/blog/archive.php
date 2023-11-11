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
<div class="container">
    <div class="row d-flex justify-content-between py-4">
        <div class="col-4 col-md-1 text-center px-2">
            <p class="border-bottom border-danger-color">معرفی محصول</p>
        </div>
        <div class="col-4 col-md-2 text-center">
            <a href="#" class="second-color-sp" style="background-color: #DFD3C8 !important;">مشاهده بیشتر <img src="/assets/img/arrow-right.svg" class="arrow-right" alt=""></a>
        </div>
    </div>
</div>

<!-- section one introduction -->

<section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 col-md-3 mx-auto col-section-one d-flex justify-content-around border rounded-4 p-2 white-color my-2"><img src="/assets/img/119739173 1.png" class="border border-danger rounded-4 spilet-pic" alt="">
                <p class="text-center align-self-center">درباره اسپلیت هایسان</p>
            </div>
            <div class="col-11 col-md-3 mx-auto col-section-one d-flex justify-content-around border rounded-4 p-2 white-color my-2"><img src="/assets/img/119739173 1.png" class="border border-danger rounded-4 spilet-pic" alt="">
                <p class="text-center align-self-center"> کاربرد کانال‌کشی های جدید</p>
            </div>
            <div class="col-11 col-md-3 mx-auto col-section-one d-flex justify-content-around border rounded-4 p-2 white-color my-2"><img src="/assets/img/119739173 1.png" class="border border-danger rounded-4 spilet-pic" alt="">
                <p class="text-center align-self-center">دلیل محبوبیت شیرآلات هایسان</p>
            </div>
        </div>
    </div>
</section>

<!-- section two help -->
<section>
    <div class="container pb-4">
        <div class="row p-4">
            <div class="col-3 col-md-2 border-bottom border-danger-color">آموزش‌های کاربردی</div>
        </div>
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="row white-color rounded-4 mx-auto justify-content-evenly my-3">
                    <div class="col-md-3 col-4 p-3 text-center white-color rounded-4 align-content-stretch d-flex my-2 align-items-center">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('archive-post');
                        } ?>

                    </div>
                    <div class="col-md-9 col-7">
                        <div class="d-flex flex-column justify-content-center px-3 my-5">
                            <p class="fw-bold mb-3"><a href="<?= the_permalink(); ?>"><?= the_title() ?></a></p>
                            <p class="d-none d-md-block"><?= get_the_excerpt() ?></p>

                            <p class="d-sm-block d-md-none">نامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد(...)</p>

                        </div>
                    </div>
                </div>
        <?php
            }
        } ?>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="pagination">
                        <?= paginate_links(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- section three brand -->
<section>
    <div class="container section-three-background p-0 mb-5">
        <div class="row m-4">
            <div class="col-3 col-md-1 border-bottom border-danger-color">
                برندشناسی
            </div>
        </div>
        <div class="container">
            <div class="row main-color rounded-4 justify-content-around p-3">
                <div class="col-11 col-md-6 col-xl-5 d-flex justify-content-between rounded-4 white-color p-3 align-items-center my-2 brands-compaire">
                    <p class="fw-bold d-sm-block d-md-none">مقایسه کولرگازی جنرال و کولر هایسان</p>
                    <div class="imgagess my-1">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                    </div>

                    <div>
                        <p class="fw-bold d-none d-md-block">مقایسه کولرگازی جنرال و کولر هایسان</p>
                        <small>۵ روز قبل <small class="me-3">یک دیدگاه</small> <span><a href="#" class="second-color-sp me-3">مشاهده بیشتر <img src="/assets/img/arrow-right.svg" class="arrow-right" alt=""></a></span></small>
                    </div>
                </div>
                <div class="col-11 col-md-6 col-xl-5 d-flex justify-content-between rounded-4 white-color p-3 align-items-center my-2 brands-compaire">
                    <div class="imgagess my-1">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                    </div>
                    <div>
                        <p class="fw-bold d-none d-md-block">مقایسه کولرگازی جنرال و کولر هایسان</p>
                        <small>۵ روز قبل <small class="me-3">یک دیدگاه</small> <span><a href="#" class="second-color-sp me-3">مشاهده بیشتر <img src="/assets/img/arrow-right.svg" class="arrow-right" alt=""></a></span></small>
                    </div>
                </div>
                <div class="col-11 col-md-5 d-flex justify-content-between rounded-4 white-color p-3 align-items-center my-2 brands-compaire">
                    <div class="imgagess my-1">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                    </div>
                    <div>
                        <p class="fw-bold d-none d-md-block">مقایسه کولرگازی جنرال و کولر هایسان</p>
                        <small>۵ روز قبل <small class="me-3">یک دیدگاه</small> <span><a href="#" class="second-color-sp me-3">مشاهده بیشتر <img src="/assets/img/arrow-right.svg" class="arrow-right" alt=""></a></span></small>
                    </div>
                </div>
                <div class="col-11 col-md-5 d-flex justify-content-between rounded-4 white-color p-3 align-items-center my-2 brands-compaire">
                    <div class="imgagess my-1">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                        <img src="/assets/img/119739173 1.png" class="spilet-phtoto-brand" alt="">
                    </div>
                    <div>
                        <p class="fw-bold d-none d-md-block">مقایسه کولرگازی جنرال و کولر هایسان</p>
                        <small>۵ روز قبل <small class="me-3">یک دیدگاه</small> <span><a href="#" class="second-color-sp me-3">مشاهده بیشتر <img src="/assets/img/arrow-right.svg" class="arrow-right" alt=""></a></span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- back to top button -->

<div class="container pb-5 d-none d-md-block">
    <div class="back-to-top-btn d-inline-block ">
        <a href="#nav" id="return-to-top" class="btn background-color-btn py-0"><span class="material-symbols-outlined">
                navigate_before
            </span><span class="material-symbols-outlined">
                navigate_before
            </span><span class="material-symbols-outlined">
                navigate_before
            </span></a>
        <div class="mt-2 text-center">بازگشت به بالا</div>
    </div>

</div><?php get_footer() ?>