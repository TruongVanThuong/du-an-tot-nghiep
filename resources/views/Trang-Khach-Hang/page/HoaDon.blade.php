@extends('Trang-Khach-Hang.share.master')
@section('noi-dung')
    <main id="MainContent" class="content-for-layout" style="margin-bottom: 100px">
        <div class="cart-page mt-100">
            <div class="checkout-progress overflow-hidden text-center">
                <ol class="checkout-bar px-0"
                    style="display: flex; justify-content: center; align-items: center; list-style: none;">
                    <li class="progress-step step-done"><a href="cart.html">Giỏ hàng</a></li>
                    <li class="progress-step step-done"><a href="checkout.html">Thanh toán</a></li>
                    <li class="progress-step step-active"><a href="checkout.html">Hóa đơn</a></li>
                </ol>
            </div>

            <div class="container mt-100">

                <div class="cart-page-wrapper">
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
                                    </tr>
                                <tbody>
                                    <tr>

                                        <th class="align-middle text-center">{{ $hoa_don_moi->ho_va_ten }}</th>
                                        <th class="align-middle text-center">{{ $hoa_don_moi->so_dien_thoai }}</th>
                                        <th class="align-middle text-center">{{ $hoa_don_moi->dia_chi }}</th>
                                        <th class="align-middle text-center">
                                            {{ number_format($hoa_don_moi->tong_tien_tat_ca) }} ₫</th>
                                        <th class="align-middle text-center">
                                            @if ($hoa_don_moi->trang_thai_don == -1)
                                                <button class="btn btn-danger">Hủy đơn</button>
                                            @elseif($hoa_don_moi->trang_thai_don == 0)
                                                <button class="btn btn-info">Đang xử lý</button>
                                            @elseif($hoa_don_moi->trang_thai_don == 1)
                                                <button class="btn btn-success">Đang giao</button>
                                            @elseif($hoa_don_moi->trang_thai_don == 2)
                                                <button class="btn btn-success">Hoàn tất</button>
                                            @else
                                                <button class="btn btn-warning">Không xác định</button>
                                            @endif
                                        </th>
                                        <th class="align-middle text-center">
                                            @if ($hoa_don_moi->trang_thai_thanh_toan == 0)
                                                <button class="btn btn-danger">Chưa thanh toán</button>
                                            @else
                                                <button class="btn btn-success">Đã thanh toán</button>
                                            @endif
                                        </th>

                                    </tr>
                                </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        setTimeout(function() {
            window.location.href = '/'; // Thay thế '/your-target-page' bằng URL thực tế
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
@endsection
