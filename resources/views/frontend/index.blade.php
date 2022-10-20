@extends('frontend.layouts.main')

@section('main-container')

    <!-- Home page part start-->
    <section>
        <div class="container">
            <div class="navlist-newspart">

                <!-- nav part start-->
                <div class="navlist">
                    <div class="sidenav">

                        <div class="date_time">
                            <h3>आइतवार, २ मंसिर २०७८</h3>
                        </div>

                        <div class="nav__list">

                            <a href="{{url('/')}}" class="nav__link active">
                                <i class='bx bx-home nav__icon'></i>
                                <span class="nav__name">होम पेज</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-layer nav__icon'></i>
                                    <span class="nav__name">क्याटागोरिज</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="{{url('/samachar')}}" class="nav__dropdown-item">समाचार</a>
                                        <a href="{{url('/rajniti')}}" class="nav__dropdown-item">राजनीति</a>
                                        <a href="{{url('/mofsal')}}" class="nav__dropdown-item">मोफसल</a>
                                        <a href="{{url('/manoranjan')}}" class="nav__dropdown-item">मनोरञ्जन</a>
                                        <a href="{{url('/sport')}}" class="nav__dropdown-item">खेलकुद</a>
                                        <a href="#" class="nav__dropdown-item">विविध</a>
                                    </div>
                                </div>
                            </div>



                            <a href="{{url('/bichar')}}" class="nav__link active">
                                <i class='bx bx-user-voice nav__icon'></i>
                                <span class="nav__name">विचार</span>
                            </a>

                            <a href="{{url('/corporate')}}" class="nav__link active">
                                <i class='bx bxs-bank nav__icon'></i>
                                <span class="nav__name">कर्पाेरट</span>
                            </a>

                            <a href="{{url('/share')}}" class="nav__link active">
                                <i class='bx bx-bar-chart-alt nav__icon'></i>
                                <span class="nav__name">शेयरबजार</span>
                            </a>

                            <a href="{{url('/international')}}" class="nav__link active">
                                <i class='bx bx-globe nav__icon'></i>
                                <span class="nav__name">अन्तरराष्ट्रिय</span>
                            </a>

                            <div class="details">
                                <div class="regester">
                                    <div class="info-reg">सूचना विभाग दर्ता नं:</div>
                                    <span></span>
                                </div>


                                <div class="regester">
                                    <div class="info-reg">Email:</div>
                                    <span>katuwalnews@gmail.com</span>
                                </div>

                                <div class="regester">
                                    <span>©Copyright Alvin media Pvt.Ltd
                                        <br>
                                        www.katuwal.com
                                        <br>
                                        all right recived 2022
                                    </span>
                                </div>

                                <div class="policy-service">
                                    <a href=""><span>Privacy Policy</span></a>
                                    <br>
                                    <a href=""><span>Terms of Service</span></a>

                                </div>


                            </div>





                        </div>
                    </div>
                </div>
                <!-- nav part end-->


                <!-- news part start-->
                <div class="newspart">

                    <!-- well come part start-->
                    <div class="wellcome">
                        <h1>इकटुवालमा स्वागत छ !</h1>

                        <div class="home-btn">
                            <a href="#"><button class="active">Main Story</button></a>
                            <a href="#"><button>Recent Story</button></a>
                            <a href="#"><button>Popular Story</button></a>
                        </div>
                    </div>
                    <!-- well come part end-->

                    <!-- banner adv-->
                    @foreach ($display_mainadv as $item1)
                    <div class="banner-adv">
                        <img src="{{ asset('uploads/mainadv/'.$item1->image) }}" alt="">
                    </div>
                    @endforeach
                    <!-- banner adv-->
                    @foreach ($display_slideradv as $item2)

                    <div class="owl-carousel">
                        <div class="item"><img src="{{ asset('uploads/slideradv/'.$item2->image1) }}" alt=""></div>
                        <div class="item"><img src="{{ asset('uploads/slideradv/'.$item2->image2) }}" alt=""></div>
                        <div class="item"><img src="{{ asset('uploads/slideradv/'.$item2->image3) }}" alt=""></div>
                        <div class="item"><img src="{{ asset('uploads/slideradv/'.$item2->image4) }}" alt=""></div>

                    </div>
                    @endforeach

                    @foreach ($display_news as $item)



                    <!-- Main news part start -->
                    <div class="main-news">

                        <div class="blog-image_main">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner oneslider">
                                    <img src="{{ asset('uploads/news/'.$item->image) }}" alt="">

                                    <div class="carousel-item active">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">{{$item->slide_h1}}
                                            </h5>
                                            <p class="animated zoomIn delay-1s">{{$item->slide_d1}}</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">{{$item->slide_h2}}
                                            </h5>
                                            <p class="animated zoomIn delay-1s">{{$item->slide_d2}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">{{$item->slide_h3}}</h5>
                                            <p class="animated zoomIn delay-1s">{{$item->slide_d3}}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tag bg-danger">{{$item->category}}</div>
                        </div>

                        <div class="blog-footer1">
                            <div class="blog-avatar"><img src="{{url('frontend/img/avatar1.png')}}"></div>
                            <div>
                                <span class="blog-author">ekatuwal</span>
                                <div class="blog-post">
                                    <span><i class="fa fa-clock-o"></i>{{$item->created_at}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-content">
                            <a href="{{url('/news'.'/'.$item->news_id)}}">

                                <div class="title">{{$item->headline}}</div>
                            </a>
                            <p class="lead-contant">{{$item->sub_headline}}
                            </p>
                        </div>

                        <hr>


                        {{-- like share comment part --}}

                        <div class="container__info">
                            <a href=""><span><i class='bx bx-heart'></i>1470</span></a>
                            <a href=""><span><i class='bx bx-comment'></i>624</span></a>
                            <a href=""><span><i class='bx bx-book-reader'></i>2350</span></a>

                        </div>

                    </div>
                    @endforeach

                    <div class="main-news">

                        <div class="blog-image_main">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner oneslider">
                                    <img src="{{url('frontend/img/fewa lake.jpg')}}" alt="">

                                    <div class="carousel-item active">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                            </h5>
                                            <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                तारा एयर
                                                विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                            </h5>
                                            <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                लोकेसन पत्ता
                                                लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                            <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tag bg-danger">राजनीति</div>
                        </div>

                        <div class="blog-footer1">
                            <div class="blog-avatar"><img src="{{url('frontend/img/avatar1.png')}}"></div>
                            <div>
                                <span class="blog-author">ekatuwal</span>
                                <div class="blog-post">
                                    <span><i class="fa fa-clock-o"></i>5 minutue ago</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-content">
                            <a href="newspage.html">
                                <div class="title">तारा एयरको विमान बेपत्ता</div>
                            </a>
                            <p class="lead-contant">पोखराबाट जोमसोम जाँदै गरेको तारा एयरको विमान म्याग्दीको
                                घोडेपानी क्षेत्रबाट विहान १०:०७ पछि सम्पर्कविहीन भएको थियो ।
                            </p>
                        </div>

                        <hr>

                        <div class="container__info">
                            <a href=""><span><i class='bx bx-heart'></i>1470</span></a>
                            <a href=""><span><i class='bx bx-comment'></i>624</span></a>
                            <a href=""><span><i class='bx bx-book-reader'></i>2350</span></a>

                        </div>

                    </div>
                    <!-- Main news part end -->



                    <!-- owl carousel adv start -->

                    <div class="owl-carousel">
                        <div class="item"><img src="{{url('frontend/adv/adv 1.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 2.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 3.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 4.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 1.gif')}}" alt=""></div>

                    </div>

                    <!-- owl carousel adv end -->

                    <div class="main-news">

                        <div class="blog-image_main">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner oneslider">
                                    <img src="{{url('frontend/img/fewa lake.jpg')}}" alt="">

                                    <div class="carousel-item active">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                            </h5>
                                            <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                तारा एयर
                                                विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                            </h5>
                                            <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                लोकेसन पत्ता
                                                लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                            <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tag bg-danger">राजनीति</div>
                        </div>

                        <div class="blog-footer1">
                            <div class="blog-avatar"><img src="{{url('frontend/img/avatar1.png')}}"></div>
                            <div>
                                <span class="blog-author">ekatuwal</span>
                                <div class="blog-post">
                                    <span><i class="fa fa-clock-o"></i>5 minutue ago</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-content">
                            <a href="newspage.html">
                                <div class="title">तारा एयरको विमान बेपत्ता</div>
                            </a>
                            <p class="lead-contant">पोखराबाट जोमसोम जाँदै गरेको तारा एयरको विमान म्याग्दीको
                                घोडेपानी क्षेत्रबाट विहान १०:०७ पछि सम्पर्कविहीन भएको थियो ।
                            </p>
                        </div>

                        <hr>

                        <div class="container__info">
                            <a href=""><span><i class='bx bx-heart'></i>1470</span></a>
                            <a href=""><span><i class='bx bx-comment'></i>624</span></a>
                            <a href=""><span><i class='bx bx-book-reader'></i>2350</span></a>

                        </div>

                    </div>

                    <div class="main-news">

                        <div class="blog-image_main">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner oneslider">
                                    <img src="{{url('frontend/img/fewa lake.jpg')}}" alt="">

                                    <div class="carousel-item active">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                            </h5>
                                            <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                तारा एयर
                                                विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                            </h5>
                                            <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                लोकेसन पत्ता
                                                लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-block">
                                            <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                            <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tag bg-danger">राजनीति</div>
                        </div>

                        <div class="blog-footer1">
                            <div class="blog-avatar"><img src="{{url('frontend/img/avatar1.png')}}"></div>
                            <div>
                                <span class="blog-author">ekatuwal</span>
                                <div class="blog-post">
                                    <span><i class="fa fa-clock-o"></i>5 minutue ago</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-content">
                            <a href="newspage.html">
                                <div class="title">तारा एयरको विमान बेपत्ता</div>
                            </a>
                            <p class="lead-contant">पोखराबाट जोमसोम जाँदै गरेको तारा एयरको विमान म्याग्दीको
                                घोडेपानी क्षेत्रबाट विहान १०:०७ पछि सम्पर्कविहीन भएको थियो ।
                            </p>
                        </div>

                        <hr>

                        <div class="container__info">
                            <a href=""><span><i class='bx bx-heart'></i>1470</span></a>
                            <a href=""><span><i class='bx bx-comment'></i>624</span></a>
                            <a href=""><span><i class='bx bx-book-reader'></i>2350</span></a>

                        </div>

                    </div>


                    <div class="owl-carousel">
                        <div class="item"><img src="{{url('frontend/adv/adv 1.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 2.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 3.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 4.gif')}}" alt=""></div>
                        <div class="item"><img src="{{url('frontend/adv/adv 1.gif')}}" alt=""></div>

                    </div>



                </div>

                <!-- news part end-->


                <!-- left part start -->
                <div class="sidepart">

                    <div class="side-story">
                        <div class="btn-part">
                            <button>Recent story</button>
                        <!-- <a href="#"><button class="all"><i class='bx bx-list-plus icon'></i></button></a> -->
                        <a href=""><i class='bx bx-list-plus icon'></i></a>
                        </div>
                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>
                    </div>

                    <div class="side">
                        <img src="{{url('frontend/adv/adv 1.gif')}}" alt="">
                        <img src="{{url('frontend/adv/adv 2.gif')}}" alt="">
                        <img src="{{url('frontend/adv/adv 3.gif')}}" alt="">

                    </div>

                    <div class="popular-story">
                        <div class="btn-part">
                            <button>पपुलर स्टोरी</button>
                        <!-- <a href="#"><button class="all"><i class='bx bx-list-plus icon'></i></button></a> -->
                        <a href=""><i class='bx bx-list-plus icon'></i></a>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>

                        <div class="story">
                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner oneslider">
                                        <img src="{{url('frontend/img/bicher 3.jpg')}}" alt="">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">तारा एयरको वेपत्ता
                                                </h5>
                                                <p class="animated zoomIn delay-1s">पोखराबाट जोमसोमका लागि उडेको
                                                    तारा एयर
                                                    विमान आज विहान ८ बजेदेखि सम्पर्क विहीन भएको हो ।</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">उद्धारमा नेपाली सेना
                                                </h5>
                                                <p class="animated zoomIn delay-1s">नेपाली सेनाका १० जना र
                                                    नेपाल नागरिक उड्डयन प्राधिकरणका दुई जनाको टोली मोबाइलको
                                                    लोकेसन पत्ता
                                                    लागेको तर्फ गएको नेपाल नागरिक उड्डयन प्राधिकरणले बताएको छ ।
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-block">
                                                <h5 class="animated slideInLeft delay-1s">कति थिए यात्रु ?</h5>
                                                <p class="animated zoomIn delay-1s">विमान नेपाली र विदेशी गरी २२
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="title">पोखराबाट जोमसोमका लागि उडेको तारा एयरको विमान वेपत्ता</div>
                        </div>
                    </div>

                    <div class="side">
                        <img src="{{url('frontend/adv/adv 1.gif')}}" alt="">
                        <img src="{{url('frontend/adv/adv 2.gif')}}" alt="">
                        <img src="{{url('frontend/adv/adv 3.gif')}}" alt="">


                    </div>

                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=250px&height=500&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
                        width="250px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>

                    <!-- <a class="twitter-timeline" href="https://twitter.com/2dayInbox?ref_src=twsrc%5Etfw">Tweets by
                        2dayInbox</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                </div>
                <!-- left part end -->
            </div>
        </div>

    </section>

    <!-- Home page part end-->







    <!-- up button -->

    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>




    <!--  mobile navbar start -->
    <section>
        <div id="mySidenav" class="slading">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="media-nav">

                <div class="mainlogo">
                    <img src="{{url('frontend/img/katwal master head.png')}}" alt="">
                </div>
                <div class="date_time">
                    <h3>आइतवार, २ मंसिर २०७८</h3>
                </div>

                <div class="nav__list">

                    <a href="{{url('/')}}" class="nav__link active">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">होम पेज</span>
                    </a>

                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-layer nav__icon'></i>
                            <span class="nav__name">क्याटागोरिज</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="{{url('/samachar')}}" class="nav__dropdown-item">समाचार</a>
                                <a href="{{url('/rajniti')}}" class="nav__dropdown-item">राजनीति</a>
                                <a href="{{url('/mofsal')}}" class="nav__dropdown-item">मोफसल</a>
                                <a href="{{url('/manoranjan')}}" class="nav__dropdown-item">मनोरञ्जन</a>
                                <a href="{{url('/sport')}}" class="nav__dropdown-item">खेलकुद</a>
                                <a href="#" class="nav__dropdown-item">विविध</a>
                            </div>
                        </div>
                    </div>



                    <a href="{{url('/bichar')}}" class="nav__link active">
                        <i class='bx bx-user-voice nav__icon'></i>
                        <span class="nav__name">विचार</span>
                    </a>

                    <a href="{{url('/corporate')}}" class="nav__link active">
                        <i class='bx bxs-bank nav__icon'></i>
                        <span class="nav__name">कर्पाेरट</span>
                    </a>

                    <a href="{{url('/share')}}" class="nav__link active">
                        <i class='bx bx-bar-chart-alt nav__icon'></i>
                        <span class="nav__name">शेयरबजार</span>
                    </a>

                    <a href="{{url('/international')}}" class="nav__link active">
                        <i class='bx bx-globe nav__icon'></i>
                        <span class="nav__name">अन्तरराष्ट्रिय</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--  mobile navbar end -->






@endsection
