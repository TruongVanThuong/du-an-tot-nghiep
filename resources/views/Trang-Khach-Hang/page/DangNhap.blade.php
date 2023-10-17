@extends('Trang-Khach-Hang.share.master')
@section('noi-dung')
    <main id="MainContent" class="content-for-layout" style="margin-bottom: 100px;">
        <div class="login-page mt-100">
            <div class="container">
                <form action="#" class="login-form common-form mx-auto">
                    <div class="section-header mb-3">
                        <h2 class="section-heading text-center">Đăng Nhập</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Email address</label>
                                <input type="email" />
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Mật Khẩu</label>
                                <input type="password" />
                            </fieldset>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="#" class="text_14 d-block">Quên Mật Khẩu?</a>
                            <button type="submit" class="btn-primary d-block mt-4 btn-signin">Đăng Nhập</button>
                            <a href="/dang-ky" class="btn-secondary mt-2 btn-signin">Tạo Tài Khoảng</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
@section('js')
@endsection
