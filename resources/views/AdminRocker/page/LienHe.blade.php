@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Danh sách liên hệ chờ xử lý
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Họ Và Tên</th>
                                <th class="text-center">Số Điện Thoại</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Tiêu Đề</th>
                                <th class="text-center">Nội Dung</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, key) in ds_lien_he">
                                <th>@{{ key + 1 }}</th>
                                <td>@{{ value.ho_va_ten }}</td>
                                <td>@{{ value.so_dien_thoai }}</td>
                                <td>@{{ value.email }}</td>
                                <td>@{{ value.tieu_de }}</td>
                                <td>@{{ value.noi_dung }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning">Chờ xử lý</button>
                                </td>
                                <td class="text-center">
                                    <button  v-on:click="xoa_lien_he = value" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn Có chắc muốn xóa không
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button v-on:click="kich_hoat_xoa_lien_he()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xóa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                ds_lien_he: [],
                xoa_lien_he:{},
            },
            created() {
                this.loadData();
                
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/lien-he/du-lieu')
                        .then((res) => {
                            this.ds_lien_he = res.data.du_lieu;
                        });
                },
                kich_hoat_xoa_lien_he() {
                    axios
                        .post('/admin/lien-he/xoa-lien-he', this.xoa_lien_he)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                                this.loadData();
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                },
            }
        });
    </script>
@endsection
