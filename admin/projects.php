<?php 
  include('../connect/connect.php');
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
<title>Projects - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">

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
		<!-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
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
		</div> -->
		</li>
		
		
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
	<li><a class="" href="index.php">Bảng thống kê</a></li>
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
	<li class="submenu active">
	<a href="#"><i class="la la-product-hunt"></i> <span> Sản phẩm</span> <span class="menu-arrow"></span></a>
	<ul style="display: none;">
	<li class="active"><a href="projects.php">Sản phẩm</a></li>
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
<h3 class="page-title">Sản phẩm</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
<li class="breadcrumb-item active">Sản phẩm</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i>Thêm sản phẩm </a>
<div class="view-icons">
<a href="projects.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
<a href="project-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
</div>
</div>
</div>
</div>


<div class="row filter-row">
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Mã sản phẩm</label>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Tên sản phẩm</label>
</div>
</div>
<div class="col-sm-6 col-md-3">
<a href="#" class="btn btn-success btn-block"> Tìm kiếm </a>
</div>
</div>
<div class="row">	
	
<?php
	$sql5 = "SELECT * FROM tb_sanpham ";
	$rel5 = mysqli_query($conn,$sql5);
	$count5 = mysqli_num_rows($rel5); 
	if($count5 > 0 ){
		while($rows5 = mysqli_fetch_assoc($rel5))
		{ 
			$ma_sp = $rows5['ma_sp'];
			$ten_sp = $rows5['ten_sp'];
			$mota = $rows5['mota'];
			$giasale = $rows5['giasale'];
			
			?>		
<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
<div class="card">
<div class="card-body">
<div class="dropdown dropdown-action profile-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a> -->
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
</div>
</div>
<h4 class="project-title"><a href="<?php SITE;?>project-view.php?ma_sp=<?php echo $ma_sp;?>"><?php echo $ten_sp;?></a></h4>
<!-- <small class="block text-ellipsis m-b-15">
<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
</small> -->

<p  class="text-muted" style="
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 5;
    overflow: hidden;
    display: -webkit-box;"><?php echo $mota;?>
</p>

<!--  -->
<p class="m-b-5">Giá: <span class="text-success"><?php echo number_format(floatval($giasale), 0, ".", ",");?> VND</p>
</div>
</div>
</div>
<?php
		}
	}

?>
</div>




<div id="create_project" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Thêm sản phẩm</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Sản phẩm</label>
<input name="ten_sp" class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Danh mục </label>
<select name="danhmuc" class="select">
<option value="aosomi">Áo sơ mi</option>
<option value="aovest">Áo vest</option>
<option value="quanbo" >Quần bò</option>
<option value="vay">Váy</option>
<option value="kinh">Kính</option>
<option value="tuisach">Túi sách</option>
<option value="giay">Giày</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Dành cho</label>
<select name="gioitinh" class="select">
<option value="nam" >Nam</option>
<option value="nu">Nữ</option>
<option value="treem">Trẻ em</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Màu sắc</label>
<select name="mausac" class="select">
<option value="den">Đen</option>
<option value="trang">Trắng</option>
<option value="do">Đỏ</option>
<option value="xanhlam">Xanh lam</option>
<option value="xanhla">Xanh lá</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-3">
<div class="form-group">
<label>Giá bán</label>
<input name="giaban" placeholder="$50" class="form-control" type="text">
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label>Giá Sale</label>
<input name="giasale" placeholder="$50" class="form-control" type="text">
</div>
</div>

</div>

<div class="form-group">
<label>Mô tả</label>
<textarea name="mota" rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
</div>
<div class="form-group">
<label>ảnh sản phẩm</label>
<input name="img" class="form-control" type="file">
</div>
<div class="submit-section">
<button name="submit" class="btn btn-primary submit-btn">Cập nhật</button>
</div>
</form>
</div>
</div>
</div>
</div>





<div class="modal custom-modal fade" id="delete_project" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Xóa sản phẩm</h3>
<p>Bạn có muốn xóa sản phẩm không?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="javascript:void(0);" class="btn btn-primary continue-btn">Xóa</a>
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

<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>
<?php

if(isset($_POST['submit'])){
	$ten_sp = $_POST['ten_sp'];
	$danhmuc = $_POST['danhmuc'];
	$gioitinh = $_POST['gioitinh'];
	$mausac = $_POST['mausac'];
	$giaban = $_POST['giaban'];
	$giasale = $_POST['giasale'];
	$mota = $_POST['mota'];
	// Xử lý ảnh 
	if(isset($_FILES['img']['name']))
	{
		$img= $_FILES['img']['name'];
		$source_path = $_FILES['img']['tmp_name'];
		$destination_path = "../IMG/".$img;    
		$upload = move_uploaded_file($source_path,$destination_path);

		if($upload == false ){
			
		}
	}
	else{
	}
	
	$sql4 = "INSERT INTO tb_sanpham SET
	ten_sp = '$ten_sp',
	danhmuc = '$danhmuc',
	gioitinh = '$gioitinh',
	mausac = '$mausac',
	giaban = '$giaban',
	giasale = '$giasale',
	mota = '$mota',
	img = '$img'
";
$rel4 = mysqli_query($conn,$sql4);

}
?>