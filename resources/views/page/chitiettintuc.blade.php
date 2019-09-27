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
				    <div class="right-home">
				    	<div class="contentContainer">
				    		<div class="newsDetails">
				    			<div class="container">
				    				<div class="chi">
				    					<h2 class="entry-title">Lý do trẻ luôn nghe lời giáo viên hơn cha mẹ</h2>
				    					<div class="post-meta">
				    						<span>
				    							<i class="fa fa-user"></i>
				    							By <a href="">Admin</a>
				    						</span>
				    						<span>
				    							<i class="fa fa-book"></i>
				    							<a href="">Tin tức,tâm lí</a>
				    						</span>
				    						<span>
				    							<i class="fa fa-comment"></i>
				    						    <a href="">0 comment</a>
				    						</span>
				    						
				    					</div>
				    					<div class="entry-content mt-4">
				    						<p><strong>Lý do trẻ luôn nghe lời giáo viên hơn cha mẹ</strong>. Cứ đến cuối tuần, vợ chồng chị Vân Anh lại vật lộn với cậu con trai 4 tuổi “tinh quái” của mình. Chị không hiểu sao đến lớp con rất ngoan, cô giáo cũng rất khen ngợi bé luôn là một trong những đứa trẻ ngoan nhất lớp. Còn ở nhà, dẫu chị có la khàn cả cổ họng thậm chí cầm roi thì cậu bé chỉ được một lúc trật tự rồi đâu lại vào đấy. Đây là thực trạng chung của rất nhiều gia đình. Nhiều bậc phụ huynh luôn tự hỏi vì sao khi đi học thì bé luôn nghe lời cô giáo răm rắp, nhưng khi về nhà thì lại cứng đầu, bướng bỉnh đến khó trị, vậy lý do tại sao???</p>
				    						<ol>
				    							<li>
				    								<h4>
				    									Giáo viên luôn tạo được sự uy tín với trẻ
				    								</h4>
				    							</li>
				    						</ol>
				    						<p>Ở nhà, nhiều bậc phụ huynh nói mà không giữ lời hứa với trẻ, đặc biệt là trong việc học tập. Có một số cha mẹ đưa ra các phần thưởng hấp dẫn nếu con hoàn thành bài tập về nhà. Tuy nhiên, khi bé hoàn thành xong và đòi “phần thưởng” thì lại bị cha mẹ từ chối, thậm chí la mắng bé vì dám vòi vĩnh. Điều này làm mất niềm tin của trẻ vào lời nói cha mẹ.</p>
				    						<p class="imggg">
				    							<img src="{{ asset('images/10.jpg') }}">
				    						</p>
				    						<p>Còn ở trường, các thầy cô luôn đưa ra các quy tắc và bắt buộc tất cả học sinh phải tuân theo như: Phải tự xúc và ăn hết phần cơm, khi ngủ không được nói chuyện,…. Nếu không tuân thủ theo sẽ bị phạt như đứng xó lớp, lau bảng,…Mọi lời nói của giáo viên đều được thực hiện trong tất cả mọi lần, làm đúng sẽ được thưởng, sai sẽ phạt, không có chuyện thiên vị ai. Đó gọi là kỷ luật, điều mà ít gia đình nào có thể rèn con như vậy chỉ vì cha mẹ đã đánh mất niềm tin với trẻ.</p>
				    						<ol start="2">
				    							<li>
				    								<h4>
				    									Cha mẹ không dứt khoát
				    								</h4>
				    							</li>
				    						</ol>
				    						<p class="mb-2">Việc này xảy ra cực kỳ phổ biến , đặc biệt ở các gia đình có con một. Trẻ luôn được nuông chiều, được coi là trung tâm của cả gia đình. Vì vậy, khi nói chuyện với con cha mẹ thường nói theo kiểu nhân nhượng, mềm lòng. Chỉ cần trẻ chảy nước mắt, mè nheo là các bậc phụ huynh lại làm theo yêu cầu của bé. Khi hành động này lặp đi lặp lại nhiều lần, trẻ sẽ thành thói quen được đà lấn tới, lâu dần sẽ trở nên ương bướng, khó trị.</p>
				    						<p>Còn ở trường, thầy cô thường nói nhẹ nhàng nhưng mang tính mệnh lệnh, dứt khoát. Không bao giờ có chuyện trẻ mè nheo đòi làm theo ý muốn bản thân. Ở đây đề cao tính tập thể chứ không phải tính cá nhân lên trên.

</p>
                                            <ol start="3">
				    							<li>
				    								<h4>
				    									Cha mẹ thường không kiên nhẫn với trẻ
				    								</h4>
				    							</li>
				    						</ol>
				    						<p>Trẻ từ 2-6 tuổi thường rất hiếu động, ở giai đoạn này trẻ rất thích khám phá, tìm tòi mọi thứ diễn ra xung quanh bản thân. Sẽ có hàng vạn câu hỏi “vì sao” đưa ra với cha mẹ và cần được sự giải đáp. Nhưng nếu nó được đưa ra lúc cha mẹ đang bận hoặc đang bực bội thì có thể sẽ là nguyên nhân trẻ bị la mắng.</p>
				    						<p>Nhiều bậc phụ huynh luôn than rằng cảm thấy mệt mỏi với lũ trẻ vì vậy thông thường cha mẹ chỉ trả lời qua quýt cho có lệ mà không biết rằng điều này sẽ khiến bé dần mất đi sự nhiệt tình, và không còn hứng thú để đặt câu hỏi cho cha mẹ. Cách hành xử của cha mẹ thiếu kiên nhẫn là vậy nhưng ở các giáo viên lại rất nhiệt tình giải đáp cho trẻ hiểu rõ vấn đề đang thắc mắc, đồng thời khơi gợi trí tò mò của trẻ. Chính điều này làm trẻ cảm thấy biết ơn và trở nên thân thiết với thầy cô hơn cha mẹ.</p>
				    						<ol start="4">
				    							<li>
				    								<h4>
				    									Cha mẹ thường không kiên nhẫn với trẻ
				    								</h4>
				    							</li>
				    						</ol>
				    						<p>Cha mẹ thường có việc làm là so sánh con mình với những đứa trẻ khác, ít khi khen ngợi trẻ mà thay vào đó là cấm đoán và chê bai. Nhiều bậc phụ huynh nghĩ vệc làm này sẽ khiến trẻ trở nên xuất sắc hơn mà không biết điều này đã khiến trẻ tủi thân và tự ti hơn.</p>
				    						<p>Ngược lại với phụ huynh, lời nói của thầy cô có tiêu chuẩn rõ ràng. Khen chê đúng chỗ nên trẻ rất nghiêm túc thực hiện.</p>
				    						<ol start="5">
				    							<li>
				    								<h4>
				    									Cha mẹ thường không kiên nhẫn với trẻ
				    								</h4>
				    							</li>
				    						</ol>
                                            <p>Khi muốn nói điều gì với trẻ, mà bé có dấu hiệu lơ đi thì đừng vội trách trẻ, hãy xem lại cách cha mẹ làm đã đúng hay chưa. Khi đưa ra bất kì lời nói nào hãy đảm bảo rằng con bạn đang tập trung hết sức để lắng nghe, chứ không phải tai nghe mắt chắm chú vào ipad, tivi,.. hoặc làm một việc bất kì nào đó. Trẻ thường nghe lời thầy cô giáo vì thầy cô rất biết cách thu hút sự tập trung của trẻ, buộc trẻ phải lắng nghe thầy cô giáo nói. Ví dụ như khi cô đang giảng bài, trẻ phải nhìn lên bảng và không được nói chuyện riêng. Nếu vi phạm sẽ bị nhắc nhở hoặc phạt đến khi trẻ hướng sự tập trung vào bài giảng.

</p>
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