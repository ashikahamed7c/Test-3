@extends('front.master')

@section('title')
    Smart Attendance
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
                            <h1 class="element-top-70 text-light big">Smart Attendance System</h1>
                            <div class="divider-border divider-border-center element-top-10 element-bottom-10" style="height:3px;">
                                <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                            </div>
                            <p class="lead text-center center text-light element-bottom-70" data-os-animation="none">Smart Attendance is a biometric fingerprint and RFID card reader based stand alone system used for access control and it can be installed independently. <br><br>
                                <a href="attendance-brochure.pdf" class="btn btn-danger">Download Our Brochure</a>
                            </p>

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
                                <div class="element-top-70 element-bottom-70 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs text-center" data-tabs="tabs">
                                            <!-- Nav tabs -->
                                            <li class="active"> <a data-toggle="tab" href="#over" class="lead">Overview</a> </li>
                                            <li> <a data-toggle="tab" href="#work" class="lead">How It Works</a> </li>
                                            <li> <a data-toggle="tab" href="#price" class="lead">Pricing Details</a> </li>
                                            <li> <a data-toggle="tab" href="#spec" class="lead">Specification</a> </li>
                                            <li> <a data-toggle="tab" href="#client" class="lead">Clients Overview</a> </li>
                                            <li> <a data-toggle="tab" href="#faq" class="lead">FAQ</a> </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Tab panes -->
                                            <div class="tab-pane fade in active" id="over">
                                                <div class="row">

                                                    <h3 class="text-center big">Features</h3><br>
                                                    <div class="holderCircle">

                                                        <div class="dotCircle">
                                                            <span class="itemDot active itemDot1" data-tab="1">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/1-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot2" data-tab="2">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/2-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot3" data-tab="3">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/3-2.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot4" data-tab="4">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/3.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot5" data-tab="5">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/4-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot6" data-tab="6">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/5-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot7" data-tab="7">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/10-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot8" data-tab="8">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/8.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot9" data-tab="9">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/7-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot10" data-tab="10">
                                                                <img src="{{ asset('/') }}front/assets/images/smart_feature/6-1.png" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                        </div>

                                                        <div class="contentCircle">

                                                            <div class="CirItem active CirItem1">
                                                                <br><br><br><br>
                                                                Fingerprint reader with durable and highly accurate optical sensor.
                                                                Capacity : From 1000 upto 5000
                                                            </div>
                                                            <div class="CirItem CirItem2">
                                                                <br><br><br><br>
                                                                <p>1-touch a-second employee recognition</p>
                                                            </div>
                                                            <div class="CirItem CirItem3">
                                                                <br><br><br><br>
                                                                <p>Easy, interactive, secured registration process</p>
                                                            </div>
                                                            <div class="CirItem CirItem4">
                                                                <br><br><br><br>
                                                                <p>Access control with machine readable cards
                                                                    Capacity : Unlimited</p>
                                                            </div>
                                                            <div class="CirItem CirItem5">
                                                                <br><br><br><br>
                                                                <p>Cloud based as required</p>
                                                            </div>
                                                            <div class="CirItem CirItem6">
                                                                <br><br><br><br>
                                                                <p>Wireless Connectivity (WiFi), Wired Ethernet GPRS Connectivity</p>
                                                            </div>
                                                            <div class="CirItem CirItem7">
                                                                <br><br><br><br>
                                                                <p>Buzzer and LED indicators
                                                                    Smart Access Control: Door sensor, Exit button, Alarm, Door Bell can be incorporated</p>
                                                            </div>
                                                            <div class="CirItem CirItem8">
                                                                <br><br><br><br>
                                                                <p>Automatic Synchronization among all the connected devices
                                                                    Access Control : Requirement based access control</p>
                                                            </div>
                                                            <div class="CirItem CirItem9">
                                                                <br><br><br><br>
                                                                <p>A user friendly web application to monitor attendance data</p>
                                                            </div>
                                                            <div class="CirItem CirItem10">
                                                                <br><br><br><br>
                                                                <p>Organization policies can be automated with the software
                                                                    Custom Report : Any Custom report can be provided based on the requirement</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">
                                                            One touch is all it takes for access control with our own custom made software. Which will facilitate the organization by automating the processes it encounters everyday. The implementation of the company policies makes life easier for the owner to run the organization smoothly. We have developed some management features that makes life easier for HR, with some of the most common policies that an organization follows.</p><br>
                                                        <img src="{{ asset('/') }}front/assets/images/smart/attpc.png" class="img-responsive center-block" alt="">
                                                    </div>
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <h3 class="text-center">Management Features</h3><br>
                                                        <img src="{{ asset('/') }}front/assets/images/smart/web-app-diagram-1.png" class="img-responsive center-block" alt="">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="work">
                                                <div class="row">
                                                    <img src="{{ asset('/') }}front/assets/images/smart/attendance-diagram.png" class="img-responsive center-block" alt=""><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">With our attendance device you can get access through fingerprint and rfid card. We have several LED indicators that will give you the status messages. For ensuring internet connectivity you can choose any options. This supports both ethernet, wifi and modem connectivity. This attendance data is sent to the server in real time.</p>
                                                    </div>
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify">
                                                            If internet connection is not available then data will be stored locally and sent again after establishing the connectivity.An interactive web and mobile application is there where you can monitor the attendance data. You can also get all the management features based on the package chosen.
                                                        </p>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="price">
                                                <div class="row">
                                                    <p>Page under construction</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="spec">
                                                <div class="row">
                                                    <div class="col-md-6 small-screen-center os-animation" data-os-animation="fadeInLeft">
                                                        <img src="{{ asset('/') }}front/assets/images/smart/item-spec.jpg" class="img-responsive center-block" alt="">
                                                    </div>
                                                    <div class="col-md-6 small-screen-center os-animation" data-os-animation="fadeInLeft">
                                                        <img src="{{ asset('/') }}front/assets/images/smart/572d-600x600.jpg" class="img-responsive center-block" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="client">
                                                <div class="row">
                                                    <p>Page under construction</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="faq">
                                                <div class="container text-left">
                                                    <div class="panel-group element-top-20 element-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s" id="accordion_653">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_520">Can I have multiple finger enrollment option for an individual user?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_520">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes based on the requirement we can provide the required number of finger access of a particular user..</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_576">>Why this device do not have any keypad?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_576">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">We have a registration process that is fully controlled from the web application. Except fingerprint it does not need any other user key input.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_749">Warranty period?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_749">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">We are providing 1 year replacement warranty</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_844">What is the frequency of card can be used?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_844">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Cards with operating frequency 125 KHZ</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_346">Do you provide any after sales service?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_346">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes we do. You will have 3 years service warranty from the date of installation.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_414">Can I use this device for School?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_414">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes. With customisation in software you can use this in any organization as well as add extra features that will automate some processes. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_415">How to setup this device?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_415">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Please contact us to set a setup plan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_416">Can I send data to my own server?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_416">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes. Our support team can integrate the software in your server</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_417">Does the device has a battery backup?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_417">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Currently not available.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_418">Can I Install devices in three different district offices?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_418">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes you can. As all the devices are connected through a central server and access information are synced automatically to the connected devices based on the access. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_419">Can this be used to monitor sales team?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_419">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">A mobile application is there for location based attendance for the sales team. Integrated with the same software.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_420">Is it waterproof?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_420">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">No it is splash proof. Need to be installed in a shaded area.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
@endsection
