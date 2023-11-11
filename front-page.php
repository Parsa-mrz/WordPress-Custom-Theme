<?php get_header(); ?>
<!-- cards section start -->
<main class="container-fluid" style="background: #dfd3c8">
    <!-- fist carousel -->
    <div class="row py-3 px-3 p-0-resp">
        <div id="carouselExampleCaptions" class="carousel slide p-0-resp" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= get_template_directory_uri() . '/assets/img/firstcarouselimage.png' ?>" class="d-block w-100 carousel-imgs" style="border-radius: 40px" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>
                            Some representative placeholder content for the first slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/firstcarouselimage.png' ?>" class="d-block w-100 carousel-imgs" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Some representative placeholder content for the second slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= get_template_directory_uri() . '/assets/img/firstcarouselimage.png' ?>" class="d-block w-100 carousel-imgs" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>
                            Some representative placeholder content for the third slide.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev carousel-btns carousel-btn-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next carousel-btns" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- first carousel end -->

    <div class="row text-center justify-content-center">
        <div class="col mx-2 my-2 d-flex justify-content-center align-items-center flex-column hp-cards">
            <div class="hp-cards-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="111" viewBox="0 0 43 111" fill="none">
                    <g clip-path="url(#clip0_1883_3746)">
                        <path d="M14.968 69.2922C14.9573 69.2395 14.9416 69.1876 14.9211 69.1374C14.9005 69.088 14.8749 69.0402 14.8453 68.9957C14.8156 68.9504 14.781 68.9084 14.7432 68.8705C14.7053 68.8327 14.6633 68.7981 14.618 68.7684C14.5735 68.7388 14.5257 68.7132 14.4755 68.6926C14.4261 68.6721 14.3742 68.6556 14.3215 68.6457C14.2152 68.6243 14.1057 68.6243 14.0003 68.6457C13.9475 68.6556 13.8957 68.6721 13.8454 68.6926C13.796 68.7132 13.7482 68.7388 13.7038 68.7684C13.6585 68.7981 13.6165 68.8327 13.5786 68.8705C13.5407 68.9084 13.5061 68.9504 13.4764 68.9957C13.446 69.0402 13.4213 69.088 13.4007 69.1374C13.3801 69.1876 13.3636 69.2395 13.3537 69.2922C13.343 69.3449 13.3372 69.3993 13.3372 69.4528C13.3372 69.5064 13.343 69.5607 13.3537 69.6134C13.3636 69.6662 13.3801 69.718 13.4007 69.7675C13.4213 69.8177 13.446 69.8655 13.4764 69.9099C13.5061 69.9552 13.5407 69.9972 13.5786 70.0351C13.6165 70.073 13.6585 70.1076 13.7038 70.1373C13.7482 70.167 13.796 70.1925 13.8454 70.2131C13.8957 70.2337 13.9475 70.2502 14.0003 70.2601C14.053 70.2708 14.1073 70.2765 14.1609 70.2765C14.2144 70.2765 14.2688 70.2708 14.3215 70.2601C14.3742 70.2502 14.4261 70.2337 14.4755 70.2131C14.5257 70.1925 14.5735 70.1669 14.618 70.1373C14.6633 70.1076 14.7053 70.073 14.7432 70.0351C14.781 69.9972 14.8156 69.9552 14.8453 69.9099C14.8749 69.8655 14.9005 69.8177 14.9211 69.7675C14.9416 69.718 14.9573 69.6662 14.968 69.6134C14.9787 69.5607 14.9845 69.5064 14.9845 69.4528C14.9845 69.3993 14.9787 69.3449 14.968 69.2922Z" fill="white" />
                        <path d="M38.6418 69.5532C38.6385 69.545 38.6352 69.5369 38.6318 69.5288C37.8737 67.755 36.0959 67.0994 33.9919 67.818L28.254 69.4047C27.9222 68.4001 27.0947 67.5452 25.9247 67.111C25.9174 67.1084 25.9102 67.1057 25.9029 67.1032L19.5956 64.9625C19.0706 64.2839 17.4262 62.5476 14.3473 62.5476C12.1956 62.5476 10.2921 64.0237 9.20315 65.6326H1.57981C1.12493 65.6326 0.756195 66.0013 0.756195 66.4562V76.8401C0.756195 77.2949 1.12493 77.6637 1.57981 77.6637H6.47675C6.93163 77.6637 7.30037 77.2949 7.30037 76.8401V76.129H9.59684C10.0517 76.129 10.4205 75.7602 10.4205 75.3053V75.0683C11.7592 75.1851 12.1995 75.439 13.4289 76.148C14.3744 76.6932 15.8035 77.5172 18.377 78.6743C18.3889 78.6797 18.401 78.6848 18.4131 78.6896C18.907 78.8838 19.8725 79.1891 21.0629 79.1891C21.8915 79.1891 22.8291 79.0411 23.7916 78.6048L36.4745 74.0637C36.4971 74.0557 36.5193 74.0466 36.541 74.0366C37.7532 73.4789 39.5594 71.9072 38.6418 69.5532ZM5.65314 76.0164H2.40342V67.2797H5.65314V76.0164ZM8.77323 74.4816H7.30037V67.2797H8.77323V74.4816ZM35.8829 72.5258L23.2057 77.0648C23.1946 77.0688 23.1795 77.0747 23.1686 77.0792C23.1574 77.0837 23.1463 77.0885 23.1354 77.0935C21.3698 77.9049 19.6915 77.4191 19.0338 77.1634C16.548 76.0449 15.2212 75.2798 14.2518 74.7208C12.9041 73.9437 12.2546 73.5691 10.4205 73.4176V66.7841C11.2012 65.5045 12.7151 64.1947 14.3474 64.1947C17.1465 64.1947 18.3326 66.0153 18.3792 66.0888C18.4797 66.2524 18.6343 66.3757 18.8161 66.4374L25.3618 68.659C26.4072 69.0513 26.9596 69.9466 26.7057 70.8394C26.5885 71.2517 26.3177 71.5937 25.9433 71.8023C25.5721 72.0091 25.143 72.0602 24.734 71.9471L17.355 69.6087C16.9211 69.4712 16.4584 69.7114 16.3211 70.145C16.1836 70.5786 16.4238 71.0415 16.8574 71.179L24.2492 73.5214C24.257 73.5239 24.2649 73.5263 24.2728 73.5285C24.5679 73.6124 24.8683 73.6539 25.167 73.6539C25.7137 73.6539 26.2544 73.5146 26.7451 73.2412C27.5039 72.8184 28.0526 72.1255 28.2901 71.2899C28.309 71.2232 28.3258 71.1565 28.3404 71.0898L34.5244 69.3767C35.4175 69.0716 36.5899 68.9616 37.1119 70.1639C37.6522 71.5753 36.2479 72.3517 35.8829 72.5258Z" fill="white" />
                        <path d="M30.3311 47.855C30.3204 47.8023 30.3048 47.7504 30.2833 47.7001C30.2627 47.6507 30.238 47.603 30.2076 47.5585C30.1779 47.5132 30.1433 47.4712 30.1054 47.4333C30.0676 47.3954 30.0255 47.3608 29.9802 47.3312C29.9358 47.3015 29.888 47.276 29.8386 47.2554C29.7883 47.2348 29.7365 47.2183 29.6846 47.2084C29.5783 47.187 29.4688 47.187 29.3625 47.2084C29.3098 47.2183 29.2579 47.2348 29.2085 47.2554C29.1583 47.276 29.1105 47.3015 29.066 47.3312C29.0207 47.3608 28.9787 47.3954 28.9408 47.4333C28.903 47.4712 28.8684 47.5132 28.8387 47.5585C28.8091 47.603 28.7835 47.6507 28.7629 47.7001C28.7424 47.7504 28.7259 47.8023 28.716 47.855C28.7053 47.9077 28.6995 47.962 28.6995 48.0156C28.6995 48.0691 28.7053 48.1235 28.716 48.1762C28.7259 48.2289 28.7424 48.2808 28.7629 48.3302C28.7835 48.3804 28.8091 48.4282 28.8387 48.4727C28.8684 48.518 28.903 48.56 28.9408 48.5979C28.9787 48.6358 29.0207 48.6704 29.066 48.7C29.1105 48.7297 29.1583 48.7552 29.2085 48.7758C29.2579 48.7964 29.3098 48.812 29.3625 48.8227C29.4152 48.8334 29.4696 48.8392 29.5231 48.8392C29.5767 48.8392 29.631 48.8334 29.6846 48.8227C29.7365 48.812 29.7883 48.7964 29.8386 48.7758C29.888 48.7552 29.9358 48.7297 29.9802 48.7C30.0255 48.6704 30.0676 48.6358 30.1054 48.5979C30.1433 48.56 30.1779 48.518 30.2076 48.4727C30.238 48.4282 30.2627 48.3804 30.2833 48.3302C30.3048 48.2808 30.3204 48.2289 30.3311 48.1762C30.3418 48.1235 30.3468 48.0691 30.3468 48.0156C30.3468 47.962 30.3418 47.9077 30.3311 47.855Z" fill="white" />
                        <path d="M42.1063 39.8096H37.2093C36.7544 39.8096 36.3857 40.1784 36.3857 40.6333V41.3444H34.0892C33.6343 41.3444 33.2656 41.7131 33.2656 42.168V42.405C31.9269 42.2881 31.4866 42.0343 30.2572 41.3253C29.3117 40.7801 27.8827 39.9561 25.3091 38.799C25.2972 38.7936 25.2852 38.7885 25.2729 38.7838C24.4352 38.4542 22.2397 37.8056 19.8948 38.8683L16.5806 40.055L13.787 37.2615C13.4653 36.9399 12.9438 36.9399 12.6222 37.2615L3.45064 46.433C3.15397 46.7297 3.09706 47.2442 3.45064 47.5978L19.1229 63.2701C19.3737 63.5209 19.9609 63.5968 20.2877 63.2701L28.661 54.8969C28.8787 54.9157 29.1046 54.9258 29.3387 54.9258C31.4905 54.9258 33.3939 53.4497 34.4827 51.8409H42.1063C42.5611 51.8409 42.9299 51.4722 42.9299 51.0173V40.6333C42.9299 40.1784 42.5611 39.8096 42.1063 39.8096ZM13.2045 39.0086L15.0817 40.8858C14.5237 41.2309 13.8785 41.4155 13.2045 41.4155C12.5304 41.4155 11.8853 41.231 11.3273 40.8858L13.2045 39.0086ZM7.07502 48.8926L5.19784 47.0153L7.07502 45.1382C7.42011 45.6962 7.60477 46.3413 7.60477 47.0153C7.60477 47.6894 7.4202 48.3345 7.07502 48.8926ZM19.7053 61.5228L17.8285 59.646C18.9744 58.9388 20.4361 58.9388 21.5821 59.646L19.7053 61.5228ZM22.7688 58.4595C20.9488 57.1393 18.4619 57.1393 16.6419 58.4595L8.2616 50.0791C8.90475 49.1945 9.25199 48.132 9.25199 47.0153C9.25199 45.8986 8.90484 44.8362 8.2616 43.9516L10.1408 42.0724C11.0254 42.7156 12.0878 43.0628 13.2046 43.0628C14.3213 43.0628 15.3838 42.7156 16.2683 42.0724L18.0497 43.8538C17.6653 43.9106 17.2905 44.0372 16.941 44.232C16.3506 44.561 15.8874 45.0536 15.599 45.6495C14.67 45.8216 13.8099 46.2714 13.1352 46.946C11.3047 48.7766 11.3047 51.755 13.1352 53.5855C14.0504 54.5007 15.2527 54.9584 16.455 54.9584C17.6572 54.9584 18.8595 54.5008 19.7748 53.5855C20.3702 52.9901 20.7874 52.2582 20.9964 51.4606L23.7772 52.4044C23.4641 53.8546 23.7848 55.3803 24.6497 56.5786L22.7688 58.4595ZM17.7614 50.3623C17.7686 50.365 17.7759 50.3676 17.7832 50.3701L19.4301 50.9291C19.3057 51.4904 19.0243 52.0064 18.61 52.4208C17.4217 53.6089 15.4882 53.6091 14.3001 52.4208C13.1118 51.2326 13.1118 49.2991 14.3001 48.1108C14.5867 47.824 14.9249 47.5999 15.2935 47.448C15.4455 48.7132 16.3565 49.841 17.7614 50.3623ZM25.8364 55.3918C25.5185 54.8737 25.3386 54.2825 25.3102 53.679C25.7047 53.9642 26.1868 54.2437 26.7627 54.4655L25.8364 55.3918ZM33.2655 50.6889C32.4849 51.9686 30.971 53.2784 29.3387 53.2784C29.0333 53.2784 28.7471 53.2567 28.4795 53.218C28.4785 53.2178 28.4774 53.2176 28.4763 53.2175C26.6976 52.9591 25.7409 51.9482 25.4255 51.5479C25.4087 51.5232 25.3371 51.4296 25.3265 51.414C25.2305 51.2425 25.0732 51.1047 24.8726 51.0365L18.3242 48.814C17.2792 48.4218 16.7268 47.527 16.98 46.6345C16.9802 46.6339 16.9803 46.6334 16.9805 46.6328C16.9808 46.6321 16.9809 46.6314 16.9811 46.6307C17.0988 46.2197 17.3691 45.8788 17.7427 45.6707C18.1138 45.4639 18.5428 45.4126 18.952 45.526L26.331 47.8643C26.7647 48.0019 27.2276 47.7616 27.3649 47.328C27.5023 46.8944 27.2622 46.4315 26.8286 46.294L20.96 44.4343L20.9087 44.3831C20.9082 44.3826 20.9077 44.382 20.9072 44.3815L17.8689 41.3432L20.4804 40.4081C20.4892 40.4049 20.5 40.4008 20.5088 40.3973C20.511 40.3964 20.5153 40.3947 20.5174 40.3938C20.5286 40.3893 20.5397 40.3845 20.5506 40.3795C22.3161 39.5681 23.9943 40.0538 24.6521 40.3096C27.138 41.4281 28.4649 42.1932 29.4343 42.7522C30.782 43.5294 31.4314 43.9039 33.2655 44.0554V50.6889ZM36.3857 50.1935H34.9128V42.9916H36.3857V50.1935ZM41.2826 50.1935H38.0329V41.4569H41.2826V50.1935Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1883_3746">
                            <rect width="41.7604" height="109.522" fill="white" transform="translate(0.963226 0.979248)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <span>ضمانت کالا</span>
            <p>ضمانت اصالت کالا</p>
        </div>
        <div class="col mx-2 my-2 d-flex justify-content-center align-items-center flex-column hp-cards">
            <div class="hp-cards-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="45" viewBox="0 0 40 45" fill="none">
                    <path d="M20.1681 0.769043C9.52375 0.769043 0.863831 9.31229 0.863831 19.8133C0.863831 20.977 0.863831 29.9793 0.863831 30.1395C0.863831 32.2397 2.59581 33.9483 4.72469 33.9483H6.233C6.76426 35.426 8.19475 36.4876 9.87251 36.4876C12.0014 36.4876 13.7334 34.7789 13.7334 32.6787V22.3525C13.7334 20.2523 12.0014 18.5437 9.87251 18.5437C8.19475 18.5437 6.76426 19.6052 6.233 21.0829H4.72469C4.27349 21.0829 3.84056 21.1603 3.43774 21.3013V19.8133C3.43774 10.7124 10.943 3.30827 20.1681 3.30827C29.3933 3.30827 36.8986 10.7124 36.8986 19.8133V21.3013C36.4957 21.1603 36.0628 21.0829 35.6116 21.0829H34.1033C33.572 19.6052 32.1415 18.5437 30.4638 18.5437C28.3349 18.5437 26.6029 20.2523 26.6029 22.3525V32.6787C26.6029 34.7789 28.3349 36.4876 30.4638 36.4876C30.8534 36.4876 31.2295 36.4298 31.5844 36.3234C31.103 37.8861 29.6291 39.0268 27.8899 39.0268H23.8077C23.2764 37.5491 21.8459 36.4876 20.1681 36.4876C18.0393 36.4876 16.3073 38.1962 16.3073 40.2964C16.3073 42.3966 18.0393 44.1053 20.1681 44.1053C21.8459 44.1053 23.2764 43.0437 23.8077 41.566H27.8899C31.438 41.566 34.3246 38.7183 34.3246 35.2179V33.9483H35.6116C37.7405 33.9483 39.4725 32.2397 39.4725 30.1395C39.4725 29.9817 39.4725 20.9761 39.4725 19.8133C39.4725 9.31229 30.8125 0.769043 20.1681 0.769043ZM8.58556 22.3525C8.58556 21.6524 9.16288 21.0829 9.87251 21.0829C10.5821 21.0829 11.1595 21.6524 11.1595 22.3525V32.6787C11.1595 33.3788 10.5821 33.9483 9.87251 33.9483C9.16288 33.9483 8.58556 33.3788 8.58556 32.6787V22.3525ZM4.72469 23.6221H6.01165V31.4091H4.72469C4.01507 31.4091 3.43774 30.8396 3.43774 30.1395V24.8917C3.43774 24.1917 4.01507 23.6221 4.72469 23.6221ZM20.1681 41.566C19.4585 41.566 18.8812 40.9965 18.8812 40.2964C18.8812 39.5963 19.4585 39.0268 20.1681 39.0268C20.8778 39.0268 21.4551 39.5963 21.4551 40.2964C21.4551 40.9965 20.8778 41.566 20.1681 41.566ZM31.7507 32.6787C31.7507 33.3788 31.1734 33.9483 30.4638 33.9483C29.7542 33.9483 29.1768 33.3788 29.1768 32.6787V22.3525C29.1768 21.6524 29.7542 21.0829 30.4638 21.0829C31.1734 21.0829 31.7507 21.6524 31.7507 22.3525V32.6787ZM36.8986 30.1395C36.8986 30.8396 36.3212 31.4091 35.6116 31.4091H34.3246V23.6221H35.6116C36.3212 23.6221 36.8986 24.1917 36.8986 24.8917V30.1395Z" fill="white" />
                </svg>
            </div>
            <span>خدمات پس از فروش</span>
            <p>آماده پاسخگویی به سوالات شما در بخش نصب</p>
        </div>
        <div class="col mx-2 my-2 d-flex justify-content-center align-items-center flex-column hp-cards">
            <div class="hp-cards-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 55 54" fill="none">
                    <path d="M53.6196 11.6077L32.8478 0.201723C32.5357 0.0304153 32.1573 0.0304153 31.8452 0.201723L24.0159 4.50069C23.8507 4.54423 23.6965 4.62724 23.5687 4.74646L11.0738 11.6077C10.7406 11.7904 10.5335 12.1404 10.5335 12.5208V26.3158C8.42567 26.975 6.49409 28.1375 4.88803 29.744C0.701772 33.9298 -0.365544 40.3142 2.23215 45.6304C2.48443 46.1472 3.10822 46.3616 3.62499 46.1089C4.14217 45.8562 4.3562 45.2325 4.10392 44.7157C1.89686 40.1986 2.80385 34.7741 6.36103 31.217C8.58559 28.9924 11.543 27.7672 14.6888 27.7672C17.8346 27.7672 20.792 28.9924 23.0165 31.217C25.2407 33.4411 26.4659 36.3985 26.4659 39.5443C26.4659 42.6901 25.2407 45.6475 23.0161 47.8721C19.4589 51.4292 14.0345 52.3362 9.5174 50.1292C9.00063 49.8765 8.37684 50.0909 8.12456 50.6077C7.87187 51.1249 8.08591 51.7487 8.60308 52.0009C10.5396 52.9474 12.6172 53.4072 14.6798 53.4072C18.2781 53.4068 21.8284 52.0062 24.4895 49.3451C25.7098 48.1248 26.6742 46.7169 27.3566 45.1865L31.8452 47.6511C32.0014 47.737 32.174 47.7797 32.3465 47.7797C32.519 47.7797 32.692 47.737 32.8478 47.6511L53.6196 36.2455C53.9528 36.0624 54.1599 35.7125 54.1599 35.3324V28.0931C54.1599 27.5178 53.6936 27.0515 53.1183 27.0515C52.5429 27.0515 52.0766 27.5178 52.0766 28.0931V34.716L33.3914 44.9761V24.5413L39.5581 21.155V26.5229C39.5581 26.8915 39.7526 27.2325 40.0696 27.4197C40.2332 27.5161 40.4163 27.5646 40.5998 27.5646C40.7723 27.5646 40.9452 27.5218 41.1019 27.4356L45.5531 24.9856C45.8859 24.8025 46.0922 24.453 46.0922 24.0733V17.5669L52.0766 14.2811V19.7601C52.0766 20.3355 52.5429 20.8018 53.1183 20.8018C53.6936 20.8018 54.1599 20.3355 54.1599 19.7601V12.5208C54.1599 12.1408 53.9528 11.7904 53.6196 11.6077ZM32.3465 2.30299L50.9539 12.5208L45.0843 15.7439L26.4769 5.5261L32.3465 2.30299ZM32.3465 22.7383L13.7391 12.5208L19.8239 9.17931L38.4318 19.3967L32.3465 22.7383ZM40.5957 18.2086L21.9883 7.99114L24.3125 6.71467L42.9204 16.9321L40.5957 18.2086ZM24.4895 29.744C21.8715 27.1259 18.3908 25.6843 14.6888 25.6843C13.9885 25.6843 13.2968 25.7359 12.6168 25.8373V14.2811L31.3085 24.5449V44.9798L28.0642 43.1983C28.3836 42.0224 28.5488 40.796 28.5488 39.5443C28.5488 35.8423 27.1072 32.3616 24.4895 29.744ZM44.0093 23.4577L41.6415 24.761V20.0112L44.0093 18.7111V23.4577Z" fill="white" />
                    <path d="M53.1186 22.8792C52.8447 22.8792 52.5758 22.9906 52.3821 23.1843C52.1884 23.378 52.0769 23.6466 52.0769 23.9208C52.0769 24.1947 52.1884 24.4632 52.3821 24.6569C52.5758 24.851 52.8447 24.9621 53.1186 24.9621C53.3924 24.9621 53.6614 24.851 53.8551 24.6569C54.0488 24.4632 54.1603 24.1947 54.1603 23.9208C54.1603 23.6466 54.0488 23.378 53.8551 23.1843C53.6614 22.9906 53.3924 22.8792 53.1186 22.8792Z" fill="white" />
                    <path d="M11.1857 40.5858C11.4522 40.5858 11.7192 40.4841 11.9222 40.281C12.3291 39.8741 12.3291 39.2145 11.9222 38.8076L11.2008 38.0858H17.3573C18.8506 38.0858 20.0656 39.3008 20.0656 40.7941C20.0656 42.2875 18.8506 43.5025 17.3573 43.5025H13.7093C13.134 43.5025 12.6677 43.9688 12.6677 44.5442C12.6677 45.1192 13.134 45.5855 13.7093 45.5855H17.3573C19.9993 45.5855 22.149 43.4362 22.149 40.7941C22.149 38.1521 19.9993 36.0028 17.3573 36.0028H11.2008L11.9222 35.281C12.3291 34.8741 12.3291 34.2145 11.9222 33.8076C11.5157 33.4011 10.8561 33.4011 10.4492 33.8076L7.94916 36.3076C7.54266 36.7145 7.54266 37.3741 7.94916 37.781L10.4492 40.2806C10.6526 40.4841 10.9192 40.5858 11.1857 40.5858Z" fill="white" />
                    <path d="M5.62314 49.6506C5.32691 49.6506 5.03272 49.5245 4.82723 49.2799L4.8252 49.2775C4.45491 48.8372 4.51188 48.1804 4.95215 47.8102C5.39242 47.4395 6.04958 47.4964 6.41986 47.9367C6.78974 48.3774 6.734 49.0353 6.29372 49.4056C6.098 49.57 5.85996 49.6506 5.62314 49.6506Z" fill="white" />
                </svg>
            </div>
            <span>قطعات با کیفیت و با دوام</span>
            <p>استفاده از قطعات با کیفیت با دوام بالا</p>
        </div>
    </div>
    <!-- cards section end -->
    <div class="row justify-content-center">
        <div class="hp-bigbanner">
            <div class="hp-bigbanner-card">
                <span>درباره هایسان</span>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                    ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
                <button>بیشتر بخوانید</button>
            </div>
        </div>
    </div>

    <!-- small banner of single products -->
    <div class="row text-center">
        <div class="col hp-single hp-single-pr">
            <span>دلت گرم، مثل گاز هایسان!</span>
        </div>
        <div class="col hp-single hp-single-pl">
            <span>آشپرخانه گرم، با هود هایسان.</span>
        </div>
    </div>
    <!-- small banner of single products end *-->

    <!-- favorite products start -->
    <div class="row text-center justify-content-center" style="background-color: #ffffff">
        <div class="hp-favpro-text">
            <span>محبوب‌ترین محصولات هایسان</span>
            <p></p>
        </div>
        <!-- seccond carousel start -->
        <div class="row">
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex justify-content-around">
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper container-sm d-flex justify-content-around">
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper container-sm d-flex justify-content-around">
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem">
                                <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- seccond carousel start -->
        </div>
    </div>
    <!-- blogs container start -->
    <div class="row hp-blogs-container my-5 p-4">
        <div class="d-flex justify-content-between my-3">
            <span class="blogs-htext">
                آخـرین مقالـات
                <span>هایسان</span>
            </span>
            <a href="#">
                مشاهده بیشتر
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M15.09 4.07992L8.57 10.5999C7.8 11.3699 7.8 12.6299 8.57 13.3999L15.09 19.9199" stroke="#F11F19" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <div class="row blogs-image-container justify-content-around m-auto">
            <div class="col position-relative blogs-cards-container p-0 mx-1">
                <img src="<?= get_template_directory_uri() . '/assets/img/blogimg.png' ?>" alt="" srcset="" class="position-absolute" />
                <div class="border position-absolute blogs-card-hover">
                    <button>۱۵ مهرماه</button>
                    <span>عنوان مقاله</span>
                </div>
            </div>
            <div class="col position-relative blogs-cards-container p-0 mx-1">
                <img src="<?= get_template_directory_uri() . '/assets/img/blogimg.png' ?>" alt="" srcset="" class="position-absolute" />
                <div class="border position-absolute blogs-card-hover">
                    <button>۱۵ مهرماه</button>
                    <span>عنوان مقاله</span>
                </div>
            </div>
            <div class="col position-relative blogs-cards-container p-0 mx-1">
                <img src="<?= get_template_directory_uri() . '/assets/img/blogimg.png' ?>" alt="" srcset="" class="position-absolute" />
                <div class="border position-absolute blogs-card-hover">
                    <button>۱۵ مهرماه</button>
                    <span>عنوان مقاله</span>
                </div>
            </div>

            <div class="col position-relative blogs-cards-container p-0 mx-1 d-r-n">
                <img src="<?= get_template_directory_uri() . '/assets/img/blogimg.png' ?>" alt="" srcset="" class="position-absolute" />
                <div class="border position-absolute blogs-card-hover">
                    <button>۱۵ مهرماه</button>
                    <span>عنوان مقاله</span>
                </div>
            </div>

        </div><!-- blogs container start -->


    </div>

    <!-- favorite products end * -->
    <div class="row text-center mt-3 client-logos-container">
        <div class="col client-logos d-flex justify-content-center align-items-center">
            <img src="<?= get_template_directory_uri()  . '/assets/img/hp-logo1.png' ?> " alt="" srcset="" />
        </div>

        <div class="col client-logos d-flex justify-content-center align-items-center">
            <img src="<?= get_template_directory_uri()  . '/assets/img/hp-logo1.png' ?>" alt="" srcset="" />
        </div>

        <div class="col client-logos d-flex justify-content-center align-items-center">
            <img src="<?= get_template_directory_uri()  . '/assets/img/hp-logo1.png' ?>" alt="" srcset="" />
        </div>

        <div class="col client-logos d-flex justify-content-center align-items-center">
            <img src="<?= get_template_directory_uri()  . '/assets/img/hp-logo1.png' ?>" alt="" srcset="" />
        </div>
    </div>
</main>
<?php get_footer(); ?>