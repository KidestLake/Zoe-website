<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/poca/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 11:23:57 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Zoe - Christian Song Download App">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Zoe - Christian Song Download App</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">

    @hasSection('headSection')
    @yield('headSection')
    @endif

</head>

<body>

    <div id="preloader">
        <div class="preloader-thumbnail">
            <img src="img/core-img/preloader.png" alt="">
        </div>
    </div>

    <header class="header-area">

        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">

                <nav class="classy-navbar justify-content-between" id="pocaNav">

                    <a class="nav-brand" href="index-2.html"><img src="img/core-img/logo.png" alt=""></a>

                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/">- Home</a></li>
                                        <li><a href="/mostDownload">- Most Downloads</a></li>
                                        <!-- <li><a href="single-podcast.html">- Single Podcast</a></li> -->
                                        <li><a href="/about">- About Us</a></li>
                                        <li><a href="/contact">- Contact</a></li>
                                        <!-- <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                        <li><a href="#">- Even Dropdown</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </li>
                                <li><a href="/mostDownload">Most Downloads</a></li>
                                <li><a href="/video">Videos</a>
                                <li><a href="/about">About</a></li>
                                <!-- <ul class="dropdown">
                                        <li><a href="blog.html">- Blog</a></li>
                                        <li><a href="single-blog.html">- Blog Details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>

                            <div class="top-search-area">
                                <form action="https://preview.colorlib.com/theme/poca/index.html" method="post">
                                    <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <div class="top-social-area">
                                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                                <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </header>
    @yield('contentSection')
    @include('FrontEnd.components.footer');
    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/poca.bundle.js"></script>

    <script src="js/default-assets/active.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    @hasSection('scriptSection')
    @yield('scriptSection')
    @endif
</body>

</html>