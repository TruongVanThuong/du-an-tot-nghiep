@extends('AdminRocker.share.master')
@section('noi_dung')

<div class="row" id="app" v-cloak>

  <div class="col-md-12 mb-3">
    <div class="modal-category">
      <a class="btn btn-secondary" href="{{ asset('admin/hoa-don') }}">
        Quay Lại
      </a>
    </div>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h3>Tạo Hoá Đơn</h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-6 custom-column">
            <h4 class="text-center">THÔNG TIN HOÁ ĐƠN</h4>
            <div class="form-group mt-3">
              <label>Thông tin đơn hàng</label>
              <select class="form-control" name="" id="">
                <option value="-1">Huỷ đơn hàng</option>
                <option value="0">Chờ xử lý</option>
                <option value="1">Đang vận chuyển</option>
                <option value="2">Giao hàng thành công</option>
              </select>
            </div>
            <div class="form-group mt-3">
              <label>Thông tin thanh toán</label>
              <select class="form-control" name="" id="">
                <option value="0">Chưa thanh toán</option>
                <option value="1">Đã thanh toán</option>
              </select>
            </div>
            <div class="">
              <button class="btn btn-primary mt-3" type="button" data-bs-toggle="modal" data-bs-target="#ThemSPModal">
                Thêm sản phẩm
              </button>
            </div>
          </div>
          <div class="col-6 custom-column">
            <h4 class="text-center">THÔNG TIN KHÁCH HÀNG</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-12 custom-column">
            <h4 class="text-center">THÔNG TIN SẢN PHẨM</h4>
          </div>
        </div>
      </div>

      <!-- Modal them san pham-->
      <div class="modal fade" id="ThemSPModal" tabindex="-1" aria-labelledby="ThemSPModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="ThemSPModalLabel">Thêm sản phẩm</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body overflow">
              <div class="product-grid">
                @foreach ($data_sanpham as $sanpham)
                <div class="product-box">
                  <input type="checkbox">
                  <img src="/img/{{ $sanpham->hinh_anh }}" alt="Sản Phẩm 1">
                  <h3>{{ $sanpham->ten_san_pham }}</h3>
                  <p>Loại sản phẩm : <span>{{ $sanpham->ten_loai }}</span></p>
                  <p>Danh mục : <span>{{ $sanpham->ten_danh_muc }}</span></p>
                  <p class="price">{{ $sanpham->gia_san_pham }}</p>
                  <input type="number" name="so_luong" value="1" min="0" class="form-control">
                  <input type="hidden" name="ma_san_pham" value="{{ $sanpham->id }}">
                  <input type="hidden" name="gia_san_pham" value="{{ $sanpham->gia_san_pham }}">
                  <!-- <div class="text-center">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                  </div> -->
                </div>
                @endforeach
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cập nhật</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END them san pham -->

    </div>


  </div>


  @endsection
  @section('js')

  <script>
    new Vue({
      el: '#app',
      data: {

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
              this.data_hdct = res.data.datadct
            });
        },


      }
    });
  </script>


  @endsection