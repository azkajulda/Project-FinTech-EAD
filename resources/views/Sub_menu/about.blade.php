@extends('Master.app')
@section('sub_menu')
	<section class="py-5">
      <div class="col-md-12">
	      <div class="container">
	        <h1>About Us</h1>
	      </div>
      </div>
  </section>	

	<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">               
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="container-about" style="background: url('{{asset('asset/image/azka.jpg')}}'); background-position: center;background-size: cover;" class="margin-bottom" alt=""></div>
                    </div>
                    <h2>M Azka Julda S</h2>
                    <p>SI-40-03</p>
                    <p>1202164204</p>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="container-about" style="background: url('{{asset('asset/image/engla.jpg')}}'); background-position: center;background-size: cover;" class="margin-bottom" alt=""></div> 
                    </div>
                    <h2>Engla Rafi</h2>
                    <p>SI-40-03</p>
                    <p>1202164245</p>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="container-about" style="background: url('{{asset('asset/image/rizqie.jpg')}}');background-position: center;background-size: cover;" class="margin-bottom" alt=""></div>
                    </div>
                    <h2>Rizqie Firdausa</h2>
                    <p>SI-40-0</p>
                    <p>1202160267</p>
                    </div>
            </div>
        </div>
    </section>
@endsection