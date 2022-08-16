<?php
include('../connect/connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Smarthr - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dashboard - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">

<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header">
<div class="header-left">
<a href="index.php" class="logo">
<img src="assets/img/logo.png" width="40" height="40" alt="">
</a>
</div>
<a id="toggle_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<div class="page-title-box">
<h3>QUẢN LÝ Shop quần áo</h3>
</div>
<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
<ul class="nav user-menu">
<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.html">
<input class="form-control" type="text" placeholder="Tìm kiếm....">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
<span class="status online"></span></span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<!-- <a class="dropdown-item" href="profile.html">Tiểu sử</a>
<a class="dropdown-item" href="settings.html">Cài đặt</a> -->
<a class="dropdown-item" href="login.html">Đăng xuất</a>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<!-- <a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a> -->
<a class="dropdown-item" href="login.html">Đăng xuất</a>
</div>
</div>

</div>



<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
	<div id="sidebar-menu" class="sidebar-menu">
	<ul>
	<li class="menu-title">
	<span>BẢNG ĐIỀU KHIỂN CHÍNH </span>
	</li>
	<li class="submenu">
	<a href="#"><i class="la la-dashboard"></i> <span> Bảng điều khiển</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a class="active" href="index.php">Bảng thống kê</a></li>
	<!-- <li><a href="employee-dashboard.html">Employee Dashboard</a></li> -->
	</ul>
	</li>
	<!-- <li class="submenu">
	<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a href="chat.html">Chat</a></li>
	<li class="submenu">
	<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a href="voice-call.html">Voice Call</a></li>
	<li><a href="video-call.html">Video Call</a></li>
	<li><a href="outgoing-call.html">Outgoing Call</a></li>
	<li><a href="incoming-call.html">Incoming Call</a></li>
	</ul>
	</li>
	<li><a href="events.html">Calendar</a></li>
	<li><a href="contacts.html">Contacts</a></li>
	<li><a href="inbox.html">Email</a></li>
	<li><a href="file-manager.html">File Manager</a></li>
	</ul>
	</li> -->
	<li class="menu-title">
	<span>Người dùng</span>
	</li>
	<li class="submenu">
	<a href="#" class="noti-dot"><i class="la la-user"></i> <span> ADMIN</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a href="clients.php">Admin</a></li>
	</ul>
	</li>
	<li class="submenu">
	<a href="#"><i class="la la-product-hunt"></i> <span> Sản phẩm</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a href="projects.php">Sản phẩm</a></li>
	</ul>
	</li>
	<li class="submenu">
	<a href="#"><i class="la la-ticket"></i> <span>Hóa đơn</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li><a href="tickets.php">Hóa đơn</a></li>
	</ul>
	</li>
<li>
<a href="leads.php"><i class="la la-comment-alt"></i> <span>Liên hệ</span></span></a>
</li>
</ul>
</li>
</li>
</ul>
</div>
</div>
</div>




<div class="page-wrapper">

<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome Admin!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="card dash-widget">
<div class="card-body">
<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
<div class="dash-widget-info">
<?php
   $sql = "SELECT * FROM tb_sanpham";
   $rel = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($rel);
?>
<h3><?php echo $count;?></h3>
<span>Sản phẩm</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="card dash-widget">
<div class="card-body">
<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
<div class="dash-widget-info">
<?php
	$sql_qry = "SELECT SUM(total) AS count 
    FROM tb_thongke ";
	$duration = $conn->query($sql_qry);
	$record = $duration->fetch_array();
$total = $record['count'];
?>
<h4><?php echo number_format(floatval($total), 0, ".", ",");?></h4>
<span>VND</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="card dash-widget">
<div class="card-body">
<span class="dash-widget-icon"><i class="fa fa-ticket"></i></span>
<?php
   $sql = "SELECT * FROM tb_hoadon";
   $rel = mysqli_query($conn,$sql);
   $count3 = mysqli_num_rows($rel);
?>
<div class="dash-widget-info">
<h3><?php echo $count3;?></h3>
<span>Hóa đơn</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
 <!-- <div class="card dash-widget">
<div class="card-body">
<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
<div class="dash-widget-info">
<h3>218</h3>
<span>Employees</span>
</div>
</div>
</div>
</div> -->
</div>

<!-- <div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-6 text-center">
<div class="card">
<div class="card-body">
<h3 class="card-title">Total Revenue</h3>
<div id="bar-charts"></div>
</div>
</div>
</div>
<div class="col-md-6 text-center">
<div class="card">
<div class="card-body">
<h3 class="card-title">Sales Overview</h3>
<div id="line-charts"></div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<style>
	* {
	  margin: 0;
	  padding: 0;
	  font-family: sans-serif;
	}
	.chartMenu {
	  width: 100vw;
	  height: 40px;
	  background: #1A1A1A;
	  color: white;
	  margin-left: 20px;
	}
	.chartMenu p {
	  padding: 10px;
	  font-size: 20px;
	}
	.chartCard {
	  width: 100vw;
	  height: calc(100vh - 40px);
	  background: #23272b;
	  /* display: flex; */
	  align-items: center;
	  justify-content: center;
	}
	.chartBox {
	  width: 700px;
	  padding: 20px;
	  margin-left: 150px;
	  margin-top: 50px;
	  border-radius: 20px;
	  border: solid 3px rgba(255, 26, 104, 1);
	  background: white;
	}
  </style>

<div class="chartMenu">
	<p>Bảng thống kê doanh thu</3005</div>
  <div class="chartCard">
	<div class="chartBox">
		<input type="date" onchange="startDateFiller(this)" value="2022-05-01" min="2022-05-01" max="2022-06-30"/>
		<input type="date" onchange="endDate(this)" value="2022-06-19" min="2022-05-01" max="2022-06-30"/>
	  <canvas id="myChart"></canvas>
	</div>
  </div>
  <?php
		$sql = "SELECT * FROM tb_thongke";
		$result = $conn->query($sql);
		$count = mysqli_num_rows($result);
		if($count>0){
			while($rows = mysqli_fetch_assoc($result)){
				$dateArray[] = $rows['date'];
				$priceArray[] = $rows['total'];
			}
			unset($result);
		}else{
			echo 'Xin lỗi không có dữ liệu';
		}
// print_r($dateArray);
  ?>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
  <script>
	const dataJs = <?php echo json_encode($dateArray);?>;
	const chartJs = dataJs.map((day, index)=>{
		let dayjs = new Date(day);
		return dayjs.setHours(0, 0, 0, 0);
	});
	
  // setup 
  const data = {
	labels: chartJs,
	datasets: [{
	  label: 'Doanh thu',
	  data: <?php echo json_encode($priceArray);?>	,
	  backgroundColor: [
		'rgba(255, 26, 104, 0.2)',
		'rgba(54, 162, 235, 0.2)',
		'rgba(255, 206, 86, 0.2)',
		'rgba(75, 192, 192, 0.2)',
		'rgba(153, 102, 255, 0.2)',
		'rgba(255, 159, 64, 0.2)',
		'rgba(0, 0, 0, 0.2)'
	  ],
	  borderColor: [
		'rgba(255, 26, 104, 1)',
		'rgba(54, 162, 235, 1)',
		'rgba(255, 206, 86, 1)',
		'rgba(75, 192, 192, 1)',
		'rgba(153, 102, 255, 1)',
		'rgba(255, 159, 64, 1)',
		'rgba(0, 0, 0, 1)'
	  ],
	  borderWidth: 1
	}]
  };

  // config 
  const config = {
	type: 'bar',
	data,
	options: {
	  scales: {
		x:{
			min:'2022-05-15',
			max:'2022-06-18',
			type:'time',
			time:{
				unit:'day'
			}
		},
		y: {
		  beginAtZero: true
		}
	  }
	}
  };

  // render init block
  const myChart = new Chart(
	document.getElementById('myChart'),
	config
  );
  function startDateFiller(date){
	const startDate = new Date(date.value);
	console.log(startDate.setHours(0, 0, 0, 0));
	myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
	myChart.update();
  }
  function endDate(date){
	const startDate = new Date(date.value);
	console.log(startDate.setHours(0, 0, 0, 0));
	myChart.config.options.scales.x.max = startDate.setHours(0, 0, 0, 0);
	myChart.update();
  }
  </script>


</div>

</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- <script src="assets/plugins/morris/morris.min.js"></script> -->
<script src="assets/plugins/raphael/raphael.min.js"></script>
<!-- <script src="assets/js/chart.js"></script> -->

<script src="assets/js/app.js"></script>
</body>
</html>