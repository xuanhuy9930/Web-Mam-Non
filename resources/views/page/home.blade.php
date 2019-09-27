@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('css')
<link rel="stylesheet" href="css/trangchu.css">
@endsection
@section('content')
<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
	<ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
		<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
		
	</ol>
	<div class="carousel-inner slide-img">
		<div class="carousel-item active"><img alt="First slide" class="d-block w-100" src="images-h/slide-1.jpg"></div>
		<div class="carousel-item"><img alt="Second slide" class="d-block w-100" src="images-h/slider-2.jpg"></div>
		
	</div>
	<a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> 
	<a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
</div>
<div class="gioi-thieu container">
	<div class="row">
		<div class="col-md-6 gioi-thieu-left">
			<h2>giới thiệu về công ty</h2>
			<p>&emsp;Trường mầm non Hương Sen được thành lập ngày 30/05/2016 với 30 cán bộ, giáo viên, nhân viên; hơn 300 trẻ thuộc 3 nhóm lớp. Trường mầm non nằm trong khu dân cư an ninh, trật tự, cách xa tuyến đường lớn, giao thông thuận lợi. Trường chú trọng vào môi trường học thân thiện, năng động, chế độ chăm sóc tốt với những trang thiết bị cao cấp, đầy đủ tiện nghi không những đảm bảo an toàn tuyệt đối cho bé mà còn đảm bảo cho công tác nuôi dưỡng, chăm sóc, giáo dục trẻ toàn diện.</p>
			<a href=""> xem thêm</a>
		</div>
		<div class="col-md-6 gt-img">
			<img src="images-h/gioi-thieu.jpg" alt="" style="width: 100%; height: 240px;">
		</div>
	</div>
</div>
<h2 class="title">khóa học nổi bật</h2>
<img class="img-gach-chan" src="images-h/gach-chan.png" alt="">
<div class="khoa-hoc container">
	<div class=" kh-noibat">
		<a href=""><img src="images-h/khoa-hoc2.jpg" alt=""></a>
		<div class="khoahoc-content">
			<div class="text-khoahoc">
				<a href=""><i class="fa fa-youtube-play"></i> Khóa Học Video</a>
				<a href=""><i class="fa fa-clock-o"></i> 8 Giờ</a>
				<h4>Bí quyết đào tạo trẻ</h4>
				<p>Khóa học combo</p>
				<div class="space"></div>
				<span class="gia">399.000 vnđ</span>
				<span class="gia-loai">2.000.000 vnđ</span>
			</div>
		</div>
	</div>
	<div class=" kh-noibat">
		<a href=""><img src="images-h/khoa-hoc2.jpg" alt=""></a>
		<div class="khoahoc-content">
			<div class="text-khoahoc">
				<a href=""><i class="fa fa-youtube-play"></i> Khóa Học Video</a>
				<a href=""><i class="fa fa-clock-o"></i> 8 Giờ</a>
				<h4>Bí quyết đào tạo trẻ</h4>
				<p>Khóa học combo</p>
				<div class="space"></div>
				<span class="gia">399.000 vnđ</span>
				<span class="gia-loai">2.000.000 vnđ</span>
			</div>
		</div>
	</div>
	<div class=" kh-noibat">
		<a href=""><img src="images-h/khoa-hoc2.jpg" alt=""></a>
		<div class="khoahoc-content">
			<div class="text-khoahoc">
				<a href=""><i class="fa fa-youtube-play"></i> Khóa Học Video</a>
				<a href=""><i class="fa fa-clock-o"></i> 8 Giờ</a>
				<h4>Bí quyết đào tạo trẻ</h4>
				<p>Khóa học combo</p>
				<div class="space"></div>
				<span class="gia">399.000 vnđ</span>
				<span class="gia-loai">2.000.000 vnđ</span>
			</div>
		</div>
	</div>
	<div class=" kh-noibat">
		<a href=""><img src="images-h/khoa-hoc2.jpg" alt=""></a>
		<div class="khoahoc-content">
			<div class="text-khoahoc">
				<a href=""><i class="fa fa-youtube-play"></i> Khóa Học Video</a>
				<a href=""><i class="fa fa-clock-o"></i> 8 Giờ</a>
				<h4>Bí quyết đào tạo trẻ</h4>
				<p>Khóa học combo</p>
				<div class="space"></div>
				<span class="gia">399.000 vnđ</span>
				<span class="gia-loai">2.000.000 vnđ</span>
			</div>
		</div>
	</div>
	<div class=" kh-noibat">
		<a href=""><img src="images-h/khoa-hoc2.jpg" alt=""></a>
		<div class="khoahoc-content">
			<div class="text-khoahoc">
				<a href=""><i class="fa fa-youtube-play"></i> Khóa Học Video</a>
				<a href=""><i class="fa fa-clock-o"></i> 8 Giờ</a>
				<h4>Bí quyết đào tạo trẻ</h4>
				<p>Khóa học combo</p>
				<div class="space"></div>
				<span class="gia">399.000 vnđ</span>
				<span class="gia-loai">2.000.000 vnđ</span>
			</div>
		</div>
	</div>
	
</div>
<h2 class="title">tài liệu nổi bật</h2>
<img class="img-gach-chan" src="images-h/gach-chan.png" alt="">
<div class="tai-lieu">
	
	<div class="container">
		<div class="row">
			<div class="col-md-3 tl-noibat">
				<img src="images-h/tailieu-2.jpg" alt="">
				<a href="">Tuyển chọn đề thi học sinh giỏi môn Tiếng Anh lớp 6 năm 2018</a>
				<div class="text-tailieu" style="height:20%; background:#fff">
					<ul>
						<li><i class="fa fa-calendar"></i> 21/02/2019</li>
						<li><i class="fa fa-share-square-o"></i> phunphun</li>
					</ul>
					<ul>
						<li><i class="fa fa-file-text-o"></i> 8</li>
						<li><i class="fa fa-eye"></i> 1202</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 tl-noibat">
				<img src="images-h/tailieu-2.jpg" alt="">
				<a href="">Tuyển chọn đề thi học sinh giỏi môn Tiếng Anh lớp 6 năm 2018</a>
				<div class="text-tailieu" style="height:20%; background:#fff">
					<ul>
						<li><i class="fa fa-calendar"></i> 21/02/2019</li>
						<li><i class="fa fa-share-square-o"></i> phunphun</li>
					</ul>
					<ul>
						<li><i class="fa fa-file-text-o"></i> 8</li>
						<li><i class="fa fa-eye"></i> 1202</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 tl-noibat">
				<img src="images-h/tailieu-2.jpg" alt="">
				<a href="">Tuyển chọn đề thi học sinh giỏi môn Tiếng Anh lớp 6 năm 2018</a>
				<div class="text-tailieu" style="height:20%; background:#fff">
					<ul>
						<li><i class="fa fa-calendar"></i> 21/02/2019</li>
						<li><i class="fa fa-share-square-o"></i> phunphun</li>
					</ul>
					<ul>
						<li><i class="fa fa-file-text-o"></i> 8</li>
						<li><i class="fa fa-eye"></i> 1202</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 tl-noibat">
				<img src="images-h/tailieu-2.jpg" alt="">
				<a href="">Tuyển chọn đề thi học sinh giỏi môn Tiếng Anh lớp 6 năm 2018</a>
				<div class="text-tailieu" style="height:20%; background:#fff">
					<ul>
						<li><i class="fa fa-calendar"></i> 21/02/2019</li>
						<li><i class="fa fa-share-square-o"></i> phunphun</li>
					</ul>
					<ul>
						<li><i class="fa fa-file-text-o"></i> 8</li>
						<li><i class="fa fa-eye"></i> 1202</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tin-tuc">
	<h2 class="title">tin tức</h2>
	<img class="img-gach-chan" src="images-h/gach-chan.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-md-4 tintuc-text">
				<div class="tintuc-img">
					<img src="images-h/tintuc-1.jpg" alt="">
				</div>
				<h3>Chế độ dinh dưỡng cho trẻ 3 tuổi</h3>
				<p>Chế độ dinh dưỡng cho trẻ 3 tuổi mà bố mẹ cần chú ý. Bước sang tuổi thứ 3, bé tăng trưởng rất nhanh, ở thời điểm này trẻ thường hiếu động hơn, nên nhu cầu</p>
				<a href=""><i class="fa fa-link"></i>  Xem Thêm</a>
			</div>
			<div class="col-md-4 tintuc-text">
				<div class="tintuc-img">
					<img src="images-h/tintuc-1.jpg" alt="">
				</div>
				<h3>Chế độ dinh dưỡng cho trẻ 3 tuổi</h3>
				<p>Chế độ dinh dưỡng cho trẻ 3 tuổi mà bố mẹ cần chú ý. Bước sang tuổi thứ 3, bé tăng trưởng rất nhanh, ở thời điểm này trẻ thường hiếu động hơn, nên nhu cầu</p>
				<a href=""><i class="fa fa-link"></i> Xem Thêm</a>
			</div>
			<div class="col-md-4 tintuc-text">
				<div class="tintuc-img">
					<img src="images-h/tintuc-1.jpg" alt="">
				</div>
				<h3>Chế độ dinh dưỡng cho trẻ 3 tuổi</h3>
				<p>Chế độ dinh dưỡng cho trẻ 3 tuổi mà bố mẹ cần chú ý. Bước sang tuổi thứ 3, bé tăng trưởng rất nhanh, ở thời điểm này trẻ thường hiếu động hơn, nên nhu cầu</p>
				<a href=""><i class="fa fa-link"></i> Xem Thêm</a>
			</div>
		</div>
	</div>
</div>
<h2 class="title">Đồ Chơi trẻ Nhỏ</h2>
<img class="img-gach-chan" src="images-h/gach-chan.png" alt="">
<div class="do-choi container">
	

	<div class=" dochoi-text">
		<a href=""><img src="images-h/dochoi-1.jpg" alt=""></a>
		<span class="giamgia">-20%</span>
		<h3>Thảm xốp lót sàn Việt Nam hình hoa quả (10 miếng)</h3>
		<span class="gia">79.000 vnđ</span>
		<span class="gia-loai">99.000 vnđ</span>
	</div>
	<div class=" dochoi-text">
		<a href=""><img src="images-h/dochoi-2.jpg" alt=""></a>
		<span class="giamgia">-20%</span>
		<h3>Thảm xốp lót sàn Việt Nam hình hoa quả (10 miếng)</h3>
		<span class="gia">79.000 vnđ</span>
		<span class="gia-loai">99.000 vnđ</span>
	</div>
	<div class=" dochoi-text">
		<a href=""><img src="images-h/dochoi-1.jpg" alt=""></a>
		<span class="giamgia">-20%</span>
		<h3>Thảm xốp lót sàn Việt Nam hình hoa quả (10 miếng)</h3>
		<span class="gia">79.000 vnđ</span>
		<span class="gia-loai">99.000 vnđ</span>
	</div>
	<div class=" dochoi-text">
		<a href=""><img src="images-h/dochoi-2.jpg" alt=""></a>
		<span class="giamgia">-20%</span>
		<h3>Thảm xốp lót sàn Việt Nam hình hoa quả (10 miếng)</h3>
		<span class="gia">79.000 vnđ</span>
		<span class="gia-loai">99.000 vnđ</span>
	</div>
	<div class=" dochoi-text">
		<a href=""><img src="images-h/dochoi-2.jpg" alt=""></a>
		<span class="giamgia">-20%</span>
		<h3>Thảm xốp lót sàn Việt Nam hình hoa quả (10 miếng)</h3>
		<span class="gia">79.000 vnđ</span>
		<span class="gia-loai">99.000 vnđ</span>
	</div>
	<center id="back-to-top" title="Lên đầu trang">
	<i class="fas fa-chevron-up fa-fw" style="padding-top:18px;"></i>
</center>
	
</div>
@endsection