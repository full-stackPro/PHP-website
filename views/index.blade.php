<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        The Offer Company | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link href="css/widget21.css" rel="stylesheet" type="text/css" />
    <!--end::Custom Styles -->
    <link rel="icon" href="assets/demo/demo7/media/img/logo/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/demo/demo7/media/img/logo/favicon.ico" type="image/x-icon" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- BEGIN: Header -->
        @include( "shared.header" )
        <!-- END: Header -->

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>

            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
                <!-- BEGIN: Brand -->
                <div class="m-brand  m-brand--skin-light ">
                    <a href="javascript:void(0)" class="m-brand__logo">
                        <img alt="" src="assets/demo/demo7/media/img/logo/logo.png" />
                    </a>
                </div>
                <!-- END: Brand -->

                <!-- BEGIN: Aside Menu -->
                @include( "shared.sidebar" )
                <!-- END: Aside Menu -->

            </div>
            <div class="m-aside-menu-overlay"></div>
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title m-subheader__title--separator">
                                Dashboard
                            </h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="#" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                                <li class="m-nav__separator">
                                    -
                                </li>
                                <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Dashboard
                                        </span>
                                    </a>
                                </li>
                                {{-- <li class="m-nav__separator">
                                    -
                                </li> --}}
                              {{--   <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Generate Reports
                                        </span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- <div>
                            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                <span class="m-subheader__daterange-label">
                                    <span class="m-subheader__daterange-title"></span>
                                    <span class="m-subheader__daterange-date m--font-brand"></span>
                                </span>
                                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                    <i class="la la-angle-down"></i>
                                </a>
                            </span>
                        </div> --}}
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">
                    <!--Begin::Section-->
                    <!-- Begin:: Widgets/My-Day -->
					
					
					<div class="row">
					    <div class="col-xl-6">
                            <!--begin:: Widgets/Sales Stats-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                 <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Todays Followup
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div id="todays-slider" class="m-portlet__body carousel slide carousel-fade" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if($i == 0)
                                            <li data-target="#todays-slider" data-slide-to="0" class="active"></li>    
                                        @else
                                            <li data-target="#todays-slider" data-slide-to="{{$i}}"></li>
                                        @endif                                        
                                    @endfor
                                    </ul>
                                    <div class="m-widget3 carousel-inner" style="overflow: visible">
                                        <div class="m-widget3__item carousel-item active">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Pipeline status :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Transaction type :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Contact type :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Last touch :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row m-widget21-button-group">
                                                <div class="dropup">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            Wrap Up
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" style="padding:20px; width: 200px;">
                                                        <!-- Dropdown menu links -->
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <b>Suggested Action</b>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-mail"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Send Email
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-phone"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Phone Call
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-home"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Address
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Notes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-network"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FollowUp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-user"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Open Contact
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button">
                                                        <span>
                                                            Skip For 1 Day
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item carousel-item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user2.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Herman Starikov
                                                    </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Pipeline status :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Transaction type :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Contact type :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Last touch :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row m-widget21-button-group">
                                                <div class="dropup">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            Wrap Up
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" style="padding:20px; width: 200px;">
                                                        <!-- Dropdown menu links -->
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <b>Suggested Action</b>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-mail"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Send Email
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-phone"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Phone Call
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-home"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Address
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Notes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-network"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FollowUp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-user"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Open Contact
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button">
                                                        <span>
                                                            Skip For Now
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item carousel-item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user3.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Megan Wheeler
                                                    </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Pipeline status :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Transaction type :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Contact type :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Last touch :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row m-widget21-button-group">
                                                <div class="dropup">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            Wrap Up
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" style="padding:20px; width: 200px;">
                                                        <!-- Dropdown menu links -->
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <b>Suggested Action</b>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-mail"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Send Email
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-phone"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Phone Call
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-home"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Address
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Notes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-network"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FollowUp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-user"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Open Contact
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button">
                                                        <span>
                                                            Skip For Now
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item carousel-item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Lebron King James
                                                    </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Pipeline status :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Transaction type :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Contact type :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Last touch :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row m-widget21-button-group">
                                                <div class="dropup">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            Wrap Up
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" style="padding:20px; width: 200px;">
                                                        <!-- Dropdown menu links -->
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <b>Suggested Action</b>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-mail"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Send Email
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-phone"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Phone Call
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-home"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Address
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Notes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-network"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FollowUp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-user"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Open Contact
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button">
                                                        <span>
                                                            Skip For Now
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item carousel-item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Deb Gibson
                                                    </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Pipeline status :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Transaction type :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Contact type :
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="m-widget3__time">
                                                                Last touch :
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row m-widget21-button-group">
                                                <div class="dropup">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>
                                                            Wrap Up
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" style="padding:20px; width: 200px;">
                                                        <!-- Dropdown menu links -->
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <b>Suggested Action</b>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-mail"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Send Email
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-phone"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Phone Call
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon la la-home"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Address
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Notes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-network"></i>
                                                                    <span class="m-nav__link-text">
                                                                        FollowUp
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-user"></i>
                                                                    <span class="m-nav__link-text">
                                                                        Open Contact
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--pill m-btn--air m-widget21-button">
                                                        <span>
                                                            Skip For Now
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <!-- <a class="carousel-control-prev" href="#todays-slider" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                                    <a class="carousel-control-next" href="#todays-slider" data-slide="next"><span class="carousel-control-next-icon"></span></a> -->
                                </div>
                            </div>
                            <!--end:: Widgets/Sales Stats-->
                        </div>
						<div class="col-xl-6">
						    
                                <div class="m-portlet__body tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <div class="m-portlet m-portlet--full-height ">
<div class="m-portlet__head">
<div class="m-portlet__head-caption">
<div class="m-portlet__head-title">
<h3 class="m-portlet__head-text">
LIVE FEED
</h3>
</div>
</div>
<div class="m-portlet__head-tools">
<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
<li class="nav-item m-tabs__item">
<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
Today
</a>
</li>
<li class="nav-item m-tabs__item">
<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
Week
</a>
</li>
<li class="nav-item m-tabs__item">
<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
Month
</a>
</li>
</ul>
</div>
</div>
<div class="m-portlet__body">
<div class="tab-content">
<div class="tab-pane active" id="m_widget4_tab1_content">
<div class="m-scrollable mCustomScrollbar _mCS_4 mCS-autoHide" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: visible; max-height: 400px; position: relative;"><div id="mCSB_4" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_4_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
<div class="m-list-timeline m-list-timeline--skin-light">
<div class="m-list-timeline__items">
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
<span class="m-list-timeline__text">
Visitor Chat
</span>
<span class="m-list-timeline__time">
Just now
</span>
</div>
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
<span class="m-list-timeline__text">
Opened Emails
<span class="m-badge m-badge--success m-badge--wide">
pending
</span>
</span>
<span class="m-list-timeline__time">
14 mins
</span>
</div>
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
<span class="m-list-timeline__text">
Viewed Property
</span>
<span class="m-list-timeline__time">
20 mins
</span>
</div>
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
<span class="m-list-timeline__text">
Favorited Properties
<span class="m-badge m-badge--info m-badge--wide">
settled
</span>
</span>
<span class="m-list-timeline__time">
1 hr
</span>
</div>
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
<span class="m-list-timeline__text">
Saved Properties
<a href="#" class="m-link">
Check
</a>
</span>
<span class="m-list-timeline__time">
2 hrs
</span>
</div>
<div class="m-list-timeline__item">
<span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
<span class="m-list-timeline__text">
Performed Search
</span>
<span class="m-list-timeline__time">
3 hrs
</span>
</div>
</div>
</div>
</div></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; display: block; height: 231px; max-height: 380px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
</div>
<div class="tab-pane" id="m_widget4_tab2_content"></div>
<div class="tab-pane" id="m_widget4_tab3_content"></div>
</div>
</div>
</div>
                                    </div>
                                </div>
						</div>
					</div>	

	
					
                    <!-- End:: Widgets/My-Day -->
                    <!-- End::Section -->
                    <!--Begin::Section-->
                    <div class="m-portlet">
                        <div class="m-portlet__body  m-portlet__body--no-padding">
                            <div style="display: inline-block;position: relative;padding: 20px;" class="today-lead">
							     <h3>Advanced Lead Search</h3>
								 <div style="float: left;" class="col-xl-8">
								 <h2><strong>TODAYS LEADS</strong> (Offer Requests, Buyer Leads, Imports)</h2>
								 <p>Name</p>
								 <p>Phone</p>
								 <p>Address</p>
								 <p>Pipeline status > Transaction type > Contact type</p>
								 <p>Last touch</p>
								 </div>
								 <div style="float: left;" class="col-xl-4">
								 <h2><strong>Skip<br>Call Text Email<br>Log Activity</strong></h2>
								 <p>ACTIVITY (called, Left Voicemail, Bad Number, Met in Person, Emailed, Texted Note)<br>Fate/Time Description<br>FOLLOWUP (Call, Appt, Task)<br>Fate/Time Description<br>Reminder</p>
								 </div>
							</div>
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Sales Stats-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                ROI
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-portlet__nav-item--last m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                    <i class="fa fa-genderless m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">
                                                                            Quick Actions
                                                                        </span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Cancel
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget 6-->
                                    <div class="m-widget15">
                                        <div class="m-widget15__chart" style="height:180px;">
                                            <canvas id="m_chart_sales_stats"></canvas>
                                        </div>
                                        <div class="m-widget15__items">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            63%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Facebook
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            54%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Google
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            54%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Signage
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            41%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Direct-text
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            79%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Email
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            79%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Flyer
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget15__desc">
                                            * lorem ipsum dolor sit amet consectetuer sediat elit
                                        </div>
                                    </div>
                                    <!--end::Widget 6-->
                                </div>
                            </div>
                            <!--end:: Widgets/Sales Stats-->
                        </div>
						<div class="col-xl-4">
                            <!--begin:: Widgets/Sales Stats-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                GOALS
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-portlet__nav-item--last m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                    <i class="fa fa-genderless m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">
                                                                            Quick Actions
                                                                        </span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Cancel
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget 6-->
                                    <div class="m-widget15">
                                        <div class="m-widget15__chart" style="height:180px;">
                                            <canvas id="m_chart_sales_stats"></canvas>
                                        </div>
                                        <div class="m-widget15__items">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            63%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Closings
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            54%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Actual Income
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="m-widget15__item">
                                                        <span class="m-widget15__stats">
                                                            41%
                                                        </span>
                                                        <span class="m-widget15__text">
                                                            Actual
                                                        </span>
                                                        <div class="m--space-10"></div>
                                                        <div class="progress m-progress--sm">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="m-widget15__desc">
                                            * lorem ipsum dolor sit amet consectetuer sediat elit
                                        </div>
                                    </div>
                                    <!--end::Widget 6-->
                                </div>
                            </div>
                            <!--end:: Widgets/Sales Stats-->
                        </div>
						
						
						
                        <div style="display:none" class="col-xl-4">
                            <!--begin:: Widgets/Inbound Bandwidth-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Inbound Bandwidth
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                    Today
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget5-->
                                    <div class="m21">
                                        <div class="m-3__numb21 m--font-success">
                                            670
                                        </div>
                                        <div class="m-3__cha21" style="height:160px;">
                                            <canvas id="m_chart_bandwidth1"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Widget 5-->
                                </div>
                            </div>
                            <!--end:: Widgets/Inbound Bandwidth-->
                            <div class="m--space-30"></div>
                            <!--begin:: Widgets/Outbound Bandwidth-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Outbound Bandwidth
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                    Today
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget5-->
                                    <div class="m21">
                                        <div class="m-widget20__number m--font-warning">
                                            340
                                        </div>
                                        <div class="m-widget20__chart" style="height:160px;">
                                            <canvas id="m_chart_bandwidth2"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Widget 5-->
                                </div>
                            </div>
                            <!--end:: Widgets/Outbound Bandwidth-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Top Products-->
                            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                STATISTICS
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                    All
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget5-->
                                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Offer Requests
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    A Programming Language
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$17
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Estimate Requests
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    A Let's Fly Fast Again Language
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$300
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Buyer Signups Calls Made Emails Sent Texts Sent
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Good Coffee & Snacks
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$300
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
                                            <canvas id="m_chart_trends_stats_2"></canvas>
                                        </div>
                                    </div>
                                    <!--end::Widget 5-->
                                </div>
                            </div>
                            <!--end:: Widgets/Top Products-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div style="display:none" class="row">
                        <div class="col-xl-8">
                            <div class="m-portlet m-portlet--mobile ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Exclusive Datatable Plugin
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item">
                                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover"
                                                    aria-expanded="true">
                                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                                    </a>
                                                    <div class="m-dropdown__wrapper">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="m-nav">
                                                                        <li class="m-nav__section m-nav__section--first">
                                                                            <span class="m-nav__section-text">
                                                                                Quick Actions
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Create Post
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Send Messages
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Upload File
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__section">
                                                                            <span class="m-nav__section-text">
                                                                                Useful Links
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    FAQ
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__item">
                                                                            <a href="" class="m-nav__link">
                                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                <span class="m-nav__link-text">
                                                                                    Support
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                                        <li class="m-nav__item m--hide">
                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                Submit
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin: Datatable -->
                                    <div class="m_datatable" id="m_datatable_latest_orders"></div>
                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Audit Log-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Audit Log
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                    Today
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                    Week
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                    Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget4_tab1_content">
                                            <div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                    <div class="m-list-timeline__items">
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                            <span class="m-list-timeline__text">
                                                                12 new users registered
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                Just now
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                            <span class="m-list-timeline__text">
                                                                System shutdown
                                                                <span class="m-badge m-badge--success m-badge--wide">
                                                                    pending
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                14 mins
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                            <span class="m-list-timeline__text">
                                                                New invoice received
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                20 mins
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                            <span class="m-list-timeline__text">
                                                                DB overloaded 80%
                                                                <span class="m-badge m-badge--info m-badge--wide">
                                                                    settled
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                1 hr
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                            <span class="m-list-timeline__text">
                                                                System error -
                                                                <a href="#" class="m-link">
                                                                    Check
                                                                </a>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                2 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                            <span class="m-list-timeline__text">
                                                                Production server down
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                3 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                            <span class="m-list-timeline__text">
                                                                Production server up
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                5 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                            <span href="" class="m-list-timeline__text">
                                                                New order received
                                                                <span class="m-badge m-badge--danger m-badge--wide">
                                                                    urgent
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                7 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                            <span class="m-list-timeline__text">
                                                                12 new users registered
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                Just now
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                            <span class="m-list-timeline__text">
                                                                System shutdown
                                                                <span class="m-badge m-badge--success m-badge--wide">
                                                                    pending
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                14 mins
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                            <span class="m-list-timeline__text">
                                                                New invoice received
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                20 mins
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                            <span class="m-list-timeline__text">
                                                                DB overloaded 80%
                                                                <span class="m-badge m-badge--info m-badge--wide">
                                                                    settled
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                1 hr
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                            <span class="m-list-timeline__text">
                                                                New invoice received
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                20 mins
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                            <span class="m-list-timeline__text">
                                                                DB overloaded 80%
                                                                <span class="m-badge m-badge--info m-badge--wide">
                                                                    settled
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                1 hr
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                            <span class="m-list-timeline__text">
                                                                System error -
                                                                <a href="#" class="m-link">
                                                                    Check
                                                                </a>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                2 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                            <span class="m-list-timeline__text">
                                                                Production server down
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                3 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                            <span class="m-list-timeline__text">
                                                                Production server up
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                5 hrs
                                                            </span>
                                                        </div>
                                                        <div class="m-list-timeline__item">
                                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                            <span href="" class="m-list-timeline__text">
                                                                New order received
                                                                <span class="m-badge m-badge--danger m-badge--wide">
                                                                    urgent
                                                                </span>
                                                            </span>
                                                            <span class="m-list-timeline__time">
                                                                7 hrs
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="m_widget4_tab2_content"></div>
                                        <div class="tab-pane" id="m_widget4_tab3_content"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Audit Log-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div style="display:none" class="row">
                        <div class="col-xl-6">
                            <!--begin:: Widgets/Tasks -->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Tasks
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                                    Today
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content1" role="tab">
                                                    Week
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab3_content1" role="tab">
                                                    Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget2_tab1_content">
                                            <div class="m-widget2">
                                                <div class="m-widget2__item m-widget2__item--primary">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By Bob
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget2__item m-widget2__item--warning">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Prepare Docs For Metting On Monday
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By Sean
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget2__item m-widget2__item--brand">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Make Widgets Great Again.Estudiat Communy Elit
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By Aziko
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget2__item m-widget2__item--success">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Make Metronic Great Again.Lorem Ipsum
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By James
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget2__item m-widget2__item--danger">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Completa Financial Report For Emirates Airlines
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By Bob
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget2__item m-widget2__item--info">
                                                    <div class="m-widget2__checkbox">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                            <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="m-widget2__desc">
                                                        <span class="m-widget2__text">
                                                            Completa Financial Report For Emirates Airlines
                                                        </span>
                                                        <br>
                                                        <span class="m-widget2__user-name">
                                                            <a href="#" class="m-widget2__link">
                                                                By Sean
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="m-widget2__actions">
                                                        <div class="m-widget2__actions-nav">
                                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                                                <a href="#" class="m-dropdown__toggle">
                                                                    <i class="la la-ellipsis-h"></i>
                                                                </a>
                                                                <div class="m-dropdown__wrapper">
                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                    <div class="m-dropdown__inner">
                                                                        <div class="m-dropdown__body">
                                                                            <div class="m-dropdown__content">
                                                                                <ul class="m-nav">
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Activity
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Messages
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                FAQ
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                        <a href="" class="m-nav__link">
                                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                            <span class="m-nav__link-text">
                                                                                                Support
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="m_widget2_tab2_content"></div>
                                        <div class="tab-pane" id="m_widget2_tab3_content"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Tasks -->
                        </div>
                        <div class="col-xl-6">
                            <!--begin:: Widgets/Support Tickets -->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Support Tickets
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-widget3">
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
                                                    Pending
                                                </span>
                                            </div>
                                            <div class="m-widget3__body">
                                                <p class="m-widget3__text">
                                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam
                                                    erat volutpat.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Lebron King James
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        1 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-brand">
                                                    Open
                                                </span>
                                            </div>
                                            <div class="m-widget3__body">
                                                <p class="m-widget3__text">
                                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam
                                                    erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation
                                                    ullamcorper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Deb Gibson
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        3 weeks ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
                                                    Closed
                                                </span>
                                            </div>
                                            <div class="m-widget3__body">
                                                <p class="m-widget3__text">
                                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam
                                                    erat volutpat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Support Tickets -->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div style="display:none" class="row">
                        <div class="col-xl-12">
                            <!--begin::Portlet-->
                            <div class="m-portlet " id="m_portlet">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <span class="m-portlet__head-icon">
                                                <i class="flaticon-map-location"></i>
                                            </span>
                                            <h3 class="m-portlet__head-text">
                                                Calendar
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item">
                                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                                                    <span>
                                                        <i class="la la-plus"></i>
                                                        <span>
                                                            Add Event
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div id="m_calendar"></div>
                                </div>
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div style="display:none" class="row">
                        <div class="col-xl-6 col-lg-12">
                            <!--Begin::Portlet-->
                            <div class="m-portlet  m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Recent Activities
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">
                                                                            Quick Actions
                                                                        </span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Cancel
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380"
                                        style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
                                        <!--Begin::Timeline 2 -->
                                        <div class="m-timeline-2">
                                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                                <div class="m-timeline-2__item">
                                                    <span class="m-timeline-2__item-time">
                                                        10:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-danger"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text  m--padding-top-5">
                                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                        <br> incididunt ut labore et dolore magna
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        12:45
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-success"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                                        AEOL Meeting With
                                                    </div>
                                                    <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                                        <a href="#">
                                                            <img src="assets/app/media/img/users/100_4.jpg" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="assets/app/media/img/users/100_13.jpg" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="assets/app/media/img/users/100_11.jpg" title="">
                                                        </a>
                                                        <a href="#">
                                                            <img src="assets/app/media/img/users/100_14.jpg" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        14:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-brand"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        Make Deposit
                                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                                            USD 700
                                                        </a>
                                                        To ESL.
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        16:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-warning"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                        <br> incididunt ut labore et dolore magna elit enim at minim
                                                        <br> veniam quis nostrud
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        17:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-info"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        Placed a new order in
                                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                                            SIGNATURE MOBILE
                                                        </a>
                                                        marketplace.
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        16:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-brand"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                        <br> incididunt ut labore et dolore magna elit enim at minim
                                                        <br> veniam quis nostrud
                                                    </div>
                                                </div>
                                                <div class="m-timeline-2__item m--margin-top-30">
                                                    <span class="m-timeline-2__item-time">
                                                        17:00
                                                    </span>
                                                    <div class="m-timeline-2__item-cricle">
                                                        <i class="fa fa-genderless m--font-danger"></i>
                                                    </div>
                                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                                        Received a new feedback on
                                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                                            FinancePro App
                                                        </a>
                                                        product.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End::Timeline 2 -->
                                    </div>
                                </div>
                            </div>
                            <!--End::Portlet-->
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!--Begin::Portlet-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Recent Notifications
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                                    Today
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
                                                    Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget2_tab1_content">
                                            <!--Begin::Timeline 3 -->
                                            <div class="m-timeline-3">
                                                <div class="m-timeline-3__items">
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                                        <span class="m-timeline-3__item-time">
                                                            09:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Bob
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                                        <span class="m-timeline-3__item-time">
                                                            10:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit amit
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Sean
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                        <span class="m-timeline-3__item-time">
                                                            11:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit amit eiusmdd tempor
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By James
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                                        <span class="m-timeline-3__item-time">
                                                            12:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By James
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                        <span class="m-timeline-3__item-time">
                                                            14:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Derrick
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                                        <span class="m-timeline-3__item-time">
                                                            15:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit amit,consectetur
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Iman
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                        <span class="m-timeline-3__item-time">
                                                            17:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem ipsum dolor sit consectetur eiusmdd tempor
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Aziko
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Timeline 3 -->
                                        </div>
                                        <div class="tab-pane" id="m_widget2_tab2_content">
                                            <!--Begin::Timeline 3 -->
                                            <div class="m-timeline-3">
                                                <div class="m-timeline-3__items">
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                                        <span class="m-timeline-3__item-time m--font-focus">
                                                            09:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Bob
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                                        <span class="m-timeline-3__item-time m--font-warning">
                                                            10:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                There are many variations of passages of Lorem Ipsum available.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Sean
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                        <span class="m-timeline-3__item-time m--font-primary">
                                                            11:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By James
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                                        <span class="m-timeline-3__item-time m--font-success">
                                                            12:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By James
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                        <span class="m-timeline-3__item-time m--font-warning">
                                                            14:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Latin words, combined with a handful of model sentence structures.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Derrick
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                                        <span class="m-timeline-3__item-time m--font-info">
                                                            15:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Iman
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                        <span class="m-timeline-3__item-time m--font-danger">
                                                            17:00
                                                        </span>
                                                        <div class="m-timeline-3__item-desc">
                                                            <span class="m-timeline-3__item-text">
                                                                Lorem Ipsum is therefore always free from repetition, injected humour.
                                                            </span>
                                                            <br>
                                                            <span class="m-timeline-3__item-user-name">
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                                    By Aziko
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Timeline 3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Portlet-->
                        </div>
                    </div>
                    <!--End::Section-->
                    <!--Begin::Section-->
                    <div style="display:none" class="row">
                        <div class="col-xl-8">
                            <!--begin:: Widgets/Best Sellers-->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Best Sellers
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                                                    Last Month
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                                                    last Year
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                                                    All time
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Content-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                                            <!--begin::m-widget5-->
                                            <div class="m-widget5">
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                author:
                                                            </span>
                                                            <span class="m-widget5__info-author-name">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            19,200
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1046
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            24,583
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            3809
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            10,054
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1103
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::m-widget5-->
                                        </div>
                                        <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                                            <!--begin::m-widget5-->
                                            <div class="m-widget5">
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            24,583
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            3809
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            19,200
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1046
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            10,054
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1103
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::m-widget5-->
                                        </div>
                                        <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                                            <!--begin::m-widget5-->
                                            <div class="m-widget5">
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            10.054
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1103
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            24,583
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            sales
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            3809
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
                                                            Make Metronic Great Again.Lorem Ipsum Amet
                                                        </span>
                                                        <div class="m-widget5__info">
                                                            <span class="m-widget5__author">
                                                                Author:
                                                            </span>
                                                            <span class="m-widget5__info-author m--font-info">
                                                                Fly themes
                                                            </span>
                                                            <span class="m-widget5__info-label">
                                                                Released:
                                                            </span>
                                                            <span class="m-widget5__info-date m--font-info">
                                                                23.08.17
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">
                                                            19,200
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__sales">
                                                            1046
                                                        </span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">
                                                            1046
                                                        </span>
                                                        <br>
                                                        <span class="m-widget5__votes">
                                                            votes
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::m-widget5-->
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end:: Widgets/Best Sellers-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Authors Profit-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Authors Profit
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="m-portlet__nav">
                                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover">
                                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                    All
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">
                                                                            Quick Actions
                                                                        </span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Activity
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Messages
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
                                                                                FAQ
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
                                                                                Support
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Cancel
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-widget4">
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo5.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Trump Themes
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Make Metronic Great Again
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$2500
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    StarBucks
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Good Coffee & Snacks
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    -$290
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Phyton
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    A Programming Language
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$17
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo2.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    GreenMakers
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Make Green Great Again
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    -$2.50
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--logo">
                                                <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                                            </div>
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    FlyThemes
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    A Let's Fly Fast Again Language
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    +$200
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Authors Profit-->
                        </div>
                    </div>
                    <!--End::Section-->
                </div>
            </div>
        </div>
        <!-- end:: Body -->

        @include( "shared.footer" )

    </div>
    <!-- end:: Page -->

    <!-- begin::Quick Sidebar -->
    @include( "shared.quickSidebar" )
    <!-- end::Quick Sidebar -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->


    <!-- begin::Quick Nav -->
    @include( "shared.quickNav" )
    <!-- end::Quick Nav -->

    <!--begin::Base Scripts -->
    <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Vendors -->
    <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->
    <!--begin::Page Snippets -->
    <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
    <!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>

<!-- <script>

    $(function(){

        $(document).on('mouseover', '., function(){
            $(thdown).addClass('m-dropdown--open');
        });

        $(document).on('mouseleave', '., function(){
            $(thdown).removeClass('m-dropdown--open');
        });

   });

   
</script> -->