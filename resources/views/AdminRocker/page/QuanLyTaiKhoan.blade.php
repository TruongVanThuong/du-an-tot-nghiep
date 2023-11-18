@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="row" id="app">

  <div class="col-md-12 mb-3">
    <div class="modal-category">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Thêm Thành Viên
      </button>
    </div>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h3> Danh Sách Các Danh Mục</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table" class="table table-bordered">
            <thead clas="bg-primary">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên Tai Khoan</th>
                <th class="text-center">Email</th>
                <th class="text-center">Vai Tro</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(value, key) in data_taikhoan">
                <th class="align-middle text-center">@{{ key + 1 }}</th>
                <td class="align-middle text-center">@{{ value.ho_va_ten }}</td>
                <td class="align-middle text-center">@{{ value.email }}</td>
                <td class="align-middle text-center">@{{ getTenPhanQuyen(value.loai_tai_khoan) }}</td>
                <td class="align-middle text-center text-nowrap">
                  <!-- Button trigger modal -->
                  <a class="btn btn-primary trigger-modal" name="btn_edit" href="#" data-bs-toggle="modal"
                    data-bs-target="#ModalEdit"><i class="bx bx-edit"></i></a>
                  <a class="btn btn-danger" name="btn_delete" href="xoadanhmuc/"><i class="bx bx-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div></div>
      </div>
    </div>
  </div>

  <!-- Modal them tai khoan-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <form id="danhmucForm">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Thêm Thành Viên</h3>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group mt-3">
              <label>Tên tài khoản</label>
              <input type="text" class="form-control" v-model="add_user.ho_va_ten" placeholder="Nhập vào tên tài khoản">
              <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div>
            </div>
            <div class="form-group mt-3">
              <label>Email</label>
              <input type="email" class="form-control" v-model="add_user.email" placeholder="Nhập vào email">
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Số điện thoại</label>
              <input type="number" class="form-control" v-model="add_user.so_dien_thoai"
                placeholder="Nhập vào số điện thoại">
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Ngày sinh</label>
              <input type="date" class="form-control" v-model="add_user.ngay_sinh" placeholder="Nhập vào ngày sinh">
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Địa chỉ</label>
              <input type="text" class="form-control" v-model="add_user.dia_chi" placeholder="Nhập vào địa chỉ">
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Giới tính</label> <br>
              <select class="form-control" v-model="add_user.gioi_tinh">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
              </select>
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Loại tài khoản</label> <br>
              <select class="form-control" v-model="add_user.loai_tai_khoan">
                <option v-for="(value, key) in data_phanquyen" :value="value.role_phan_quyen">
                  @{{value.ten_phan_quyen}}
                </option>
              </select>
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
            <div class="form-group mt-3">
              <label>Mật khẩu</label>
              <input type="password" class="form-control" v-model="add_user.password" placeholder="Nhập vào mật khẩu">
              <!-- <div v-if="errors.ho_va_ten" class="text-danger">@{{ errors.ho_va_ten }}</div> -->
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
            <button type="submit" class="btn btn-submit btn-primary" v-on:click="them_tai_khoan()">Thêm Thành
              Viên</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal cap nhat-->
  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <form class="alert alert-secondary" enctype="multipart/form-data" >@csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Danh Mục</h5>
          </div>

          <div class="modal-body">
            <div class="form-group mt-3">
              <label>Tên Danh Mục</label>
              <input type="text" class="form-control" name="ten_danh_muc" placeholder="Nhập vào Tên Danh Mục" value=""
                required>
            </div>
          </div>

          <div class="modal-footer mt-3">
            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
@section('js')

<script>
  new Vue({
    el: '#app',
    data: {
      add_user: {
        // ho_va_ten: '',
        // email: '',
        // so_dien_thoai: '',
        // dia_chi: '',
        // ngay_sinh: '',
        // gioi_tinh: '',
        // loai_tai_khoan: '',
        // password: '',
      },
      errors: {
        ho_va_ten: '',
        email: '',
        so_dien_thoai: '',
        dia_chi: '',
        ngay_sinh: '',
        gioi_tinh: '',
        loai_tai_khoan: '',
        password: '',
      },
      data_taikhoan: [],
      data_phanquyen: [],
    },
    created() {
      this.GetData();
    },
    watch: {
      'add_user.ho_va_ten': function (newVal) {
        if (newVal) {
          this.errors.ho_va_ten = '';
        }
      },
      'add_user.email': function (newVal) {
        if (newVal) {
          this.errors.email = '';
        }
      },
      'add_user.password': function (newVal) {
        if (newVal) {
          this.errors.password = '';
        }
      },
      'add_user.loai_tai_khoan': function (newVal) {
        if (newVal) {
          this.errors.loai_tai_khoan = '';
        }
      },
      'add_user.so_dien_thoai': function (newVal) {
        if (newVal) {
          this.errors.so_dien_thoai = '';
        }
      },
      'add_user.dia_chi': function (newVal) {
        if (newVal) {
          this.errors.dia_chi = '';
        }
      },
      'add_user.ngay_sinh': function (newVal) {
        if (newVal) {
          this.errors.ngay_sinh = '';
        }
      },
      'add_user.gioi_tinh': function (newVal) {
        if (newVal) {
          this.errors.gioi_tinh = '';
        }
      }
    },
    methods: {
      // hien thi danh sach tai khoan
      GetData() {
        axios
          .get('/admin/quan-ly-tai-khoan/du-lieu')
          .then((res) => {
            this.data_taikhoan = res.data.data_taikhoan;
            this.data_phanquyen = res.data.data_phanquyen;

          });
      },
      getTenPhanQuyen(rolePhanQuyen) {
        switch (rolePhanQuyen) {
          case -1:
            return 'Vô Hiệu Hóa Tài Khoản';
          case 0:
            return 'Chưa Kích Hoạt';
          case 1:
            return 'Khách Hàng';
          case 2:
            return 'Nhân Viên';
          case 3:
            return 'Quản Trị Viên';
          default:
            return 'Không xác định';
        }
      },

      them_tai_khoan() {
        axios
          .post('/admin/quan-ly-tai-khoan/them-tai-khoan', this.add_user, 
          // {
          //   headers: {
          //       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          //   }
          // }
          )
          .then((res) => {
            this.add_user = {};
            console.log(this.add_user);
            // console.log(this.add_user);
            // toastr.success(response.data.message);
            // setTimeout(() => {
            //   window.location.href = "/admin/quan-ly-tai-khoan";
            // }, 1000)
          })
          .catch((error) => {
            // Xử lý lỗi
            if (error.response && error.response.data && error.response.data.errors) {
              // Xử lý lỗi validation
              this.errors = error.response.data.errors;
            } else {
              toastr.error('Có lỗi không mong muốn!');
            }
          })
      }
    }
  });
</script>


<script>
  const delBtnEl = document.querySelectorAll(".btn_delete");
  delBtnEl.forEach(function (delBtn) {
    delBtn.addEventListener("click", function (event) {
      const message = confirm("Bạn có chắc muốn xoá dữ liệu này không?");
      if (message == false) {
        event.preventDefault();
      }
    });
  });
</script>
@endsection