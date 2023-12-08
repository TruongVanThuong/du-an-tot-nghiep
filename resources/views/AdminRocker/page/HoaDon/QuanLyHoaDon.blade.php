@extends('AdminRocker.share.master')
@section('noi_dung')

<div class="row" id="app" v-cloak>

  <div class="col-md-12 mb-3">
    <div class="modal-category">
      <!-- Button trigger modal -->
      <a href="/admin/hoa-don/them-hoa-don" class="btn btn-primary">
        Tạo hoá đơn
      </a>

      <!-- Modal them tai khoan-->
      <div class="modal fade" id="HoaDonModal" tabindex="-1" aria-labelledby="HoaDonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="HoaDonModalLabel">Tạo hoá đơn</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
              <div class="col-md-9 overflow">
                <div class="product-grid">
                  <div class="product-box" v-for="(sanpham, key) in data_sanpham">
                    <input type="checkbox" class="product-checkbox">
                    <img :src="'/img/' + sanpham.hinh_anh " alt="Sản Phẩm 1">
                    <h3>@{{ sanpham.ten_san_pham }}</h3>
                    <p>Loại sản phẩm : <span>@{{ sanpham.ten_loai }}</span></p>
                    <p>Danh mục : <span>@{{ sanpham.ten_danh_muc }}</span></p>
                    <p class="price">@{{ sanpham.gia_san_pham }}</p>
                  </div>
                </div>
              </div>
              <!-- --------------- -->
              <div class="col-md-3">
                <div class="form-group mt-3">
                  <label>Mã khách hàng</label>
                  <select v-model="add_hoadon.ho_va_ten" class="form-control">
                    <option value=""></option>
                  </select>
                  <div v-if="errors.ho_va_ten" class="alert alert-warning">
                    @{{ errors.ho_va_ten[0] }}
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label>Họ và tên</label>
                  <input v-model="add_hoadon.ho_va_ten" type="text" class="form-control"
                    placeholder="Nhập vào Họ và tên">
                  <div v-if="errors.ho_va_ten" class="alert alert-warning">
                    @{{ errors.ho_va_ten[0] }}
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label>Địa chỉ</label>
                  <input v-model="add_hoadon.ho_va_ten" type="text" class="form-control" placeholder="Nhập vào địa chỉ">
                  <div v-if="errors.ho_va_ten" class="alert alert-warning">
                    @{{ errors.ho_va_ten[0] }}
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label>Số điện thoại</label>
                  <input v-model="add_hoadon.ho_va_ten" type="text" class="form-control"
                    placeholder="Nhập vào số điện thoại">
                  <div v-if="errors.ho_va_ten" class="alert alert-warning">
                    @{{ errors.ho_va_ten[0] }}
                  </div>
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
    </div>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h3> Danh Sách Hoá Đơn</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table" class="table table-bordered">
            <thead clas="bg-primary">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Tên Khách Hàng</th>
                <th class="text-center">Số Điện Thoại</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">TT Đơn Hàng</th>
                <th class="text-center">TT Thanh Toán</th>
                <th class="text-center">Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(hoadon, key) in data_hoadon">
                <th class="align-middle text-center">@{{ key + 1 }}</th>
                <td class="align-middle text-center">@{{ hoadon.ho_va_ten }}</td>
                <td class="align-middle text-center">@{{ hoadon.so_dien_thoai }}</td>
                <td class="align-middle text-center">@{{ hoadon.dia_chi }}</td>
                <td class="align-middle text-center font-bold">
                  <button type="button" :class="(hoadon.trang_thai_don !== 0 ? 'btn btn-success' : ' btn btn-danger')">
                  @{{ getTTDonhang(hoadon.trang_thai_don) }}
                  </button>
                </td>
                <td class="align-middle text-center">
                  <button type="button" :class="(hoadon.trang_thai_thanh_toan !== 0 ? 'btn btn-success' : ' btn btn-danger')">
                    @{{ getTTThanhToan(hoadon.trang_thai_thanh_toan) }}
                  </button>
                </td>
                <td class="align-middle text-center text-nowrap">
                  <!-- Button trigger modal -->
                  <a :class="'btn btn-primary' + (hoadon.trang_thai_don !== 0 ? ' disabled-link' : '')"
                    :href="'{{ asset("admin/hoa-don/hoa-don-chi-tiet") }}/' + hoadon.id">
                    Sửa
                  </a>
                  <button v-on:click="setHoaDon(hoadon)" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#XemModal">Xem</i>
                  </button>
                </td>
              </tr>
            </tbody>

          </table>

          <!-- MODAL Xem hoa don chi tiet -->
          <div class="modal fade" id="XemModal" tabindex="-1" role="dialog" aria-labelledby="XemModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="XemModalLabel">Hoá đơn chi tiết</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="product-card">

                    <table class="table table-bordered">
                      <thead clas="bg-primary">
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Tên Sản Phẩm</th>
                          <th class="text-center">Hình Ảnh</th>
                          <th class="text-center">Giá Sản Phẩm</th>
                          <th class="text-center">Số Lượng</th>
                          <th class="text-center">Mã Sảnm Phẩm</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(hdct, key) in data_hdct" v-if="hdct.ma_hoa_don == hoa_don.id">
                          <td class="align-middle text-center">@{{ key + 1 }}</td>
                          <td class="align-middle text-center">@{{ hdct.ten_san_pham }}</td>
                          <td class="align-middle text-center">
                            <img class="secondary-img" width="100px" :src="'/img/' + hdct.hinh_anh"
                              alt="Hình ảnh sản phẩm">
                          </td>
                          <td class="align-middle text-center">@{{ hdct.gia_san_pham }}</td>
                          <td class="align-middle text-center">@{{ hdct.tong_so_luong }}</td>
                          <td class="align-middle text-center">@{{ hdct.ma_san_pham }}</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="row">
                      <div class="col-md-6">
                        <h5><span class="font-bold">Địa chỉ nhận hàng : </span> <span>@{{ hoa_don.dia_chi }}</span>
                        </h5>
                      </div>
                      <div class="col-md-6">
                        <h5 class="d-flex justify-content-end"> <span class="font-bold">Tổng tiền : </span> <span> @{{
                            hoa_don.tong_tien_tat_ca }} </span> vnd </h5>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- end modal xem hoa đơn -->

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
        add_hoadon: {},
        edit_user: {},
        xoa: {},
        data_hoadon: [],
        data_khachhang: [],
        data_hdct: [],
        hoa_don: {},
        data_sanpham: [],
      },
      created() {
        this.GetData();
      },

      methods: {
        // hien thi danh sach tai khoan
        GetData() {
          axios
            .get('/admin/hoa-don/du-lieu')
            .then((res) => {
              this.data_hoadon = res.data.data_hoadon;
              this.data_khachhang = res.data.data_khachhang;
              this.data_hdct = res.data.data_hdct;
              this.data_sanpham = res.data.data_sanpham;
            });
        },

        setHoaDon(hoadon) {
          this.hoa_don = hoadon;
        },

        cap_nhat(hoadon) {
          this.edit_user = hoadon;
        },

        getTTDonhang(roleDonhang) {
          switch (roleDonhang) {
            case 0:
              return 'Chờ Xác Nhận';
            case 1:
              return 'Đang Vận Chuyển';
            case 2:
              return 'Giao Hàng Thành Công';
            case 3:
              return 'Huỷ Đơn Hàng';
            default:
              return 'Không xác định';
          }
        },

        getTTThanhToan(roleThanhToa) {
          switch (roleThanhToa) {
            case 0:
              return 'Chưa Thanh Toán';
            case 1:
              return 'Đã Thanh Toán';
            default:
              return 'Không xác định';
          }
        },



      }
    });
  </script>


  @endsection