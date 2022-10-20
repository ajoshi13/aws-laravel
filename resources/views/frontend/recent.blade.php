@extends('frontend.layouts.main')

@section('main-container')

    <section>
        <div class="container">
            <div class="navlist-newspart">
                <!-- nav part start-->

                <div class="navlist">
                    <div class="sidenav">
                        <!-- <div class="mainlogo">
                            <img src="img/katwal master head.png" alt="">
                        </div> -->
                        <div class="date_time">
                            <h3>आइतवार, २ मंसिर २०७८</h3>
                        </div>

                        <div class="nav__list">

                            <a href="#" class="nav__link active">
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
                                        <a href="Rajiniti.html" class="nav__dropdown-item">समाचार</a>
                                        <a href="#" class="nav__dropdown-item">राजनीति</a>
                                        <a href="#" class="nav__dropdown-item">मोफसल</a>
                                        <a href="#" class="nav__dropdown-item">मनोरञ्जन</a>
                                        <a href="#" class="nav__dropdown-item">खेलकुद</a>
                                        <a href="#" class="nav__dropdown-item">विविध</a>
                                    </div>
                                </div>
                            </div>



                            <a href="#" class="nav__link active">
                                <i class='bx bx-user-voice nav__icon'></i>
                                <span class="nav__name">विचार</span>
                            </a>

                            <a href="#" class="nav__link active">
                                <i class='bx bxs-bank nav__icon'></i>
                                <span class="nav__name">कर्पाेरट</span>
                            </a>

                            <a href="#" class="nav__link active">
                                <i class='bx bx-bar-chart-alt nav__icon'></i>
                                <span class="nav__name">शेयरबजार</span>
                            </a>

                            <a href="#" class="nav__link active">
                                <i class='bx bx-globe nav__icon'></i>
                                <span class="nav__name">अन्तरराष्ट्रिय</span>
                            </a>

                            <div class="details">
                                <div class="regester">
                                    <div class="info-reg">सूचना विभाग दर्ता नं:</div>
                                    <span>१९७/०७३-७४</span>
                                </div>


                                <div class="regester">
                                    <div class="info-reg">Email:</div>
                                    <span>katuwalnews@gmail.com</span>
                                </div>

                                <div class="regester">
                                    <span>©Copyright Alvin media Pvt.Ltd
                                    <br>
                                    www.katwal.com
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

                    <div class="wellcome">
                        <h1>Well Come in ekatuwal</h1>

                        <div class="home-btn">
                            <a href="#"><button>Main Story</button></a>
                            <a href="#"><button class="active">Recent Story</button></a>
                            <a href="#"><button>Popular Story</button></a>
                        </div>
                    </div>

                    <div class="banner-adv">
                        <img src="adv/web adv.gif" alt="">
                    </div>




                    <div class="main-news">

                        <div class="main-slide">

                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide"
                                    data-bs-ride="carousel">

                                    <div class="carousel-inner oneslider">
                                        <img src="img/fewa lake.jpg" alt="">

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
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tag bg-danger">राजनीति</div>
                            </div>

                            <div class="blog-footer1">
                                <div class="blog-avatar"><img src="img/katwal main logo.png"></div>
                                <div>
                                    <span class="blog-author">ekatuwal</span>
                                    <div class="blog-post">
                                        <span><i class="fa fa-clock-o"></i>5 minutue ago</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-content">
                                <a href="news.html">
                                    <div class="title">जोमसोम जाँदै गरेको तारा एयरको विमान बेपत्ता</div>
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
                    </div>

                    <div class="main-news">

                        <div class="main-slide">

                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide"
                                    data-bs-ride="carousel">

                                    <div class="carousel-inner oneslider">
                                        <img src="img/fewa lake.jpg" alt="">

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
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tag bg-danger">राजनीति</div>
                            </div>

                            <div class="blog-footer1">
                                <div class="blog-avatar"><img src="img/avatar1.png"></div>
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
                    </div>

                    <div class="owl-carousel">
                        <div class="item"><img src="adv/adv 1.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 2.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 3.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 4.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 1.gif" alt=""></div>
                    </div>


                    <div class="main-news">

                        <div class="main-slide">

                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide"
                                    data-bs-ride="carousel">

                                    <div class="carousel-inner oneslider">
                                        <img src="img/fewa lake.jpg" alt="">

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
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tag bg-danger">राजनीति</div>
                            </div>

                            <div class="blog-footer1">
                                <div class="blog-avatar"><img src="img/avatar1.png"></div>
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
                    </div>


                    <div class="main-news">

                        <div class="main-slide">

                            <div class="blog-image_main">
                                <div id="carouselExampleCaptions" class="carousel slide"
                                    data-bs-ride="carousel">

                                    <div class="carousel-inner oneslider">
                                        <img src="img/fewa lake.jpg" alt="">

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
                                                    जना यात्रु थिए । जसमा १७ जना यात्रु र चालक दलका ३ जना सदस्य छन् ।</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tag bg-danger">राजनीति</div>
                            </div>

                            <div class="blog-footer1">
                                <div class="blog-avatar"><img src="img/avatar1.png"></div>
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
                    </div>

                    <div class="owl-carousel">
                        <div class="item"><img src="adv/adv 1.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 2.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 3.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 4.gif" alt=""></div>
                        <div class="item"><img src="adv/adv 1.gif" alt=""></div>
                    </div>





                </div>


                <!-- left part -->
                <div class="sidepart">
                    <div class="side">
                        <img src="adv/adv 1.gif" alt="">
                        <img src="adv/adv 2.gif" alt="">
                        <img src="adv/adv 3.gif" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>









    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>




    <!-- media nav -->

    <section>
        <div id="mySidenav" class="slading">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="media-nav">

                <div class="mainlogo">
                    <img src="img/katwal master head.png" alt="">
                </div>
                <div class="date_time">
                    <h3>आइतवार, २ मंसिर २०७८</h3>
                </div>

                <div class="nav__list">

                    <a href="#" class="nav__link active">
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
                                <a href="Rajiniti.html" class="nav__dropdown-item">समाचार</a>
                                <a href="samachar.html" class="nav__dropdown-item">राजनीति</a>
                                <a href="#" class="nav__dropdown-item">मोफसल</a>
                                <a href="#" class="nav__dropdown-item">मनोरञ्जन</a>
                                <a href="#" class="nav__dropdown-item">खेलकुद</a>
                                <a href="#" class="nav__dropdown-item">विविध</a>
                            </div>
                        </div>
                    </div>



                    <a href="#" class="nav__link active">
                        <i class='bx bx-user-voice nav__icon'></i>
                        <span class="nav__name">विचार</span>
                    </a>

                    <a href="#" class="nav__link active">
                        <i class='bx bxs-bank nav__icon'></i>
                        <span class="nav__name">कर्पाेरट</span>
                    </a>

                    <a href="#" class="nav__link active">
                        <i class='bx bx-bar-chart-alt nav__icon'></i>
                        <span class="nav__name">शेयरबजार</span>
                    </a>

                    <a href="#" class="nav__link active">
                        <i class='bx bx-globe nav__icon'></i>
                        <span class="nav__name">अन्तरराष्ट्रिय</span>
                    </a>
                </div>
            </div>
        </div>
    </section>









   @endsection
