@extends('master-layout')
@section('title')
Tin tức
@endsection

@section('css')
   <link rel="stylesheet" href="{{asset('css/tintuc.css')}}">
@endsection
@section('content')
<main>
	<div class="content_tintuc mt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="tintuc_left">
						<div class="left_menu">
							<div class="head-box">
								<a href="" class="thongtin"><i class="fa fa-home"></i></a>
								<a href="" class="thongtin">Tin Tức</a>
							</div>
							<ul class="nav-left">
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Tin tức trong trường</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Tin Giáo dục</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Giáo dục tâm lí</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Chế độ dinh dưỡng</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Sức khỏe của trẻ</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Bé học</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-caret-right"></i></a>
								    <a href="" class="li_left">
								    <span>Bé chơi</span></a>
								</li>
							</ul>
							<div class="img_tintuc mt-4">
								<img src="{{ asset('images/1.png') }}">
								<img src="{{ asset('images/2.png') }}">
								<img src="{{ asset('images/3.png') }}">
								<img src="{{ asset('images/4.png') }}">
							</div>
							<div class="box_tintuc">
							<div class="head-box ">
								<a href="" class="thongtin"><i class="fa fa-youtube-play"></i></a>
								<a href="" class="thongtin">Video hoạt động</a>
							</div>
							<div class="list-videoleft">
								<div class="video_tintuc mt-2">
									<iframe src="https://www.youtube.com/embed/PO8t--6z9uU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%"></iframe>
								</div>
								<ul class="navv-leftt">
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>Thay đổi vì một trường học hạnh phúc</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>“Ngôi nhà xanh” cho giai đoạn “vàng” của trẻ</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>Lý do cha mẹ không nên so sánh con mình với trẻ khác</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>Lý do trẻ luôn nghe lời giáo viên hơn cha mẹ</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>Giúp trẻ nhỏ giảm cân hiệu quả nhất</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>5 Kỹ năng toán học trẻ ở tuổi mầm non cần nắm được</span></a>
								</li>
								<li class="tintuc_nav">
									<a href="" class="li_leftt"><i class="fa fa-youtube-play"></i></a>
								    <a href="" class="li_left">
								    <span>Top phim hoạt hay và ý nghĩa dành cho trẻ nhỏ</span></a>
								</li>
							</ul>
							</div>
						</div>
						<div class="leftmenu">
							<div class="head-box mt-4">
								<a href="" class="thongtin"><i class="fa fa-external-link-square"></i></a>
								<a href="" class="thongtin">Liên kết website</a>
							</div>
							<div class="op">
							<select class="se">
								<option class="o">Chọn liên kết trang web</option>
								<option class="o">Chọn liên kết trang web</option>
								<option class="o">Chọn liên kết trang web</option>
								<option class="o">Chọn liên kết trang web</option>
								<option class="o">Chọn liên kết trang web</option>
							</select>
						</div>
                        </div>
						</div>
						</div>
					</div>
			
				<div class="col-lg-9">
				    <div class="right_tintuc">
				    	<div class="container">
				    		<div class="head-box ">
								<a href="" class="thongtin">Tin tức trong trường</a>
							</div>
							<div class="container">
									<div class="row abc">
										<div class="col-lg-6">
				                          <div class="left_content_tintuc">
				                          	<div class="nd mt-4">
				                          		<img src="{{ asset('images/7.jpg') }}">
				                          		<div class="ndd">
				                          			<p class="h2"><a href="">Giải thưởng sinh viên nghiên cứu khoa học năm 2019</a></h2>
				                          			<p class="pp">Sáng 23/8/2019, tại Trường Đại học Xây dựng, Bộ Giáo dục và Đào tạo phối hợp với Bộ Khoa học và Công nghệ, Trung ương Đoàn TNCS HCM, Liên hiệp các Hội Khoa học và Kỹ thuật Việt Nam tổ chức khai mạc vòng sơ khảo và họp các Hội đồng đánh giá và xét giải vòng sơ khảo Giải thưởng “Sinh viên nghiên cứu khoa học” năm 2019.</p>
				                          		</div>
				                          	</div>
				                          </div>     
										</div>
										<div class="col-lg-6 mt-4">
											<div class="new1n">
				                               <ul class="right_contenttt">
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               </ul>
											</div>
										</div>
									</div>
							</div>
				    	</div>
				    </div>
				    <div class="right_tintuc mt-4">
				    	<div class="container">
				    		<div class="head-box ">
								<a href="" class="thongtin">Tin tức giáo dục</a>
							</div>
							<div class="container">
									<div class="row abc">
										<div class="col-lg-6">
				                          <div class="left_content_tintuc">
				                          	<div class="nd mt-4">
				                          		<img src="{{ asset('images/8.jpg') }}">
				                          		<div class="ndd">
				                          			<p class="h2"><a href="">Forbes vinh danh trường mầm non Worldkids</a></h2>
				                          			<p class="pp">Sáng 23/8/2019, tại Trường Đại học Xây dựng, Bộ Giáo dục và Đào tạo phối hợp với Bộ Khoa học và Công nghệ, Trung ương Đoàn TNCS HCM, Liên hiệp các Hội Khoa học và Kỹ thuật Việt Nam tổ chức khai mạc vòng sơ khảo và họp các Hội đồng đánh giá và xét giải vòng sơ khảo Giải thưởng “Sinh viên nghiên cứu khoa học” năm 2019.</p>
				                          		</div>
				                          	</div>
				                          </div>     
										</div>
										<div class="col-lg-6 mt-4">
											<div class="new1n">
				                               <ul class="right_contenttt">
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               </ul>
											</div>
										</div>
									</div>
							</div>
				    	</div>
				    </div>
				    <div class="right_tintuc mt-4">
				    	<div class="container">
				    		<div class="head-box ">
								<a href="" class="thongtin">Chế độ dinh dưỡng</a>
							</div>
							<div class="container">
									<div class="row abc">
										<div class="col-lg-6">
				                          <div class="left_content_tintuc">
				                          	<div class="nd mt-4">
				                          		<img src="{{ asset('images/9.jpg') }}">
				                          		<div class="ndd">
				                          			<p class="h2"><a href="">Ngày hội tuyển sinh 2018 – 2019 tại Worldkids</a></h2>
				                          			<p class="pp">Sáng 23/8/2019, tại Trường Đại học Xây dựng, Bộ Giáo dục và Đào tạo phối hợp với Bộ Khoa học và Công nghệ, Trung ương Đoàn TNCS HCM, Liên hiệp các Hội Khoa học và Kỹ thuật Việt Nam tổ chức khai mạc vòng sơ khảo và họp các Hội đồng đánh giá và xét giải vòng sơ khảo Giải thưởng “Sinh viên nghiên cứu khoa học” năm 2019.</p>
				                          		</div>
				                          	</div>
				                          </div>     
										</div>
										<div class="col-lg-6 mt-4">
											<div class="new1n">
				                               <ul class="right_contenttt">
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               	<li class="cc">
				                               		<a href=""><i class="fa fa-caret-right"></i></a>
				                               		<a href="" class="li_left">
								    <span>Worldkids được Tạp chí Tài Hoa Trẻ – Báo Giáo dục và Thời đại viết về công trình xanh Lotus</span></a>
				                               	</li>
				                               </ul>
											</div>
										</div>
									</div>
							</div>
				    	</div>
				    </div>
		</div>
	</div>
</main>
 @endsection
