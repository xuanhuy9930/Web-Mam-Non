<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/danhsachkhoahoc.css')}}">
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <div class="container">
                                  <div class="mySlides">
                                    <img class="img-fluid" src="https://metaisach.com/wp-content/uploads/2019/01/sach-hoc-sinh-tieng-anh-lop-3.jpg" style="width:90%">
                                  </div>

                                  <div  class="mySlides">
                                    <img class="img-fluid" src="https://sachhoc.com/image/cache/catalog/Sachtienganh/Luyen-thi/Lop1-5/Sach-giao-khoa-tieng-anh-4-thi-diem-tap-1-500x554.jpg" style="width:90%">
                                  </div>

                                  <div class="mySlides">
                                    <img class="img-fluid" src="https://salt.tikicdn.com/cache/550x550/media/catalog/product/e/h/ehg-tieng-anh-lop-3-tap-2_-68k.u547.d20161010.t105626.598735.png" style="width:90%">
                                  </div>                                    
                                   <table cellpadding="1" cellspacing="10">
                                       <tr>
                                           <td>
                                            <div class="column">
                                      <img class="demo cursor" src="https://metaisach.com/wp-content/uploads/2019/01/sach-hoc-sinh-tieng-anh-lop-3.jpg" style="width:60%" onclick="currentSlide(1)" alt="The Woods">
                                    </div>
                                </td>
                                <td>
                                    <div class="column">
                                      <img class="demo cursor" src="https://sachhoc.com/image/cache/catalog/Sachtienganh/Luyen-thi/Lop1-5/Sach-giao-khoa-tieng-anh-4-thi-diem-tap-1-500x554.jpg" style="width:60%" onclick="currentSlide(2)" alt="Mountains and fjords">
                                    </div>
                                </td>
                                <td> 
                                            <div class="column">
                                      <img class="demo cursor" src="https://salt.tikicdn.com/cache/550x550/media/catalog/product/e/h/ehg-tieng-anh-lop-3-tap-2_-68k.u547.d20161010.t105626.598735.png" style="width:60%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                    </div>
                                </td>
                                       </tr>
                                   </table>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title btn-primary"><span class="glyphicon glyphicon-list-alt"></span> Khóa Giao Tiếp </div></h3>
                        <hr>
                    </div>
                    <div class="panel panel-default text-center">
                    <div class="rating">

                    </div>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-comment"></span>Cam Kết :</div></h3>
                        <hr>
      <div class="text-left">
                        <p>Biết cách hoc và nhớ từ mới siêu tốc, nhớ lâu</p>
                            <p>Yêu thích Tiếng Anh, hứng thú tự học Tiếng Anh</p>
                            <p>Nắm được quy tắc phát âm chuẩn, trọng âm, ngữ điệu chuẩ</p>
                            <p>Tiếp cận với nguồn tài liệu tự học phong phú: nhạc, truyện, phim, ebook..
</p>
<p>Nắm ngữ pháp căn bản, ứng dụng ngữ pháp trong phản xạ nghe nói
</p>
                    
              </div>        </div>
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-credit-card"></span></div></h3>
                        <hr>
                        <h2><font color="red">Giá : 5,000,000đ</h2>   </font>                 </div>

                    <div class="text-center">
                        <button class="add-to-cart btn btn-primary" type="button"><span class="glyphicon glyphicon-gift"></span>Đặt Mua</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>