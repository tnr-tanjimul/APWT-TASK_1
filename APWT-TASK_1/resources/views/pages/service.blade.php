@extends('layouts.app')

@section('content')
        <section class="service-area sp_100" id="services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title-main">
                        <h2>Our  <span>services</span></h2>
						<p>You're Welcome To Know Us</p>
                    </div>
                </div>
            </div>
            <div class="row">
			@foreach($services as $service)
                <div class="col-sm-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="{{$service['icon']}}"></i>
                        </div>
                        <div class="service-text">
						<p>{{$service['sevice_name1']}}  
                            <span>{{$service['sevice_name2']}}</span></p>
                            
                        </div>
                    </div>
                </div>
			@endforeach
			
 </div>
       </div>
    </section>
   
 
                
@endsection