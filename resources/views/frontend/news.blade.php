@extends('frontend.layouts.main')

@section('main-container')

    <section>
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner oneslider">
                    <img src="{{ asset('uploads/news/'.$news->image) }}" alt="">

                    <div class="carousel-item active" data-bs-interval="7000">
                        <div class="carousel-caption d-block">
                            <h5 class="animated slideInUp delay-1s">{{$news->slide_h1}}</h5>
                            <p class="animated zoomIn delay-1s">{{$news->slide_d1}}</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <div class="carousel-caption d-block">
                            <h5 class="animated slideInUp delay-1s">{{$news->slide_h2}}</h5>
                            <p class="animated zoomIn delay-1s">{{$news->slide_d2}}
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <div class="carousel-caption d-block">
                            <h5 class="animated slideInUp delay-1s">{{$news->slide_h3}}</h5>
                            <p class="animated zoomIn delay-1s">{{$news->slide_d3}}</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row gx-5 newspart text-alingment-start">
                <div class="col-sm-8">
                    <button type="button" class="btn btn-warning">{{$news->category}}</button>

                    <h1>{{$news->headline}}</h1>

                    <div class="blog-footer1">
                        <div class="blog-avatar"><img src="{{url('frontend/img/avatar1.png')}}"></div>
                        <div>
                            <span class="blog-author">ekatuwal</span>
                            <div class="blog-post">
                                <span><i class="fa fa-clock-o"></i>{{$news->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="single_social_icon">
                        <a class="icons-sm fb-ic" href="#"><i class="fa-brands fa-facebook-f"></i><span></span></a>
                        <a class="icons-sm tw-ic" href="#"><i class="fa-brands fa-twitter"></i><span></span></a>
                        <a class="icons-sm gplus-ic" href="#"><i class="fa-brands fa-instagram"></i><span></span></a>
                        <a class="icons-sm li-ic" href="#"><i class="fa-brands fa-viber"></i><span></span></a>
                    </div>
                    <hr>

                    <div class="item_content">
                        <p>
                            {{$news->description}}
                        </p>
                    </div>
{{--
                    <div class="paritkeya">
                        <div class="commemt">पाठकको प्रतिक्रिया</div>

                        <div class="comentbox">
                            <img src="{{url('frontend/img/rajpachay.jpg')}}" alt="">
                            <div class="comment-post">
                                <h5>रामबहादुर तामाङ</h5>
                                <p>सम्पदा क्षेत्रमा गैरकानुनी ढंगबाट काम भएकाले यसबारे सबैले चासो दिनुपर्ने उनको मत छ ।
                                    पोखरीलाई पुरानै स्वरुपमा मर्मत र सफाइ गरेर पुनर्स्थापित गनुपर्ने उनको भनाइ छ ।
                                </p>
                            </div>

                        </div>

                        <hr>

                        <div class="comentbox">
                            <img src="img/rajpachay.jpg" alt="">
                            <div class="comment-post">
                                <h5>रामबहादुर तामाङ</h5>
                                <p>सम्पदा क्षेत्रमा गैरकानुनी ढंगबाट काम भएकाले यसबारे सबैले चासो दिनुपर्ने उनको मत छ ।
                                    पोखरीलाई पुरानै स्वरुपमा मर्मत र सफाइ गरेर पुनर्स्थापित गनुपर्ने उनको भनाइ छ ।
                                </p>
                            </div>

                        </div>
                        <hr>
                        <div class="comentbox">
                            <img src="img/rajpachay.jpg" alt="">
                            <div class="comment-post">
                                <h5>रामबहादुर तामाङ</h5>
                                <p>सम्पदा क्षेत्रमा गैरकानुनी ढंगबाट काम भएकाले यसबारे सबैले चासो दिनुपर्ने उनको मत छ ।
                                    पोखरीलाई पुरानै स्वरुपमा मर्मत र सफाइ गरेर पुनर्स्थापित गनुपर्ने उनको भनाइ छ ।
                                </p>
                            </div>

                        </div>
                        <hr>
                    </div> --}}
{{--
                    <div class="add_a_comment">
                        <h2>प्रतिक्रिया दिनुहोस्</h2>
                        <div class="comment_form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                                <div class="form-group comment">
                                    <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-submit red">Submit</button>
                            </form>
                        </div>
                    </div>
                </div> --}}



                <div class="col-sm-4 relete">
                    <img src="{{url('frontend/adv/adv 1.gif')}}" alt="">
                    <img src="{{url('frontend/adv/adv 2.gif')}}" alt="">
                    <img src="{{url('frontend/adv/adv 3.gif')}}" alt="">
                    <img src="{{url('frontend/adv/adv 1.gif')}}" alt="">

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
                            <span>सूचना विभाग दर्ता नं: १९७/०७३-७४</span>
                            <span>Editor-in-Chief: Jiwendra Simkhada</span>
                            <span>Chairman: Bijaya Sharma</span>
                            <span>KUPONDOLE HEIGHT, LALITPUR</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer_mid">
                            <h2>Qucik Menu</h2>
                            <div class="menu-item">
                                <a href="" class="quick-lilnk">Home Page</a>
                                <a href="" class="quick-lilnk">About Us</a>
                            </div>



                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-last">
                            <h2>Editor’s Message</h2>

                            <div class="message">
                                <img src="img/katwal main logo.png"/>
                                <span>Collaborativelyadministrate empowered
                                    marketsplug-and-play networks. Dynamic procrastinate after.marketsplug-and-play
                                    networks. Dynamic procrastinate users after. Dynamic procrastinateafter.
                                    marketsplug-and-play networks. Dynamic procrastinate users after...</span>
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
                        <a href="https://uiCookies.com"title="uiCookies">uiCookies</a>
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
                    <img src="img/katwal master logo.png" alt="">
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
                                <a href="samachar.html" class="nav__dropdown-item">समाचार</a>
                                <a href="Rajiniti.html" class="nav__dropdown-item">राजनीति</a>
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
