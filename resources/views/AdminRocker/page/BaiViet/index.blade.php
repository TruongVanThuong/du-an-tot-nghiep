@extends('AdminRocker.share.master')
@section('noi_dung')
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
  Danh Sách Bài Viết
</h4>
<div>
  <button @click="openModal" data-bs-toggle="modal" data-bs-target="#themModal" class="px-4 py-2 text-lg font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border rounded-full border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    Thêm bài viết
  </button>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-xl" id="themModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <form id="formbaiviet" method="post" action="/admin/baiviet" enctype="multipart/form-data">@csrf
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Thêm bài viết</h3>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group mt-3 d-flex justify-content-between">
              <div class="col-md-6 p-1 form-group-item">
                <label>Tiêu đề</label>
                <input name="ten_bai_viet" type="text" class="form-control" placeholder="Nhập vào Tiêu đề" required>
              </div>


            </div>
            <div class="form-group mt-3">
              <label>Mô tả ngắn</label>
              <div class="input-group form-group-item">
                <textarea name="mo_ta_ngan" class="form-control" id="" cols="20" rows="5"></textarea>
              </div>
            </div>


            <div class="form-group mt-3">
              <label>Ảnh đại diện</label>
              <div class="input-group form-group-item">
                <input id="hinh_anh" class="form-control" type="file" accept="image/*" name="hinh_anh" multiple required>
              </div>
            </div>

            <div class="form-group mt-3 form-group-item">
              <label>Nội dung</label>
              <textarea name="noi_dung" id="noi_dung" class="form-control ckeditor" cols="30" rows="10" required="required"></textarea>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="px-4 py-2 text-1sm font-medium leading-5 rounded-full text-black transition-colors duration-150 bg-gray-100 border border-transparent rounded-lg active:bg-gray-100 hover:bg-gray-100 focus:outline-none focus:shadow-outline-purple" data-bs-dismiss="modal">Huỷ</button>
            <button type="submit" class="px-4 py-2 text-1sm font-medium leading-5 rounded-full text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Thêm Bài Viết</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- table -->
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">#</th>
          <th class="px-4 py-3">Tiêu Đề</th>
          <th class="px-4 py-3">Ảnh đại diện</th>
          <th class="px-4 py-3">Mô tả ngắn</th>
          <th class="px-4 py-3">Người đăng</th>
          <th class="px-4 py-3">Trạng thái</th>
          <th class="px-4 py-3">Ngày đăng</th>
          <th class="px-4 py-3">Thao tác</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach($data_baiviet as $baiviet)
        <tr class="text-gray-700 dark:text-gray-400">

          <td class="px-4 py-3 text-sm">
            {{$baiviet->id}}
          </td>
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">

              <div>
                <p class="font-semibold">{{$baiviet->ten_bai_viet}}</p>
                <!-- <p class="text-xs text-gray-600 dark:text-gray-400">
                  10x Developer
                </p> -->
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            <img height="50px" max-width="100px" src="{{ asset('img/') }}/{{$baiviet->hinh_anh}}" title="{{$baiviet->hinh_anh}}">

          </td>
          <td class="px-4 py-3 text-sm">

            {!!$baiviet->mo_ta_ngan .= '...'!!}
          </td>
          <td class="px-4 py-3 text-sm">
            {{$baiviet->ma_khach_hang}}
          </td>
          <td class="px-4 py-3 text-xs">
            @if($baiviet->hien_thi==1)
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              hiện
            </span>
            @else
            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
              Ẩn
            </span>

            @endif
          </td>
          <td class="px-4 py-3 text-sm">
            {{$baiviet->created_at}}
          </td>
          <td class="px-4 py-3">

            <div class="flex items-center space-x-4 text-sm">
              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" data-bs-toggle="modal" data-bs-target="#show{{$baiviet->id}}" href="" aria-label=" Edit">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <i class="bx bx-show"></i>
                </svg>
              </a>
              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" data-bs-toggle="modal" data-bs-target="#capnhatModal{{$baiviet->id}}" href="" aria-label=" Edit">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                  </path>
                </svg>
              </a>
              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" href="baiviet/{{$baiviet->id}}" aria-label="Delete">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </td>
        </tr>
        <!-- Modal cập nhật-->
        <div class="modal fade bd-example-modal-xl" id="capnhatModal{{$baiviet->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <form id="formbaiviet" method="post" action="/admin/capnhat_baiviet/{{$baiviet->id}}" enctype="multipart/form-data">@csrf
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Cập nhật bài viết</h3>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group mt-3 d-flex justify-content-between">
                    <div class="col-md-6 p-1 form-group-item">
                      <label>Tiêu đề</label>
                      <input name="ten_bai_viet" type="text" class="form-control" value="{{$baiviet->ten_bai_viet}}" placeholder="Nhập vào Tiêu đề" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label>Mô tả ngắn</label>
                    <p></p>
                    <div class="input-group form-group-item">
                      <textarea name="mo_ta_ngan" class="form-control" id="" cols="20" rows="5"> {{$baiviet->mo_ta_ngan}}</textarea>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label>Ảnh đại diện</label>
                    <img height="50px" max-width="100px" src="{{ asset('img/') }}/{{$baiviet->hinh_anh}}" title="{{$baiviet->hinh_anh}}">
                    <div class="input-group form-group-item">
                      <input id="hinh_anh" class="form-control" type="file" accept="image/*" name="hinh_anh" multiple required>
                    </div>
                  </div>
                  <div class="form-group mt-3 form-group-item">
                    <label>Nội dung</label>
                    <textarea name="noi_dung" id="noi_dung_cap_nhat" class="form-control ckeditor" cols="30" rows="10" required="required"> {!! $baiviet->noi_dung !!}</textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="px-4 py-2 text-1sm font-medium leading-5 rounded-full text-black transition-colors duration-150 bg-gray-100 border border-transparent rounded-lg active:bg-gray-100 hover:bg-gray-100 focus:outline-none focus:shadow-outline-purple" data-bs-dismiss="modal">Huỷ</button>
                  <button type="submit" class="px-4 py-2 text-1sm font-medium leading-5 rounded-full text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Cập nhật Bài Viết</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- modal show -->
        <div class="modal fade bd-example-modal-xl" id="show{{$baiviet->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Xem bài viết</h3>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <div class="modal-body">
                <h1>{{$baiviet->ten_bai_viet}}</h1>
                {!! html_entity_decode($baiviet->noi_dung) !!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </tbody>
    </table>
  </div>
  <div>{{$data_baiviet->links('AdminRocker.page.BaiViet.custom')}}</div>
  
</div>

<!-- end table -->
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.19.1/ckeditor.js"></script>
<script>
  CKEDITOR.replace('noi_dung')

  CKEDITOR.replace('noi_dung_cap_nhat');
</script>
<script src="/assets_admin_rocker/js/init-alpine.js"></script>
<script src="/assets_admin_rocker/js/focus-trap.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection