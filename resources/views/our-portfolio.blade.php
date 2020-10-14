@extends('layouts.frame')
@section('frame')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Our Projects</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Recent Work <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center pb-5">
    <div class="col-md-12 heading-section text-center ftco-animate">
      <h2 class="mb-4">Work <span>Portfolio</span></h2>
    </div>
  </div>
  <div class="row">
   <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="project">
     <div class="img">
      <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
    </div>
    <div class="text text-center">
      <span>St. Charles Mutego Educational Center</span>
      <h3><a href="{{url('http://stcharlesmutegoeducentre.sc.ke/')}}">Group Of Schools</a></h3>
    </div>
    <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
      <span class="fa fa-expand"></span>
    </a>
  </div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Ouma Onyango and Associates</span>
    <h3><a href="{{url('http://oumaonyango.co.ke/')}}">Legal and Law Firm</a></h3>
  </div>
  <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Addicted Clothline</span>
    <h3><a href="{{url('http://addictedclothline.co.ke')}}">Fashion and Clothing House</a></h3>
  </div>
  <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Rangwe Technical and Vocational College</span>
    <h3><a href="{{url('http://rangwetvc.ac.ke')}}">Middle-Level Training Institution</a></h3>
  </div>
  <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>

<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Kakiri Nickson Foundation</span>
    <h3><a href="{{url('http://nicksonkakirifoundation.org')}}">Non-Profit Organization</a></h3>
  </div>
  <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Totalia Africa Limited</span>
    <h3><a href="{{url('http://totaliafrica.co.ke/')}}">Accounting and Finance Consultancy</a></h3>
  </div>
  <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Alfine Cleaners Limited</span>
    <h3><a href="{{url('http://alfinecleaners.com/')}}">General Cleaning and Fumigation Company</a></h3>
  </div>
  <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <div class="img">
    <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
  </div>
  <div class="text text-center">
    <span>Devscenter Hub</span>
    <h3><a href="{{url('https://devscentre.com/')}}">Software and Data Firm</a></h3>
  </div>
  <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="fa fa-expand"></span>
  </a>
</div>
</div>
</div>
</div>
</section>
@endsection