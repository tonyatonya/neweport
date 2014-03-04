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
				  <li class="active">อนุมัติผลงาน</li>
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
					 <div class="col-md-12 port-list-item">
					 	<?php for($i=0;$i<8;$i++) { ?>
								<div class="col-md-3">
								<a href="#">
									<div class="itembox">
									<img src="http://placehold.it/160x140" class="img-thumbnail">
									<h4>ชื่อผลงาน</h4>
									<hr>
									<ul class="port-profile">
										<li><span>จัดทำโดย</span> นพดล จ้อยเจริญ</li>
										<li><span>วันที่ตรวจล่าสุด</span> 10/10/2014</li>
										<li><span>วันที่อัพเดต</span> 10/10/2014</li>
									</ul>
									<ul class="port-stat">
										<li><span>แก้ไขครั้งที่ :</span> 1</li>
									</ul>
								</div>
								</a>
							</div>
					
						<?php } ?>
					 </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require('inc_footer.php') ?>
</body>
</html>