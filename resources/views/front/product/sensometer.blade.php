@extends('front.master')

@section('title')
    Sensometer
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
                            <h1 class="element-top-70 text-light big"> Sensometer</h1>
                            <div class="divider-border divider-border-center element-top-10 element-bottom-10" style="height:3px;">
                                <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                            </div>
                            <p class="lead text-center center text-light element-bottom-70" data-os-animation="none">Sensometer provides remote access to detailed real-time monitoring with a warning system to safeguard your production and storage facilities. <br><br>
                                <a href="csm_brochure_june.pdf" class="btn btn-danger">Download Our Brochure</a>
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
                                                    <div class="col-md-4 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <h3 class="text-center big">Integrated Sensors</h3><br>
                                                        <img src="{{ asset('/') }}front/assets/images/sensometer/intre.jpg" class="img-responsive center-block" alt="">
                                                    </div>
                                                    <div class="col-md-8 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <h3 class="text-center big">Cool Dashboard</h3><br>
                                                        <img src="{{ asset('/') }}front/assets/images/sensometer/this-one-600x500.jpg" class="img-responsive center-block" alt="">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h3 class="text-center big">Features</h3><br>
                                                    <div class="holderCircle">

                                                        <div class="dotCircle">
                                                            <span class="itemDot active itemDot1" data-tab="1">
                                                                <img src="{{ asset('/') }}front/assets/images/senso_feature/live-door-1024x1024.jpg" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot2" data-tab="2">
                                                                <img src="{{ asset('/') }}front/assets/images/senso_feature/electricity-1024x1024.jpg" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot3" data-tab="3">
                                                                <img src="{{ asset('/') }}front/assets/images/senso_feature/compressor-1024x1024.jpg" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>
                                                            <span class="itemDot itemDot4" data-tab="4">
                                                                <img src="{{ asset('/') }}front/assets/images/senso_feature/alert-report-1024x1024.jpg" class="img-responsive center-block" alt="">
                                                                <span class="forActive"></span>
                                                            </span>

                                                        </div>

                                                        <div class="contentCircle">

                                                            <div class="CirItem active CirItem1">
                                                                <br><br><br><br>
                                                                Live door opening or closing statusor sensor, Exit button, Alarm, Door Bell can be incorporated
                                                            </div>
                                                            <div class="CirItem CirItem2">
                                                                <br><br><br>
                                                                <p>Total electricity consumption of the compressors<br>
                                                                    Running Hour : Total running hour of individual compressor</p>
                                                            </div>
                                                            <div class="CirItem CirItem3">
                                                                <br><br><br>
                                                                <p>Push Notifications and SMS can be enabled
                                                                    Daily and Monthly reports available from accessing the web panel <br>
                                                                    Custom Report :Any custom required reports can be provided</p>
                                                            </div>
                                                            <div class="CirItem CirItem4">
                                                                <br><br><br><br>
                                                                <p>Remote compressor control(ON/OFF) <br>
                                                                    Running Hour : Total running hour of
                                                                    individual compressor</p>
                                                            </div>

                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">Sensometer sends sensor data periodically to the cloud where it can be accessed via a website and a mobile app. This website consists of statistical data which is arranged in an easy to use dashboard. Reports can be generated here as well as historical data can be seen which would be beneficial for the end user. Our device is most utilized in storages , where perishable goods are stored, grain silo, any cold storage environments e.g. Frozen food and meat processing factory, Warehouse Freezers, Cold Storage Trucks, Leather storage, Beverage factory, Tobacco factory, Paper mills or any premises that has relation with the environment.</p><br>
                                                        <p class="text-justify lead">Optional features include the GPS which can be used in storage vehicles. The Door Trigger alert notifies the user how long the door of the storage has been open and if opted for push notification, sends a message to the user about the current condition of the storage. The reports generated reflect the conditions of the storage while the door was open.<br>
                                                            Push Notification alerts can be modified to send messages when for example, user has set a minimum limit for any parameter and the device detects that the threshold has been crossed.</p>
                                                    </div>
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">Another key feature of our device is remote compressor control. Where a user can remotely turn on and off the compressor around the world. User can  calculate the total electricity consumption of the whole industry which in turn can help the user ensure efficient use of electricity. Data is always synchronized with the server with proper security. Data Storage is dependant upon the package chosen. Further details regarding package can be learnt from the provided hotline number.</p>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="work">
                                                <div class="row">
                                                    <img src="{{ asset('/') }}front/assets/images/sensometer/csm-diagram-1024x411.png" class="img-responsive center-block" alt=""><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">Your warehouse is fully under supervision with our device sensometer. Sensometer is a  monitoring and controlling device that will automate your industrial monitoring process. With our device you can real time monitor the environmental parameters of the storage room. Alongside this you can know the door of the cold storage is opened or closed (for how many times/duration).</p>
                                                    </div>
                                                    <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                                                        <p class="text-justify lead">
                                                            With our device you can control the compressor of the chiller room with remote starting and closing feature, You can also know the total running hours and electricity consumption of individual compressors. All this data is secured in our cloud server. From where you can see desired reports and monitor in real time around the world. We have a separate web application and an interactive mobile app for this purpose.
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
                                                        <img src="{{ asset('/') }}front/assets/images/sensometer/item-spec.jpg" class="img-responsive center-block" alt="">
                                                    </div>
                                                    <div class="col-md-6 small-screen-center os-animation" data-os-animation="fadeInLeft">
                                                        <img src="{{ asset('/') }}front/assets/images/sensometer/csmmodel.png" class="img-responsive center-block" alt="">
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
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_520">Can I use the device in any type of warehouse?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_520">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes you can. If the products of your warehouse has any dependencies on the inside environment you can use our device.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_576">Do you have any service charges?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_576">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">We have a data charge that is based on the package chosen</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed  lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_749">Warranty period?</a> </div>
                                                            <div class="panel-collapse collapse in" id="group_749">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">We are providing 1 year replacement warranty</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_844">Do you provide any after sales service?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_844">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Yes we do. You will have 3 years service warranty from the date of installation.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_346">What is the temperature range?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_346">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Our sensor can read temperatures from –-40ºC to 80ºC</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_414">What kind of solution do you have for a large warehouse?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_414">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">Our device can be integrated from 1 upto 4 sensors that will cover the whole warehouse</p>
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
                                                            <div class="panel-heading"> <a class="accordion-toggle collapsed lead" data-parent="#accordion_653" data-toggle="collapse" href="#group_418">How can the device help me reduce electricity bills?</a> </div>
                                                            <div class="panel-collapse collapse" id="group_418">
                                                                <div class="panel-body">
                                                                    <div class="col-text-1">
                                                                        <p class="lead">From our device you can real time monitor the warehouse condition. And you can also remotely control the compressor. It will ensure the proper usage of your resources. Which in turn will help you to reduce your bills.</p>
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
