<?php

/**
 * contact-us view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<div class="p-2"></div>
<div class="container gray-back p-0 my-3">
    <p class="d-sm-block d-md-none pt-3 px-3">اعتماد مشتریان هایسان، اساس کار و مایه افتخار این برند است. و این امر تنها از طریق ارائه محصولات با کیفیت، ارتباط</p>
    <p class="p-5 d-none d-md-block">اعتماد مشتریان هایسان، اساس کار و مایه افتخار این برند است. و این امر تنها از طریق ارائه محصولات با کیفیت، ارتباط و پشتیبانی مستمر حاصل می‌شود. تیم هایسان همواره آماده پاسخگویی به سوالات و نظرات شماست و تا زمانی که اطمینان حاصل کند که شما بهترین اطلاعات ممکن را دریافت می‌کنید، همراهتان خواهد بود.اگر علاقه‌مند به کسب اطلاعات بیشتر در مورد خدمات ما هستید، کارشناسان هایسان به دقت سوالات و نظرات شما را بررسی می‌کنند و به شما کمک می‌کنند تا تصمیمات هوشمندانه‌ای بگیرید و آشپزخانه‌ای لوکس و رویایی برای منزلتان به ارمغان آورید. با ما در ارتباط باشید تا از تمامی محصولات با خبر شوید.</p>
    <div class="container-fluid red-back p-0">
        <p class="h5 text-center text-white py-5 m-0 d-none d-md-block">راه‌های ارتباطی با ما</p>
        <p class="h6 text-center text-white d-sm-block d-md-none py-3">راه های ارتباطی با ما</p>
        <div class="container white-back sec-one-con" style="box-shadow: none;">
            <div class="row justify-content-center py-4 contact-part">
                <div class="col-3 col-md-2 border rounded-4 border-danger py-5 text-center text-size-sm">
                    <img src="<?= get_template_directory_uri() . '/assets/img/call.svg' ?>" alt="">
                    <p dir="ltr" class="py-3 m-0">+98 935 562 5689</p>
                    <p dir="ltr">+017322265</p>
                </div>
                <div class="col-3 col-md-2 border mx-3 rounded-4 border-danger py-5 text-center text-size-sm">
                    <img src="<?= get_template_directory_uri() . '/assets/img/store.svg' ?>" alt="">
                    <p class="pt-3">گرگان، ناهارخوران، مجتمع اکسیر</p>
                </div>
                <div class="col-3 col-md-2 border rounded-4 border-danger py-5 text-center text-size-sm">
                    <img src="<?= get_template_directory_uri() . '/assets/img/mail-fast.svg' ?>" alt="">
                    <p class="py-3">HiiSun@gamil.com</p>
                </div>
                <div class="col-12 col-md-6 py-4">
                    <p class="m-0">ساعات کاری: شنبه تا پنجشنبه ۹:۳۰ الی ۲۱</p>
                    <p class="m-0 pb-4">جمعه و روزهای تعطیل ۱۰:۳۰ الی ۲۰:۳۰</p>
                    <p>در دیگر ساعات ‌پس از گرفتن پیغام شما عزیزان، در اولین ساعات روزکاری آتی با شما تماس می‌گیریم</p>
                </div>
            </div>

            <!-- input-group -->
            <div class="row white-back py-4" style="box-shadow: none;">
                <div class="col-10 col-md-5 pe-4">
                    <div class="input-group">
                        <div class="inputs-g">
                            <p class="d-block">نام</p>
                            <input type="text" class="form-control inputs-shape" aria-label="Username" aria-describedby="addon-wrapping">
                            <p class="pt-4">ایمیل</p>
                            <input type="email" class="form-control inputs-shape" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <p class="pt-4">شماره تلفن</p>
                            <input type="number" class="form-control inputs-shape" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <p class="d-none d-md-block pt-5">دسته بندی</p>
                        <p class="d-inline-flex gap-1 flex-wrap d-none d-md-block btn-group">
                            <a href="#" class="btn category-btns" role="button" data-bs-toggle="button">نقص فنی محصول</a>
                            <a href="#" class="btn category-btns" role="button" data-bs-toggle="button">ارجاع کالا</a>
                            <a href="#" class="btn category-btns" role="button" data-bs-toggle="button">پیگیری سفارشات</a>
                            <a href="#" class="btn category-btns" role="button" data-bs-toggle="button">راهنمایی</a>
                            <a href="#" class="btn category-btns" role="button" data-bs-toggle="button">متفرقه</a>
                        </p>
                    </div>
                </div>
                <div class="col-10 col-md-3 d-flex flex-column">
                    <p class="pt-2 me-3">متن درخواست</p>
                    <textarea class="form-control me-3 req-input" aria-label="With textarea"></textarea>
                    <button class="btn btn-danger d-none d-md-block align-self-end mt-auto">
                        ارسال درخواست
                    </button>
                </div>
                <div class="col-10 col-md-4 d-none d-lg-block px-0">
                    <img src="<?= get_template_directory_uri() . '/assets/img/andre-francois-mckenzie-sZ5CteK2r6E-unsplash 1.png' ?>" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-10 col-md-7 d-sm-block d-md-none text-center pb-2">
                    <p>دسته بندی</p>
                    <p class=" gap-1 flex-wrap btn-group">
                        <a href="#" class="btn text-black" role="button" data-bs-toggle="button">نقص فنی محصول</a>
                        <a href="#" class="btn text-black" role="button" data-bs-toggle="button">ارجاع کالا</a>
                        <a href="#" class="btn text-black" role="button" data-bs-toggle="button">پیگیری سفارشات</a>
                        <a href="#" class="btn text-black" role="button" data-bs-toggle="button">راهنمایی</a>
                    </p>
                    <button class="btn btn-danger pt-2">
                        ارسال درخواست
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>