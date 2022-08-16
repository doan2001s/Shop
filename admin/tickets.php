<?php
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
<title>Tickets - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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


<!-- <li class="nav-item dropdown has-arrow flag-nav">
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
</li> -->


<!-- <li class="nav-item dropdown">
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
</li> -->

<!-- 
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
</li> -->

<li class="nav-item dropdown has-arrow main-drop">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
<span class="status online"></span></span>
<span>Admin</span>
</a>
<!-- <div class="dropdown-menu">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a> -->
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<!-- <a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a> -->
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li class="submenu">
<a href="#"><i class="la la-dashboard"></i> <span>Bảng điều khiển</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="index.php">Bảng thống kê</a></li>
</ul>
</li>
<li class="menu-title">
<span>Quản lý</span>
</li>
<li class="submenu">
<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Admin</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="employees.html">Admin</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="la la-product-hunt"></i> <span> Sản phẩm</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="projects.php">Sản phẩm</a></li>
</ul>
</li>
<li class="active">
<a href="tickets.php"><i class="la la-ticket"></i> <span>Hóa đơn</span></a>
</li>
<li class="">
<a href="leads.php"><i class="la la-comment-alt"></i> <span>Liên hệ</span></a>
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
<h3 class="page-title">Hóa đơn</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Trang</a></li>
<li class="breadcrumb-item active">Hóa đơn</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<!-- <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_ticket"><i class="fa fa-plus"></i> Add Ticket</a> -->
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card-group m-b-30"  style="width:200px;">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between mb-3">
<div>
<span class="d-block">Hóa đơn</span>
</div>
<div>
<span class="text-success"></span>
</div>
</div>
<?php
   $sql = "SELECT * FROM tb_hoadon";
   $rel = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($rel);
?>
<h3 class="mb-3"><?php echo $count;?></h3>
<div class="progress mb-2" style="height: 5px;">
<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row filter-row">
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Tên khách hàng</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<div class="form-group form-focus">
<div class="cal-icon">
<input class="form-control floating datetimepicker" type="text">
</div>
<label class="focus-label">Từ ngày</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<div class="form-group form-focus">
<div class="cal-icon">
<input class="form-control floating datetimepicker" type="text">
</div>
<label class="focus-label">Đến ngày</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<a href="#" class="btn btn-success btn-block"> Tìm kiếm </a>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-striped custom-table mb-0 datatable">
<thead>
<tr>
<th>#</th>
<th>Mã hóa đơn</th>
<th>Tên khách hàng</th>
<th>Số điện thoại</th>
<th>Địa chỉ</th>
<th>Ngày mua</th>
<th>Tổng tiền</th>
<th>Thanh toán</th>

<th class="text-right">Xử lý</th>
</tr>
</thead>
<tbody>

<?php
   $i = 0;
   $sql_ht = "SELECT * FROM tb_hoadon ";
   $rel = mysqli_query($conn,$sql_ht);
   $count = mysqli_num_rows($rel);
   if($count >0 ){
	while($rows = mysqli_fetch_assoc($rel)){
		$i++;
		$ma_hd = $rows['ma_hd'];
		$ten_kh = $rows['ten_kh'];
		$phone = $rows['phone'];
		$ngaymua = $rows['ngaymua'];
		$tongtien = $rows['tongtien'];
		$payment = $rows['payment'];
		$ghichu = $rows['ghichu'];
		$email = $rows['email'];
		$diachi = $rows['diachi'];

		?>
		
<tr>
<td><?php echo $i;?></td>
<td><a href="ticket-view.html">#<?php echo $ma_hd;?></a></td>
<td><?php echo $ten_kh;?></td>
<td>
<?php echo $phone;?>
</h2>
</td>
<td><?php echo $diachi;?></td>
<td><?php echo $ngaymua;?></td>
<td>
<?php echo $tongtien;?>
</td>
<td>
<?php echo $payment;?>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="<?php SITE;?>estimate-view.php?ma_hd=<?php echo $ma_hd;?>"><i class="fa fa-eyes m-r-5"></i> Xem</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash-o m-r-5"></i>Xóa</a>
</div>
</div>
</td>
</tr>
		<?php

	}
   }
?>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div id="add_ticket" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Ticket</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Subject</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Id</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Assign Staff</label>
<select class="select">
<option>-</option>
<option>Mike Litorus</option>
<option>John Smith</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Client</label>
<select class="select">
<option>-</option>
<option>Delta Infotech</option>
<option>International Software Inc</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Priority</label>
<select class="select">
<option>High</option>
<option>Medium</option>
<option>Low</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>CC</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Assign</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Assignee</label>
<div class="project-members">
<a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-02.jpg" alt="">
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Add Followers</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Followers</label>
<div class="project-members">
<a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-09.jpg" alt="">
</a>
<a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-10.jpg" alt="">
</a>
<a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-05.jpg" alt="">
</a>
<a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-11.jpg" alt="">
</a>
<span class="all-team">+2</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
<div class="form-group">
<label>Upload Files</label>
<input class="form-control" type="file">
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div id="edit_ticket" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Ticket</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Subject</label>
<input class="form-control" type="text" value="Laptop Issue">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Id</label>
<input class="form-control" type="text" readonly value="TKT-0001">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Assign Staff</label>
<select class="select">
<option>-</option>
<option selected>Mike Litorus</option>
<option>John Smith</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Client</label>
<select class="select">
<option>-</option>
<option>Delta Infotech</option>
<option selected>International Software Inc</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Priority</label>
<select class="select">
<option>High</option>
<option selected>Medium</option>
<option>Low</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>CC</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Assign</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Assignee</label>
<div class="project-members">
<a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-02.jpg" alt="">
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Add Followers</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Ticket Followers</label>
<div class="project-members">
<a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-09.jpg" alt="">
</a>
<a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-10.jpg" alt="">
</a>
<a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-05.jpg" alt="">
</a>
<a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
<img src="assets/img/profiles/avatar-11.jpg" alt="">
</a>
<span class="all-team">+2</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
<div class="form-group">
<label>Upload Files</label>
<input class="form-control" type="file">
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_ticket" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Xóa hóa đơn</h3>
<p>Bạn có muốn xóa hóa đơn?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="<?php SITE;?>deleteHD.php?ma_hd=<?php echo $ma_hd;?>" class="btn btn-primary continue-btn">Xóa</a>
</div>
<div class="col-6">
<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Không</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>