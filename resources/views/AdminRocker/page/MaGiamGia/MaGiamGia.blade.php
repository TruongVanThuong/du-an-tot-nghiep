@extends('AdminRocker.share.master')
@section('noi_dung')
<main id="app" v-cloak>

    <!-- thêm mã -->
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Thêm mã giảm giá</button>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <label class="block text-sm">
                    <label>Mã Giảm Giá</label>
                    <input v-model="them_ma_giam_gia.ma_giam_gia" type="text" class="form-control" required placeholder="Nhập Vào Mã giảm giá">
                    <div v-if="errors.ma_giam_gia" class="alert alert-warning">
                        @{{ errors.ma_giam_gia[0] }}
                    </div>
                </label>
                <label class="block text-sm">
                    <label>Số lượng</label>
                    <input v-model="them_ma_giam_gia.so_luong" type="text" class="form-control" required placeholder="Nhập Vào số lượng">
                    <div v-if="errors.so_luong" class="alert alert-warning">
                        @{{ errors.so_luong[0] }}
                    </div>
                </label>
                <label class="block text-sm">
                    <label>Mức giảm</label>
                    <input v-model="them_ma_giam_gia.tien_giam_gia" type="text" class="form-control" required placeholder="Nhập Vào số tiền giảm">
                    <div v-if="errors.tien_giam_gia" class="alert alert-warning">
                        @{{ errors.tien_giam_gia[0] }}
                    </div>
                </label>
                <label class="block text-sm">
                   
                    <button v-on:click="them_ma()" type="button" class="btn btn-primary">
                        Thêm Mã Giảm Giá
                    </button>
                </label>
            </div>
        </div>
    </div>
    <!-- danh sach -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h3 class=" text-lg font-semibold text-gray-600 dark:text-gray-300"> Danh Sách Các Mã giảm giá</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead clas="bg-primary">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Mã giảm giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Mức giảm</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(value, key) in data_ma_giam_gia">
                                <!-- <div v-if="value.is_delete !== 0"> -->

                                <td class="align-middle text-center">
                                    @{{ key + 1 }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @{{ value ? value.ma_giam_gia : 'Không có mã giảm giá' }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @{{ value ? value.so_luong : 'Không có số lượng' }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @{{ value ? value.tien_giam_gia : 'Không có số tiền giảm' }}
                                </td>
                                <td class="align-middle text-center text-xs">
                                    <button v-on:click="cap_nhat(value)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEdit">Edit</button>
                                    <button v-on:click="xoa_ma = value" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal">Xóa</button>
                                </td>

                                <!-- Modal cap nhat-->
                                <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="text-lg font-semibold text-gray-600 dark:text-gray-300" id="exampleModalLabel">Cập
                                                    Nhật Mã Giảm Giá</h3>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <label class="block text-sm">
                                                    <label>Mã Giảm Giá</label>
                                                    <input v-model="edit_ma_giam_gia.ma_giam_gia" type="text" class="form-control" placeholder="Nhập Vào  Mã giảm giá">
                                                    <div v-if="errors.ma_giam_gia" class="alert alert-warning">
                                                        @{{ errors.ma_giam_gia[0] }}
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="modal-footer mt-3">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button v-on:click="cap_nhat_ma_giam_gia()" type="button" class="btn btn-primary">
                                                    Cập Nhật Mã Giảm Giá
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
@section('js')
<script>
    new Vue({
        el: '#app',
        data: {
            them_ma_giam_gia: {},
            data_ma_giam_gia: [],
            edit_ma_giam_gia: {},
            errors: {},

        },
        created() {
            this.lay_ma_giam_gia();
        },
        methods: {
            lay_ma_giam_gia() {
                axios
                    .get('magiamgia/lay-ma-giam-gia')
                    .then((res) => {
                        this.data_ma_giam_gia = res.data.data_ma_giam_gia;
                    });
            },
            them_ma() {
                axios
                    .post('magiamgia/them-ma-giam-gia', this.them_ma_giam_gia)
                    .then((res) => {
                

                        if (res.data.status) {
                            toastr.success(res.data.message);
                            this.GetData();
                            
                            
                        } else {
                            toastr.error('Có lỗi không mong muốn! 1');
                        }
                    })
                    .catch((error) => {
                        if (error && error.response.data && error.response.data.errors) {
                            this.errors = error.response.data.errors;
                        } else {
                            toastr.error('Có lỗi không mong muốn! 2');
                        }
                    })
            },
        },
    });


    const delBtnEl = document.querySelectorAll("#btn_delete");
    delBtnEl.forEach(function(delBtn) {
        delBtn.addEventListener("click", function(event) {
            const message = confirm("Bạn có chắc muốn xoá dữ liệu này không?");
            if (message == false) {
                event.preventDefault();
            }
        });
    });
</script>
@endsection