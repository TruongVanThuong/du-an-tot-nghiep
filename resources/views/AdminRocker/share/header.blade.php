<div class="topbar d-flex align-items-center">
	<nav class="navbar navbar-expand">
		<div class="topbar-logo-header">
			<div class="">
				<img src="/assets_admin_rocker/images/icon-admin.jpeg" class="logo-icon" alt="logo icon" style="width: 50px;">
			</div>
			<div class="">
				<h4 class="logo-text">GUCCI</h4>
			</div>
		</div>
		<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
		<div class="search-bar flex-grow-1">
			<div class="position-relative search-bar-box">
				<input type="text" class="form-control search-control" placeholder="Type to search..."> <span
					class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
				<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
			</div>
		</div>
		<div class="top-menu ms-auto">
			<ul class="navbar-nav align-items-center">
				<li class="nav-item mobile-search-icon">
					<a class="nav-link" href="#"> <i class='bx bx-search'></i>
					</a>
				</li>

				<li class="nav-item dropdown dropdown-large">

					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button"
						data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">{{$LIENHE_xu_ly}}</span>
						<i class='bx bx-bell'></i>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="javascript:;">
							<div class="msg-header">
								<p class="msg-header-title">Thông báo</p>
							</div>
						</a>
						<div class="header-notifications-list">
							@foreach ($LIENHE as $lienhe)
							<a class="dropdown-item" onclick="thong_bao_lien_he({{$lienhe->id}})" data-bs-toggle="modal"
								data-bs-target="#viewLHModal{{$lienhe->id}}">
								<div class="d-flex align-items-center">
									<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
									</div>
									<div class="flex-grow-1">
										<h6 class="msg-name">
											{{$lienhe->ho_va_ten}}
											<!-- <span class="msg-time float-end">14 phút trước</span> -->
										</h6>
										<p class="msg-info">{{$lienhe->tieu_de}}</p>
									</div>
								</div>
							</a>
							<!-- Modal XEM-->
							<div class="modal fade" id="viewLHModal{{$lienhe->id}}" tabindex="-1"
								aria-labelledby="viewLHModalLabel{{$lienhe->id}}" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="viewLHModalLabel{{$lienhe->id}}">Nội dung liên hệ</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body" v-if="thong_tin_lien_he">
											<h6>Gmail khách hàng : @{{thong_tin_lien_he.email}}</h6>
											<div class="box_lienhe p-2" style="border: 1px solid rgb(212 212 212); border-radius: 7px;">
												<h4>(@{{thong_tin_lien_he.tieu_de}})</h4>
												<p>@{{thong_tin_lien_he.noi_dung}}</p>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<a href="javascript:;">
							<div class="text-center msg-footer">Xem tất cả thông báo</div>
						</a>
					</div>
				</li>

			</ul>
		</div>
		<div class="user-box dropdown">
			<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
				data-bs-toggle="dropdown" aria-expanded="false">
				<!-- <img src="/assets_admin_rocker/images/avatars/avatar-2.png" class="user-img" alt="user avatar"> -->
				<i class='bx bx-user user-img' style="font-size: 25px;
				background-color: #333;
				text-align: center;
				color: #fff;
				align-items: center;
				display: grid;"></i>
				<div class="user-info ps-3">
					<p class="user-name mb-0"></p>
					<p class="designattion mb-0"></p>
				</div>
			</a>
			<ul class="dropdown-menu dropdown-menu-end">
				<li>
					<a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Hồ Sơ</span></a>
				</li>
				<li>
					<a class="dropdown-item" href="{{asset('')}}"><i class='bx bx-home-circle'></i><span>Trang Chủ</span></a>
				</li>
				<li>
					<div class="dropdown-divider mb-0"></div>
				</li>
				<li>
					<a class="dropdown-item" href="/dang-xuat"><i class='bx bx-log-out-circle'></i><span>Đăng Xuất</span></a>
				</li>
			</ul>
		</div>
	</nav>
</div>

@section('js')

<script>
	function thong_b			he(idLH)				d = idLH;
	$.url: "/admin/lien-he/x			he-			
	type: data: {
		id_data: s: function
			// $					_" + i						/ $("#sanpham_" + id).hide();
			s("Sản phẩm đã đư							    }
    });
  }
</script>

@endsection