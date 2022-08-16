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
<title>Project View - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

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
<h3 class="page-title">Thông tin sản phẩm</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
<li class="breadcrumb-item active">Sản phẩm</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<a href="#" class="btn add-btn" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i>Sửa sản phẩm</a>
</div>
</div>
</div>

<?php
	if(isset($_GET['ma_sp'])){
		$ma_sp = $_GET['ma_sp'];
		$sql = "SELECT * FROM tb_sanpham WHERE ma_sp = '$ma_sp' ";
		$rel = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($rel);
		if($count == 1 ){
			$rows = mysqli_fetch_assoc($rel);
			$ma_sp = $rows['ma_sp'];
			$ten_sp = $rows['ten_sp'];
			$danhmuc = $rows['danhmuc'];
			$gioitinh = $rows['gioitinh'];
			$mota = $rows['mota'];
			$img = $rows['img'];
			$giaban = $rows['giaban'];
			$mausac = $rows['mausac'];
			$giasale = $rows['giasale'];
		}
	}

?>
<div class="row">
<div class="col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">
<div class="project-title">
<h1><?php echo $ten_sp;?></h1>
</div>
<p><?php echo $mota;?></p>

</div>
</div>
<div class="card">
<div class="card-body">
<h5 class="card-title m-b-20">Ảnh sản phẩm</h5>
<div class="row">
<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
<div class="uploaded-box">
<div class="uploaded-img">
	
<?php
		if($img == "")
		{
			echo'';
		}
		else{
	 ?>
			<img src="<?php echo SITE;?>IMG/<?php echo $img;?>" class="img-fluid" >
	 <?php
		}
	
?>
</div>
<!-- <div class="uploaded-img-name">
demo.png
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-xl-3">
<div class="card">
<div class="card-body">
<h6 class="card-title m-b-15">Thông tin chi tiết</h6>
<table class="table table-striped table-border">
<tbody>
<tr>
<td>Gía bán:</td>
<td class="text-right"><?php echo $giaban;?>VND</td>
</tr>
<tr>
<td>Giá sale:</td>
<td class="text-right"><?php echo $giasale;?>VND</td>
</tr>
<tr>
<td>Danh muc:</td>
<td class="text-right"><?php echo $danhmuc;?></td>
</tr>
<tr>
<td>Giới tính:</td>
<td class="text-right"><?php echo $gioitinh; ?></td>
</tr>
<td>Màu sắc:</td>
<td class="text-right"><?php echo $mausac;?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>







<div id="edit_project" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Sửa sản phẩm</h5>
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
<input name="ten_sp" class="form-control" type="text" value="<?php echo $ten_sp; ?>">
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
<input name="giaban" placeholder="$50" class="form-control" type="text" value="<?php echo $giaban;?>">
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label>Giá Sale</label>
<input name="giasale" placeholder="$50" class="form-control" type="text" value="<?php echo $giasale;?>">
</div>
</div>

</div>

<div class="form-group">
<label>Mô tả</label>
<textarea name="mota" rows="4" class="form-control summernote" placeholder="Enter your message here" >
	<?php echo $mota;?>
</textarea>
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

</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/task.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>