

@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-md-12 mb-3">
            <div class="modal-category">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Thêm Danh Mục
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <form method="post" action="danhmuc" id="danhmucForm">@csrf
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                          <div class="form-group mt-3">
                            <label>Tên Danh Mục</label>
                            <input type="text" class="form-control" name="ten_danh_muc" placeholder="Nhập vào Tên Danh Mục" required>
                          </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                        <button type="submit" class="btn btn-submit btn-primary">Thêm Danh Mục</button>
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
                    <h3> Danh Sách Các Danh Mục</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered">
                            <thead clas="bg-primary">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên Danh Mục</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data_danhmuc as $danhmuc)
                                <tr>
                                  <th class="align-middle text-center">{{$danhmuc->id}}</th>
                                  <td class="align-middle text-center">{{$danhmuc->ten_danh_muc}}</td>
                                  <td class="align-middle text-center text-nowrap">
                                    <!-- Button trigger modal -->
                                    <a class="btn btn-primary trigger-modal" name="btn_edit" href="#" data-bs-toggle="modal" data-bs-target="#ModalEdit{{$danhmuc->id}}"><i class="bx bx-edit"></i></a>	
                                    <a class="btn btn-danger btn_delete trigger-modal" name="btn_delete" href="xoadanhmuc/{{$danhmuc->id}}"><i class="bx bx-trash"></i></a>			
                                  </td>
                                  <!-- Modal -->
                                  @include('AdminRocker/page/DanhMuc/capnhat')
                                </tr>
                              @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <div>{{$data_danhmuc->links()}}</div>
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
      $("#danhmucForm").validate({
        rules: {
          ten_danh_muc: {
            required: true,
          },
        },

        messages: {
          ten_danh_muc: {
            required: "Tên danh mục không được để trống",
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
