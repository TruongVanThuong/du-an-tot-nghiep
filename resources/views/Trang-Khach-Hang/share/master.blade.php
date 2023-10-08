<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
  @include('Trang-Khach-Hang.share.css')
</head> 
<body class="header_sticky header-style-2 header-absolute header-center has-menu-extra">
	<!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        @include('Trang-Khach-Hang.share.header')

        @yield('NoiDung')

        @include('Trang-Khach-Hang.share.footer')

    </div>

    @include('Trang-Khach-Hang.share.js')
</body> 
</html>                               