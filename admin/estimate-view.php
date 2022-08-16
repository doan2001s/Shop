﻿<?php 
include("../connect/connect.php")
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
<title>Estimates - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

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
<a href="index.html" class="logo">
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
<h3>Admin Dashboard</h3>
</div>
<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.html">
<input class="form-control" type="text" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/us.png" alt="" height="16"> English
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/fr.png" alt="" height="16"> French
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="assets/img/flags/de.png" alt="" height="16"> German
</a>
</div>
</li>


<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Messages</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="chat.html">
 <div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-09.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-02.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">John Doe</span>
<span class="message-time">6 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-03.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">5 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-05.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">3 Mar</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">
<img alt="" src="assets/img/profiles/avatar-08.jpg">
</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">27 Feb</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.html">View all Messages</a>
</div>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
<span class="status online"></span></span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
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
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Chi tiết hóa đơn</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="tickets.php">Hóa đơn</a></li>
<li class="breadcrumb-item active">Chi tiết hóa đơn</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<div class="btn-group btn-group-sm">
<button class="btn btn-white">CSV</button>
<button class="btn btn-white">PDF</button>
<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
</div>
</div>
</div>
</div>
<?php
$ma_hd = $_GET['ma_hd'];
$sql = "SELECT * FROM tb_cthoadon,tb_sanpham WHERE tb_cthoadon.ma_sp = tb_sanpham.ma_sp
And tb_cthoadon.ma_hd ='".$ma_hd."' ";
$rel = mysqli_query($conn,$sql);
$sqlKh = "SELECT * FROM tb_hoadon WHERE ma_hd = '$ma_hd' "; 
$relKH = mysqli_query($conn,$sqlKh);
?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="row">
<!-- <div class="col-sm-6 m-b-20">
<img src="assets/img/logo2.png" class="inv-logo" alt="">
<ul class="list-unstyled">
<li>Admin Dashboard</li>
<li>3864 Quiet Valley Lane,</li>
<li>Sherman Oaks, CA, 91403</li>
<li>GST No:</li>
</ul>
</div> -->
<div class="col-sm-6 m-b-20">
<div class="invoice-details">
<h3 class="text-uppercase">Mã hóa đơn #<?php echo $ma_hd;?></h3>
<ul class="list-unstyled">
<!-- <li>Expiry date: <span>May 25, 2019</span></li> -->
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12 col-lg-12 m-b-20">
<!-- <h3>Thông tin khách hàng:</h3> -->
<!-- <ul class="list-unstyled">
<li><h5><strong>Họ và tên: Nguyễn Đình Đoàn</strong></h5></li>
<li>Địa chỉ:</li>
<li>Số điện thoại:</li>
<li>Email:</li>
<li>Phương thức thanh toán:</li>
</ul> -->
</div>
</div>
<table class="table table-striped table-hover">
<thead>

<tr>
<th>#</th>
<th>Tên sản phẩm</th>
<th>Giá tiền</th>
<th>Số lượng</th>
<th class="text-right">Tổng tiền</th>
</tr>
</thead>
<tbody>
<?php
	$i=0;
	while( $rows = mysqli_fetch_array($rel)){
		$i++;
		$tongtien = $rows['giasale']*$rows['soluong'];
		?>
		
<tr>
<td><?php echo  $i;?></td>
<td><?php echo $rows['ten_sp'];?></td>
<td><?php echo  number_format(floatval($rows['giasale']), 0, ".", ",");?> VND</td>
<td><?php echo $rows['soluong']?></td>
<td class="text-right"><?php echo  number_format(floatval($tongtien), 0, ".", ",") ;?> VND</td>
</tr>
		<?php
	}
	?>
</tbody>
</table>
<div>
<div class="row invoice-payment">
<div class="col-sm-7">
</div>
<div class="col-sm-5">
<div class="m-b-20">
<div class="table-responsive no-border">
<table class="table">
<tbody>
<!-- <tr>
<th>Thanh toán:</th>
<td class="text-right">></td>
</tr> -->
<tr>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="invoice-info">
<!-- <h5>Ghi chú:</h5>
<p class="text-muted">giao hàng nhanh</p> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>