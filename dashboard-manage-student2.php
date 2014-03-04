<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<?php require('inc_header.php') ?>
</head>
<body>
	<?php require('inc_mainmenu.php') ?>
<div class="wraper container" style="padding-top:60px;">
	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<h3>เมนูหลัก</h3>
				<div class="list-group">
					<a href="#" class="list-group-item active">หน้าหลัก</a>
					<a href="#" class="list-group-item">ข้อมูลส่วนตัว</a>
					<a href="#" class="list-group-item">ผลงาน</a>
				</div>
			<h3>การจัดการ</h3>
				<div class="list-group">
					<a href="#" class="list-group-item active">แก้ไขข้อมูลส่วนตัว</a>
					<a href="#" class="list-group-item">จัดการผลงาน</a>
					<a href="#" class="list-group-item">อนุมัติผลงาน</a>
				</div>
			</div>
		<div class="col-xs-12 col-sm-9">
			<p class="pull-left visible-xs">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">เปิดเมนู</button>
				</p>
			<div class="row">
				<div class="container-fluid">
					<ol class="breadcrumb">
				  <li><a href="dashboard-home">หน้าหลัก</a></li>
				  <li><a href="#">จัดการผลงาน</a></li>
				  <li class="active">แก้ไขผลงาน</li>
				</ol>
					<nav class="navbar navbar-default navbar-static-top" role="navigation">
						<!-- <div class="container"> -->
						  	<div class="navbar-header">
					  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="topmanage">
					  		<span class="sr-only">Toggle Navigation</span>
					  		<span class="icon-bar"></span>
					  		<span class="icon-bar"></span>
					  		<span class="icon-bar"></span>
					  	</button>
					  	<a class="navbar-brand" href="#">จัดการผลงาน</a>
				  	</div>
				  	<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Planing</a></li>
							<li><a href="#">Model#2</a></li>
							<li><a href="#">Model#3</a></li>
							<li><a href="#">Model#4</a></li>
							<li><a href="#">Model#5</a></li>
							<li><a href="#">Model#6</a></li>
							
						</ul>
					</div>
					 </nav>
					 <div class="jumbotron teacher-comment" style="margin-bottom:20px;">
					 <h3><span class="label label-success">ผ่าน</span></h3>
						<h3>ความคิดเห็นของอาจารย์</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					 <form role="form">
					 	<div class="form-group col-xs-6">
						 	<label >ชื่อผลงาน</label>
							<textarea class="form-control"></textarea>
					 	</div>
					 	<div class="form-group col-xs-6">
						 	<label >Project Name</label>
							<textarea class="form-control"></textarea>
					 	</div>
					 	<div class="form-group col-md-12 textediter">
					 	<label>รายละเอียด</label>
							<br>...Text Editer Here
						</div>
					 	<div class="form-group col-md-12 textediter">
					 	<label>Detail</label>
							<br>...Text Editer Here
						</div>
					 	<div class="form-group col-xs-6">
						 	<label >อัพโหลดรูปภาพ</label>
							<input  type="file">
							<input  type="file">
							<input  type="file">
							<input  type="file">
					 	</div>
					 	<div class="form-group col-xs-6">
						 	<label >อัพโหลดเอกสารที่เกี่ยวข้อง</label>
							<input  type="file">
							<input  type="file">
							<input  type="file">
							<input  type="file">
					 	</div>
						<div class="col-md-7 btn-holder">
						<button type="button" class="btn btn-primary btn-sm btn-success">บันทึกข้อมูล</button>
						<button type="button" class="btn btn-primary btn-sm btn-danger">ยกเลิก</button>
					</div>
					 </form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('inc_footer.php') ?>
</body>
</html>