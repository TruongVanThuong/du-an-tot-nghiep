@extends('AdminRocker.share.master')
@section('noi_dung')
  <div class="row" id="app">
        <div class="col-md-5">
            <form method="post" action="theloai">@csrf
              <div class="card">
                <div class="card-header text-center">
                  <h3>Thêm Thể Loại</h3>
                </div>
                <div class="card-body">
                  <div class="form-group mt-3">
                        <label>Tên Loại</label>
                        <input type="text" class="form-control" name="ten_loai" placeholder="Nhập vào Tên Loai">
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
													<option value="{{$danhmuc->id}}" >{{$danhmuc->ten_danh_muc}}</option>
												@endforeach
												</select>
                  </div>
									
                </div>
                <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary">Thêm Thể Loại</button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h3> Danh Sách Các Thể Loại</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered">
                            <thead clas="bg-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Tên Thể Loại</th>
                                    <th class="text-center">Mã Danh Mục</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_theloai as $theloai)
                                <tr>
                                    <th class="align-middle text-center">{{$theloai->id}}</th>
                                    <td class="align-middle text-center">{{$theloai->ten_loai}}</td>
																		<td class="align-middle text-center">{{$theloai->ma_danh_muc}}</td>
                                    <td class="align-middle text-center text-nowrap">
																			<a class="btn btn-primary" name="btn_edit" href="capnhattheloai/{{$theloai->id}}">edit</a>			
																			<a class="btn btn-danger btn_delete" name="btn_delete" href="xoatheloai/{{$theloai->id}}">delete</a>			
                                    </td>
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
