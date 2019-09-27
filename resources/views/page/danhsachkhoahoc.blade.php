@extends('master-layout')
@section('title')
danh sách khóa học
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/danhsachkhoahoc.css')}}">
@section('content')
<div class="container">
    <h3 class="h3 text-center btn-primary">Danh Sách Các Khóa Học</h3>
    <div class="row">
    <div class="tab col-md-3">
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Khóa Tiếng Anh</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Khóa Tiếng Hàn</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Khóa Tiếng Trung</button>
    </div>

        <div class="col-md-9">
            <div id="London" class="tabcontent">
           <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
             <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="https://ibest.edu.vn/wp-content/uploads/2016/11/cac-khoa-ielts-1-1.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
        </div>

        <div id="Paris" class="tabcontent">
            <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
            <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
            <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://tienghan.com.vn/userfiles/hoc%20he.jpg">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
        </div>

        <div id="Tokyo" class="tabcontent">
             <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
            <div class="row">
               <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="product-grid6">
                    <span class="product-discount-label">-20%</span>
                     <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="http://thanhmaihsk.edu.vn/wp-content/uploads/2019/05/hinh-anh-khoa-hoc-tieng-trung-co-ban-cho-nguoi-moi-bat-dau-4-ky-nang-1.png">
                    </a>
                     </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Khóa Giao Tiếp</a></h3>
                            <div class="price">2,000,000đ
                                <span>900,000đ</span>
                            </div>
                        </div>
                        <ul class="social">
                    <li><a href="" data-tip="Xem Chi Tiết"><i class="fa fa-eye"></i></a></li>
                    <li><a href="" data-tip="Thêm Vào Giỏ Hàng"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
           </div>
        </div>
        </div>
</div>  
</div>

<script src="{{asset('js/danhsachkhoahoc.js')}}">

</script>
@endsection