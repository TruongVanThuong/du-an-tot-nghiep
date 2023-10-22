@extends('Trang-Khach-Hang.share.master')
@section('noi-dung')
    <main id="app" class="content-for-layout" style="margin-bottom: 100px;" v-cloak>
        <div class="login-page mt-100">
            <div class="container">
                <div class="login-form common-form mx-auto">
                    <div class="section-header mb-3">
                        <h2 class="section-heading text-center">Đăng Nhập</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Email address</label>
                                <input v-model="dang_nhap.email" type="email" />
                                <div v-if="errors.email" class="alert alert-warning">@{{ errors.email[0] }}</div>
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <fieldset>
                                <label class="label">Mật Khẩu</label>
                                <input v-model="dang_nhap.password" type="password" />
                                <div v-if="errors.password" class="alert alert-warning">@{{ errors.password[0] }}</div>
                            </fieldset>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="#" class="text_14 d-block">Quên Mật Khẩu?</a>
                            <button type="submit" v-on:click="xac_thuc_dang_nhap()"
                                class="btn-primary d-block mt-4 btn-signin">Đăng Nhập</button>
                            <a href="/dang-ky" class="btn-secondary mt-2 btn-signin">Tạo Tài Khoảng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        new Vue({
            el: "#app",
            data: {
                dang_nhap: {},
                errors: {},
            },
            methods: {
                xac_thuc_dang_nhap() {
                    // console.log(this.dang_nhap);
                    axios
                        .post('/xac-thuc-dang-nhap', this.dang_nhap)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                                this.dang_nhap = {};
                            } else {
                                toastr.warning(res.data.message);
                            }
                        })
                        .catch((error) => {
                            if (error.response && error.response.data && error.response.data.errors) {
                                this.errors = error.response.data.errors;
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                },
            }
        });
    </script>
@endsection
