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
				  <li><a href="#">อนุมัติผลงาน</a></li>
				  <li class="active">แสดงข้อมูลผลงาน</li>
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
					  	<a class="navbar-brand" href="#">อนุมัติผลงาน</a>
				  	</div>
						  	<div class="collapse navbar-collapse">
							  <ul class="nav navbar-nav">
				  			<li class="active"><a href="#">รายการโครงานรอตรวจ</a></li>
				  			<li><a href="#">โครงงานใหม่</a></li>
				  		</ul>
						<!-- </div> -->
						  </div>
					 </nav>
					 <div class="col-md-12 display">
						กรอบแสดงข้อมูลผลงาน
					</div>
					<form role="form">
						<div class="form-group col-xs-8">
						    <label>แสดงความคิดเห็น</label>
						    <textarea class="form-control"></textarea>
						</div>
						<div class="form-group col-xs-5">
							<div class="checkbox">
							    <label>
							      <input type="radio"> ผ่าน
							    </label>
							 </div>    
							 <div class="checkbox">
							    <label>
							      <input type="radio"> ไม่ผ่าน
							    </label>
							 </div>    
						</div>
					</form>
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