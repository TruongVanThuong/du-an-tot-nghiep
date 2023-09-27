

@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="container">
            <div class="" >
                <div class="modal-dialog">
                  <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./{{$cn_danhmuc->id}}">@csrf                                  
                    
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Danh Mục</h5>
                        
                      </div>
                      <div class="modal-body">
                        <div class="form-group mt-3">
                          <label>Tên Danh Mục</label>
                          <input type="text" class="form-control" name="ten_danh_muc" placeholder="Nhập vào Tên Danh Mục" value="{{$cn_danhmuc->ten_danh_muc}}">
                          <span class="text-danger">
													@error('ten_danh_muc')
															{{$message}}
													@enderror
												</span>
                        </div>
                      </div>
                      <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật Danh Mục</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>     
    </div>
@endsection
@section('js')

@endsection
