 <!--Zmm Wrapper-->
 <div class="zmm-wrapper">
     <a href="#" class="zmm-close close"></a>
     <div class="zmm-inner bg-white typo-dark">
         <div class="text-center mobile-logo-part margin-bottom-30">
             <a href="/" class="img-before"><img src="images/logo-dark.png" class="img-fluid changeable-dark"
                     width="170" height="51" alt="Logo" /></a>
         </div>
         <div class="zmm-main-nav"></div>
         <div class="search-form-wrapper margin-top-30">
             <form class="search-form" role="search">
                 <div class="input-group add-on">
                     <input class="form-control" placeholder="Search for.." name="srch-term" type="text" />
                     <div class="input-group-btn">
                         <button class="btn btn-default search-btn" type="submit">
                             <i class="ti-arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- Overlay Search -->
 <div class="overlay-search text-center hide">
     <a href="#" class="close close-light overlay-search-close"></a>
     <div class="search-form-wrapper">
         <form class="navbar-form search-form sliding-search-form" role="search">
             <div class="input-group add-on">
                 <input class="form-control" placeholder="Search for.." name="srch-term" type="text" />
                 <div class="input-group-btn">
                     <button class="btn btn-default search-btn" type="submit">
                         <i class="ti-arrow-right"></i>
                     </button>
                 </div>
             </div>
         </form>
     </div>
 </div>
 <!-- Main wrapper-->
 <div class="page-wrapper">
     <div class="page-wrapper-inner">
         <header class="header-floating">
             <!--Mobile Header-->
             <div class="mobile-header bg-white typo-dark">
                 <div class="mobile-header-inner">
                     <div class="sticky-outer">
                         <div class="sticky-head">
                             <div class="basic-container clearfix">
                                 <ul class="nav mobile-header-items pull-left">
                                     <li class="nav-item">
                                         <a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a>
                                     </li>
                                 </ul>
                                 <ul class="nav mobile-header-items pull-center">
                                     <li>
                                         <a href="/" class="img-before"><img src="images/logo-dark.png"
                                                 class="img-fluid changeable-dark" width="149" height="45"
                                                 alt="Logo" /></a>
                                     </li>
                                 </ul>
                                 <ul class="nav mobile-header-items pull-right">
                                     <li class="nav-item">
                                         <a href="#" class="img-before overlay-search-switch"><i
                                                 class="icon-magnifier icons"></i></a>
                                     </li>
                                 </ul>
                             </div>
                             <!-- .basic-container -->
                         </div>
                         <!-- .sticky-head -->
                     </div>
                     <!-- .sticky-outer -->
                 </div>
                 <!-- .mobile-header-inner -->
             </div>
             <!-- .mobile-header -->
             <!--Header-->
             <div class="header-inner header-2 header-absolute">
                 <!--Topbar-->
                 <div class="topbar">
                     <div class="basic-container clearfix">
                         <ul class="nav topbar-items pull-left">
                             <li class="nav-item">
                                 <ul class="nav header-info">
                                     <div class="header-address typo-white">
                                         <span class="ti-location-pin"></span> 684 West College
                                         St. Sun City, USA
                                     </div>
                                 </ul>
                             </li>
                         </ul>
                         <ul class="nav topbar-items pull-right">
                             <li class="nav-item">
                                 <div class="social-icons typo-white">
                                     <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                                     <a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
                                     <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                                     <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                                     <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
                                     <a href="#" class="social-dribble"><span class="ti-dribbble"></span></a>
                                 </div>
                             </li>
                             <li>
                                 <a href="#" class="full-view-switch text-center"><i
                                         class="ti-search typo-white"></i></a>
                             </li>
                             <!--Search-->
                             <div class="full-view-wrapper hide">
                                 <a href="#" class="close full-view-close"></a>
                                 <form class="navbar-form search-form" role="search">
                                     <div class="input-group">
                                         <input class="form-control" placeholder="Search hit enter.."
                                             name="srch-term" type="text" />
                                     </div>
                                 </form>
                             </div>
                         </ul>
                     </div>
                 </div>
                 <!--Topbar-->
                 <!--Sticky part-->
                 <div class="sticky-outer">
                     <div class="sticky-head">
                         <!--Navbar-->
                         <nav class="navbar">
                             <div class="basic-container bg-light b-radius-10 clearfix">
                                 <div class="navbar-inner">
                                     <!--Overlay Menu Switch-->
                                     <ul class="nav navbar-items pull-left">
                                         <li class="list-item">
                                             <a href="/" class="logo-general"><img src="images/logo-dark.png"
                                                     class="img-fluid changeable-dark" width="166" height="50"
                                                     alt="Logo" /></a>
                                             <a href="/" class="logo-sticky"><img src="images/logo-dark.png"
                                                     class="img-fluid changeable-dark" width="166" height="50"
                                                     alt="Logo" /></a>
                                         </li>
                                     </ul>
                                     <!-- Menu -->
                                     <ul class="nav navbar-items pull-right">
                                         <!-- List Item -->
                                         <li class="list-item">
                                             <ul class="nav navbar-main menu-dark">
                                                 <li class="active">
                                                     <a href="{{ route('welcome') }}">Home</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{ route('about-us') }}">About Us</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{ route('events') }}">Events</a>
                                                 </li>

                                                 <li>
                                                     <a href="{{ route('campaigns') }}">Campaigns</a>
                                                 </li>
                                                 <li>
                                                     <a href="{{ route('contact-us') }}">Contact Us</a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <!-- List Item End -->
                                         <!-- Donate Button -->
                                         <li class="list-item">
                                             <div class="header-navbar-text-1">
                                                 <a href="{{ route('donate-now') }}" class="h-donate-btn">Donate</a>
                                             </div>
                                         </li>
                                         <!-- Donate Button End -->
                                     </ul>
                                     <!-- Menu -->

                                 </div>
                             </div>
                             <!--Search-->
                         </nav>
                     </div>
                     <!--sticky-head-->
                 </div>
                 <!--sticky-outer-->
             </div>
         </header>
         <!-- header -->
