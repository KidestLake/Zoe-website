@extends('FrontEnd.components.content')
@section('contentSection')
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h3 class="title mt-70">10 Most Downloads of Zoe</h3>
            </div>
        </div>
    </div>
</div>
<div class="breadcumb--con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Most Downloads</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="poca-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All</button>
            <button class="btn" data-filter=".entre">Single</button>
            <button class="btn" data-filter=".media">Album</button>
            <button class="btn" data-filter=".tech">Gospel</button>
        </div>
    </div>
</div>

@include('FrontEnd.components.mostDownloaded')

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