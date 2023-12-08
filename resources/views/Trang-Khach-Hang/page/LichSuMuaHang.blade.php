@extends('Trang-Khach-Hang.share.master')
@section('noi-dung')
<!-- collection tab start -->
<div class="collection-tab-section mt-100 mb-100 overflow-hidden">
    <div class="collection-tab-inner">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-heading">Lịch Sử Mua Hàng</h2>
        </div>
        <div class="tab-list collection-tab-list mb-5">
          <nav class="nav justify-content-center">
            <a class="tab-link" href="#collection-tools" data-bs-toggle="tab">Đang xử lý</a>
            <a class="tab-link" href="#collection-cutter" data-bs-toggle="tab">Đang giao</a>
            <a class="tab-link" href="#collection-saw" data-bs-toggle="tab">Đơn hủy</a>
          </nav>
        </div>
        <div class="tab-content collection-tab-content">
        
          <div id="collection-tools" class="tab-pane fade show active">
            <div class="row">
                <div class="col-md-12">
                    <table id="table" class="table table-bordered">
                        <thead style="background: #ffae00">
                            <tr>
                                <th class="text-center">Họ và tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Tổng tiền tất cả</th>
                                <th class="text-center">Trạng thái đơn</th>
                                <th class="text-center">Trạng thái thanh toán</th>
                                <th class="text-center">Hủy đơn</th>
                            </tr>
                        <tbody>
                            @foreach ($ds_hoa_don as $key => $value)
                            @if ($value->trang_thai_don == 0)
                            <tr>
                                <th class="align-middle text-center">{{ $value->ho_va_ten }}</th>
                                <th class="align-middle text-center">{{ $value->so_dien_thoai }}</th>
                                <th class="align-middle text-center">{{ $value->dia_chi }}</th>
                                <th class="align-middle text-center">
                                    {{ number_format($value->tong_tien_tat_ca) }} ₫</th>
                                <th class="align-middle text-center">
                                    @if ($value->trang_thai_don == -1)
                                        <button class="btn btn-danger">Hủy đơn</button>
                                    @elseif($value->trang_thai_don == 0)
                                        <button class="btn btn-info">Đang xử lý</button>
                                    @elseif($value->trang_thai_don == 1)
                                        <button class="btn btn-success">Đang giao</button>
                                    @elseif($value->trang_thai_don == 2)
                                        <button class="btn btn-success">Hoàn tất</button>
                                    @else
                                        <button class="btn btn-warning">Không xác định</button>
                                    @endif
                                </th>
                                <th class="align-middle text-center">
                                    @if ($value->trang_thai_thanh_toan == 0)
                                        <button class="btn btn-danger">Chưa thanh toán</button>
                                    @else
                                        <button class="btn btn-success">Đã thanh toán</button>
                                    @endif
                                </th>
                                <th  class="align-middle text-center">
                                    <button class="btn btn-danger">Hủy đơn</button>
                                </th>
                            </tr>
                            @endif
                            
                            @endforeach
                            
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
           
          </div>
          <div id="collection-cutter" class="tab-pane fade">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                <div class="product-card">
                  <div class="product-card-img">
                    <a class="hover-switch" href="collection-left-sidebar.html">
                      <img class="secondary-img" src="assets/img/products/tools/30.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/20.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop rivet gun</a></h3>
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
                      <img class="primary-img" src="assets/img/products/tools/21.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/1.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/22.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">flexible measuring tape</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/27.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/17.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">long narrow strip</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/28.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/18.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle nose pliers</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/9.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/19.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood Cutting Saw</a></h3>
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
                      <img class="primary-img" src="assets/img/products/tools/23.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Ferrino Steel Knife</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/40.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/24.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire Cutter</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/32.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/38.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wire Cutter</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/6.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/25.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">long narrow strip</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/16.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/28.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">pop rivet gun</a></h3>
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
                      <img class="primary-img" src="assets/img/products/tools/29.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Stainless Swiss Knife</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/11.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/26.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Needle nose pliers</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/9.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/27.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Wood Cutting Saw</a></h3>
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
                      <img class="secondary-img" src="assets/img/products/tools/1.jpg" alt="product-img">
                      <img class="primary-img" src="assets/img/products/tools/40.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">flexible measuring tape</a></h3>
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
                      <img class="primary-img" src="assets/img/products/tools/39.jpg" alt="product-img">
                    </a>

                    <div class="product-card-action product-card-action-2">
                      <a href="#quickview-modal" class="quickview-btn btn-primary"
                        data-bs-toggle="modal">QUICKVIEW</a>
                      <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                    </div>

                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                      <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                          fill="black" />
                      </svg>
                    </a>
                  </div>
                  <div class="product-card-details text-center">
                    <h3 class="product-card-title"><a href="collection-left-sidebar.html">Ferrino Steel Knife</a></h3>
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
@endsection
@section('js')
@endsection
