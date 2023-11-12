<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Blog & Magazine HTML Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/images/favicon.png">

    <link href="{{asset('/website/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/website/css/style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/website/css/plugin.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/website/fonts/flaticon.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('/website/fonts/line-icons.css')}}" type="text/css">
</head>
<body>

<div id="preloader">
    <div id="status"></div>
</div>


<header class="main_header_area">
    <div class="header-content py-1 bg-lgrey">
        <div class="container d-flex align-items-center justify-content-between">
            <h4 class="theme mb-0 w-25 fw-normal text-center me-2"><i class="fas fa-bolt"></i> Trending News</h4>
            <div class="links float-right">
                <marquee scrolldelay="50" behavior="scroll" onmouseover="this.stop();" onmouseleave="this.start();">
                    <li><a href="#"><i class="fa fa-star"></i> “Speaks perfect English”: Trump’s offensive praise of a Latino Border Patrol agent</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Watch J. Lo live her best life, Nicki Minaj go regal, and Ariana Grande go religious.</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Tesla fans have found a new person to blame for Elon Musk’s troubles: his girlfriend</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> The Pentagon won’t check if US bombs killed kids in Yemen. CNN did it for them.</a></li>
                </marquee>
            </div>
        </div>
    </div>

    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('/')}}website/images/logo.png" alt="image">
                            <img src="{{asset('/')}}website/images/logo-white.png" alt="image">
                        </a>
                    </div>

                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="dropdown submenu active">
                                <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="submenu dropdown">
                                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Homepage Default</a></li>
                                            <li><a href="index-1.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="index-mag.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Magazine<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-mag.html">Homepage Default</a></li>
                                            <li><a href="index-mag1.html">Homepage 1</a></li>
                                            <li><a href="index-mag2.html">Homepage 2</a></li>
                                            <li><a href="index-mag3.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="submenu dropdown">
                                        <a href="detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post Detail<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="detail-1.html">Post Detail 1</a></li>
                                            <li><a href="detail-2.html">Post Detail 2</a></li>
                                            <li><a href="detail-3.html">Post Detail 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category Layout<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="post-grid-1.html">Post Grid 1</a></li>
                                            <li><a href="post-grid-2.html">Post Grid 2</a></li>
                                            <li><a href="post-grid-3.html">Post Grid 3</a></li>
                                            <li><a href="post-list-1.html">Post List 1</a></li>
                                            <li><a href="post-list-2.html">Post List 2</a></li>
                                            <li><a href="post-list-3.html">Post List 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="gallery1.html">Gallery Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu dropdown">
                                        <a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="404.html">Error Page 1</a></li>
                                            <li><a href="404-1.html">Error Page 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="comingsoon.html">Comming Soon</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="technology.html">Technology</a></li>
                            <li><a href="travel.html">Travel</a></li>
                            <li><a href="{{route('blog-category')}}">Lifestyle</a></li>
                            <li><a href="{{route('login')}}">login</a></li>
                        </ul>
                    </div>
                    <div class="register-login d-flex align-items-center">
                        <div class="header_sidemenu me-2">
                            <div class="mhead">
                            <span class="menu-ham">
                            <a href="#" class="cart-icon d-flex align-items-center ml-1"><i class="fa fa-th-large theme"></i></a>
                            </span>
                            </div>
                        </div>
                        <div class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></div>
                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div>
        </nav>
    </div>

</header>

