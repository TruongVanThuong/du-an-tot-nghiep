

@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-md-12 mb-3">
            <div class="modal-category">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Thêm Sản Phẩm
              </button>

              <!-- Modal -->
              <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="container" role="document">
                  <div class="modal-content">
                    <form id="validate" method="post" action="sanpham" enctype="multipart/form-data">@csrf
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                        <div class="form-group mt-3 d-flex justify-content-between">
                          <div class="col-md-5 p-1">
                            <label>Tên Sản Phẩm</label>
                            <input name="ten_san_pham" type="text" class="form-control" placeholder="Nhập vào Tên Sản Phẩm" required>
                          </div>
                          <div class="col-md-5 p-1">
                            <label>Mã Loại Sản Phẩm</label>
                            <select name="ma_loai" class="form-control" required>
                                <option value=""> _ _ _ Chon Mã Loại Sản Phẩm _ _ _</option>
                              @foreach($data_Loaisanpham as $Loaisanpham)
                                <option value="{{$Loaisanpham->id}}">{{$Loaisanpham->ten_loai}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-2 p-1">
                            <label>Số Lượng</label>
                            <input name="so_luong" type="number" class="form-control" placeholder="Nhập Số Lượng" required>
                            <span class="text-danger">
                              @error('so_luong')
                                  {{$message}}
                              @enderror
                            </span>
                          </div>
                        </div>

                        <div class="form-group mt-3 d-flex justify-content-between">
                            <div class="col-md-4 p-1">
                              <label>Giá Bán</label>
                              <input name="gia_san_pham" type="number" class="form-control" placeholder="Nhập Giá Bán" required>
                              <span class="text-danger">
                                @error('gia_san_pham')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>  
                            <div class="col-md-4 p-1">
                              <label>Giảm giá</label>
                              <input name="giam_gia_san_pham" type="number" class="form-control" placeholder="Nhập Giảm giá" required>
                              <span class="text-danger">
                                @error('giam_gia_san_pham')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>  
                            <div class="col-md-4 p-1">
                              <label>Đặt Biệt</label>
                              <select name="dat_biet" class="form-control" required>
                                <option value=""> _ _ _ Chon Loại Đặt Biệt _ _ _</option>
                                <option value="0">Khong</option>
                                <option value="1">Co</option>
                              </select>
                              <span class="text-danger">
                                @error('dat_biet')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                          <label>Ảnh Sản Phẩm</label>
                          <div class="input-group">
                            <input id="hinh_anh" class="form-control" type="file" accept="image/*" name="hinh_anh[]" multiple >
                          </div>
                          <span class="text-danger">
                            @error('hinh_anh')
                                {{$message}}
                            @enderror
                          </span>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>Mô Tả</label>
                            <textarea name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10" required></textarea>
                            <span class="text-danger">
                              @error('mo_ta')
                                  {{$message}}
                              @enderror
                            </span>
                        </div>            
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên Sản Phẩm</th>
                                    <th class="text-center">Giá Bán</th>
                                    <th class="text-center">Giảm Giá</th>
                                    <th class="text-center">Hình Ảnh</th>
                                    <th class="text-center">Số Lượng</th>
                                    <th class="text-center">Mô Tả</th>
                                    <th class="text-center">Mã Loại</th>
                                    <th class="text-center">Đặt Biệt</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
															@foreach($data_sanpham as $sanpham)
                                <tr>
                                    <th class="align-middle text-center">
																		{{$sanpham->id}}
                                    </th>
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
																		{{$sanpham->id}}
                                    </td>
                                    <td class="align-middle text-center">
																		{{$sanpham->so_luong}}
                                    </td>
																		<td class="align-middle text-center">
																		{{$sanpham->mo_ta}}
                                    </td>
																		<td class="align-middle text-center">
																		{{$sanpham->ma_loai}}
                                    </td>
                                    <td class="align-middle" >
																		{{$sanpham->dat_biet}}
																		</td>
                                    <td class="align-middle text-center text-nowrap">
                                      <!-- Button trigger modal -->
																			<a class="btn btn-primary" name="btn_edit" href="#" data-toggle="modal" data-target="#ModalEdit{{$sanpham->id}}">edit</a>	
																			<a class="btn btn-danger btn_delete" name="btn_delete" href="xoasanpham/{{$sanpham->id}}">delete</a>			
                                    </td>
                                    <!-- Modal -->
                                    @include('AdminRocker/page/SanPham/capnhat')
                                </tr>
															@endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
  <!-- validation jquery -->
  <script>
        $('#validate').validate({
            reles: {
                'ten_san_pham': {
                    required: true,
                },
                'ma_loai': {
                    required:true,
                },
                'gia_san_pham': {
                    required:true,
                },
                'giam_gia_san_pham': {
                    required:true,
                },
                'hinh_anh[]': {
                    required:true,
                },
                'so_luong': {
                    required:true,
                },
                'luot_xem': {
                    required:true,
                },
                'dat_biet': {
                    required:true,
                },
                'mo_ta': {
                    required:true,
                },
            },
            messages: {
                'ten_san_pham' : "Vui lòng không được bỏ trống tên sản phẩm.",
                'ma_loai' : "Vui lòng không được bỏ trống mã loại.",
                'gia_san_pham' : "Vui lòng không được bỏ trống giá sản phẩm.",
                'giam_gia_san_pham' : "Vui lòng không được bỏ trống giảm giá sản phẩm.",
                'hinh_anh[]' : "Vui lòng không được bỏ trống hình ảnh sản phẩm.",
                'so_luong' : "Vui lòng không được bỏ trống số lượng sản phẩm.",
                'luot_xem' : "Vui lòng không được bỏ trống lượt xem.",
                'dat_biet' : "Vui lòng không được bỏ trống đặt biệt.",
                'mo_ta' : "Vui lòng không được bỏ trống mô tả sản phẩm.",
            },
        });
  </script>


	<script>
    const delBtnEl = document.querySelectorAll(".btn_delete");
    delBtnEl.forEach(function(delBtn) {
      delBtn.addEventListener("click", function(event) {
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
