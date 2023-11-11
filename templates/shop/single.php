<?php

/**
 * shop.single view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<div class="container py-4">
    <?php wc_print_notices(); ?>
    <div class="row d-none d-md-block">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">هایسان / </a></li>
                <li class="breadcrumb-item"><a href="#">لوازم سرمایشی</a></li>
                <li class="breadcrumb-item"><a href="#">اسپیلت</a></li>
                <li class="breadcrumb-item active fw-bold" aria-current="page">اسپلیت کولرگازی ۲۴ هزار ایوولی مدل ۱۴-۲</li>
            </ol>
        </nav>

    </div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
            global $product; ?>
            <div class="row d-sm-flex justify-content-between d-md-none mx-3">
                <div class="col-1"><a href="#" class="btn bg-white p-0 rounded-3"><img src="<?= get_template_directory_uri() . '/assets/img/arrow-right pointy.svg' ?>" class="arrow-right-pointy" alt=""></a></div>
                <div class="col-5 bg-white rounded-4 p-0 d-flex">
                    <?Php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('single-product');
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/woocommerce-placeholder.png'; ?>" alt="image"><?php
                                                                                                                                    }
                                                                                                                                        ?>
                </div>
            </div>
</div>

<!-- section one -->

<section class="section-one-container">
    <div class="container rounded-3 py-5" style="background-color: #fff;border: 0.4px solid #282828;">
        <div class="row">
            <div class="col-xl-1 d-flex align-items-center flex-column text-center d-none d-xl-block">
                <i class="side-shop-item"><img class="side-shop-item" src="<?= get_template_directory_uri() . '/assets/img/heart.svg' ?>" alt=""></i>
                <i class="side-shop-item"><img class="side-shop-item" src="<?= get_template_directory_uri() . '/assets/img/navigation.svg' ?>" alt=""></i>
                <i class="side-shop-item"><img class="side-shop-item" src="<?= get_template_directory_uri() . '/assets/img/notification 03.svg' ?>" alt=""></i>
                <i class="side-shop-item"><img class="side-shop-item" src="<?= get_template_directory_uri() . '/assets/img/landscape.svg' ?>" alt=""></i>

            </div>


            <div class="col-xl-1 align-items-center text-center d-sm-block d-lg-none px-4">
                <h2 class="border-bottom border-danger pb-2"><?= get_the_title() ?></h2>

                <div class="d-flex justify-content-around">
                    <span>2.5 <img class="star-icon" src="assets/img/star.svg" alt=""></span>
                    <span><img src="/assets/img/Ellipse 1204.svg" class="dots-icon" alt=""></span>
                    <span>2 دیدگاه</span>
                    <span><img src="/assets/img/Ellipse 1204.svg" class="dots-icon" alt=""></span>
                    <span>دسته بندی اسپیلت</span>

                </div>

            </div>




            <div class="col-xl-3 text-center"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt=""></div>
            <div class="col-xl-4 d-none d-lg-block px-0">
                <h5>اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</h5>
                <hr>
                <div class="d-flex justify-content-around py-3">
                    <span>2.5 <img class="star-icon" src="assets/img/star.svg" alt=""></span>
                    <span><img src="/assets/img/Ellipse 1204.svg" class="dots-icon" alt=""></span>
                    <span>2 دیدگاه</span>
                    <span><img src="/assets/img/Ellipse 1204.svg" class="dots-icon" alt=""></span>
                    <span>دسته بندی اسپیلت</span>

                </div>

                <h6 class="py-3 fw-bold">ویژگی ها</h6>
                <ul class="product-items-info">
                    <li>رده مصرف انرژی : <strong class="text-black">A</strong></li>
                    <li>نوع برد الکترونیکی کمپرسور : <strong class="text-black">دور ثابت</strong></li>
                    <li>ظرفیت سرمایش-گرمایش کولر :<strong class="text-black">2400</strong></li>
                    <li>تعداد پنل : <strong class="text-black">یک عدد</strong></li>
                    <li>نوع آب و هوای سازگار : <strong class="text-black">معتدل و گرم</strong></li>

                </ul>
                <div class="py-2">
                    <a href="#" class="second-color-sp">مشاهده بیشتر</a> <i><img class="arrow-right" src="assets/img/arrow-right.svg" alt=""></i>
                </div>

            </div>

            <div class="col-xl-4 d-none d-lg-block px-5">
                <div class="border rounded-3 text-end px-2 py-3">
                    <input type="checkbox" name="" id="" checked style="accent-color: red;"><span> گارانتی ۳۶ ماهه هایسان</span>
                    <hr>
                    <h4 class="py-3 ">۱۹,۸۰۰,۷۶۰ <span class="second-color-sp">تومان</span></h4>
                    <h5 class="second-color-sp py-2">تنها ۱ عدد در انبار باقی‌مانده</h5>

                    <div class="number-input  d-flex justify-content-around align-items-center">

                        <!-- <div class="number">
                                <span class="minus">-</span>
                                <input type="text" class="add-sub" value="1"/>
                                <span class="plus">+</span>
                            </div> -->

                        <div class="d-flex number align-items-center">
                            <span class="minus" id="addon-wrapping">-</span>
                            <input type="text" class="form-control add-sub" placeholder="Username" value="1" aria-label="Username" aria-describedby="addon-wrapping">
                            <span class="plus">+</span>
                        </div>


                        <button class="btn add-button">افزودن به سبد خرید</button>

                    </div>



                </div>
            </div>
            <div class="col-10 text-end d-sm-block d-lg-none mx-auto py-3">
                <input type="checkbox" name="" id="" checked><span> گارانتی ۳۶ ماهه هایسان</span>
                <h5 class="second-color-sp">تنها ۱ عدد در انبار باقی‌مانده</h5>
            </div>
            <div class="col-10 text-end d-sm-block d-lg-none mx-auto py-3">
                <h6 class="py-3 fw-bold">ویژگی ها</h6>
                <ul class="product-items-info">
                    <li>رده مصرف انرژی : <strong class="text-black">A</strong></li>
                    <li>نوع برد الکترونیکی کمپرسور : <strong class="text-black">دور ثابت</strong></li>
                    <li>ظرفیت سرمایش-گرمایش کولر :<strong class="text-black">2400</strong></li>
                    <li>تعداد پنل : <strong class="text-black">یک عدد</strong></li>
                    <li>نوع آب و هوای سازگار : <strong class="text-black">معتدل و گرم</strong></li>
                </ul>

                <div class="py-2">
                    <a href="#" class="second-color-sp">مشاهده بیشتر</a> <i><img class="arrow-right" src="assets/img/arrow-right.svg" alt=""></i>
                </div>

            </div>
            <div class="col-12 d-sm-block d-flex justify-content-between d-md-none position-fixed bottom-0 end-0 z-2 bg-white py-3 sticky-part-sm rounded-3">
                <h4 class="d-inline-block m-0 align-self-center">۱۹,۸۰۰,۷۶۰ <span class="second-color-sp">تومان</span></h4>
                <button class="btn add-button">افزودن به سبد خرید</button>

            </div>
        </div>
        <hr>
        <!-- trust -->
        <div class="row py-2 justify-content-around">
            <div class="col-3 text-center"><img class="img-fluid trust-icons" src="<?= get_template_directory_uri() . '/assets/img/24-7_icon 1.png' ?>" alt=""><span class="text-colors d-none d-md-inline">۲۴ ساعته، ۷ روز هفته</span></div>
            <div class="col-3 text-center"><img class="img-fluid trust-icons" src="<?= get_template_directory_uri() . '/assets/img/پرداخت-در-محل 1.png' ?>" alt=""><span class="text-colors d-none d-md-inline">امکان پرداخت در محل</span></div>
            <div class="col-3 text-center"><img class="img-fluid trust-icons" src="<?= get_template_directory_uri() . '/assets/img/box.png' ?>" alt=""><span class="text-colors d-none d-md-inline">هفت روز ضمانت بازگشت کالا</span></div>
            <div class="col-3 text-center"><img class="img-fluid trust-icons" src="<?= get_template_directory_uri() . '/assets/img/garanti.png' ?>" alt=""><span class="text-colors d-none d-md-inline">ضمانت اصل بودن کالا</span></div>

        </div>
        <hr>

        <!-- part-two -->


        <div class="row px-5 part-two">

            <div class="row border border-bottom-0 px-5 py-4 d-flex justify-content-between">
                <div class="col-1">
                    <div class="same-products">کالاهای مشابه</div>
                </div>
                <div class="col-1"><img src="assets/img/arrow-right.svg" class="img-fluid arrow-right float-start" alt=""></div>
            </div>
            <div class="row border border-top-0 pb-5">

                <div class="col-md-6 col-xl-3 col-12 mb-3 px-1 rounded-3">
                    <div class="card d-flex flex-row d-md-block rounded-3" style="background: #FFFBFA;">
                        <img src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" class="img-fluid spilet-photo-kala rounded-2 p-2" alt="...">
                        <div class="card-body rounded">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="assets/img/star.svg" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="<?= get_template_directory_uri() . '/assets/img/mdi_currency-rial.svg' ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 col-12 px-1 rounded-3">
                    <div class="card d-flex flex-row d-md-block rounded-3" style="background: #FFFBFA;">
                        <img src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" class="img-fluid spilet-photo-kala rounded-2 p-2" alt="...">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="assets/img/star.svg" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="?= get_template_directory_uri(  ) . '/assets/img/mdi_currency-rial.svg'?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 col-12 px-1 rounded-3">
                    <div class="card d-flex flex-row d-md-block rounded-3" style="background: #FFFBFA;">
                        <img src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" class="img-fluid spilet-photo-kala rounded-2 p-2" alt="...">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="assets/img/star.svg" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="?= get_template_directory_uri(  ) . '/assets/img/mdi_currency-rial.svg'?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3 col-12 px-1 rounded-3">
                    <div class="card d-flex flex-row d-md-block rounded-3" style="background: #FFFBFA;">
                        <img src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" class="img-fluid spilet-photo-kala rounded-2 p-2" alt="...">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="assets/img/star.svg" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="?= get_template_directory_uri(  ) . '/assets/img/mdi_currency-rial.svg'?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- part three -->

        <div class="container mt-5 py-5">
            <div class="row">
                <div class="border-bottom-red me-5 col-3 col-md-1"><img src="assets/img/attachment.svg" class="img-fluid attachment-icon" alt=""><span>معرفی</span></div>
            </div>
            <p class="p-4 lh-lg">
                کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲ از برند فلان با سابقه‌ای طولانی در زمینه تولید انواع کولرهای گازی، یکی از معتبرترین و محبوب‌ترین برندهای ایرانی در این صنعت است. این برند با تکیه بر دانش فنی و تکنولوژی روز دنیا، محصولاتی با‌کیفیت، اقتصادی و مطابق با استانداردهای جهانی را ارائه می‌دهد. کولر گازی 24 هزار ایران‌رادیاتور مدل ICA-24CH-A محصولی است که با توجه به ویژگی‌های فنی و طراحی خاص خود، یکی از پرفروش‌ترین و محبوب‌ترین محصولات این برند به‌شمار می‌رود. ای ...
            </p>
            <div class="col-md-1 col-6 me-5"><a href="#" class="second-color-sp">نمایش بیشتر<img src="/assets/img/arrow-right.svg" class="arrow-right me-3" alt=""></a></div>

        </div>

        <!-- part four -->

        <div class="container">

            <ul class="nav nav-tabs me-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><img src="/assets/img/edit.svg" class="taps-icon" alt=""> نقد و بررسی</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><img src="/assets/img/notepad.svg" class="taps-icon" alt=""> مشخصات</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><img src="/assets/img/smile-rectangle.svg" class="taps-icon" alt=""> دیدگاه</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <!-- naqd o barresi -->
                    <ul class="p-5 w-20 d-inline-block">
                        <li>مجهز به سیستم کنترل از راه دور، ترموستات و کنترل لمسی</li>
                        <li>مجهز به تایمر خواب و کلید دو قطبی</li>
                        <li>دارای بدنه مقاوم از جنس گالوانیزه</li>
                        <li>متراژ خنک کنندگی:۱۶۵ متر مربع</li>
                        <li>ابعاد: 1160x870x870 mm</li>
                        <li>دارای ضمانت نامه ۳۶ ماهه</li>
                        <li>برق مصرفی: تک فاز ۲۲۰ ولت</li>
                        <li>هوادهی: 7500 m3/hr</li>
                        <li>دارای موتور BLDC</li>
                        <li>ساخت ایران</li>
                        <li>کم مصرف</li>
                    </ul>
                    <img src="/assets/img/119739173 1.png" class="img-fluid w-25 ms-5 mt-5 align-self-center float-start d-none d-md-inline" alt="">
                </div>
                <!-- moshakhasat -->
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row px-5 pt-5 pb-4">
                        <div class="col-6 col-md-3 text-center details-card">
                            تعداد کمپرسور
                        </div>
                        <div class="col-5 col-md-3 text-center details-card me-2">
                            یک عدد
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col-6 col-md-3 text-center details-card">
                            تعداد کمپرسور
                        </div>
                        <div class="col-5 col-md-3 text-center details-card me-2">
                            یک عدد
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col-6 col-md-3 text-center details-card">
                            تعداد کمپرسور
                        </div>
                        <div class="col-5 col-md-3 text-center details-card me-2">
                            یک عدد
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col-6 col-md-3 text-center details-card">
                            تعداد کمپرسور
                        </div>
                        <div class="col-5 col-md-3 text-center details-card me-2">
                            یک عدد
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col-6 col-md-3 text-center details-card">
                            تعداد کمپرسور
                        </div>
                        <div class="col-5 col-md-3 text-center details-card me-2">
                            یک عدد
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- didgah -->
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="p-5">

                <h5>امتیاز کاربران به:</h5>
                <p class="pb-2">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</p>
                <p class="pb-2">۳.۱ از ۵</p>
                <small>
                    <img src="/assets/img/star.svg" class="star-icon" alt="">
                    <img src="/assets/img/star.svg" class="star-icon" alt="">
                    <img src="/assets/img/star.svg" class="star-icon" alt="">
                    <img src="/assets/img/star withe.svg" class="star-icon" alt="">
                    <img src="/assets/img/star withe.svg" class="star-icon" alt="">
                </small>
                <p class="text-colors text-opacity-25">ارزش خرید به نسبت قیمت</p>
                <div class="progress col-6 col-md-3" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-danger" style="width: 50%; border-radius: 25px;"></div>
                </div>
                <p class="text-colors text-opacity-25 pt-3">کیفیت ساخت</p>
                <div class="progress col-6 col-md-3" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-danger" style="width: 50%; border-radius: 25px;"></div>
                </div>
                <p class="pt-4 fw-bold">دیدگاه خود را درمورد این کالا بیان کنید.</p>
                <button class="btn btn-white border border-danger"><img src="/assets/img/notes-edit.svg" class="attachment-icon" alt=""> افزودن نظر جدید </button>
            </div>
        </div>
            </div>
        </div>
</section>
<?php get_footer() ?>