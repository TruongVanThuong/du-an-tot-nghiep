@extends('AdminRocker.share.master')
@section('noi_dung')

<div class="row" id="app" v-cloak>

  <div class="col-md-12 mb-3">
    <div class="modal-category">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Thêm Nhân Viên
      </button>
    </div>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h3> Danh Sách Nhân Viên</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table" class="table table-bordered">
            <thead clas="bg-primary">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên Tài Khoản</th>
                <th class="text-center">Email</th>
                <th class="text-center">Vai Trò</th>
                <th class="text-center">Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(taikhoan, key) in data_taikhoan">
                <th class="align-middle text-center">@{{ key + 1 }}</th>
                <td class="align-middle text-center">@{{ taikhoan.ten_tai_khoan }}</td>
                <td class="align-middle text-center">@{{ taikhoan.email }}</td>
                <td class="align-middle text-center">
                  <span :class="getMauPhanQuyen(taikhoan.loai_tai_khoan)">
                    @{{ getTenPhanQuyen(taikhoan.loai_tai_khoan) }}
                  </span>
                </td>
                <td class="align-middle text-center text-nowrap">
                  <!-- Button trigger modal -->
                  <button v-on:click="cap_nhat(taikhoan)" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalEidt"><i class="bx bx-edit"></i>
                  </button>
                  <button v-on:click="xoa = taikhoan" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#xoaModal"><i class="bx bx-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
            <!-- Modal them tai khoan-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Nhân Viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mt-3">
                      <label>Họ và tên</label>
                      <input v-model="add_user.ho_va_ten" type="text" class="form-control"
                        placeholder="Nhập vào Họ và tên">
                      <div v-if="errors.ho_va_ten" class="alert alert-warning">
                        @{{ errors.ho_va_ten[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Email</label>
                      <input v-model="add_user.email" type="email" class="form-control"
                        placeholder="Nhập vào email">
                      <div v-if="errors.email" class="alert alert-warning">
                        @{{ errors.email[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Số điện thoại</label>
                      <input v-model="add_user.so_dien_thoai" type="text" class="form-control"
                        placeholder="Nhập vào số điện thoại">
                      <div v-if="errors.so_dien_thoai" class="alert alert-warning">
                        @{{ errors.so_dien_thoai[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Địa chỉ</label>
                      <input v-model="add_user.dia_chi" type="text" class="form-control"
                        placeholder="Nhập vào địa chỉ">
                      <div v-if="errors.dia_chi" class="alert alert-warning">
                        @{{ errors.dia_chi[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Ngày sinh</label>
                      <input v-model="add_user.ngay_sinh" type="date" class="form-control"
                        placeholder="Nhập vào ngày sinh">
                      <div v-if="errors.ngay_sinh" class="alert alert-warning">
                        @{{ errors.ngay_sinh[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Mật khẩu</label>
                      <input v-model="add_user.password" type="password" class="form-control"
                        placeholder="Nhập vào mật khẩu">
                      <div v-if="errors.password" class="alert alert-warning">
                        @{{ errors.password[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Mật khẩu</label>
                      <input v-model="add_user.nhap_lai_password" type="password" class="form-control"
                        placeholder="Nhập lại mật khẩu">
                      <div v-if="errors.nhap_lai_password" class="alert alert-warning">
                        @{{ errors.nhap_lai_password[0] }}
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button v-on:click="them_nguoi_dung()" type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal cap nhat tai khoan-->
            <div class="modal fade" id="exampleModalEidt" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Nhân Viên</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mt-3">
                      <label>Họ và tên</label>
                      <input v-model="edit_user.ho_va_ten" type="text" class="form-control"
                        placeholder="Nhập vào Họ và tên">
                      <div v-if="errors.ho_va_ten" class="alert alert-warning">
                        @{{ errors.ho_va_ten[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Email</label>
                      <input v-model="edit_user.email" type="email" class="form-control"
                        placeholder="Nhập vào email">
                      <div v-if="errors.email" class="alert alert-warning">
                        @{{ errors.email[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Số điện thoại</label>
                      <input v-model="edit_user.so_dien_thoai" type="text" class="form-control"
                        placeholder="Nhập vào số điện thoại">
                      <div v-if="errors.so_dien_thoai" class="alert alert-warning">
                        @{{ errors.so_dien_thoai[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Địa chỉ</label>
                      <input v-model="edit_user.dia_chi" type="text" class="form-control"
                        placeholder="Nhập vào địa chỉ">
                      <div v-if="errors.dia_chi" class="alert alert-warning">
                        @{{ errors.dia_chi[0] }}
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <label>Ngày sinh</label>
                      <input v-model="edit_user.ngay_sinh" type="date" class="form-control"
                        placeholder="Nhập vào ngày sinh">
                      <div v-if="errors.ngay_sinh" class="alert alert-warning">
                        @{{ errors.ngay_sinh[0] }}
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button v-on:click="cap_nhat_nguoi_dung()" type="button" class="btn btn-primary">Save
                      changes</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- MODAL DELETE -->
            <div class="modal fade" id="xoaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác Nhận Xoá Dữ Liệu</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Bạn có chắc muốn xoá dữ liệu này không?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-danger" v-on:click="xoa_nguoi_dung()"
                      data-bs-dismiss="modal">Xoá</button>
                  </div>
                </div>
              </div>
            </div>

          </table>
        </div>
        <div></div>
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
      errors: {},
      errors: {},
      add_user: {},
      edit_user: {},
      xoa: {},
      data_taikhoan: [],
      data_phanquyen: [],
    },
    created() {
      this.GetData();
    },

    methods: {
      // hien thi danh sach tai khoan
      GetData() {
        axios
          .get('/admin/quan-ly-nhan-vien/du-lieu')
          .then((res) => {
            this.data_taikhoan = res.data.data_taikhoan;
            this.data_phanquyen = res.data.data_phanquyen;

          });
      },

      cap_nhat(taikhoan) {
        this.edit_user = taikhoan; // Tạo một bản sao của user để tránh ảnh hưởng trực tiếp đến dữ liệu người dùng
      },

      getTenPhanQuyen(rolePhanQuyen) {
        switch (rolePhanQuyen) {
          case 2:
            return 'Nhân Viên';
          case 3:
            return 'Quản trị Viên';
          default:
            return 'Không xác định';
        }
      },

      getMauPhanQuyen(rolePhanQuyen) {
        switch (rolePhanQuyen) {
          case 2:
            return 'btn btn-info'; 
          case 3:
            return 'btn btn-warning'; 
          default:
            return 'btn btn-muted'; 
        }
      },

      them_nguoi_dung() {
        axios
          .post('/admin/quan-ly-nhan-vien/them-nhan-vien', this.add_user)
          .then((res) => {
            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
              this.add_user = {};
              // Tắt modal xác nhận
              $('#exampleModal').modal('hide');
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
          .catch((error) => {
            if (error && error.response.data && error.response.data.errors) {
              this.errors = error.response.data.errors;
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      },

      cap_nhat_nguoi_dung() {
        axios
          .post('/admin/quan-ly-nhan-vien/cap-nhat-nhan-vien', this.edit_user)
          .then((res) => {
            if (res.data.status) {
              toastr.success(res.data.message);
              this.GetData();
              this.edit_user = {};
              // Tắt modal xác nhận
              $('#exampleModalEidt').modal('hide');
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

      xoa_nguoi_dung() {
        axios
          .post('/admin/quan-ly-nhan-vien/xoa-nhan-vien', this.xoa)
          .then((res) => {
            if (res.data.status) {
              const message = "Dữ liệu đã được xoá thành công!";
              toastr.success(message);
              this.GetData();
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      },
      format_date(taikhoan) {
        if (taikhoan) {
          return moment(String(taikhoan)).format('DD/MM/YYYY')
        }
      },

    }
  });
</script>


@endsection