@extends('Trang-Khach-Hang.share.master')
@section('noi-dung')
    @php
        $check = Auth::guard('khach_hang')->check();
        $user = Auth::guard('khach_hang')->user();
    @endphp
    <main id="MainContent" class="content-for-layout">
        <!-- slideshow start -->
        <div class="slideshow-section position-relative">
            <div class="slideshow-active activate-slider"
                data-slick='{
        "slidesToShow": 1, 
        "slidesToScroll": 1, 
        "dots": true,
        "arrows": true,
        "responsive": [
          {
            "breakpoint": 768,
            "settings": {
              "arrows": false
            }
          }
        ]
    }'>
                <div class="slide-item position-relative overlay">
                    <img class="slide-img d-none d-md-block" src="/assets_client/img/slideshow/t1.jpg" alt="slide-1">
                    <img class="slide-img d-md-none" src="/assets_client/img/slideshow/t1.jpg" alt="slide-1">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center justify-content-start">
                            <div class="content-box slide-content py-4">
                                <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Designing for
                                </p>
                                <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Innovative tools
                                </h2>
                                <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">Save upto
                                    56% instantly
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="collection-left-sidebar.html"
                                    data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item position-relative overlay">
                    <img class="slide-img d-none d-md-block" src="/assets_client/img/slideshow/t2.jpg" alt="slide-2">
                    <img class="slide-img d-md-none" src="/assets_client/img/slideshow/t2.jpg" alt="slide-2">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center justify-content-start">
                            <div class="content-box slide-content py-4">
                                <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Designing for
                                </p>
                                <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Innovative tools
                                </h2>
                                <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">Save upto
                                    56% instantly
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="collection-left-sidebar.html"
                                    data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item position-relative overlay">
                    <img class="slide-img d-none d-md-block" src="/assets_client/img/slideshow/t3.jpg" alt="slide-">
                    <img class="slide-img d-md-none" src="/assets_client/img/slideshow/t3.jpg" alt="slide-">
                    <div class="content-absolute content-slide">
                        <div class="container height-inherit d-flex align-items-center justify-content-start">
                            <div class="content-box slide-content py-4">
                                <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Designing for
                                </p>
                                <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">
                                    Innovative tools
                                </h2>
                                <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                                    data-animation="animate__animated animate__fadeInUp">Save upto
                                    56% instantly
                                </p>
                                <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                    href="collection-left-sidebar.html"
                                    data-animation="animate__animated animate__fadeInUp">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activate-arrows arrows-white"></div>
            <div class="activate-dots dots-white"></div>
        </div>
        <!-- slideshow end -->

        <!-- trusted badge start -->
        <div class="trusted-section mt-100 overflow-hidden">
            <div class="trusted-section-inner">
                <div class="container">
                    <div class="row justify-content-center trusted-row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-4 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted" src="/assets_client/img/trusted/4.png" alt="icon-1">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading text-white">Free Shipping & Return</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-3">On all order over $99.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-4 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted" src="/assets_client/img/trusted/5.png" alt="icon-2">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading text-white">Customer Support 24/7</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-3">Instant access to support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="trusted-badge bg-4 rounded">
                                <div class="trusted-icon">
                                    <img class="icon-trusted" src="/assets_client/img/trusted/6.png" alt="icon-3">
                                </div>
                                <div class="trusted-content">
                                    <h2 class="heading_18 trusted-heading text-white">100% Secure Payment</h2>
                                    <p class="text_16 trusted-subheading trusted-subheading-3">We ensure secure payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trusted badge end -->

        <!-- collection tab start -->
        <div class="collection-tab-section mt-100 overflow-hidden">
            <div class="collection-tab-inner">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="section-heading">Sản Phẩm yêu thích</h2>
                        @foreach ($danhMuc as $danhmuc)
                        {{$danhmuc->id}}
                        @endforeach
                    </div>
                    <div class="tab-list collection-tab-list">
                        <nav class="nav justify-content-center">
                            <a class="tab-link" href="#collection-tools" data-bs-toggle="tab">Nam</a>
                            <a class="tab-link" href="#collection-cutter" data-bs-toggle="tab">Nữ</a>
                            <a class="tab-link" href="#collection-saw" data-bs-toggle="tab">Trẻ Em</a>
                        </nav>
                    </div>
                    <div class="tab-content collection-tab-content">
                        <div id="collection-all" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/6.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/1.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">long
                                                    narrow strip</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1529</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/11.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/2.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/9.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/3.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$978</span>
                                                <span class="card-price-compare text-decoration-line-through">$1023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/16.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/4.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop
                                                    rivet gun</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1459</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/5.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1029</span>
                                                <span class="card-price-compare text-decoration-line-through">$1239</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/1.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/6.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">flexible
                                                    measuring tape</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1069</span>
                                                <span class="card-price-compare text-decoration-line-through">$1205</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/7.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Ferrino
                                                    Steel Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/32.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/8.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire
                                                    Cutter</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1102</span>
                                                <span class="card-price-compare text-decoration-line-through">$1509</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collection-tools" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/34.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/14.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">flexible
                                                    measuring tape</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1069</span>
                                                <span class="card-price-compare text-decoration-line-through">$1205</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/15.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Ferrino
                                                    Steel Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/36.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/16.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire
                                                    Cutter</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1102</span>
                                                <span class="card-price-compare text-decoration-line-through">$1509</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/3.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/9.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1529</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/19.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/10.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/31.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/11.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$978</span>
                                                <span class="card-price-compare text-decoration-line-through">$1023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/32.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/12.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop
                                                    rivet gun</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1459</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/13.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1029</span>
                                                <span class="card-price-compare text-decoration-line-through">$1239</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                                <a class="btn-secondary" href="#">VIEW ALL</a>
                            </div>
                        </div>
                        <div id="collection-cutter" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/30.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/20.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop
                                                    rivet gun</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1459</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/21.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1029</span>
                                                <span class="card-price-compare text-decoration-line-through">$1239</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/1.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/22.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">flexible
                                                    measuring tape</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1069</span>
                                                <span class="card-price-compare text-decoration-line-through">$1205</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/27.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/17.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">long
                                                    narrow strip</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1529</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/28.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/18.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/9.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/19.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$978</span>
                                                <span class="card-price-compare text-decoration-line-through">$1023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/23.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Ferrino
                                                    Steel Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/40.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/24.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire
                                                    Cutter</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1102</span>
                                                <span class="card-price-compare text-decoration-line-through">$1509</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                                <a class="btn-secondary" href="#">VIEW ALL</a>
                            </div>
                        </div>
                        <div id="collection-saw" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/32.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/38.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire
                                                    Cutter</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1102</span>
                                                <span class="card-price-compare text-decoration-line-through">$1509</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/6.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/25.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">long
                                                    narrow strip</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1529</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/16.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/28.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop
                                                    rivet gun</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1459</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/29.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1029</span>
                                                <span class="card-price-compare text-decoration-line-through">$1239</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/11.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/26.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/9.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/27.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$978</span>
                                                <span class="card-price-compare text-decoration-line-through">$1023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/1.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/40.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">flexible measuring tape</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1069</span>
                                                <span class="card-price-compare text-decoration-line-through">$1205</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="primary-img" src="/assets_client/img/products/tools/39.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a
                                                    href="collection-left-sidebar.html">Ferrino Steel Knife</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                                <a class="btn-secondary" href="#">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- collection tab end -->



        <!-- promotinal product start -->
        <div class="promotinal-product-section overlay-tools mt-100 overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-12 d-flex align-items-center">
                        <div class="promotinal-product-content" data-aos="fade-up" data-aos-duration="700">
                            <p class="heading_18 primary-color mb-3">Servicing & Repair</p>
                            <h2 class="heading_34 text-white mb-3">Electric car maintenance</h2>
                            <p class="text_16 text-white mb-3">Corporate clients and leisure travelers has been relying on
                                Groundlink for dependable, safe, and professional chauffeured car service in major cities
                                across
                                World. Indeed, it has been more than one decade and five years that Groundlink.</p>
                            <div class="view-all mt-4">
                                <a class="btn-secondary" href="collection-left-sidebar.html">SHOP TOOLS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 align-self-center">
                        <div class="promotinal-product-container position-relative" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="common-slider"
                                data-slick='{
                "slidesToShow": 3, 
                "slidesToScroll": 1,
                "dots": false,
                "arrows": true,
                "responsive": [
                  {
                    "breakpoint": 1281,
                    "settings": {
                      "slidesToShow": 2
                    }
                  },
                  {
                    "breakpoint": 602,
                    "settings": {
                      "slidesToShow": 1
                    }
                  }
                ]
            }'>
                                <div class="product-grid-slideshow">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/11.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/2.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid-slideshow">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/32.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/8.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire
                                                    Cutter</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1102</span>
                                                <span class="card-price-compare text-decoration-line-through">$1509</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid-slideshow">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/16.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/4.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop
                                                    rivet gun</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1459</span>
                                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid-slideshow">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img" src="/assets_client/img/products/tools/9.jpg"
                                                    alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/3.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood
                                                    Cutting Saw</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$978</span>
                                                <span class="card-price-compare text-decoration-line-through">$1023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid-slideshow">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="collection-left-sidebar.html">
                                                <img class="secondary-img"
                                                    src="/assets_client/img/products/tools/11.jpg" alt="product-img">
                                                <img class="primary-img" src="/assets_client/img/products/tools/2.jpg"
                                                    alt="product-img">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                                    data-bs-toggle="modal">QUICKVIEW</a>
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle
                                                    nose pliers</a></h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">$1259</span>
                                                <span class="card-price-compare text-decoration-line-through">$2259</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- promotinal product end -->
        <!-- latest blog start -->
        <div class="latest-blog-section mt-100 overflow-hidden">
            <div class="latest-blog-inner">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="section-heading">Latest blogs</h2>
                    </div>
                    <div class="article-card-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                                <div class="article-card">
                                    <a class="article-card-img-wrapper" href="article.html">
                                        <img src="/assets_client/img/blog/tools-1.jpg" alt="img"
                                            class="article-card-img rounded">
                                    </a>
                                    <p class="article-card-published text_12">30 July 2022</p>
                                    <h2 class="article-card-heading heading_18">
                                        <a class="heading_18" href="article.html">
                                            The fairycore trend is a 2022 fashion hit as fairies.
                                        </a>
                                    </h2>
                                    <a class="article-card-read-more text_14 link-underline" href="article.html">Read
                                        More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                                <div class="article-card">
                                    <a class="article-card-img-wrapper" href="article.html">
                                        <img src="/assets_client/img/blog/tools-2.jpg" alt="img"
                                            class="article-card-img rounded">
                                    </a>
                                    <p class="article-card-published text_12">30 July 2022</p>
                                    <h2 class="article-card-heading heading_18">
                                        <a class="heading_18" href="article.html">
                                            TOP 10 most fahionable ladies bag on super sale!
                                        </a>
                                    </h2>
                                    <a class="article-card-read-more text_14 link-underline" href="article.html">Read
                                        More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="700">
                                <div class="article-card">
                                    <a class="article-card-img-wrapper" href="article.html">
                                        <img src="/assets_client/img/blog/tools-3.jpg" alt="img"
                                            class="article-card-img rounded">
                                    </a>
                                    <p class="article-card-published text_12">30 July 2022</p>
                                    <h2 class="article-card-heading heading_18">
                                        <a class="heading_18" href="article.html">
                                            Polish fashion, eco products and the national art seence.
                                        </a>
                                    </h2>
                                    <a class="article-card-read-more text_14 link-underline" href="article.html">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest blog end -->
        <!-- video start -->
        <div class="video-section mt-100 overflow-hidden">
            <div class="overlay-tools section-spacing"
                style="background: url('.//assets_client/img/video/video-tools.jpg') no-repeat fixed bottom center/cover">
                <div class="container video-container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="video-tools d-flex align-items-center">
                                <div class="video-button-area">
                                    <a class="video-button" href="#video-modal" data-bs-toggle="modal">
                                        <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.5 12.134C22.1667 12.5189 22.1667 13.4811 21.5 13.866L2 25.1244C1.33333 25.5093 0.499999 25.0281 0.499999 24.2583L0.5 1.74167C0.5 0.971867 1.33333 0.490743 2 0.875643L21.5 12.134Z"
                                                fill="#FEFEFE" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="video-tools d-flex align-items-center">
                                <div class="video-content">
                                    <h2 class="video-heading heading_48 text-white" data-aos="fade-up"
                                        data-aos-duration="700">
                                        Professional Car<br>Service Provider
                                    </h2>
                                    <a class="btn-primary mt-4" href="contact.html" data-aos="fade-up"
                                        data-aos-duration="1000">CONTACT
                                        US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" tabindex="-1" id="video-modal">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe height="600" src="https://www.youtube.com/embed/Js9kol9j0iU"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video end -->
    </main>
@endsection
