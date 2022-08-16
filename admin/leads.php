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
<title>Leads - HRMS admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

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
<li class="active">
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
<h3 class="page-title">Liên hệ</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Trang chính</a></li>
<li class="breadcrumb-item active">Liên hệ</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-striped table-nowrap custom-table mb-0 datatable">
<thead>
<tr>
<th>#</th>
<th>Tên khách hàng</th>
<th>Email</th>
<th>Chủ đề</th>
<th>Nội dung</th>
<!-- <th>Assigned Staff</th>
<th>Status</th> -->
<!-- <th>Created</th> -->
<th class="text-right">Quản lý</th>
</tr>
</thead>
<tbody>
<?php
   $i = 0;
   $sql_ht = "SELECT * FROM tb_lienhe ";
   $rel = mysqli_query($conn,$sql_ht);
   $count = mysqli_num_rows($rel);
   if($count >0 ){
	while($rows = mysqli_fetch_assoc($rel)){
		$i++;
		$id = $rows['id'];
		$ten_kh = $rows['ten_kh'];
		$email = $rows['email'];
		$chude = $rows['chude'];
		$noidung = $rows['noidung'];
		?>
		
<tr>
<td><?php echo $i;?></td>
<td>
<h2 class="table-avatar">
<a href="#"><?php echo $ten_kh;?></a>
</h2>
</td>
<td><a href="" class="__cf_email__" data-cfemail="fd8a949190988f99989188939cbd98859c908d9198d39e9290"><?php echo $email;?></a></td>
<td><?php echo $chude;?></td>
<td><?php echo $noidung;?></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<!-- <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a> -->
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash-o m-r-5"></i> Xóa</a>
</div>
</div>
</td>
</tr>
		<?php

	}
   }
?>
<!-- // <tr>
// <td>1</td>
// <td>
// <h2 class="table-avatar">
// <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
// <a href="#">Wilmer Deluna</a>
// </h2>
// </td>
// <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fd8a949190988f99989188939cbd98859c908d9198d39e9290">[email&#160;protected]</a></td>
// <td>9876543210</td>
// <td>10 hours ago</td>
// <td class="text-right">
// <div class="dropdown dropdown-action">
// <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
// <div class="dropdown-menu dropdown-menu-right">
// <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
// <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
// </div>
// </div>
// </td>
// </tr> -->
<!-- <tr>
<td>2</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
<a href="#">Lesley Grauer</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660a03150a031f01140713031426031e070b160a034805090b">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Video Calling App</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>5 Mar 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>3</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
<a href="#">Jeffery Lalor</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="28424d4e4e4d5a51444944475a684d50494558444d064b4745">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Office Management</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>27 Feb 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>4</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
<a href="#">Wilmer Deluna</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8dfae4e1e0e8ffe9e8e1f8e3eccde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Hospital Administration</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>10 hours ago</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>5</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
<a href="#">Lesley Grauer</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b272e38272e322c392a3e2e390b2e332a263b272e65282426">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Video Calling App</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>5 Mar 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>6</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
<a href="#">Jeffery Lalor</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d8d7d4d4d7c0cbded3deddc0f2d7cad3dfc2ded79cd1dddf">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Office Management</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>27 Feb 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>7</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
<a href="#">Wilmer Deluna</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c5b454041495e48494059424d6c49544d415c4049024f4341">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Hospital Administration</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>10 hours ago</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>8</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
<a href="#">Lesley Grauer</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721e17011e170b15001307170032170a131f021e175c111d1f">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Video Calling App</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>5 Mar 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>9</td>
<td>
<h2 class="table-avatar">
<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
<a href="#">Jeffery Lalor</a>
</h2>
</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f79d92919192858e9b969b9885b7928f969a879b92d994989a">[email&#160;protected]</a></td>
<td>9876543210</td>
<td><a href="project-view.html">Office Management</a></td>
<td>
<ul class="team-members">
<li>
<a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
</li>
<li>
<a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
</li>
<li>
<a href="#" class="all-users">+15</a>
</li>
</ul>
</td>
<td><span class="badge bg-inverse-success">Working</span></td>
<td>27 Feb 2019</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr> -->
 </tbody>
</table>
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
<p>Bạn có muốn xóa liên hệ</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="<?php SITE;?>delete-lh.php?id=<?php echo $id;?>" class="btn btn-primary continue-btn">Xóa</a>
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



<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>