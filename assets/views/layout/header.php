<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= the_title() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/raw/css/style.css' ?>" />
    <!-- added for navbar start-->
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div class="container-fluid" style="background-color: #dfd3c8">
        <div class="row my-container">
            <div class="col-2">
                <img src="<?= get_template_directory_uri() . '/assets/img/MainLogoPng.png' ?>" alt="..." srcset="" class="hp-img" />
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="input-container">
                    <div class="input-fd">
                        <input type="search" name="" placeholder="جستجوی محصولات..." id="" />
                    </div>
                    <div class="input-sd">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11 20C15.9706 20 20 15.9706 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.9299 20.6898C19.4599 22.2898 20.6699 22.4498 21.5999 21.0498C22.4499 19.7698 21.8899 18.7198 20.3499 18.7198C19.2099 18.7098 18.5699 19.5998 18.9299 20.6898Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <!-- container -->
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <!-- right -->
                    <div class="gap-2 header-userinfo">
                        <span>سبد خرید خالی می‌باشد</span>
                        <button type="button" class="btn position-relative rounded-circle border" style="background-color: aliceblue; padding: 15px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001" stroke="#F11F19" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 22H15C19.02 22 19.74 20.39 19.95 18.43L20.7 12.43C20.97 9.99 20.27 8 16 8H8C3.73 8 3.03 9.99 3.3 12.43L4.05 18.43C4.26 20.39 4.98 22 9 22Z" stroke="#F11F19" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.4955 12H15.5045" stroke="#F11F19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.49451 12H8.50349" stroke="#F11F19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                22
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                    </div>
                    <!-- left -->
                    <div class="rounded-circle hp-header-divider">&nbsp;</div>
                    <div class="gap-2 header-userinfo">
                        <button type="button" class="btn position-relative rounded-circle border profile-icon" id="profilepic"></button>
                        <span>نازنین پرماه</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top of navbar finished -->

    <!-- navbar started -->
    <nav class="navbar navbar-expand-custom navbar-mainbg p-0" dir="ltr">
        <a class="navbar-brand navbar-logo" href="#">درباره هایسان</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item text-center">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> تماس با ما </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M22.47 18.33C22.47 18.69 22.39 19.06 22.22 19.42C22.05 19.78 21.83 20.12 21.54 20.44C21.05 20.98 20.51 21.37 19.9 21.62C19.3 21.87 18.65 22 17.95 22C16.93 22 15.84 21.76 14.69 21.27C13.54 20.78 12.39 20.12 11.25 19.29C10.1 18.45 9.01 17.52 7.97 16.49C6.94 15.45 6.01 14.36 5.18 13.22C4.36 12.08 3.7 10.94 3.22 9.81C2.74 8.67 2.5 7.58 2.5 6.54C2.5 5.86 2.62 5.21 2.86 4.61C3.1 4 3.48 3.44 4.01 2.94C4.65 2.31 5.35 2 6.09 2C6.37 2 6.65 2.06 6.9 2.18C7.16 2.3 7.39 2.48 7.57 2.74L9.89 6.01C10.07 6.26 10.2 6.49 10.29 6.71C10.38 6.92 10.43 7.13 10.43 7.32C10.43 7.56 10.36 7.8 10.22 8.03C10.09 8.26 9.9 8.5 9.66 8.74L8.9 9.53C8.79 9.64 8.74 9.77 8.74 9.93C8.74 10.01 8.75 10.08 8.77 10.16C8.8 10.24 8.83 10.3 8.85 10.36C9.03 10.69 9.34 11.12 9.78 11.64C10.23 12.16 10.71 12.69 11.23 13.22C11.77 13.75 12.29 14.24 12.82 14.69C13.34 15.13 13.77 15.43 14.11 15.61C14.16 15.63 14.22 15.66 14.29 15.69C14.37 15.72 14.45 15.73 14.54 15.73C14.71 15.73 14.84 15.67 14.95 15.56L15.71 14.81C15.96 14.56 16.2 14.37 16.43 14.25C16.66 14.11 16.89 14.04 17.14 14.04C17.33 14.04 17.53 14.08 17.75 14.17C17.97 14.26 18.2 14.39 18.45 14.56L21.76 16.91C22.02 17.09 22.2 17.3 22.31 17.55C22.41 17.8 22.47 18.05 22.47 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> وبلاگ </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M21.5 7V17C21.5 20 20 22 16.5 22H8.5C5 22 3.5 20 3.5 17V7C3.5 4 5 2 8.5 2H16.5C20 2 21.5 4 21.5 7Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 2V9.85999C16 10.3 15.48 10.52 15.16 10.23L12.84 8.09003C12.65 7.91003 12.35 7.91003 12.16 8.09003L9.84003 10.23C9.52003 10.52 9 10.3 9 9.85999V2H16Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.75 14H18" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.5 18H18" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> نمایندگی‌ها </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M2.5 22H22.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5 2C14.1 2.64 15.9 2.64 17.5 2V5C15.9 5.64 14.1 5.64 12.5 5V2Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5 5V8" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.5 8H7.5C5.5 8 4.5 9 4.5 11V22H20.5V11C20.5 9 19.5 8 17.5 8Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.08002 12H19.92" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.48999 12V22" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                            <path d="M12.49 12V22" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                            <path d="M16.49 12V22" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> خدمات </span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M17.5 18.4301H13.5L9.04999 21.39C8.38999 21.83 7.5 21.3601 7.5 20.5601V18.4301C4.5 18.4301 2.5 16.4301 2.5 13.4301V7.42999C2.5 4.42999 4.5 2.42999 7.5 2.42999H17.5C20.5 2.42999 22.5 4.42999 22.5 7.42999V13.4301C22.5 16.4301 20.5 18.4301 17.5 18.4301Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5 11.36V11.15C12.5 10.47 12.92 10.11 13.34 9.82001C13.75 9.54001 14.16 9.18002 14.16 8.52002C14.16 7.60002 13.42 6.85999 12.5 6.85999C11.58 6.85999 10.84 7.60002 10.84 8.52002" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.4955 13.75H12.5045" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> محصولات </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M3.51001 11.22V15.71C3.51001 20.2 5.31001 22 9.80001 22H15.19C19.68 22 21.48 20.2 21.48 15.71V11.22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5 12C14.33 12 15.68 10.51 15.5 8.68L14.84 2H10.17L9.49999 8.68C9.31999 10.51 10.67 12 12.5 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.81 12C20.83 12 22.31 10.36 22.11 8.35L21.83 5.6C21.47 3 20.47 2 17.85 2H14.8L15.5 9.01C15.67 10.66 17.16 12 18.81 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.14 12C7.79 12 9.28 10.66 9.44 9.01L9.66 6.8L10.14 2H7.09C4.47001 2 3.47 3 3.11 5.6L2.84 8.35C2.64 10.36 4.12 12 6.14 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5 17C10.83 17 10 17.83 10 19.5V22H15V19.5C15 17.83 14.17 17 12.5 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item text-center active">
                    <a class="nav-link nav-link-custome" href="javascript:void(0);">
                        <span> صفحه اصلی </span>
                        <div>
                            <!-- black -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M12.5 18V15" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.57 2.82L3.64002 8.37C2.86002 8.99 2.36002 10.3 2.53002 11.28L3.86002 19.24C4.10002 20.66 5.46002 21.81 6.90002 21.81H18.1C19.53 21.81 20.9 20.65 21.14 19.24L22.47 11.28C22.63 10.3 22.13 8.99 21.36 8.37L14.43 2.83C13.36 1.97 11.63 1.97 10.57 2.82Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <!-- red icon -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                  <path d="M12.5 18V15" stroke="#F11F19" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.57 2.82L3.64002 8.37C2.86002 8.99 2.36002 10.3 2.53002 11.28L3.86002 19.24C4.10002 20.66 5.46002 21.81 6.90002 21.81H18.1C19.53 21.81 20.9 20.65 21.14 19.24L22.47 11.28C22.63 10.3 22.13 8.99 21.36 8.37L14.43 2.83C13.36 1.97 11.63 1.97 10.57 2.82Z" stroke="#F11F19" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> -->
                        </div>
                    </a>
                </li>
            </ul>
            <div class="gap-2 header-userinfo d-hidd-desk">
                <button type="button" class="btn position-relative rounded-circle border profile-icon" id="profilepic"></button>
                <span>نازنین پرماه</span>
            </div>
        </div>
    </nav>
    <!-- navbar finished -->