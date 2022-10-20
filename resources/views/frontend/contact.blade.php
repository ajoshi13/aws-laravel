@extends('frontend.layouts.main')

@section('main-container')


    <section>

        <div class="section-header">
          <div class="container">
            <h2>Contact Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>

        <div class="container">
          <div class="row">

            <div class="contact-info">
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-home"></i>
                </div>

                <div class="contact-info-content">
                  <h4>Address</h4>
                  <p>Kathmandu Metropolitan City,<br/> Chamati-15 <br/>House No: 135</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-phone"></i>
                </div>

                <div class="contact-info-content">
                  <h4>Phone</h4>
                  <p>9841371932</p>
                </div>
              </div>

              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-envelope"></i>
                </div>

                <div class="contact-info-content">
                  <h4>Email</h4>
                 <p>ekatuwal@gmail.com</p>
                </div>
              </div>
            </div>

            <div class="contact-form">
              <form action="" id="contact-form">
                <h2>Send Message</h2>
                <div class="input-box">
                  <input type="text" required="true" name="">
                  <span>Full Name</span>
                </div>

                <div class="input-box">
                  <input type="email" required="true" name="">
                  <span>Email</span>
                </div>

                <div class="input-box">
                    <input type="email" required="true" name="">
                    <span>Phone Number</span>
                  </div>

                <div class="input-box">
                  <textarea required="true" name=""></textarea>
                  <span>Type your Message...</span>
                </div>

                <div class="input-box">
                  <input type="submit" value="Send" name="">
                </div>
              </form>
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
                            <img src="{{url('frontend/img/katwal master logo.png')}}" alt="">
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
                                <img src="{{url('frontend/img/katwal main logo.png')}}" />
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
