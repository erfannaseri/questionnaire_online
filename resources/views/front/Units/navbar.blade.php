<header class="site-navbar mt-3" id="top" >
    <div class="container-fluid">
        <div class="row align-items-center">

            <nav class="mx-auto site-navigation " style="margin-right: 200px" >
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{url('/')}}" class="nav-link active" style="color: black ;font-size: 25px">خانه </a></li>
                    <li><a href="#" style="color: black;font-size: 25px">درباره ما</a></li>
                    <li><a href="#" style="color: black ;font-size: 25px">رزومه کاری</a></li>
                    <li class="has-children">
                        <a href="services.blade.php" style="color: black;font-size: 25px">Pages</a>
                        <ul class="dropdown">
                            <li><a href="services.blade.php" style="color: black">خدمات</a></li>
                            <li><a href="service-single.blade.php" style="color: black">Service Single</a></li>
                            <li><a href="blog-single.blade.php" style="color: black">Blog Single</a></li>
                            <li><a href="portfolio-single.blade.php" style="color: black">Portfolio Single</a></li>
                            <li><a href="testimonials.blade.php" style="color: black">Testimonials</a></li>
                            <li><a href="faq.blade.php" style="color: black">Frequently Ask Questions</a></li>
                            <li><a href="gallery.blade.php" style="color: black;font-size: 25px">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html" style="color: black;font-size: 25px">Blog</a></li>
                    <li><a href="contact.blade.php" style="color: black;font-size: 25px"> ارتباط با ما</a></li>
                    @auth
                        <li class="has-children " style="margin-left: 100px;color: black;font-size: 25px" >
                            <a href="#" style="color: black;font-size: 25px" >{{ Auth::user()->name }}</a>
                            <ul class="dropdown  ">
                                <li><a href="#" class="btn btn-secondary btn-block btn-lg" >پنل کاربری</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn btn-outline-primary btn-secondary btn-block btn-sm">خروج کاربری</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @else
                        <li><a href="contact.blade.php"><span style="color: black;font-size: 25px">ورود </span> </a></li>
                    @endauth

                </ul>
            </nav>

            <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                <a href="" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>
</header>

<section class="home-section section-hero overlay slanted" id="home-section"
         style="background-image: url('images/Can-I-take-the-Han-radio-license-test-online.jpg');
          background-repeat: no-repeat; background-size: cover ;opacity: 0.6">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1 style="color: black;">سامانه برگزاری آزمون آنلاین</h1>
                <div class="mx-auto w-75">
                    <p style="color: black;font-size: 25px"> آزمون خود را ثبت کنید ، در ازمون ها شرکت کنید</p>
                </div>
                <p class="mt-5"><a href="contact.blade.php" class="btn btn-outline-white btn-md ">لیست امتحانات</a></p>
            </div>
        </div>
    </div>

    <a href="#about-us-section" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down">بزن</span>
    </a></section>
