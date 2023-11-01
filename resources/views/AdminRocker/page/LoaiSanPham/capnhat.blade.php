

<div class="modal fade" id="ModalEdit{{$theloai->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel" aria-hidden="true">
  <div class="container" role="document">
    <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="capnhattheloai/{{$theloai->id}}">@csrf                                  
                    
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Cập Nhật Thể Loại
          </h5>
        </div>
                      <div class="modal-body">
                        <div class="form-group mt-3">
                          <label>Tên Thể Loại</label>
                          <input type="text" class="form-control" name="ten_loai" placeholder="Nhập vào Tên Danh Mục" value="{{$theloai->ten_loai}}">
                          <span class="text-danger">
                            @error('ten_loai')
                                {{$message}}
                            @enderror
                          </span>
                        </div>
                        <div class="form-group mt-3">
                          <label>Mã Danh Mục : </label> <br>
                          <select name="ma_danh_muc" id="ma_danh_muc">
                            @foreach ($data_danhmuc as $danhmuc)
                              <option value="{{$danhmuc->id}}" @if($theloai->ma_danh_muc == $danhmuc->id) selected="selected" @endif >{{$danhmuc->ten_danh_muc}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
        <div class="modal-footer mt-3">
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật Thể Loại</button>
        </div>
      </div>
    </form>
  </div>
</div>   
  

