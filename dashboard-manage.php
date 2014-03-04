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
				  <li><a href="dashboard-home.php">หน้าหลัก</a></li>
				  <li class="active">ประวัติส่วนตัว</li>
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
					  	<a class="navbar-brand" href="#">แก้ไขข้อมูลส่วนตัว</a>
				  	</div>
						  	<div class="collapse navbar-collapse">
							  <ul class="nav navbar-nav">
				  			<li class="active"><a href="#">ประวัติส่วนตัว</a></li>
				  			<li><a href="#">ประวัติการศึกษา</a></li>
				  			<li><a href="#">ประวัติการทำงาน</a></li>
				  		</ul>
						<!-- </div> -->
						  </div>
					 </nav>
					<form role="form">
						<div class="form-group col-xs-4">
						    <label >ชื่อ</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-group col-xs-4">
						    <label >นามสกุล</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-group col-xs-4">
						    <label >วันเดือนปีเกิด</label>
						    <input  type="date" class="form-control" placeholder="Birthdate">
						</div>
						<div class="form-group col-xs-4">
						    <label >เลขที่บัตรประชาชน</label>
						    <input type="tex" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group col-xs-2">
						    <label >จังหวัด</label>
						    <select class="form-control"><option>กรุณาเลือก</option></select>
						</div>
						<div class="form-group col-xs-2">
						    <label >ตำบล</label>
						    <select class="form-control"><option>กรุณาเลือก</option></select>
						</div>
						<div class="form-group col-xs-2">
						    <label >อำเภอ</label>
						    <select class="form-control"><option>กรุณาเลือก</option></select>
						</div>
						<div class="form-group col-xs-4">
						    <label >TextArea</label>
						    <textarea class="form-control"></textarea>
						</div>
					</form>
					<div class="col-md-12 textediter">
						...Text Editer Here
					</div>
					<div class="col-md-7 btn-holder">
					<button type="button" class="btn btn-primary btn-sm btn-success">บันทึกข้อมูล</button>
					<button type="button" class="btn btn-primary btn-sm btn-danger">ยกเลิก</button>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('inc_footer.php') ?>
</body>
</html>