@extends('front.master')
@section('title')
    Aqualink
@endsection
@section('body')
    <div id="content" role="main">
        <article>
            <section>
                <div id="particles-js"></div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row" id="about">
                                <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s"> About Us </h1>
                                <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                                    <div class="divider-border-inner" style="width:60px;"> </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s"> GET BEST <br>SOLUTIONS BY <br>OUR SERVICES</h1>
                                    <ul class="features-list element-top-90 element-bottom-20" data-os-animation="none" data-os-animation-delay="0s">
                                        <li class="element-top-20 element-bottom-20 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">

                                            <p class="lead"> <i class="icon-monitor" ></i> WE GUARANTEE QUALITY WORK</p>

                                        </li>
                                        <li class=" element-top-20 element-bottom-20 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.1s">

                                            <p class="lead"> <i class="icon-monitor" ></i> RIGHT PLACE FOR GREAT SERVICE</p>

                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="figure element-top-40 element-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.1s"> <span class="figure-image">
                                    <img alt="services-circle-2-1.png" src="{{ asset('/') }}front/assets/images/services/services-circle-2-1.png" class="img-responsive">
                                </span> </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="background-media" style="background-image: url('{{ asset('/') }}admin/assets/images/corporate/c01.jpg'); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;" data-start="background-position: 50% -31px"
                     data-0-top-bottom="background-position: 50% 50px"></div>
                <div class="background-overlay grid-overlay-0" style="background-color: rgba(1,192,225,0.8);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-center"></div>
                        <div class="col-md-8 text-center">
                            <h1 class="element-top-70 text-light os-animation big default" data-os-animation="fadeIn" data-os-animation-delay="0s"> Our Services </h1>

                            <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                                <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                            </div>
                            <p class="lead text-center center  text-light  element-bottom-70 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Take a look at these awesome features we provide.<br> More will be added in the future.</p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </section>
            <section id="services">
                <div class="flexslider flex-controls-bottom element-top-0 element-bottom-0 os-animation" data-flex-animation="slide" data-flex-captionhorizontal="left" data-flex-controls="show" data-flex-controlsalign="center" data-flex-controlsposition="inside"
                     data-flex-controlsvertical="bottom" data-flex-directions="hide" data-flex-duration="600" data-flex-sliderdirection="horizontal" data-flex-slideshow="true" data-flex-speed="7000" data-os-animation="fadeInLeft" data-os-animation-delay="0s"
                     id="flexslider-60">
                    <ul class="slides">
                        <li>
                            <figure> <img alt="p09" class="attachment-full wp-post-image" height="800" src="{{ asset('/') }}front/assets/images/services/vulnerability-management-iot-embedded-systems.jpg" width="1200" style="height: 800;">
                                <figcaption>
                                    <h3 class="big">IOT & EMBEDDED SYSTEMS</h3>
                                    <p></p>
                                    <p class="lead">Aqualink's IoT software and embedded system building blocks to accelerate the development and time-to-market of secure, connected products and services that are powering smart cities, enterprises, factories, homes and vehicles.</p>
                                    <p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure> <img alt="p07" class="attachment-full wp-post-image" height="800" src="{{ asset('/') }}front/assets/images/services/guide-to-machine-learning-and-ai-1024x576.jpg" width="1200" style="height: 800;">
                                <figcaption>
                                    <h3 class="big">AI & MACHINE LEARNING:</h3>
                                    <p></p>
                                    <p class="lead">For future business AI and machine learning is the most important technology for a better representation of your unstructured data. AI-driven software is helping companies to increase manufacturing and logistics efficiency, improve customer relationships, reducing human errors and boost sales. We can serve you with extensive analysis and actionable predictions that will help you to grow your business.
                                    </p>

                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure> <img alt="p12" class="attachment-full wp-post-image" height="800" src="{{ asset('/') }}front/assets/images/services/web-and-app-design.jpg" width="1200" style="height: 800;">
                                <figcaption>
                                    <h3 class="big">WEB & APP DEVELOPMENT</h3>
                                    <p></p>
                                    <p class="lead">As a means to safely and securely access all the data provided by our products, our team has built beautiful and intuitive web panels. The control dials and report feature in the web panels is key to know more about your business and optimise work efficiency where necessary.
                                    </p>
                                    <p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure> <img alt="p07" class="attachment-full wp-post-image" height="800" src="{{ asset('/') }}front/assets/images/services/db_shenker_industrial_automation_magento_blog.jpg" width="1200">
                                <figcaption>
                                    <h3 class="big">ROBOTICS & INDUSTRIAL AUTOMATION:</h3>
                                    <p></p>
                                    <p class="lead">Robotics industrial automation is changing the face of production. Manufacturers around the globe are implementing some form of automation to become more efficient, safe and ultimately to increase revenues. While some advantages are obvious, there may be more than you think.
                                    </p>

                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="section" id="product">
                <div class="background-overlay grid-overlay-0" style="background-color: rgba(1,192,225,1);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center element-top-70 os-animation big text-light" data-os-animation="fadeIn" data-os-animation-delay="0s"> Our Products </h1>
                            <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                                <div class="divider-border-inner" style="width:60px;"> </div>
                            </div>

                            <div class="element-bottom-50 recent-simple-os-container row" >
                                <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                                    <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url({{ asset('/') }}front/assets/images/products/rsz_attendance_card.png); background-size: auto 135%;">
                                        <a href="smart-attendance-system.html">
                                            <div class="post-grid-content">
                                                <h3 class="post-grid-content-title">Smart Attendance System</h3>
                                                <div class="post-grid-content-footer">Smart Attendance is a biometric fingerprint and RFID card reader based stand alone system used for access control and it can be installed independently.</div>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                                <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                                    <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url({{ asset('/') }}front/assets/images/products/rsz_cold_storage_card.png); background-size: auto 135%;">
                                        <a href="sensometer-2.html">
                                            <div class="post-grid-content">
                                                <h3 class="post-grid-content-title">Sensometer</h3>
                                                <div class="post-grid-content-footer">Sensometer provides remote access to detailed real-time monitoring with a warning system to safeguard your production and storage facilities</div>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                                <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                                    <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url({{ asset('/') }}front/assets/images/products/rsz_2water_health_monitoring_card.png); background-size: auto 135%;">
                                        <a href="#">
                                            <div class="post-grid-content">
                                                <h3 class="post-grid-content-title">Water Health Monitoring System</h3>
                                                <div class="post-grid-content-footer">Device to monitor water health condition</div>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="background-overlay grid-overlay-0" style="background-color: rgba(255,255,255,1);"></div>
                <div class="container-fullwidth">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s"> Our Clients </h1>
                            <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                                <div class="divider-border-inner" style="width:60px;"> </div>
                            </div>
                            <p class="lead text-center center element-bottom-40 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s"> We work close with our clients projets<br> to provide a unique experience</p>
                            <div class="flexslider flex-controls-bottom element-top-20 element-bottom-60" data-flex-animation="slide" data-flex-captionhorizontal="left" data-flex-controls="hide"
                                 data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-controlsvertical="bottom" data-flex-directions="hide" data-flex-duration="600" data-flex-itemwidth="258" data-flex-sliderdirection="horizontal"
                                 data-flex-slideshow="true" data-flex-speed="7000" data-os-animation="none" data-os-animation-delay="0s" id="flexslider-74">
                                <ul class="slides">
                                    <li>
                                        <figure> <img alt="client1" data-original-title="Red-fan" data-toggle="tooltip" height="200" src="{{ asset('/') }}front/assets/images/clients/rsz_wasa.png" class="img-responsive" width="400"> </figure>
                                    </li>
                                    <li>
                                        <figure> <img alt="client2" data-original-title="Freetax" data-toggle="tooltip" height="200" src="{{ asset('/') }}front/assets/images/clients/rsz_safeand_frsh.jpg" class="img-responsive" width="400"> </figure>
                                    </li>
                                    <li>
                                        <figure> <img alt="client5" data-original-title="Remedia" data-toggle="tooltip" height="200" src="{{ asset('/') }}front/assets/images/clients/rsz_bipsot.png" class="img-responsive" width="400"> </figure>
                                    </li>
                                    <li>
                                        <figure> <img alt="client4" data-original-title="Streetway" data-toggle="tooltip" height="200" src="{{ asset('/') }}front/assets/images/clients/global.png" width="400" class="img-responsive"> </figure>
                                    </li>
                                    <li>
                                        <figure> <img alt="client3" data-original-title="Scotex" data-toggle="tooltip" height="200" src="{{ asset('/') }}front/assets/images/clients/rsz_hydrqou.png" width="400" class="img-responsive" > </figure>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
@endsection
