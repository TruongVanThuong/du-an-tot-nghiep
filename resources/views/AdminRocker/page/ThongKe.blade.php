@extends('AdminRocker.share.master')
@section('noi_dung')
<div id="app" v-cloak>
  <h5 class="text-center">THỐNG KÊ DOANH SỐ</h5>
  <hr>
  <div class="d-flex">
    <div class="m-3">
      <label for="">Từ ngày</label>
      <input class="form-control" type="text" id="datepicker">
    </div>
    <div class="m-3">
      <label for="">Đến ngày</label>
      <input class="form-control" type="text" id="datepicker2">
    </div>
    <div class="m-3" style="align-content: end;display: grid;">
      <button class="btn btn-primary mt-3" type="button">Cập nhật</button>
    </div>
  </div>
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
              <h4 class="my-1 text-danger">$@{{ formatCurrency(TongDoanhThu) }}</h4>
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
              <p class="mb-0 text-secondary">Tổng sản phẩm</p>
              <h4 class="my-1 text-success">@{{ tongSoSanPham }}</h4>
              <p class="mb-0 font-13">-4.5% so với tuần trước</p>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                class="bx bxs-basket"></i>
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
              <h4 class="my-1 text-warning">@{{ tongSoKhachHang }}</h4>
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


    <div class="col-12 col-lg-4 col-xl-4 d-flex">
      <div class="card w-100 radius-10">
        <div class="card-body" style="height: 365px;">
          <div class="card radius-10 border shadow-none mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-secondary">Tổng số lượt thích</p>
                  <h4 class="my-1">@{{ tongSoSanPhamYeuThich }}</h4>
                  <!-- <p class="mb-0 font-13">+6.2% from last week</p> -->
                </div>
                <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class='bx bxs-heart-circle'></i>
                </div>
              </div>
            </div>
          </div>
          <div class="card radius-10 border shadow-none mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-secondary">Tổng số bình luận sản phẩm</p>
                  <h4 class="my-1">@{{ tongSoBinhLuan }}</h4>
                  <!-- <p class="mb-0 font-13">+3.7% from last week</p> -->
                </div>
                <div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i class='bx bxs-comment-detail'></i>
                </div>
              </div>
            </div>
          </div>
          <div class="card radius-10 border shadow-none mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-secondary">Tổng số lượt liên hệ</p>
                  <h4 class="my-1">@{{ tongSoLienHe }}</h4>
                  <!-- <p class="mb-0 font-13">+4.6% from last week</p> -->
                </div>
                <div class="widgets-icons-2 bg-gradient-moonlit text-white ms-auto"><i class='bx bx-phone'></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="col-12 col-lg-8">
      <div class="card radius-10">
        <div class="card-body" style="height: 365px;">
          <div class="d-flex align-items-center">
            <div>
              <h4 class="mb-3">Khách hàng đặt hàng nhiều nhất</h4>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Gmail</th>
                  <th>ID khách hàng</th>
                  <th>Tổng tiền</th>
                  <th>Ngày tạo</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(KhachHang, key) in topKhachHangs">
                  <td>@{{KhachHang.ho_va_ten}}</td>
                  <td>@{{KhachHang.email}}</td>
                  <td>@{{KhachHang.ma_khach_hang}}</td>
                  <td>@{{ formatCurrency(KhachHang.tong_tien_mua) }}</td>
                  <td>@{{KhachHang.created_at_KH}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="row" style="height: 400px;">
    <div class="col-12 col-lg-6">
      <div class="card radius-10" style="height: 100%; display: grid; align-content: space-between;" style="justify-content: center; display: grid; padding: 10px 0;">
        <div class="card-header bg-transparent">
          <div class="d-flex align-items-center">
            <div>
              <h6 class="mb-0">Biểu đồ </h6>
            </div>
          </div>
        </div>  
        <div id="columnchart_material" style="padding: 0 20px"></div>
        <ul class="list-group list-group-flush"></ul>
      </div>
    </div>
    <div class="col-12 col-lg-3">
      <div class="card radius-10" style="height: 100%; display: grid; align-content: space-between;">
        <div class="card-header bg-transparent">
          <div class="d-flex align-items-center">
            <div>
              <h6 class="mb-0">Biểu đồ khách hàng</h6>
            </div>
          </div>
        </div>

        <div id="donutchart" >

        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Huỷ tài khoản <span
              class="badge bg-primary rounded-pill">@{{ TaiKhoanHuy }}</span>
          </li>
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Chưa kích hoạt <span
              class="badge bg-danger rounded-pill">@{{ TaiKhoanChuaKH }}</span>
          </li>
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Khách hàng <span
              class="badge bg-warning rounded-pill">@{{ TaiKhoanKhachHang }}</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-lg-3">
      <div class="card radius-10 " style="height: 100%; display: grid; align-content: space-between;">
        <div class="card-header bg-transparent">
          <div class="d-flex align-items-center">
            <div>
              <h6 class="mb-0">Orders Summary</h6>
            </div>
          </div>
        </div>

        <div id="piechart" ></div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Completed <span
              class="badge bg-gradient-quepal rounded-pill">25</span>
          </li>
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Pending <span
              class="badge bg-gradient-ibiza rounded-pill">10</span>
          </li>
          <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Process <span
              class="badge bg-gradient-deepblue rounded-pill">65</span>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>
@endsection
@section('js')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      prevText:"tháng trước",
      nextText:"tháng sau",
      dateFormat: "yy/mm/dd",
      dayNamesMin: [
        "Thứ 2",
        "Thứ 3",
        "Thứ 4",
        "Thứ 5",
        "Thứ 6",
        "Thứ 7",
        "Chủ nhật",
      ],
      duration: "slow",
    });
    $( "#datepicker2" ).datepicker({
      prevText:"tháng trước",
      nextText:"tháng sau",
      dateFormat: "yy/mm/dd",
      dayNamesMin: [
        "Thứ 2",
        "Thứ 3",
        "Thứ 4",
        "Thứ 5",
        "Thứ 6",
        "Thứ 7",
        "Chủ nhật",
      ],
      duration: "slow",
    });
  } );
  </script>

<script>

  new Vue({
    el: '#app',
    data: {

      phanTramTaiKhoan: 0,
      phanTramDoanhThu: 0,
      phanTramDonHang: 0,
      tongSoKhachHang: 0,
      tongSoDonHang: 0,
      tongSoSanPhamYeuThich: 0,
      tongSoBinhLuan: 0,
      tongSoLienHe: 0,
      TongDoanhThu: 0,
      TaiKhoanHuy: 0,
      TaiKhoanChuaKH: 0,
      TaiKhoanKhachHang: 0,
      data_danhmuc: [],
      DemTatCaSanPham: [],
      topKhachHangs: [],
      tongSoSanPham: 0,
    },
    created() {
      this.GetData();
    },
    methods: {
      GetData() {
        axios
          .get('/admin/du-lieu')
          .then((res) => {
            this.phanTramTaiKhoan = res.data.phanTramTaiKhoan;
            this.phanTramDoanhThu = res.data.phanTramDoanhThu;
            this.phanTramDonHang = res.data.phanTramDonHang;
            this.tongSoKhachHang = res.data.tongSoKhachHang
            this.tongSoDonHang = res.data.tongSoDonHang;
            this.TongDoanhThu = res.data.TongDoanhThu;
            this.TaiKhoanHuy = res.data.TaiKhoanHuy;
            this.TaiKhoanChuaKH = res.data.TaiKhoanChuaKH;
            this.TaiKhoanKhachHang = res.data.TaiKhoanKhachHang;
            this.data_danhmuc = res.data.data_danhmuc;
            this.DemTatCaSanPham = res.data.DemTatCaSanPham;
            this.topKhachHangs = res.data.topKhachHangs;
            this.tongSoSanPham = res.data.tongSoSanPham;
            this.tongSoSanPhamYeuThich = res.data.tongSoSanPhamYeuThich;
            this.tongSoBinhLuan = res.data.tongSoBinhLuan;
            this.tongSoLienHe = res.data.tongSoLienHe;
            console.log(Object.keys(this.DemTatCaSanPham).length);
            if (this.DemTatCaSanPham && Object.keys(this.DemTatCaSanPham).length > 0) {
  for (const key in this.DemTatCaSanPham) {
    if (this.DemTatCaSanPham.hasOwnProperty(key)) {
      const demSanPham = this.DemTatCaSanPham[key][0];
      console.log(demSanPham.ten_danh_muc);
    }
  }
} else {
  console.log('Dữ liệu không tồn tại hoặc là rỗng.');
}

            this.drawChart(
              this.TaiKhoanHuy,
              this.TaiKhoanChuaKH,
              this.TaiKhoanKhachHang,
            );

            this.columnchart_material();
          });
      },

      drawChart(TaiKhoanHuy, TaiKhoanChuaKH, TaiKhoanKhachHang,) {
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(() => {
          var data_donutchart = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Huỷ tài khoản', TaiKhoanHuy],
            ['Chưa kích hoạt', TaiKhoanChuaKH],
            ['Khách hàng', TaiKhoanKhachHang],
          ]);

          var options = {
            // title: 'Biểu đồ khách hàng',
            pieHole: 0.4,
            legend: 'none',
            pieSliceText: 'label', // 'none', 'label', 'value', 'percentage'
          };

          var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
          chart.draw(data_donutchart, options);
          // end chart donutchart

          var data_piechart = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['',     11],
            ['',      2],
            ['',  2],
            [' ', 2],
            ['',    7]
          ]);

          var options = {
            legend: 'none',
            // title: 'My Daily Activities'
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data_piechart, options);
        });
      },

      columnchart_material() {
        google.charts.load('current', { 'packages': ['bar'] });
        google.charts.setOnLoadCallback(() => {
            var data = google.visualization.arrayToDataTable([
              ['Year', 'Sales', 'Expenses', 'Profit'],
              
              ['01', 887, 542, 633],
              ['02', 1000, 400, 200],
              ['03', 1000, 400, 200],
              ['04', 1000, 400, 200],
        //   ['05', 1000, 400, 200],
        //   ['06', 1000, 400, 200],
        //   ['07', 1000, 400, 200],
        //   ['08', 1000, 400, 200],
        //   ['09', 1000, 400, 200],
        //   ['10', 1000, 400, 200],
        //   ['11', 1000, 400, 200],
        //   ['12', 1000, 400, 200],
        ]);

          var options = {
            chart: {
              // title: 'Company Performance',
              subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        });

      },

      formatCurrency(value) {
        const formatter = new Intl.NumberFormat('vi-VN', {
          style: 'currency',
          currency: 'VND',
        });
        return formatter.format(value);
      },
    },

  });

</script>


@endsection