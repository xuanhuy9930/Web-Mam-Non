@extends('master-layout')

@section('title')
Trang chi tiết tài liệu
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="scss/document.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
@endsection

@section('content')
<main>
    <section id="head-document-detail">
        <div class="container">
            <div class="link">
                <h6><a href="#">Trang chủ</a> <i class="fas fa-angle-right"></i> <a href="{{route('document')}}">Tài
                        liệu</a> <i class="fas fa-angle-right"></i> <a href="{{route('document_detail')}}">Tài liệu chi
                        tiết</a>
                </h6>
            </div>
            <div class="name-docu">
                <h4 class="document">Tài liệu luận văn</h4>
                <h5 class="name">Thạc Sĩ Quản Lý Giáo Dục</h5>
                <div class="info">
                    <p><i class="fas fa-download"></i><span> 419 </span> lượt tải</p>
                    <div class="down"><a href="{{route('document_detail')}}"><span><i class="fas fa-download"></i>
                                Download</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="document-detail">
        <div class="container">
            <div class="row content-main">
                <div class="col-md-6">
                    <iframe src="https://drive.google.com/file/d/17rpMHWaLjey8-1LyzxeKxx4zmTRXzUnb/preview" width="100%"
                        height="500"></iframe>
                </div>
                <div style="background-image: url(images/bg2.jpg);" class="col-md-6">
                    <h4>HOÀN THÀNH LUẬN VĂN THẠC SĨ QUẢN LÍ GIÁO DỤC KHÔNG KHÓ!</h4>
                    <p>Với học viên đang theo học chuyên ngành Thạc sĩ Quản lý giáo dục, việc hoàn thành luận văn tốt
                        nghiệp là điều kiện cần và đủ để tốt nghiệp. Tuy nhiên, không phải học viên nào cũng có thể hoàn
                        thành luận văn đúng hạn, một trong những lý do đó có thể đến từ việc:</p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Chưa chọn được đề tài nghiên cứu</span></p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Chưa nắm được quy định về cách trình bày luận
                            văn thạc sĩ</span></p>
                    <p><img alt="" src="images/checked.png"><span>&nbsp;Chưa được trang bị kiến thức về việc bảo vệ luận
                            văn trước hội đồng</span></p>
                    <p><img alt="" src="images/checked.png"><span>&nbsp;Chưa sắp xếp được thời gian nghiên cứu hợp
                            lí</span></p>
                    <p><span>Trong</span><strong>"Bộ Luận Văn Thạc Sĩ Quản Lý Giáo Dục"&nbsp;</strong><span>dưới đây,
                            chúng tôi chia sẻ đến các bạn hơn 70+ luận văn mẫu gồm cả luận văn Tiếng Việt lẫn Tiếng Anh,
                            200+ tên đề tài mẫu hay nhất cũng như một số</span><span>&nbsp;quy định về cách thức trình
                            bày, hướng dẫn cách chọn đề tài luận văn hay. Hy vọng với những gợi ý và hướng dẫn này sẽ
                            giúp cho các bạn hoàn thành bài luận văn tốt nghiệp một cách xuất sắc và nhanh chóng
                            nhất.</span></p>
                </div>
            </div>
            <h4>NỘI DUNG BỘ LUẬN VĂN THẠC SĨ QUẢN LÝ GIÁO DỤC</h4>
            <div class="row main2">
                <div class="col-md-6 item-content">
                    <h3><span>1. Cấu trúc, hình thức luận văn thạc sĩ&nbsp;</span><em>(5 tài liệu)</em></h3>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Quy trình thực hiện luận văn thạc sĩ</span></p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>

                </div>
                <div class="col-md-6 item-content">
                    <h3><span>2. Cấu trúc, hình thức luận văn thạc sĩ&nbsp;</span><em>(5 tài liệu)</em></h3>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Quy trình thực hiện luận văn thạc sĩ</span></p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>

                </div>
                <div class="col-md-6 item-content">
                    <h3><span>3. Cấu trúc, hình thức luận văn thạc sĩ&nbsp;</span><em>(5 tài liệu)</em></h3>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Quy trình thực hiện luận văn thạc sĩ</span></p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>

                </div>
                <div class="col-md-6 item-content">
                    <h3><span>4. Cấu trúc, hình thức luận văn thạc sĩ&nbsp;</span><em>(5 tài liệu)</em></h3>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Quy trình thực hiện luận văn thạc sĩ</span></p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                    <p><img alt="" src="images/checked.png">&nbsp;<span>Cấu trúc trình bày bài luận văn thạc sĩ</span>
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section id="info">
        <div class="main3">
            <h3>ĐÃ CÓ <span>419</span> LƯỢT TẢI BỘ TÀI LIỆU LUẬN VĂN THẠC SĨ QUẢN LÝ GIÁO DỤC</h3>
            <p>Hãy tải về ngay</p>
            <div class="down"><a href="{{route('document_detail')}}"><span><i class="fas fa-download"></i>
                        Download</span></a></div>
        </div>
    </section>

    <section id="concern">
        <div class="container caption-document">
            <h4 class="caption">Có thể bạn quan tâm </h4>
            <div class="row">
                <div class="col-md-3 item-pro wow bounceInLeft">
                    <div class="product">
                        <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                                    src="images/img-tl.jpg" alt=""></a></div>
                        <div class="cap">
                            <a href="{{route('document_detail')}}">
                                <h4>Bộ Luận Văn Thạc Sĩ Quản Lý Giáo Dục</h4>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <p><i class="fas fa-download"></i><span> 419 </span> lượt tải</p>
                        <div class="down"><a href="{{route('document_detail')}}"><span>Download</span></a></div>
                    </div>
                </div>
                <div class="col-md-3 item-pro wow bounceInUp">
                    <div class="product">
                        <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                                    src="images/img-tl1.jpg" alt=""></a></div>
                        <div class="cap">
                            <a href="{{route('document_detail')}}">
                                <h4>Bộ Luận Văn Thạc Sĩ Quản Lý Giáo Dục</h4>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <p><i class="fas fa-download"></i><span> 419 </span> lượt tải</p>
                        <div class="down"><a href="{{route('document_detail')}}"><span>Download</span></a></div>
                    </div>
                </div>
                <div class="col-md-3 item-pro wow bounceInDown">
                    <div class="product">
                        <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                                    src="images/img-tl2.jpg" alt=""></a></div>
                        <div class="cap">
                            <a href="{{route('document_detail')}}">
                                <h4>Bộ Luận Văn Thạc Sĩ Quản Lý Giáo Dục</h4>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <p><i class="fas fa-download"></i><span> 419 </span> lượt tải</p>
                        <div class="down"><a href="{{route('document_detail')}}"><span>Download</span></a></div>
                    </div>
                </div>
                <div class="col-md-3 item-pro wow bounceInRight">
                    <div class="product">
                        <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                                    src="images/img-tl.jpg" alt=""></a></div>
                        <div class="cap">
                            <a href="{{route('document_detail')}}">
                                <h4>Bộ Luận Văn Thạc Sĩ Quản Lý Giáo Dục</h4>
                            </a>
                        </div>
                    </div>
                    <div class="info">
                        <p><i class="fas fa-download"></i><span> 419 </span> lượt tải</p>
                        <div class="down"><a href="{{route('document_detail')}}"><span>Download</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection