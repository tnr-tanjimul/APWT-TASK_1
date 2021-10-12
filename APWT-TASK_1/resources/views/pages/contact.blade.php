@extends('layouts.app')

@section('content')
        <section class="slider-bottom-box-area" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title-main-2">
                        <h2>Contact <span>Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="single-bottom-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>ADDRESS</h3>
                        <h4 class="find_hu">TNR SOFT Main Office</h4>
                        <p>12,Madrashapara, Rohanpur,</p>
                        <p>Chapainawabganj, Bangladesh </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="single-bottom-box">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h3>MOBILE</h3>
                        <h4 class="find_hu">TNR SOFT Main Office</h4>
                        <p>Call Us</p>
                        <p>+8801971789282</p>
                      
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="single-bottom-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h3>EMAIL</h3>
                        <h4 class="find_hu">TNR SOFT Main Office</h4>
                        <p>Send Us A Mail</p>
                        <p><a id="user_mail" href="mailto:contact@tnrsoft.com">contact@tnrsoft.com</a></p>
                        <p><a id="user_mail" href="mailto:tanjimul@tnrsoft.com">tanjimul@tnrsoft.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    <section class="contact-us-area" id="message">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title-main">
                        <h2>Send us <span>A message</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <form action="/index.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <p><input type="text" name="username" placeholder="Enter your name" required></p>
                            </div>
                            <div class="col-md-6">
                                <p><input type="email" name="email" placeholder="Enter your email" required></p>
                            </div>
                            <div class="col-md-6">
                                <p><input type="text" name="mainsubject" placeholder="Subject" required></p>
                            </div>
                            <div class="col-md-6">
                                <p><input type="tel" name="phone" placeholder="Enter your phone number"></p>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <textarea type="text" name="message" placeholder="Message" required></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="submit" name="ok" value="Send Message" ></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
 
                
@endsection