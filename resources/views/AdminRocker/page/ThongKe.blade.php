@extends('AdminRocker.share.master')
@section('noi_dung')
<div id="app" v-cloak>
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-info">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary">Tổng số đơn đặt hàng</p>
              <h4 class="my-1 text-info">@{{ tongSoDonHang }}</h4>
              <p class="mb-0 font-13">@{{ phanTramDonHang }}% so với tuần trước</p>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i
                class="bx bxs-cart"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-danger">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary">Tổng doanh thu</p>
              <h4 class="my-1 text-danger">$@{{ TongDoanhThu }}</h4>
              <p class="mb-0 font-13">@{{ phanTramDoanhThu }}% so với tuần trước</p>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i
                class="bx bxs-wallet"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-success">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary">Bounce Rate</p>
              <h4 class="my-1 text-success">34.6%</h4>
              <p class="mb-0 font-13">-4.5% so với tuần trước</p>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                class="bx bxs-bar-chart-alt-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-warning">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary">Tổng số khách hàng</p>
              <h4 class="my-1 text-warning">@{{ tongSoTaiKhoan }}</h4>
              <p class="mb-0 font-13">@{{ phanTramTaiKhoan }}% so với tuần trước</p>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i
                class="bx bxs-group"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-12 col-lg-4">
      <div class="card radius-10">
        <div id="donutchart" style="height: 400px;">
          
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-8">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <h4 class="mb-3">Tài khoản đặt hàng nhiều nhất</h4>
            </div>
            <!-- <div class="dropdown ms-auto">
              <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Action</a>
                </li>
                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                </li>
              </ul>
            </div> -->
          </div>
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>Tên tài khoản</th>
                  <th>Gmail</th>
                  <th>ID tài khoản</th>
                  <th>Tổng tiền</th>
                  <th>Ngày tạo</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(KhachHang, key) in topKhachHangs" >
                  <td>@{{KhachHang.ho_va_ten}}</td>
                  <td>@{{KhachHang.email}}</td>
                  <td>@{{KhachHang.ma_khach_hang}}</td>
                  <td>@{{KhachHang.tong_tien_mua}}</td>
                  <td>@{{KhachHang.created_at_KH}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
@section('js')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>

  new Vue({
    el: '#app',
    data: {

      phanTramTaiKhoan: 0,
      phanTramDoanhThu: 0,
      phanTramDonHang: 0,
      tongSoTaiKhoan: 0,
      tongSoDonHang: 0,
      TongDoanhThu: 0,
      TaiKhoanHuy: 0,
      TaiKhoanChuaKH: 0,
      TaiKhoanKhachHang: 0,
      TaiKhoanNhanVien: 0,
      TaiKhoanAdmin: 0,
      topKhachHangs: [],
      // data_TaiKhoan: [],
    },
    created() {
      this.GetData();
    },
    methods: {
      GetData() {
        axios
          .get('/admin/thong-ke/du-lieu')
          .then((res) => {
            this.phanTramTaiKhoan = res.data.phanTramTaiKhan;
            this.phanTramDoanhThu = res.data.phanTramDoanhTu;
            this.phanTramDonHang = res.data.phanTramDonHan;
            this.tongSoTaiKhoan = res.data.tongSoTaiKhoan
            this.tongSoDonHang = res.data.tongSoDonHang; 
            this.TongDoanhThu = res.data.TongDoanhThu;
            this.TaiKhoanHuy = res.data.TaiKhoanHuy;
            this.TaiKhoanChuaKH = res.data.TaiKhoanChuaKH;
            this.TaiKhoanKhachHang = res.data.TaiKhoanKhachHang;
            this.TaiKhoanNhanVien = res.data.TaiKhoanNhanVien;
            this.TaiKhoanAdmin = res.data.TaiKhoanAdmin;
            this.topKhachHangs = res.data.topKhachHangs;
            // this.data_TaiKhoan = res.data.data_TaiKhoan;

            this.drawChart(
              this.TaiKhoanHuy,
              this.TaiKhoanChuaKH,
              this.TaiKhoanKhachHang,
              this.TaiKhoanNhanVien,
              this.TaiKhoanAdmin,
            );
          });
      },

      drawChart(TaiKhoanHuy, TaiKhoanChuaKH, TaiKhoanKhachHang, TaiKhoanNhanVien, TaiKhoanAdmin,) {
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(() => {
          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Huỷ tài khoản', TaiKhoanHuy],
            ['Chưa kích hoạt', TaiKhoanChuaKH],
            ['Khách hàng', TaiKhoanKhachHang],
            ['Nhân viên', TaiKhoanNhanVien],
            ['Quản trị viên', TaiKhoanAdmin]
          ]);

          var options = {
            title: 'Biểu đồ khách hàng',
            pieHole: 0.4,
            legend: 'bottom',
            pieSliceText: 'label', // 'none', 'label', 'value', 'percentage'

          };

          var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
          chart.draw(data, options);
        });
      },


    },

  });

</script>


@endsection