<header>
	<div id="header1">
		<div class="container text-right top-header">
			<span class="contact-header"><a href="">Đăng Ký &ensp;|&ensp;</a></span>
			<span class="contact-header"><a href="">Đăng Nhập</a></span>
		</div>
	</div>
	<div id="header3">
		<div class="menu container">
			<a href=""><img class="logo" src="images-h/logo.png" alt="" ></a>
			<div class="menu-content ">
				<ul class="menu-content1">
					<li class="list-menu"><a class="a-menu" href="">Trang Chủ</a></li>
					<li class="list-menu new">
						<a class="a-menu" href="gioithieu">Giới Thiệu</a>
					</li> 
					<li class="list-menu new">
						<a class="a-menu" href="dichvu">Khóa Học</a>
						<ul class="menu-con">
							<li class="login"><a href="">Tư duy phát triển cho bé</a></li>
							<li class="login"><a href="">Nhận Thức của trẻ</a></li>
							<li class="login"><a href="">Tương lai trẻ thơ</a></li>

						</ul>
					</li>
					<li class="list-menu new">
						<a class="a-menu" href="">Tài liệu</a>
						<ul class="menu-con">
							<li class="login"><a href="">Chuẩn bị cho bé vào tiểu học</a></li>
							<li class="login"><a href="">Cho bé đến lớp mỗi ngày</a></li>
						</ul>
					</li>
					<li class="list-menu"><a class="a-menu" href="">Tin Tức</a></li>
					<li class="list-menu"><a class="a-menu" href="">Đồ Chơi</a></li>
					<li class="list-menu"><a class="a-menu" href="">Liên Hệ</a></li>
				</ul>
			</div>	
			<span class="menu-rsp container text-right" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;
			</span>
		</div>

	</div>
	<div id="mySidenav" class="sidenav" style="z-index: 9999">
		
		<div class="menu-rsp-full">
			<input type="text" placeholder="  Tìm kiếm..." class="ip-tim">
			<i class="fa fa-search search ic1"></i>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul>
				<li><a class="list-menu-rsp" href="#">Trang Chủ</a></li>
				<li><a class="list-menu-rsp" href="#">Giới Thiệu</a></li>
				<li><a class="list-menu-rsp accordion" href="#">Khóa học</a>
					<ul class="panel">
						<li><a href="">Tư duy phát triển cho bé</a></li>
						<li><a href="">Nhận Thức của trẻ</a></li>
						<li><a href="">Tương lai trẻ thơ</a></li>
					</ul>
				</li>
				<li><a class="list-menu-rsp accordion" href="#">Tài liệu</a>
					<ul class="panel">
						<li><a href="">Chuẩn bị cho bé vào tiểu học</a></li>
						<li><a href="">Cho bé đến lớp mỗi ngày</a></li>
					</ul>
				</li>
				<li><a class="list-menu-rsp" href="">Tin Tức</a></li>
				<li><a class="list-menu-rsp" href="">Đồ Chơi</a></li>
			<a class="list-menu-rsp" href="">Liên Hệ</a>
				<li><a class="list-menu-rsp" href="">Đồ Chơi</a></li>
			</ul>			
		</div>
	</div>

	<style>
		.accordion {
			color: #444;
			z-index: 999;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		.active, .accordion:hover {
			background-color: #ccc;
		}
		
		.accordion:after {
			content: '\002B';
			color: #fff
			font-weight: bold;
			float: right;
			margin-right: 5%;

		}

		.active:after {
			content: "\2212";
		}
		.panel {
			padding: 0 18px;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
		
	</style>
	
</header>