@extends('front.master')

@section('title')
    Aqualink
@endsection

@section('body')
    <div id="content" role="main">
        <article>
            <section class="section">
                <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px" style="background-image: url(assets/images/corporate/p03.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
                </div>
                <div class="background-overlay" style="background-color: rgba(1,192,225,0.8);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-center"></div>
                        <div class="col-md-8 text-center">
                            <h1 class="element-top-70 text-light os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s"> Contact us</h1>
                            <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                                <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                            </div>
                            <p class="lead text-center center text-light element-bottom-70" data-os-animation="none" data-os-animation-delay="0s">We are a corporate web design agency who are passionate with our pixels.<br> Drop us a line if you have any requests or you are ready for a new project.</p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="background-overlay" style="background-color: rgba(255,255,255,0);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center col-border-bottom">
                            <div class="row">
                                <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                    <div class="divider-wrapper">
                                        <div class="visible-xs element-height-60"></div>
                                        <div class="visible-sm element-height-60"></div>
                                        <div class="visible-md element-height-60"></div>
                                        <div class="visible-lg element-height-60"></div>
                                    </div>
                                    <form id="contactForm" action="#" class="contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-icon-group"> <i class="fa fa-user"></i> <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required=""> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i> <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required=""> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i> <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required=""></textarea> </div>
                                        <div class="text-center"> <input type="submit" value="Send email" class="btn btn-primary"> </div>
                                        <div class="messages text-center"></div>
                                    </form>
                                    <div class="divider-wrapper">
                                        <div class="visible-xs element-height-60"></div>
                                        <div class="visible-sm element-height-60"></div>
                                        <div class="visible-md element-height-60"></div>
                                        <div class="visible-lg element-height-60"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456.3320590717364!2d90.40856236184491!3d23.795244308806204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7059a7e45c5%3A0xb8d24bfea1a930!2sAqualink%20Bangladesh%20LTD!5e0!3m2!1sen!2sbd!4v1575634426386!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
