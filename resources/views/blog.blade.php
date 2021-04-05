

@extends('layout.layoutblog')

@section('blog')
<div class="header_main">
    <div class="container">
        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
    </div>
</div>
</div>
<div class="header">
    <div class="container">
    <!--  header inner -->
        <div class="col-sm-12">
             
             <div class="menu-area">
                <nav class="navbar navbar-expand-lg ">
                    <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                            <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}<span class="sr-only">(current)</span></a> </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                           <li class="nav-item">
                            <a class="nav-link" href="/new-login">{{ __('Login') }}</a></li>
                           <li class="nav-item">
                            <a class="nav-link" href="service.html">SERVICES</a></li>
                           <li class="#" href="#">
                              <a class="nav-link" href="blog.html">BLOG</a></li>
                           <li class="nav-item" href="#">
                              <a class="nav-link" href="contact.html">CONTACT</a></li>
                           <li class="last"><a href="#"><img src="images/search-icon.png" alt="icon"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div> 
</div>
<!--  header end --> 
<!-- Blog Start -->
<div class="blog_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="blog_text">Our Blog</h1>
            </div>
        </div>
        <div class="blog_section_2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_section_2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section_1">
                        <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                        <button type="button" class="date-bt">26 JULY	 2019</button>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
</div> 

<!--blog end -->
<!--Contact_section start -->
<div class="contact_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="touch_text">Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="contact_section_2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="map_icon">
                        <img src="images/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                        <p class="email-text"><a href="#">Gb road 123 londo<br>Uk</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="map_icon">
                        <img src="images/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                        <p class="email-text"><a href="#">+7123654897</a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="map_icon">
                        <img src="images/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                        <p class="email-text"><a href="#">demo@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Contact_section end -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">© 2019 All Rights Reserved. <a href="https://html.design">Free Website Templates</a></p>
            </div>
        </div>
    </div>
</div>




  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
@endsection