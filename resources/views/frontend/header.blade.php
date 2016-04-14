<section class="menuIcon pc">
    <div class="listIcons">
        <ul>
            <li><a href="#" class="iSearch">Search</a></li>
            <li><a href="#" class="iYou">Youtube</a></li>
            <li><a href="#" class="iSkype">Skype</a></li>
            <li><a href="#" class="iGoogle">Google</a></li>
        </ul>
    </div>
</section>
<header class="header">
    <div class="container">
        <h1 class="clearFix">
            <a href="#" class="logo" title="Logo">
                <img src="{{url('frontend/imgs/logo.png')}}" alt="Vitamin C" width="225" height="125" class="pc">
                <img src="{{url('frontend/imgs/logosp.png')}}" alt="Vitamin C" width="295" height="100" class="sp">
            </a>
        </h1>
        <ul id="globalNav" class="pc">
            <li><a href="{{url('/')}}" class="active">Trang chủ</a></li>

            @foreach ($headerCategories->shift() as $headerCategory)
                <li>
                    <a href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                    @if ($headerCategory->subCategories->count() > 0)
                        <ul>
                            @foreach ($headerCategory->subCategories as $childCategory)
                                <li><a href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach


            <li>
                <a href="#">Vitamin C</a>
                <ul>
                    @foreach ($menuProducts as $product)
                    <li><a href="{{url('product/'.$product->slug)}}">{{$product->title}}</a></li>
                    @endforeach
                </ul>
            </li>


            @foreach ($headerCategories->shift() as $headerCategory)
                <li>
                    <a href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                    @if ($headerCategory->subCategories->count() > 0)
                        <ul>
                            @foreach ($headerCategory->subCategories as $childCategory)
                                <li><a href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach


            <li><a href="{{url('video')}}">Videos</a></li>
            <li><a href="{{url('cau-hoi-thuong-gap')}}">CÂU HỎI <br>THƯỜNG GẶP</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
<!-- /endHeader -->
<section class="boxBanner">
    <div class="boxSlider">
        <div class="owl-carousel" id="slideIndex">
            <div class="item">
                <a class="thumb" href="" title="">
                    <img src="{{url('frontend/imgs/temp/banner02.jpg')}}"/>
                </a>
            </div>
            <div class="item">
                <a class="thumb" href="" title="">
                    <img src="{{url('frontend/imgs/temp/banner02.jpg')}}"/>
                </a>
            </div>
        </div>
    </div>
    <!--//box-Banner-->
</section>