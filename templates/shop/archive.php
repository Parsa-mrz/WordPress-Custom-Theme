<?php

/**
 * shop.archive view.
 * WordPress MVC view.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
?>
<?php get_header() ?>
<section id="section-one">
    <div class="container section-one pt-5 pb-5 px-0">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-3 d-none d-md-flex"></div>
                <div class="col-md-9 py-3 justify-content-between d-md-flex">
                    <div class="d-none d-md-flex"><a href="#"><small>هایسان/</small></a>
                        <a href="#"><small>لوازم سرماشی/</small></a>
                        <strong><a href="#">اسپیلت</a></strong>
                    </div>
                    <span class="float-start d-none d-md-inline"> نمایش 1-12 کالا از 24</span>


                </div>
            </div>
        </div> -->

        <!-- filter part -->

        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-3 d-none d-md-block">
                    <!-- <div class="border rounded-4 text-center py-4 mb-3 bg-white"><input type="checkbox">نمایش کالاهای موجود</div> -->
                    <div class=" text-center border rounded-4 py-3 bg-white">فیلتر بر اساس قیمت :
                        <hr>
                        <div class="d-flex text-center flex-column mx-5">
                            <label for="points" class="d-flex justify-content-end"><img src="assets/img/mdi_currency-rial.svg" class="rial-image" alt=""></label>
                            <input dir="ltr" type="range" id="points" name="points" min="0" max="15000000" style="accent-color:#F11F19 ;">
                            <div class="d-flex justify-content-between" dir="ltr">
                                <div>0</div>
                                <div>15.000.000</div>
                            </div>
                        </div>
                        <div class="mx-5 py-3">
                            <select class="form-select rounded-4 mt-4" aria-label="Default select example">
                                <option selected>برند</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <div><input type="checkbox" class="ms-2"><span>تخفیف دارها</span></div>
                            <div class="mt-3"><input type="checkbox" class="ms-2"><span>نمایش کالاهای موجود</span></div>
                        </div>
                        <div class="pt-4 mx-4 mt-4"><button class="btn background-color-main rounded-4 w-100"><img class="filter-search-icon" src="assets/img/filter.svg" alt=""> صافی</button></div>

                    </div>

                </div>

                <!-- product part -->

                <div class="col-12 col-md-9 border rounded-4 p-3 px-5 bg-white color-in-sm">
                    <div class="d-none d-md-inline"><i><img class="filter-icon" src="assets/img/filter-search.svg" alt=""></i><span>مرتب سازی بر اساس : </span></div>
                    <div class="row d-flex d-md-none align-items-center">
                        <div class="col-5"><img src="assets/img/filter-search red.svg" class="filter-icon" alt="">

                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                فیلتر
                            </button>

                            <!-- Modal -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"> </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class=" text-center border rounded-4 py-3 bg-white">فیلتر بر اساس قیمت :
                                                <hr>
                                                <div class="d-flex text-center flex-column mx-5">
                                                    <label for="points" class="d-flex justify-content-end"><img src="assets/img/mdi_currency-rial.svg" class="rial-image" alt=""></label>
                                                    <input dir="ltr" type="range" id="points" name="points" min="0" max="15000000" style="accent-color:#F11F19 ;">
                                                    <div class="d-flex justify-content-between" dir="ltr">
                                                        <div>0</div>
                                                        <div>15.000.000</div>
                                                    </div>
                                                </div>
                                                <div class="mx-5 py-3">
                                                    <select class="form-select rounded-4 mt-4" aria-label="Default select example">
                                                        <option selected>برند</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mt-4">
                                                    <div><input type="checkbox" class="ms-2"><span>تخفیف دارها</span></div>
                                                    <div class="mt-3"><input type="checkbox" class="ms-2"><span>نمایش کالاهای موجود</span></div>
                                                </div>
                                                <div class="pt-4 mx-4 mt-4"><button class="btn background-color-main rounded-4 w-100"><img class="filter-search-icon" src="assets/img/filter.svg" alt=""> صافی</button></div>


                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-5 p-0">مرتب سازی براساس:</div>
                        <div class="col-1 p-0 btn-group" role="group">
                            <button type="checkbox" class="btn dropdown-toggle background-color-main" data-bs-toggle="dropdown" aria-expanded="false">
                                فیلتر
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">گران ترین</a></li>
                                <li><a class="dropdown-item" href="#">پربازدیدترین</a></li>
                                <li><a class="dropdown-item" href="#">محبوب ترین</a></li>
                                <li><a class="dropdown-item" href="#">جدیدترین</a></li>
                                <li><a class="dropdown-item" href="#">ارزان ترین</a></li>
                                <li><a class="dropdown-item" href="#">در دسترس</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="buttons d-none d-md-inline">

                        <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
                        <label class="btn background-color-main" for="option5">گران ترین</label>

                        <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off">
                        <label class="btn" for="option6">پربازدیدترین</label>

                        <input type="radio" class="btn-check" name="options-base" id="option7" autocomplete="off">
                        <label class="btn" for="option7">محبوب ترین</label>

                        <input type="radio" class="btn-check" name="options-base" id="option8" autocomplete="off">
                        <label class="btn" for="option8">جدیدترین</label>

                        <input type="radio" class="btn-check" name="options-base" id="option9" autocomplete="off">
                        <label class="btn" for="option9">ارزان ترین</label>

                        <input type="radio" class="btn-check" name="options-base" id="option10" autocomplete="off">
                        <label class="btn" for="option10">در دسترس</label>

                    </div>

                    <!-- <a href="#" class="btn btn-danger">گران ترین ها</a>
                        <a href="#" class="btn">پربازدیدترین</a>
                        <a href="#" class="btn">محبوب ترین</a>
                        <a href="#" class="btn">جدیدترین</a>
                        <a href="#" class="btn">ارزان ترین</a>
                        <a href="#" class="btn">در دسترس</a>  -->
                    <hr>

                    <!-- product -->

                    <div class="row justify-content-evenly g-4">

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards">
                            <img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly">
                                <a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small>
                                <img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="<?= get_template_directory_uri() . '/assets/img/mdi_currency-rial.svg' ?>" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-4 mx-3 text-center border rounded-4 p-0 product-cards"><img class="img-fluid spilet-photo" src="<?= get_template_directory_uri() . '/assets/img/119739173 1.png' ?>" alt="">
                            <div class="d-flex flex-column justify-content-evenly"><a href="#">اسپلیت کولر گازی ۲۴ هزار ایوولی مدل ۱۴-۲</a>
                                <div class="text-start ms-3"><small>2.5</small><img class="img-fluid star-icon" src="<?= get_template_directory_uri() . '/assets/img/star.svg' ?>" alt=""></div>
                                <div class="d-flex justify-content-between my-2 mx-2">
                                    <div class="background-color-main rounded p-1">2%</div>
                                    <div>28/000/000<img class="rial-image" src="assets/img/mdi_currency-rial.svg" alt=""></div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn rounded-2 ms-2">1</button>
                                <button type="button" class="btn rounded-2 ms-2">2</button>
                                <button type="button" class="btn rounded-2 ms-2"><span class="material-symbols-outlined">
                                        arrow_back_ios
                                    </span></button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>



<div class="container pb-5 d-none d-md-block">
    <div class="back-to-top-btn d-inline-block ">
        <a href="#nav" class="btn background-color-main py-0"><span class="material-symbols-outlined">
                navigate_before
            </span><span class="material-symbols-outlined">
                navigate_before
            </span><span class="material-symbols-outlined">
                navigate_before
            </span></a>
        <div class="mt-2 text-center">بازگشت به بالا</div>
    </div>

</div>
<?php get_footer() ?>