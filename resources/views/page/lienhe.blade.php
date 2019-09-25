@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('css')
<link rel="stylesheet" href="css/trangchu.css">
@endsection
@section('content')
	<div id="lienhe">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="lienhe-tv">
					<h2>liên hệ để được tư vấn</h2>
					<textarea name="" cols="40" rows="2" placeholder="Họ Và Tên"></textarea>
					<textarea name="" cols="40" rows="2" placeholder="Nhập Email"></textarea>
					<textarea name="" cols="40" rows="2" placeholder="Email"></textarea>
					<br>
					<br>
					<a href="">Nhập Thông Tin</a>
					</div>
				</div>
				<div class="col-md-7 loi-ich">
					<h2>Bé học tại trường mầm non sẽ được gì</h2>
					<ul>
						<li><i class="fa fa-check-circle"></i><span>ham hiểu biết</span> và <span>say mê khám phá</span> thế giới xung quanh</li>
						<li><i class="fa fa-check-circle"></i><span>TỰ TIN LÀ CHÍNH MÌNH:</span> Bé được khuyến khích phát triển theo thế mạnh/ tiềm năng của bản thân</li>
						<li><i class="fa fa-check-circle"></i><span>PHÁT TRIỂN Ý THỨC TỰ LẬP CÁ NHÂN:</span> giáo viên khuyến khích trẻ tìm tiếng nói của riêng mình và thể hiện cái tôi của bản thân theo cách thức đặc biệt của từng trẻ</li>
						<li><i class="fa fa-check-circle"></i><span>LINH HOẠT THÍCH NGHI: </span>  giao tiếp ứng xử nhanh nhạy, mau chóng thích nghi với những tình huống, hoàn cảnh khác nhau.</li>
						<li><i class="fa fa-check-circle"></i><span>TƯ DUY SÁNG TẠO:</span> Bé luôn được khuyến khích để hình thành phản xạ đặt câu hỏi “Chuyện gì xảy ra nếu…” để tìm hiểu những gì diễn ra xung quanh bé.</li>
						<li><i class="fa fa-check-circle"></i><span>KHỞI ĐẦU VƯỢT TRỘI:</span> bé học Maple Bear được tranh bị kỹ năng và kiến thức để có khởi đầu vượt trội ở bậc tiểu học, đặc biệt là khả năng tiếng Anh.</li>
						<li><i class="fa fa-check-circle"></i><span>TOÀN CẦU:</span> hình thành nền tảng song ngữ Việt – Anh vững chắc và những văn hóa ứng xử, hiểu biết tư duy cho bé. Bé sẵn sàng trở thành <span>CÔNG DÂN TOÀN CẦU</span> khi lớn lên.</li>
					</ul>
				</div>
			</div>
			<div class="lienhe-qc">
				<h2>hãy liên hệ với chúng tôi</h2>
				<p>* để những đứa trẻ của bạn có được những sự chăm sóc tốt nhất *</p>
			</div>
		</div>
	</div>
	@endsection