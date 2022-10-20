@extends('frontend.layouts.main')

@section('main-container')


    <section>
        <div class="container">
            <div class="category">
                <img src="img/katwal logo 1.png" alt="">
                <span>खेलकुद</span>
            </div>
        </div>
    </section>
    <hr>




    <section>
        <div class="container">
            <div class="rajniti">

                @foreach ($display_sport as $item)

                <div class="main-slide">
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
                                        <p class="animated zoomIn delay-1s">{{$item->slide_d2}}                                     </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption d-block">
                                        <h5 class="animated slideInLeft delay-1s">{{$item->slide_h3}}</h5>
                                        <p class="animated zoomIn delay-1s">{{$item->slide_d3}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tag bg-danger">खेलकुद</div>
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
                        <a href="news.html">
                            <div class="title">{{$item->headline}}</div>
                        </a>
                    </div>
                </div>
                @endforeach

                <div class="main-slide">
                    <div class="blog-image_main">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


                        </div>
                    </div>

                    <div class="blog-content">

                    </div>
                </div>

                <div class="main-slide">
                    <div class="blog-image_main">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


                </div>
            </div>
        </div>
    </section>














    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


    <footer class="footer_section section_wrapper section_wrapper">
        <div class="footer_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-left">
                            <img src="img/katwal master logo.png" alt="">
                            <span>सूचना विभाग दर्ता नं: .....</span>
                            <span>Editor-in-Chief: .......</span>
                            <span>Chairman: ...........</span>
                            <span>KTM-15, SWYAMBHU</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer_mid">
                            <h2>Quick Menu</h2>
                            <div class="menu-item">
                                <a href="/" class="quick-lilnk">Home Page</a>
                                <a href="/about" class="quick-lilnk">About Us</a>
                            </div>



                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-last">
                            <h2>Editor’s Message</h2>

                            <div class="message">
                                <img src="{{url('frontend/img/katwal main logo.png')}}" />
                                <span>
                                    नेपालमा भौगोलिक तथा भूसांस्कृतिक क्षेत्र अनुसार कटुवाल प्रथाको विभिन्न स्वरुप रहेको
                                    भए सामाजिक, सांस्कृतिक वा प्रशासनिक आधिकारिकता भएको व्यक्तिले अह्राए अनुसार सूचनाको
                                    सार्वजनिक संप्रेषण गर्ने व्यक्तिलाई नेपाली परम्परागत समाजमा कटुवाल भनेर परिभाषित
                                    गरेको छ ।
                                    <br>
                                    यसै प्रथालाई अहिले सूचनाप्रविधिको युगमा जमानाअनुसार परिस्कृत गर्ने प्रयास गरेका छौं ।
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copy">
            <div class="container">
                <div class="last-footer">
                    <div class="copyright">
                        © Copyright 2022 - ekatuwal.com
                        <a href="https://uiCookies.com" title="uiCookies">uiCookies</a>
                    </div>

                    <div class="devlopment">
                        Development By : Alvin Media Pvt.Ltd
                    </div>
                </div>

            </div>
        </div>


    </footer>

    <!-- media nav -->

    <section>
        <div id="mySidenav" class="slading">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="media-nav">

                <div class="mainlogo">
                    <img src="{{url('frontend/img/katwal master logo.png')}}" alt="">
                </div>
                <div class="date_time">
                    <h3>आइतवार, २ मंसिर २०७८</h3>
                </div>

                <div class="nav__list">

                    <a href="/" class="nav__link active">
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
                                <a href="/samachar" class="nav__dropdown-item">समाचार</a>
                                <a href="/rajniti" class="nav__dropdown-item">राजनीति</a>
                                <a href="/mofsal" class="nav__dropdown-item">मोफसल</a>
                                <a href="/manoranjan" class="nav__dropdown-item">मनोरञ्जन</a>
                                <a href="/sport" class="nav__dropdown-item">खेलकुद</a>
                                <a href="" class="nav__dropdown-item">विविध</a>
                            </div>
                        </div>
                    </div>



                    <a href="#" class="nav__link active">
                        <i class='bx bx-user-voice nav__icon'></i>
                        <span class="/bichar">विचार</span>
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
