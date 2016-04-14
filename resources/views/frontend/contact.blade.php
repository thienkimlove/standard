@extends('frontend')

@section('content')
    <section class="section vis">
        <div class="container">
            <div class="contentLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Liên hệ</li>
                </ul>
                <div class="boxContact">
                    <div class="item">
                        <h3 class="globalTitle">
                            <a href="#">Liên hệ</a>
                        </h3>
                        <p>
                            Địa chỉ liên hệ <br>
                            <strong>Tại Hà Nội</strong> <br>
                            Địa chỉ: Tầng 5 tòa nhà 29T1, <br>
                            phố Hoàng Đạo Thúy, Trung Hòa, <br>
                            Cầu Giấy, Hà Nội <br>
                            ĐT: 04.62824344 <br>
                            Fax: 04.62824263 <br>
                        </p>
                        <p>
                            <strong>Chi nhánh TP. HCM</strong> <br>
                            Địa chỉ:156/17 Tô Hiến Thành. P15 Q10. <br>
                            TP.HCM <br>
                            ĐT: 083.9797779 <br>
                            Fax: 086.2646832 <br>
                            Đường dây nóng: 0912571190. <br>
                        </p>
                    </div>
                    <div class="boxForm">
                        <div class="boxConsult clearFix">
                            <form action="consult.php" method="post" class="formConsult">
                                <input type="text" placeholder="Họ và tên" class="txt txtName">
                                <input type="text" placeholder="Mobile" class="txt txtMob">
                                <textarea name="comments" class="txt txtArea" placeholder="Câu hỏi"></textarea>
                                <input type="reset" value="Hủy" class="btnReset">
                                <input type="submit" value="Gửi đi" class="btnSubmit">
                            </form>
                        </div>
                    </div>
                    <div class="boxMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.483493048278!2d105.8014624!3d21.007829299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5a02fbb0f5%3A0x75b5e966c9fb8bc0!2zQ8O0bmcgdHkgVE5ISCBUdeG7hyBMaW5o!5e0!3m2!1svi!2s!4v1441615369587" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
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