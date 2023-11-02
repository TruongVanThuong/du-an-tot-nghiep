<!doctype html>
<html lang="en" class="no-js">

@include('Trang-Khach-Hang.share.css')

<body>
  <div class="body-wrapper">
    @php
    $check = Auth::guard('khach_hang')->check();
    $user = Auth::guard('khach_hang')->user();
@endphp
   @include('Trang-Khach-Hang.share.header')
    @yield('noi-dung')
    <!-- all js -->
  @include('Trang-Khach-Hang.share.js')
  @include('Trang-Khach-Hang.share.footer')
  @yield('js')
  </div>
</body>
</html>