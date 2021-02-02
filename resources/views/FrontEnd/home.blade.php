@extends('FrontEnd.components.content')
@section('contentSection')
<!-- <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title mt-70">Welcome to Zoe</h2>
      </div>
    </div>
  </div>
</div> -->
@include('FrontEnd.components.welcome')

<!-- start of new Release -->
@include('FrontEnd.components.newReleases')
<!-- start of new Release -->


<section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-12 col-lg-6">
        <div class="newsletter-content mb-50">
          <h2>Sign Up To Newsletter</h2>
          <h6>Subscribe to receive info on our latest news and episodes</h6>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="newsletter-form mb-50">
          <form action="#" method="post">
            <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
            <button type="submit" class="btn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection