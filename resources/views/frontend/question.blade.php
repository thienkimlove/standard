@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <div class="contentLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Câu hỏi thường gặp</li>
                </ul>
                <div class="boxQuestion">
                    <h3 class="globalTitle">
                        <a href="#">Góc chuyên gia</a>
                    </h3>
                    <div class="headQuestion clearFix">
                        <a href="#" class="thumb">
                            <img src="{{url('frontend/imgs/bg/avatar.png')}}" alt="">
                        </a>
                        <h3>
                            Tư vấn cách giảm tái phát viêm đường hô hấp cho trẻ
                        </h3>
                        <p>
                            Độc giả có thể gửi câu hỏi trực tiếp vào bảng đặt câu hỏi dưới đây, hoặc gửi trực tiếp vào Email:
                            <a href="#">tuvansuckhoe.bsdinh@gmail.com</a>
                            <a href="#">tuvanbigbb@gmail.com</a>
                        </p>
                    </div>
                    <div class="boxForm">
                        <h3>Gửi Câu hỏi</h3>
                        <div class="boxConsult clearFix">
                            <form action="consult.php" method="post" class="formConsult">
                                <input type="text" placeholder="* Họ và tên bố (mẹ)" class="txt txtName">
                                <input type="text" placeholder="* Tuổi" class="txt txtName">
                                <input type="text" placeholder="* Điện thoại liên hệ" class="txt txtMob">
                                <input type="text" placeholder="* Email" class="txt txtMob">
                                <input type="text" placeholder="* Địa chỉ liên hệ" class="txt txtMob">
                                <input type="text" placeholder="* Tiêu đề hỏi đáp" class="txt txtName">
                                <textarea name="comments" class="txt txtArea" placeholder="* Nội dung"></textarea>
                                <input type="reset" value="Hủy" class="btnReset">
                                <input type="submit" value="Gửi đi" class="btnSubmit">
                            </form>
                        </div>
                    </div>
                    <!-- //listQuestion -->
                    <article class="item">
                        <h3 class="title-faq"><span>1</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item bg">
                        <h3 class="title-faq"><span>2</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <h3 class="title-faq"><span>3</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item bg">
                        <h3 class="title-faq"><span>4</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <h3 class="title-faq"><span>4</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item bg">
                        <h3 class="title-faq"><span>5</span>Biệt Đội Săn Tiền Thưởng</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>C NATTU KIDS là sản phẩm đầu tiên sử dụng vitamin C tự nhiên từ acerola cherry</span>
                            </p>
                            <time class="time" datetime="2014/09/20">20/09/2014</time>
                        </div>
                        <div id="accordion">
                            <a href="javascript:void();" class="answer">Xem trả lời</a>
                            <div class="accordion">
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- /endboxNews -->
            </div>
            <div class="contentRight">
                <div class="boxVideo">
                    <h3 class="globalTitle">
                        <a href="#">Góc Video</a>
                    </h3>
                    <div class="content">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/4QEmJ3sPHIg" frameborder="0" allowfullscreen></iframe>
                        <ul class="listVideo">
                            <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                            <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                            <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                        </ul>
                    </div>
                </div>
                <div class="boxSale">
                    <h3 class="globalTitle">
                        <a href="#">Cộng đồng mẹ thông thái</a>
                    </h3>
                    <div class="Social">
                        <div class="fb-page" data-href="https://www.facebook.com/tuelinh.vn" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tuelinh.vn"><a href="https://www.facebook.com/tuelinh.vn">Tuệ Linh</a></blockquote></div></div>
                    </div>
                </div>
                <!-- /endSale -->
                <div class="boxHot clearFix sideBar">
                    <h3 class="globalTitle"><a href="#">Tin nổi bật</a></h3>
                    <div class="item clearFix">
                        <a href="#" class="thumb">
                            <img src="imgs/temp/hot01.jpg" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="#">Probiotics (men vi sinh) là những vi khuẩn có lợi cho đường ruột</a>
                        </h4>
                    </div>
                    <div class="item clearFix">
                        <a href="#" class="thumb">
                            <img src="imgs/temp/hot01.jpg" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="#">Probiotics (men vi sinh) là những vi khuẩn có lợi cho đường ruột</a>
                        </h4>
                    </div>
                    <div class="item clearFix">
                        <a href="#" class="thumb">
                            <img src="imgs/temp/hot01.jpg" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="#">Probiotics (men vi sinh) là những vi khuẩn có lợi cho đường ruột</a>
                        </h4>
                    </div>
                    <div class="item clearFix">
                        <a href="#" class="thumb">
                            <img src="imgs/temp/hot01.jpg" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="#">Probiotics (men vi sinh) là những vi khuẩn có lợi cho đường ruột</a>
                        </h4>
                    </div>
                    <div class="item clearFix">
                        <a href="#" class="thumb">
                            <img src="imgs/temp/hot01.jpg" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="#">Probiotics (men vi sinh) là những vi khuẩn có lợi cho đường ruột</a>
                        </h4>
                    </div>
                </div>
                <!-- /endHot -->
            </div>
        </div>
    </section>
@endsection