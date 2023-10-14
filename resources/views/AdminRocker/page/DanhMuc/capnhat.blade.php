

<div class="modal fade" id="ModalEdit{{$danhmuc->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel" aria-hidden="true">
  <div class="container" role="document">
    <form class="alert alert-secondary" id="cndanhmucForm" enctype="multipart/form-data" method="post" action="capnhatdanhmuc/{{$danhmuc->id}}">@csrf                                  
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Danh Mục</h5>
        </div>

        <div class="modal-body">
          <div class="form-group mt-3">
            <label>Tên Danh Mục</label>
            <input type="text" class="form-control" name="ten_danh_muc_" placeholder="Nhập vào Tên Danh Mục" value="{{$danhmuc->ten_danh_muc}}" required>
          </div>
        </div>

        <div class="modal-footer mt-3">
          <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
        </div>
      </div>
    </form>
  </div>
</div>
