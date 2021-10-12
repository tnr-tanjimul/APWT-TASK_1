@extends('layouts.app')

@section('content')
<div id="home" class="intro-section">
        
        
         <!--===== HEADER AREA =====-->
            <header class="custom-navbar">
                <div class="container">
                   <div class="col-md-3">
                        <div class="header">
                           <a href="index.html">
                               <div class="welcome-text" class="head-custom">
                               <h1><Span>TNR SOFT</Span></h1>
                                <!-- <img src="assets/img/footer-logo.png" alt="Site Logo" /> -->
                                </div>
                            </a> <!--== logo ==-->
                        </div> 
                       <div class="root-responsive-menu"></div>
                    </div>  
                    <div class="col-md-9">
                        <div class="main-menu">
                            @include('inc.navbar')
                        </div>
                    </div>
                </div>
            </header>
        <!--===== END HEADER AREA ======-->
             
             
             
        <!--======= WELCOME AREA =======-->
            <div class="welcome-area" id="home">
              <div id="particles-js"></div>
               <div class="welcome-table">
                   <div class="welcome-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="welcome-text text-center">
                                        <h4>welcome to</h4>
                                        <h4>the official website of</h4>
                                        <h1>TNR SOFT<Span></Span></h1>
                                        <h4 id="letterSpace">A Professional Android App Development Company</h4> 
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#about" class="scroll-btn banner-icon theme-color"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
            </div>
            <!--===== END WELCOME AREA =====-->
            
        </div>
        <!--=====***************** END INTRO SECTION ***********************=====-->
        
    

                
@endsection