<header class="site-navbar mt-3" id="top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><span style="font-size: 50px">خودتو بسنج</span></div>

            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{url('/')}}" class="nav-link active">خانه </a></li>
                    <li><a href="{{route('')}}">درباره ما</a></li>
                    <li><a href="portfolio.blade.php">رزومه کاری</a></li>
                    <li class="has-children">
                        <a href="services.blade.php">Pages</a>
                        <ul class="dropdown">
                            <li><a href="services.blade.php">خدمات</a></li>
                            <li><a href="service-single.blade.php">Service Single</a></li>
                            <li><a href="blog-single.blade.php">Blog Single</a></li>
                            <li><a href="portfolio-single.blade.php">Portfolio Single</a></li>
                            <li><a href="testimonials.blade.php">Testimonials</a></li>
                            <li><a href="faq.blade.php">Frequently Ask Questions</a></li>
                            <li><a href="gallery.blade.php">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.blade.php">ارتباط با ما</a></li>
                </ul>
            </nav>

            <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                <a href="sddgdvd" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>
</header>

<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1 style="font-family:Vazir">سامانه برگزاری آزمون آنلاین</h1>
                <div class="mx-auto w-75">
                    <p> آزمون خود را ثبت کنید ، در ازمون ها شرکت کنید</p>
                </div>
                <p class="mt-5"><a href="contact.blade.php" class="btn btn-outline-white btn-md ">لیست امتحانات</a></p>
            </div>
        </div>
    </div>
    <div class="video-container">
        <video autoplay loop="true">
            <source type="video/mp4" src="videos/video.mp4">
        </video>
    </div>

    <a href="#about-us-section" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down">بزن</span>
    </a>
