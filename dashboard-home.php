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
			<div class="jumbotron" style="margin-bottom:0px;">
				<h3>ประกาศล่าสุด</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="row">
				<div class="maintitle"><h3>ผลงานที่น่าสนใจ</h3></div>
					<?php for($i=0;$i<11;$i++) { ?>
						<?php if($i < 3){?>
						<div class="col-md-4">
							<a href="#">
								<div class="itembox">
								<img src="http://placehold.it/360x290" class="img-thumbnail">
								<h4>ชื่อผลงาน</h4>	
								<hr>
								<ul class="port-profile">
									<li><span>จัดทำโดย</span> นพดล จ้อยเจริญ</li>
									<li><span>วันที่อัพเดต</span> 10/10/2014</li>
								</ul>
								<ul class="port-stat">
									<li><span>เข้าดูแล้ว :</span> 90 ครั้ง</li>
								</ul>
							</div>
							</a>
						</div>
						<?php } else {?>
							<div class="col-md-3">
							<a href="#">
								<div class="itembox">
								<img src="http://placehold.it/160x140" class="img-thumbnail">
								<h4>ชื่อผลงาน</h4>
								<hr>
								<ul class="port-profile">
									<li><span>จัดทำโดย</span> นพดล จ้อยเจริญ</li>
									<li><span>วันที่อัพเดต</span> 10/10/2014</li>
								</ul>
								<ul class="port-stat">
									<li><span>เข้าดูแล้ว :</span> 90 ครั้ง</li>
								</ul>
							</div>
							</a>
						</div>
						<?php } ?>
				
					<?php } ?>
				</div>
			</div>
	</div>
</div>

<?php require('inc_footer.php') ?>
</body>
</html>