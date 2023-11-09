@extends('AdminRocker.share.master')
@section('noi_dung')
  <div class="row" id="app">
        <div class="col-md-12 mb-3">
            <div class="modal-category">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Thêm Thể Loại
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="container" role="document">
                  <div class="modal-content">
                    <form method="post" action="theloai" id="loaispForm">@csrf
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Thêm Thể Loại</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                        <div class="form-group mt-3">
                          <label>Tên Loại</label>
                          <input type="text" class="form-control" name="ten_loai" placeholder="Nhập vào Tên Loai" required>
                          <!-- <span class="text-danger">
                            @error('ten_loai')
                                {{$message}}
                            @enderror
                          </span> -->
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

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                        <button type="submit" class="btn btn-primary">Thêm Thể Loại</button>
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
                    <h3> Danh Sách Các Thể Loại</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered">
                            <thead clas="bg-primary">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên Thể Loại</th>
                                    <th class="text-center">Tên Danh Mục</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_theloai as $theloai)
                                <tr>
                                    <th class="align-middle text-center">{{$theloai->id}}</th>
                                    <td class="align-middle text-center">{{$theloai->ten_loai}}</td>
																		<td class="align-middle text-center">
                                      @foreach ($data_danhmuc as $danhmuc)
                                        @if($danhmuc->id == $theloai->ma_danh_muc)
                                          {{$danhmuc->ten_danh_muc}}
                                        @endif
                                      @endforeach
                                    </td>
                                    <td class="align-middle text-center text-nowrap">
                                      <!-- Button trigger modal -->
																			<a class="btn btn-primary trigger-modal" name="btn_edit" href="#" data-toggle="modal" data-target="#ModalEdit{{$theloai->id}}"><i class="bx bx-edit"></i></a>	
																			<a class="btn btn-danger btn_delete trigger-modal" name="btn_delete" href="xoatheloai/{{$theloai->id}}"><i class="bx bx-trash"></i></a>			
                                    </td>
                                    <!-- Modal -->
                                    @include('AdminRocker/page/LoaiSanPham/capnhat')
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <div>{{$data_theloai->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
  <!-- validation -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
  <script>
  // $.validator.setDefaults({
  //     submitHandler: function () {
  //       alert("submitted!");
  //     }
  //   });

    $(document).ready(function () {
      $("#loaispForm").validate({
        rules: {
          ten_loai: {
            required: true,
          },
        },

        messages: {
          ten_loai: {
            required: "Tên loại sản phẩm không được để trống",
          },
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
          $(element).parents(".form-group").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).parents(".form-group").addClass("has-success").removeClass("has-error");
        }
      });
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
    
@endsection
