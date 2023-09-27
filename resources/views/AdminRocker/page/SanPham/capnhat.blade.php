

@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="container">

            <div class="alert alert-secondary">
              <div class="card">
            
                <div class="card-header text-center">
                  <h3>Danh Sách Hình Ảnh</h3>
                </div>
                
                <div class="card-body">
                  <div class="row">
                    @foreach($data_hinhanh as $hinhanh)
                      @if($hinhanh->ma_san_pham == $cn_sanpham->id)
                        <div class="col-md-3">
                          <div>
                            <img src="{{asset('img')}}/{{$hinhanh->hinh_anh}}" width="100" title="image">
                          </div>
                          <div class="text-center">
                            <a class="btn btn-danger btn_delete" name="btn_delete" href="/admin/xoahinhanh/{{$hinhanh->id}}/{{$cn_sanpham->id}}">delete</a>			
                          </div>
                        </div>
                      @endif
                    @endforeach
                    
                  </div>
                </div>
              </div>
              
            </div>




            <div class="" >
                  <form class="alert alert-secondary" method="post" action="/admin/capnhatsanpham/{{$cn_sanpham->id}}" enctype="multipart/form-data">
                    @csrf                                  
                    
                    <div class="card">
          
                      <div class="card-header text-center">
                        <h3>Cập Nhật Sản Phẩm</h3>
                      </div>
                      <div class="card-body">
                          <div class="form-group mt-3">
                              <label>Tên Sản Phẩm</label>
                              <input name="ten_san_pham" value="{{$cn_sanpham->ten_san_pham}}" type="text" class="form-control" placeholder="Nhập vào Tên Sản Phẩm">
                              <span class="text-danger">
                                @error('ten_san_pham')
                                    {{$message}}
                                @enderror
                              </span>
                          </div>
                          <div class="form-group mt-3">
                              <label>Mã Loại Sản Phẩm</label>
                              <select name="ma_loai" class="form-control">
                                @foreach($data_Loaisanpham as $Loaisanpham)
                                  <option value="{{$Loaisanpham->id}}">{{$Loaisanpham->ten_loai}}</option>
                                @endforeach
                              </select>
                          </div>
                          <div class="form-group mt-3 d-flex justify-content-between">
                              <div class="col-md-5">
                                  <label>Giá Bán</label>
                                  <input name="gia_san_pham" value="{{$cn_sanpham->gia_san_pham}}" type="number" class="form-control" placeholder="Nhập Giá Bán">
                                  <span class="text-danger">
                                    @error('gia_san_pham')
                                        {{$message}}
                                    @enderror
                                  </span>
                              </div>  
                              <div class="col-md-5">
                                  <label>Giảm giá</label>
                                  <input name="giam_gia_san_pham" value="{{$cn_sanpham->giam_gia_san_pham}}" type="number" class="form-control" placeholder="Nhập Giảm giá">
                                  <span class="text-danger">
                                    @error('giam_gia_san_pham')
                                        {{$message}}
                                    @enderror
                                  </span>
                              </div>  
                          </div>
                          <div class="form-group mt-3">
                            <label>Ảnh Sản Phẩm</label>
                            <div class="input-group">
                              <input id="hinh_anh" class="form-control" type="file" name="hinh_anh[]" multiple>
                              
                              <span class="text-danger">
                                @error('hinh_anh')
                                    {{$message}}
                                @enderror
                              </span>
                            </div>
                          <div class="form-group mt-3">
                              <label>Số Lượng</label>
                              <input name="so_luong" value="{{$cn_sanpham->so_luong}}" type="number" class="form-control" placeholder="Nhập vào Giá Bán">
                              <span class="text-danger">
                                @error('so_luong')
                                    {{$message}}
                                @enderror
                              </span>
                          </div>
                          <div class="form-group mt-3">
                            <label>Lượt Xem</label>
                            <input name="luot_xem" value="{{$cn_sanpham->luot_xem}}" type="number" class="form-control"	placeholder="Nhập vào Giá Bán">
                            <span class="text-danger">
                                @error('luot_xem')
                                    {{$message}}
                                @enderror
                              </span>
                          </div>
                          <div class="form-group mt-3">
                            <label>Đặt Biệt</label>
                            <input name="dat_biet" value="{{$cn_sanpham->dat_biet}}" type="number" class="form-control"	placeholder="Nhập vào Giá Bán">
                            <span class="text-danger">
                                @error('dat_biet')
                                    {{$message}}
                                @enderror
                              </span>
                          </div>
                          <div class="form-group mt-3">
                              <label>Mô Tả</label>
                              <textarea name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10">{{$cn_sanpham->mo_ta}}</textarea>
                              <span class="text-danger">
                                @error('mo_ta')
                                    {{$message}}
                                @enderror
                              </span>
                          </div>
                      </div>
                      <div class="card-footer text-end">
                          <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
                      </div>
                    </div>
                  </form>
            </div>   
            
            
    </div>
@endsection
@section('js')

<!-- delete -->
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

@endsection
