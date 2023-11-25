
<div class="modal fade" id="ModalEdit{{$sanpham->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">

      <div class="modal-content">
        <form id="validate_update" method="post" action="capnhatsanpham/{{$sanpham->id}}" enctype="multipart/form-data">@csrf
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel_update">Cap Nhat Sản Phẩm</h3>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="card m-3">
          
              <div class="card-header text-center">
                <h3>Danh Sách Hình Ảnh</h3>
              </div>
              
              <div class="card-body">
                <div class="row">
                  @foreach($data_hinhanh as $hinhanh)
                    @if($hinhanh->ma_san_pham == $sanpham->id)
                      <div class="col-md-3">
                        <div>
                          <img src="{{asset('img')}}/{{$hinhanh->hinh_anh}}" width="100" title="image">
                        </div>
                        <div class="text-center">
                          <a class="btn btn-danger btn_delete" onclick="deleteImg(<?php echo $hinhanh->id; ?>)">xoa</a>
                        </div>
                      </div>
                    @endif
                  @endforeach
                  
                </div>
              </div>
          </div>

          <div class="card m-3">
              <div class="card-header text-center">
                <h3>Thong Tin Sản Phẩm</h3>
              </div>
                      <div class="modal-body">
                        <div class="form-group mt-3 d-flex justify-content-between">
                          <div class="col-md-5 p-1">
                            <label>Tên Sản Phẩm</label>
                            <input name="ten_san_pham" type="text" class="form-control" placeholder="Nhập vào Tên Sản Phẩm" value="{{$sanpham->ten_san_pham}}" required>
                          </div>
                          <div class="col-md-5 p-1">
                            <label>Mã Loại Sản Phẩm</label>
                              <select name="ma_loai" class="form-control">
                                @foreach($data_Loaisanpham as $Loaisanpham)
                                  <option value="{{$Loaisanpham->id}}" @if($Loaisanpham->id == $sanpham->ma_loai) selected="selected"; @endif>{{$Loaisanpham->ten_loai}}</option>
                                @endforeach
                              </select>
                          </div>
                          <div class="col-md-2 p-1">
                            <label>Số Lượng</label>
                            <input name="so_luong" type="number" class="form-control" placeholder="Nhập Số Lượng" value="{{$sanpham->so_luong}}" required>
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
                              <input name="gia_san_pham" type="number" class="form-control" placeholder="Nhập Giá Bán" value="{{$sanpham->gia_san_pham}}" required>
                              <span class="text-danger">
                                @error('gia_san_pham')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>  
                            <div class="col-md-4 p-1">
                              <label>Giảm giá</label>
                              <input name="giam_gia_san_pham" type="number" class="form-control" placeholder="Nhập Giảm giá" value="{{$sanpham->giam_gia_san_pham}}" required>
                              <span class="text-danger">
                                @error('giam_gia_san_pham')
                                  {{$message}}
                                @enderror
                              </span>
                            </div>  
                            <div class="col-md-4 p-1">
                              <label>Đặt Biệt</label>
                              <select name="dat_biet" class="form-control" required>
                                <option value="0" @if($sanpham->dat_biet == 0) selected="selected"; @endif>Khong</option>
                                <option value="1" @if($sanpham->dat_biet == 1) selected="selected"; @endif>Co</option>
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
                            <input id="hinh_anh_update" class="form-control" type="file" accept="image/*" name="hinh_anh[]" multiple >
                          </div>
                          <span class="text-danger">
                            @error('hinh_anh')
                                {{$message}}
                            @enderror
                          </span>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label>Mô Tả</label>
                            <textarea name="mo_ta" id="update_mo_ta" class="form-control ckeditor" cols="30" rows="10" required>{{$sanpham->mo_ta}}</textarea>
                            <span class="text-danger">
                              @error('mo_ta')
                                  {{$message}}
                              @enderror
                            </span>
                        </div>            
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                        <button type="submit" class="btn btn-submit btn-primary">Cập nhập Sản Phẩm</button>
                      </div>
          </div>
        </form>
      </div>
            
    </div>
</div>

