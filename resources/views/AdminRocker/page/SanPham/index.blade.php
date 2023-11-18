@extends('AdminRocker.share.master')
@section('noi_dung')
<div class="row" id="app">
  <div class="col-md-12 mb-3"> 
    <div class="modal-category"> 
      <!-- Button trigger modal --> 
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Thêm Sản Phẩm </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
        <div class="modal-dialog modal-xl" role="document"> 
          <div class="modal-content"> 
            <form id="sanphamForm" method="post" action="/admin/sanpham" enctype="multipart/form-data">@csrf
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h3>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body row">
                <!-- ---------------- -->
                <div class="col-md-9">
                  <div class="col-md-12 p-1 form-group-item">
                    <label>Tên Sản Phẩm</label>
                    <input name="ten_san_pham" type="text" class="form-control" placeholder="Nhập vào Tên Sản Phẩm" required>
                  </div>

                  <div class="form-group col-md-12 p-1 form-group-item">
                    <label>Mô Tả</label>
                    <textarea name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10" required="required"></textarea>
                  </div>
                </div>
                <!-- --------------- -->
                <div class="col-md-3">
                  <div class="col-md-12 p-1 form-group-item"> 
                    <label>Mã Loại Sản Phẩm</label> 
                    <select name="ma_loai" class="form-control" required>
                      <option value=""> _ _ _ Chon Mã Loại Sản Phẩm _ _ _</option> 
                      @foreach($data_Loaisanpham as $Loaisanpham)
                      <option value="{{$Loaisanpham->id}}">
                        {{$Loaisanpham->ten_loai}} - (Danh muc : @foreach($data_danhmuc as $danhmuc) @if($danhmuc->id == $Loaisanpham->ma_danh_muc) {{$danhmuc->ten_danh_muc}} @endif @endforeach)
                      </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-12 p-1 form-group-item"> 
                    <label>Số Lượng</label> 
                    <input name="so_luong" type="number" class="form-control" placeholder="Nhập Số Lượng" required>
                  </div> 
                  <div class="col-md-12 p-1 form-group-item"> 
                    <label>Giá Bán</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-usd"></span>
                      </div>
                      <input name="gia_san_pham" type="number" class="form-control form-icon-trailing" placeholder="Nhập Giá Bán" required>
                    </div>
                  </div>
                  <div class="col-md-12 p-1 form-group-item">
                    <label>Giảm giá</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                      </div>
                      <input name="giam_gia_san_pham" type="number" class="form-control" placeholder="Nhập Giảm giá" required>
                    </div>
                  </div>
                  <div class="col-md-12 p-1 form-group-item">
                    <label>Đặt Biệt</label>
                    <select name="dat_biet" class="form-control" required>
                      <option value=""> _ _ _ Chon Loại Đặt Biệt _ _ _</option>
                      <option value="0">Khong</option>
                      <option value="1">Co</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12 p-1">
                    <label>Ảnh Sản Phẩm</label>
                    <input id="hinh_anh" class="form-control" type="file" accept="image/*" name="hinh_anh[]" multiple required>
                  </div>
                </div>    
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                <button type="submit" class="btn btn-submit btn-primary">Thêm Sản Phẩm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header text-center">
        <h3> Danh Sách Các Sản Phẩm</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          
          <table id="table" class="table table-bordered">
            <thead clas="bg-primary">
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên Sản Phẩm</th>
                <th class="text-center">Giá Bán</th>
                <th class="text-center">Giảm Giá</th>
                <th class="text-center">Hình Ảnh</th>
                <th class="text-center">Số Lượng</th>
                <th class="text-center">Mô Tả</th>
                <th class="text-center">Tên Loại</th>
                <th class="text-center">Danh Muc</th>
                <th class="text-center">Trạng Thái</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @if($data_sanpham->isEmpty())
              <tr>
                <td class="align-middle text-center text-nowrap" colspan="11">Không có dữ liệu</td>
              </tr>
              @else
              @foreach($data_sanpham as $sanpham)

              <tr>
                <td class="align-middle text-center">
                  {{$sanpham->id}}
                </td>
                <td class="align-middle text-center">
                  {{$sanpham->ten_san_pham}}
                </td>
                <td class="align-middle text-center">
                  {{$sanpham->gia_san_pham}}
                </td>
                <td class="align-middle text-center">
                  {{$sanpham->giam_gia_san_pham}}
                </td>
                <td class="align-middle text-center">
                <!-- -- Kiểm tra xem sản phẩm có hình ảnh hay không -- -->
                  @php
                  $hasImages = false;
                  @endphp

                  @foreach ($HinhAnh as $hinhanh)
                      @if ($hinhanh && $hinhanh->ma_san_pham == $sanpham->id)
                          <img height="100" src="{{ asset('img/') }}/{{$hinhanh->hinh_anh}}" title="{{$hinhanh->hinh_anh}}">
                          @php
                          $hasImages = true;
                          @endphp
                      @endif
                  @endforeach

                  @if (!$hasImages)
                      <p>Không có hình ảnh cho sản phẩm này.</p>
                  @endif
                </td>
                <td class="align-middle text-center">
                  {{$sanpham->so_luong}}
                </td>
                <td class="align-middle text-center">
                  {!!$sanpham->mo_ta .= '...'!!}
                </td>
                <td class="align-middle text-center">
                  @foreach ($data_Loaisanpham as $Loaisanpham)
                  @if ($Loaisanpham->id == $sanpham->ma_loai)
                  {{$Loaisanpham->ten_loai}}
                  @endif
                  @endforeach 
                </td>
                <td class="align-middle text-center">
                {{ $sanpham->LoaisanphamModel->DanhmucModel->ten_danh_muc }}
                </td>
                <td class="align-middle text-center">
                  <div class="form-check form-switch">
                    <input class="form-check-input" onclick="toggleStatus(<?php echo $sanpham->id; ?>)" type="checkbox"
                      @if($sanpham->trang_thai == 1) checked @endif role="switch" id="flexSwitchCheckDefault">
                  </div>
                </td>
                <td class="align-middle text-center text-nowrap">
                  <!-- Button trigger modal -->
                  <a class="btn btn-primary trigger-modal" name="btn_edit" href="#" data-bs-toggle="modal"
                    data-bs-target="#ModalEdit{{$sanpham->id}}"><i class="bx bx-edit"></i></a>
                  <a class="btn btn-danger btn_delete trigger-modal" name="btn_delete"
                    href="xoasanpham/{{$sanpham->id}}"><i class="bx bx-trash"></i></a>
                </td>
                <!-- Modal -->
                @include('AdminRocker/page/SanPham/capnhat')
              </tr>
              @endforeach
              

              @endif

            </tbody>

          </table>
          
        </div>
        <div>{{$data_sanpham->links()}}</div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- toggle status -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function toggleStatus(id) {
    var id = id;
    $.ajax({
      url: "/admin/toggleStatus",
      type: "get",
      data: { idsta: id },
      success: function ($trangthai) {
        if ($trangthai == 1) {
          swal("Da bat trang thai!", "", "success");
        } else {
          swal("Da tat trang thai!", "", "success");
        }
      }
    });
  }

  function deleteImg(id) {
    var id = id;
    $.ajax({
      url: "/admin/xoahinhanh",
      type: "get",
      data: { idImg: id },
      success: function () {
        // console.log("it Works");
        // fetchcategory();
        swal("Xoa hinh anh thanh cong!", "", "success");
        window.location.replace("./sanpham");
      }
    });
  }
</script>



<!-- validation -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script>
  $(document).ready(function () {
    $('#sanphamForm').validate({
      reles: {
        'ten_san_pham': {
          required: true,
        },
        'ma_loai': {
          required: true,
        },
        'gia_san_pham': {
          required: true,
        },
        'giam_gia_san_pham': {
          required: true,
        },
        'hinh_anh[]': {
          required: true,
        },
        'so_luong': {
          required: true,
        },
        'luot_xem': {
          required: true,
        },
        'dat_biet': {
          required: true,
        },
        'mo_ta': {
          required: true,
        },
      },
      messages: {
        'ten_san_pham': "Vui lòng không được bỏ trống tên sản phẩm.",
        'ma_loai': "Vui lòng không được bỏ trống mã loại.",
        'gia_san_pham': "Vui lòng không được bỏ trống giá sản phẩm.",
        'giam_gia_san_pham': "Vui lòng không được bỏ trống giảm giá sản phẩm.",
        'hinh_anh[]': "Vui lòng không được bỏ trống hình ảnh sản phẩm.",
        'so_luong': "Vui lòng không được bỏ trống số lượng sản phẩm.",
        'luot_xem': "Vui lòng không được bỏ trống lượt xem.",
        'dat_biet': "Vui lòng không được bỏ trống đặt biệt.",
        'mo_ta': "Vui lòng không được bỏ trống mô tả sản phẩm.",
      },
      errorElement: "em",
      errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");

        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.parent("label"));
        } else {
          error.insertAfter(element);
        }
      },
      highlight: function (element, errorClass, validClass) {
        $(element).parents(".form-group-item").addClass("has-error").removeClass("has-success");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).parents(".form-group-item").addClass("has-success").removeClass("has-error");
      }
    });
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.19.1/ckeditor.js"></script>
<script>
  CKEDITOR.replace('mo_ta')
  CKEDITOR.replace('update_mo_ta'); // replace name mô tả
</script>
<!--  -->
@endsection