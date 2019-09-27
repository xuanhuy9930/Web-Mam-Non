@extends('master-layout')

@section('title')
Trang tài liệu
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="scss/document.css">
<link rel="stylesheet" type="text/css" href="scss/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
@endsection

@section('js')
<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
<script>new WOW().init();</script>
@endsection

@section('content')
<main>
  <section id="document">

    <div class="container">
      <div class="link">
        <h6><a href="#">Trang chủ</a> <i class="fas fa-angle-right"></i> <a href="{{route('document')}}">Tài liệu</a>
        </h6>
      </div>
      <div class="caption-document">
        <div class="row">
          <div class="col-md-9">
            <h4 class="caption">Tài liệu tổng hợp</h4>
            <div class="row">
              <div class="col-md-4 item-pro wow bounceInLeft">
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
              <div class="col-md-4 item-pro wow bounceInUp">
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
              <div class="col-md-4 item-pro wow bounceInDown">
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
              <div class="col-md-4 item-pro wow bounceInRight">
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
              <div class="col-md-4 item-pro wow bounceInDown">
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
              <div class="col-md-4 item-pro wow bounceInUp">
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
              <div class="col-md-4 item-pro wow bounceInLeft">
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
              <div class="col-md-4 item-pro wow bounceInUp">
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
              <div class="col-md-4 item-pro wow bounceInUp">
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

            </div>
          </div>
          <div class="col-md-3">
            <h4 class="caption">Tài liệu mới nhất</h4>
            <div class="item-pro1 wow bounceInUp">
              <div class="product">
                <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                      src="images/img-tl4.jpg" alt=""></a></div>
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
            <div class="item-pro1 wow bounceInDown">
              <div class="product">
                <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                      src="images/img-tl5.jpg" alt=""></a></div>
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
            <div class="item-pro1 wow bounceInRight">
              <div class="product">
                <div class="image"><a href="{{route('document_detail')}}"><img class="img-fluid"
                      src="images/img-tl5.jpg" alt=""></a></div>
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
      </div>
      <div class="paging">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </div>

  </section>
</main>
@endsection