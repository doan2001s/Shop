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
<title>Clients - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

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
<h3 class="page-title">Admin</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
<li class="breadcrumb-item active">Admin</li>
</ul>
</div>
<div class="col-auto float-right ml-auto">
<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i>Thêm admin</a>
<div class="view-icons">
<!-- <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
<a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> -->
</div>
</div>
</div>
</div>


<div class="row filter-row">
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Mã nhân viên</label>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Tên nhân viên</label>
</div>
</div>
<div class="col-sm-6 col-md-3">
<a href="#" class="btn btn-success btn-block"> Tìm kiếm </a>
</div>
</div>

<div class="row staff-grid-row">
<?php
	$sql1 = "SELECT * FROM tb_admin ";
	$rel1 = mysqli_query($conn,$sql1);
	$count = mysqli_num_rows($rel1);
	if($count > 0){
		while($rows = mysqli_fetch_assoc($rel1)){
			$ma_nv = $rows['ma_nv'];
			$ten_nv = $rows['ten_nv'];
			?>
			<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
				<div class="profile-widget">
				<div class="profile-img">
				<a href="<?php SITE;?>client-profile.php?ma_nv=<?php echo $ma_nv;?>" class="avatar"><img alt="" src="../IMG/meomeo.jpeg"></a>
				</div>
				<div class="dropdown profile-action">
				<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
				<div class="dropdown-menu dropdown-menu-right">
				<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a> -->
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i>Xóa</a>
				</div>
				</div>
				<h4 class="user-name m-t-10 mb-0 text-ellipsis"><?php echo $ten_nv;?></h4>
				<div class="small text-muted">ADMIN: <?php echo $ma_nv;?></div>
				<a href="<?php SITE;?>client-profile.php?ma_nv=<?php echo $ma_nv;?>" class="btn btn-white btn-sm m-t-10">Xem tiểu sử </a>
				</div>
				</div>
			</div>
			<?php
		}
	}

?>
</div>


<div id="add_client" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Thêm ADMIN</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="POST" action="">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label">Mã nhân viên<span class="text-danger">*</span></label>
<input name="ma_nv" class="form-control floating" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label" >Họ và tên <span class="text-danger">*</span></label>
<input name="ten_nv" class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label" >Email <span class="text-danger">*</span></label>
<input name="email" class="form-control floating" type="email">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label" >Password</label>
<input  name="password" class="form-control" type="password">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label" >Phone </label>
<input name="phone" class="form-control" type="text">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="col-form-label">Địa chỉ</label>
<input name ="diachi" class="form-control" type="text">
</div>
</div>
</div>
<div class="submit-section">
<button name="submit" class="btn btn-primary submit-btn">Cập nhật</button>
</div>
</form>
</div>
</div>
</div>
</div>



<div class="modal custom-modal fade" id="delete_client" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Xóa ADMIN</h3>
<p>Bạn có muốn xóa?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="<?php SITE;?>cient-dalete.php?ma_nv=<?php echo $ma_nv;?>" class="btn btn-primary continue-btn">Xóa</a>
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

<script src="assets/js/app.js"></script>
</body>
</html>

<?php
if (isset($_POST['submit'])){
	    $ma_nv = $_POST['ma_nv'];
		$ten_nv = $_POST['ten_nv'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$diachi = $_POST['diachi'];

		$sql = "INSERT INTO tb_admin SET 

			ma_nv = '$ma_nv',
			ten_nv = '$ten_nv',
			email = '$email',
			password = '$password',
			diachi = '$diachi',
			phone = '$phone'
			
		";

			$res = mysqli_query($conn,$sql);

}
?>