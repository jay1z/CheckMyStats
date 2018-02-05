<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Metronic | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors -->
    <link href="../../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../../../assets/demo/demo5/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../../assets/demo/demo5/media/img/logo/favicon.ico"/>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Header -->
    <header class="m-grid__item		m-header " data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200">
        <div class="m-header__top">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Brand -->
                    <div class="m-stack__item m-brand">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="index.html" class="m-brand__logo-wrapper"><img alt="" src="../../../assets/demo/demo5/media/img/logo/logo.png"/></a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- begin::Responsive Header Menu Toggler-->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- end::Responsive Header Menu Toggler-->
                                <!-- begin::Topbar Toggler-->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block"><i class="flaticon-confetti"></i></a>
                                <!--end::Topbar Toggler-->
                            </div>
                        </div>
                    </div>
                    <!-- end::Brand -->
                    <!-- begin::Topbar -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-statistics"></i>
                                            <span class="m-menu__link-text">Statistical Charts</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-profile"></i>
                                            <span class="m-menu__link-text">Team & Player Profiles</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-network"></i>
                                            <span class="m-menu__link-text">Network with Players</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="login" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-users"></i>
                                            <span class="m-menu__link-text">Login/Register</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end::Topbar -->
                </div>
            </div>
        </div>
        <div class="m-header__bottom">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Horizontal Menu -->
                    <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
                                id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_menu"
                             class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                                    <a href="index.html" class="m-menu__link ">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
													Dashboard
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                    data-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
													Actions
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Generate Reports
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--success">
																			2
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item  m-menu__item--submenu"
                                                data-menu-submenu-toggle="hover" data-redirect="true"
                                                aria-haspopup="true">
                                                <a href="#" class="m-menu__link m-menu__toggle">
                                                    <i class="m-menu__link-icon flaticon-business"></i>
                                                    <span class="m-menu__link-text">
																Manage Orders
															</span>
                                                    <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                    <span class="m-menu__arrow "></span>
                                                    <ul class="m-menu__subnav">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Latest Orders
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Pending Orders
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Processed Orders
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Delivery Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Payments
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Customers
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="m-menu__item  m-menu__item--submenu"
                                                data-menu-submenu-toggle="hover" data-redirect="true"
                                                aria-haspopup="true">
                                                <a href="#" class="m-menu__link m-menu__toggle">
                                                    <i class="m-menu__link-icon flaticon-chat-1"></i>
                                                    <span class="m-menu__link-text">
																Customer Feedbacks
															</span>
                                                    <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                    <span class="m-menu__arrow "></span>
                                                    <ul class="m-menu__subnav">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Customer Feedbacks
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Supplier Feedbacks
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Reviewed Feedbacks
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Resolved Feedbacks
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Feedback Reports
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                    <span class="m-menu__link-text">
																Register Member
															</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                    data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
													Reports
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left"
                                         style="width:600px">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <div class="m-menu__subnav">
                                            <ul class="m-menu__content">
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Finance Reports
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-map"></i>
                                                                <span class="m-menu__link-text">
																			Annual Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-user"></i>
                                                                <span class="m-menu__link-text">
																			HR Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                <span class="m-menu__link-text">
																			IPO Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                <span class="m-menu__link-text">
																			Finance Margins
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                                <span class="m-menu__link-text">
																			Revenue Reports
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Project Reports
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Coca Cola CRM
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Delta Airlines Booking Site
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Malibu Accounting
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Vineseed Website Rewamp
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Zircon Mobile App
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Mercury CMS
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="click"
                                    data-redirect="true" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
													Orders
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <div class="m-menu__subnav">
                                            <ul class="m-menu__content">
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Finance Reports
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-map"></i>
                                                                <span class="m-menu__link-text">
																			Annual Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-user"></i>
                                                                <span class="m-menu__link-text">
																			HR Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                <span class="m-menu__link-text">
																			IPO Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                <span class="m-menu__link-text">
																			Finance Margins
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                                <span class="m-menu__link-text">
																			Revenue Reports
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Project Reports
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Coca Cola CRM
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Delta Airlines Booking Site
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Malibu Accounting
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Vineseed Website Rewamp
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Zircon Mobile App
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Mercury CMS
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	HR Reports
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Staff Directory
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Client Directory
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Salary Reports
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Staff Payslips
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Corporate Expenses
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                    <span></span>
                                                                </i>
                                                                <span class="m-menu__link-text">
																			Project Expenses
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="m-menu__item">
                                                    <h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Reporting Apps
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </h3>
                                                    <ul class="m-menu__inner">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Report Adjusments
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Sources & Mediums
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Reporting Settings
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Conversions
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Report Flows
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Audit & Logs
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only"
                                    data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                        <i class="m-menu__link-icon flaticon-more-v3"></i>
                                        <span class="m-menu__link-text"></span>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-business"></i>
                                                    <span class="m-menu__link-text">
																eCommerce
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item  m-menu__item--submenu"
                                                data-menu-submenu-toggle="hover" data-redirect="true"
                                                aria-haspopup="true">
                                                <a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-text">
																Audience
															</span>
                                                    <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                    <span class="m-menu__arrow "></span>
                                                    <ul class="m-menu__subnav">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-users"></i>
                                                                <span class="m-menu__link-text">
																			Active Users
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                                <span class="m-menu__link-text">
																			User Explorer
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-menu__link-text">
																			Users Flows
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                                <span class="m-menu__link-text">
																			Market Segments
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-graphic"></i>
                                                                <span class="m-menu__link-text">
																			User Reports
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-map"></i>
                                                    <span class="m-menu__link-text">
																Marketing
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Campaigns
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--success">
																			3
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item  m-menu__item--submenu"
                                                data-menu-submenu-toggle="hover" data-redirect="true"
                                                aria-haspopup="true">
                                                <a href="#" class="m-menu__link m-menu__toggle">
                                                    <i class="m-menu__link-icon flaticon-infinity"></i>
                                                    <span class="m-menu__link-text">
																Cloud Manager
															</span>
                                                    <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                                    <span class="m-menu__arrow "></span>
                                                    <ul class="m-menu__subnav">
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-add"></i>
                                                                <span class="m-menu__link-title">
																			<span class="m-menu__link-wrap">
																				<span class="m-menu__link-text">
																					File Upload
																				</span>
																				<span class="m-menu__link-badge">
																					<span class="m-badge m-badge--danger">
																						3
																					</span>
																				</span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-signs-1"></i>
                                                                <span class="m-menu__link-text">
																			File Attributes
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-folder"></i>
                                                                <span class="m-menu__link-text">
																			Folders
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-menu__item " data-redirect="true"
                                                            aria-haspopup="true">
                                                            <a href="inner.html" class="m-menu__link ">
                                                                <i class="m-menu__link-icon flaticon-cogwheel-2"></i>
                                                                <span class="m-menu__link-text">
																			System Settings
																		</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end::Horizontal Menu -->
                    <!--begin::Search-->
                    <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-"
                         id="m_quicksearch" data-search-type="default">
                        <!--begin::Search Form -->
                        <form class="m-header-search__form">
                            <div class="m-header-search__wrapper">
										<span class="m-header-search__icon-search" id="m_quicksearch_search">
											<i class="la la-search"></i>
										</span>
                                <span class="m-header-search__input-wrapper">
											<input autocomplete="off" type="text" name="q"
                                                   class="m-header-search__input" value="" placeholder="Search..."
                                                   id="m_quicksearch_input">
										</span>
                                <span class="m-header-search__icon-close" id="m_quicksearch_close">
											<i class="la la-remove"></i>
										</span>
                                <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
											<i class="la la-remove"></i>
										</span>
                            </div>
                        </form>
                        <!--end::Search Form -->
                        <!--begin::Search Results -->
                        <div class="m-dropdown__wrapper">
                            <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__scrollable m-scrollable" data-max-height="300"
                                         data-mobile-max-height="200">
                                        <div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Results -->
                    </div>
                    <!--end::Search-->
                </div>
            </div>
        </div>
    </header>
    <!-- end::Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Dashboard
                        </h3>
                    </div>
                    <div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#"
                                       class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->
                <div class="m-portlet">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Daily Sales-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header m--margin-bottom-30">
                                        <h3 class="m-widget14__title">
                                            Daily Sales
                                        </h3>
                                        <span class="m-widget14__desc">
													Check out each collumn for more details
												</span>
                                    </div>
                                    <div class="m-widget14__chart" style="height:120px;">
                                        <canvas id="m_chart_daily_sales"></canvas>
                                    </div>
                                </div>
                                <!--end:: Widgets/Daily Sales-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Profit Share-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header">
                                        <h3 class="m-widget14__title">
                                            Profit Share
                                        </h3>
                                        <span class="m-widget14__desc">
													Profit Share between customers
												</span>
                                    </div>
                                    <div class="row  align-items-center">
                                        <div class="col">
                                            <div id="m_chart_profit_share" class="m-widget14__chart"
                                                 style="height: 160px">
                                                <div class="m-widget14__stat">
                                                    45
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="m-widget14__legends">
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                    <span class="m-widget14__legend-text">
																37% Sport Tickets
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                    <span class="m-widget14__legend-text">
																47% Business Events
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                    <span class="m-widget14__legend-text">
																19% Others
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Profit Share-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Support Stats-->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    IPO Margin
                                                </h3>
                                                <span class="m-widget1__desc">
															Awerage IPO Margin
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-focus">
															+24%
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Payments
                                                </h3>
                                                <span class="m-widget1__desc">
															Yearly Expenses
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-accent">
															+$560,800
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Logistics
                                                </h3>
                                                <span class="m-widget1__desc">
															Regional Logistics
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															-10%
														</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Support Stats-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
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
                                            <a href="#"
                                               class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
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
                <div class="row">
                    <div class="col-xl-8">
                        <!--begin:: Widgets/Application Sales-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Application Sales
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget11_tab1_content" role="tab">
                                                Last Month
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget11_tab2_content" role="tab">
                                                All Time
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget11_tab1_content">
                                        <!--begin::Widget 11-->
                                        <div class="m-widget11">
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table">
                                                    <!--begin::Thead-->
                                                    <thead>
                                                    <tr>
                                                        <td class="m-widget11__label">
                                                            #
                                                        </td>
                                                        <td class="m-widget11__app">
                                                            Application
                                                        </td>
                                                        <td class="m-widget11__sales">
                                                            Sales
                                                        </td>
                                                        <td class="m-widget11__change">
                                                            Change
                                                        </td>
                                                        <td class="m-widget11__price">
                                                            Avg Price
                                                        </td>
                                                        <td class="m-widget11__total m--align-right">
                                                            Total
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <!--end::Thead-->
                                                    <!--begin::Tbody-->
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Vertex 2.0
																		</span>
                                                            <span class="m-widget11__sub">
																			Vertex To By Again
																		</span>
                                                        </td>
                                                        <td>
                                                            19,200
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_1_1"
                                                                        style="display: block; width: 100px; height: 50px;"
                                                                        width="100" height="50"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $63
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $14,740
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Metronic
																		</span>
                                                            <span class="m-widget11__sub">
																			Powerful Admin Theme
																		</span>
                                                        </td>
                                                        <td>
                                                            24,310
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_1_2"
                                                                        style="display: block; width: 100px; height: 50px;"
                                                                        width="100" height="50"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $39
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $16,010
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Apex
																		</span>
                                                            <span class="m-widget11__sub">
																			The Best Selling App
																		</span>
                                                        </td>
                                                        <td>
                                                            9,076
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_1_3"
                                                                        style="display: block; width: 100px; height: 50px;"
                                                                        width="100" height="50"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $105
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $37,200
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Cascades
																		</span>
                                                            <span class="m-widget11__sub">
																			Design Tool
																		</span>
                                                        </td>
                                                        <td>
                                                            11,094
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_1_4"
                                                                        style="display: block; width: 100px; height: 50px;"
                                                                        width="100" height="50"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $16
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $8,520
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <!--end::Tbody-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <div class="m-widget11__action m--align-right">
                                                <button type="button"
                                                        class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                                    Generate Report
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Widget 11-->
                                    </div>
                                    <div class="tab-pane" id="m_widget11_tab2_content">
                                        <!--begin::Widget 11-->
                                        <div class="m-widget11">
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table">
                                                    <!--begin::Thead-->
                                                    <thead>
                                                    <tr>
                                                        <td class="m-widget11__label">
                                                            #
                                                        </td>
                                                        <td class="m-widget11__app">
                                                            Application
                                                        </td>
                                                        <td class="m-widget11__sales">
                                                            Sales
                                                        </td>
                                                        <td class="m-widget11__change">
                                                            Change
                                                        </td>
                                                        <td class="m-widget11__price">
                                                            Avg Price
                                                        </td>
                                                        <td class="m-widget11__total m--align-right">
                                                            Total
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <!--end::Thead-->
                                                    <!--begin::Tbody-->
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Loop
																		</span>
                                                            <span class="m-widget11__sub">
																			CRM System
																		</span>
                                                        </td>
                                                        <td>
                                                            19,200
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_2_1"
                                                                        style="display: block; width: 0px; height: 0px;"
                                                                        height="0" width="0"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $63
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $34,740
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Selto
																		</span>
                                                            <span class="m-widget11__sub">
																			Powerful Website Builder
																		</span>
                                                        </td>
                                                        <td>
                                                            24,310
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_2_2"
                                                                        style="display: block; width: 0px; height: 0px;"
                                                                        height="0" width="0"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $39
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $46,010
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Jippo
																		</span>
                                                            <span class="m-widget11__sub">
																			The Best Selling App
																		</span>
                                                        </td>
                                                        <td>
                                                            9,076
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_2_3"
                                                                        style="display: block; width: 0px; height: 0px;"
                                                                        height="0" width="0"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $105
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $67,800
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td>
																		<span class="m-widget11__title">
																			Verto
																		</span>
                                                            <span class="m-widget11__sub">
																			Web Development Tool
																		</span>
                                                        </td>
                                                        <td>
                                                            11,094
                                                        </td>
                                                        <td>
                                                            <div class="m-widget11__chart"
                                                                 style="height:50px; width: 100px">
                                                                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                <canvas id="m_chart_sales_by_apps_2_4"
                                                                        style="display: block; width: 0px; height: 0px;"
                                                                        height="0" width="0"></canvas>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $16
                                                        </td>
                                                        <td class="m--align-right m--font-brand">
                                                            $18,520
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <!--end::Tbody-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <div class="m-widget11__action m--align-right">
                                                <button type="button"
                                                        class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                                    Generate Report
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Widget 11-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Application Sales-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Latest Updates-->
                        <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Latest Updates
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            data-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                Today
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
                                <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__ext">
                                            <a href="#" class="m-widget4__icon m--font-brand">
                                                <i class="flaticon-interface-3"></i>
                                            </a>
                                        </div>
                                        <div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Metronic Great Again
													</span>
                                        </div>
                                        <div class="m-widget4__ext">
													<span class="m-widget4__number m--font-accent">
														+500
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__ext">
                                            <a href="#" class="m-widget4__icon m--font-brand">
                                                <i class="flaticon-folder-4"></i>
                                            </a>
                                        </div>
                                        <div class="m-widget4__info">
													<span class="m-widget4__text">
														Green Maker Team
													</span>
                                        </div>
                                        <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															-64
														</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__ext">
                                            <a href="#" class="m-widget4__icon m--font-brand">
                                                <i class="flaticon-line-graph"></i>
                                            </a>
                                        </div>
                                        <div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Apex Great Again
													</span>
                                        </div>
                                        <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+1080
														</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget4__item m-widget4__item--last">
                                        <div class="m-widget4__ext">
                                            <a href="#" class="m-widget4__icon m--font-brand">
                                                <i class="flaticon-diagram"></i>
                                            </a>
                                        </div>
                                        <div class="m-widget4__info">
													<span class="m-widget4__text">
														A Programming Language
													</span>
                                        </div>
                                        <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+19
														</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1"
                                         style="height:120px;">
                                        <canvas id="m_chart_latest_updates"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Latest Updates-->
                    </div>
                </div>
                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
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
                                            data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
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
                                                                    <a href="#"
                                                                       class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
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
                                <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide"
                                     data-scrollbar-shown="true" data-scrollable="true" data-max-height="380"
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
                                                    <br>
                                                    incididunt ut labore et dolore magna
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
                                                    <br>
                                                    incididunt ut labore et dolore magna elit enim at minim
                                                    <br>
                                                    veniam quis nostrud
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
                                                    <br>
                                                    incididunt ut labore et dolore magna elit enim at minim
                                                    <br>
                                                    veniam quis nostrud
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
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget2_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget2_tab2_content" role="tab">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
																	<a href="#"
                                                                       class="m-link m-link--metal m-timeline-3__item-link">
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
                <div class="row">
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
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                 data-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
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
                                                                        <a href="#"
                                                                           class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
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
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget4_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget4_tab2_content" role="tab">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget4_tab3_content" role="tab">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget4_tab1_content">
                                        <div class="m-scrollable" data-scrollable="true" data-max-height="400"
                                             style="height: 400px; overflow: hidden;">
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
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Announcements 1-->
                        <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Announcements
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            data-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                <i class="la la-ellipsis-h m--font-light"></i>
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
                                                                    <a href="#"
                                                                       class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
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
                                <!--begin::Widget 7-->
                                <div class="m-widget7 m-widget7--skin-dark">
                                    <div class="m-widget7__desc">
                                        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod
                                        tinciduntut laoreet doloremagna
                                    </div>
                                    <div class="m-widget7__user">
                                        <div class="m-widget7__user-img">
                                            <img class="m-widget7__img" src="assets/app/media/img//users/100_3.jpg"
                                                 alt="">
                                        </div>
                                        <div class="m-widget7__info">
													<span class="m-widget7__username">
														Dan Bold
													</span>
                                            <br>
                                            <span class="m-widget7__time">
														3 days ago
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget7__button">
                                        <a class="m-btn m-btn--pill btn btn-danger" href="#" role="button">
                                            All Feeds
                                        </a>
                                    </div>
                                </div>
                                <!--end::Widget 7-->
                            </div>
                        </div>
                        <!--end:: Widgets/Announcements 1-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                            <div class="m-portlet__head m-portlet__head--fit">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-action">
                                        <button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                                            Blog
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget19">
                                    <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                                         style="min-height-: 286px">
                                        <img src="assets/app/media/img//blog/blog1.jpg" alt="">
                                        <h3 class="m-widget19__title m--font-light">
                                            Introducing New Feature
                                        </h3>
                                        <div class="m-widget19__shadow"></div>
                                    </div>
                                    <div class="m-widget19__content">
                                        <div class="m-widget19__header">
                                            <div class="m-widget19__user-img">
                                                <img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="m-widget19__info">
														<span class="m-widget19__username">
															Anna Krox
														</span>
                                                <br>
                                                <span class="m-widget19__time">
															UX/UI Designer, Google
														</span>
                                            </div>
                                            <div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
															18
														</span>
                                                <span class="m-widget19__comment">
															Comments
														</span>
                                            </div>
                                        </div>
                                        <div class="m-widget19__body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            scrambled it to make text of the printing and typesetting industry scrambled
                                            a type specimen book text of the dummy text of the printing printing and
                                            typesetting industry scrambled dummy text of the printing.
                                        </div>
                                    </div>
                                    <div class="m-widget19__action">
                                        <button type="button"
                                                class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                            Read More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Blog-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Sales States-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Sales Stats
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                <i class="fa fa-genderless m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                      style="left: auto; right: 17px;"></span>
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
                                <div class="m-widget6">
                                    <div class="m-widget6__head">
                                        <div class="m-widget6__item">
													<span class="m-widget6__caption">
														Sceduled
													</span>
                                            <span class="m-widget6__caption">
														Count
													</span>
                                            <span class="m-widget6__caption m--align-right">
														Amount
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget6__body">
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														16/13/17
													</span>
                                            <span class="m-widget6__text">
														67
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														02/28/17
													</span>
                                            <span class="m-widget6__text">
														120
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$11,002
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														03/06/17
													</span>
                                            <span class="m-widget6__text">
														32
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														10/21/17
													</span>
                                            <span class="m-widget6__text">
														130
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$14,740
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														01/02/17
													</span>
                                            <span class="m-widget6__text">
														5
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$18,540
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														03/06/17
													</span>
                                            <span class="m-widget6__text">
														32
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$10,900
													</span>
                                        </div>
                                        <div class="m-widget6__item">
													<span class="m-widget6__text">
														12/31/17
													</span>
                                            <span class="m-widget6__text">
														201
													</span>
                                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
														$25,609
													</span>
                                        </div>
                                    </div>
                                    <div class="m-widget6__foot">
                                        <div class="m-widget6__action m--align-right">
                                            <button type="button"
                                                    class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                                Export
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Sales States-->
                    </div>
                </div>
                <!--End::Section-->
            </div>
        </div>
    </div>
    <!-- end::Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item m-footer ">
        <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
            <div class="m-footer__wrapper">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2017 &copy; Metronic theme by
									<a href="https://keenthemes.com" class="m-link">
										Keenthemes
									</a>
								</span>
                    </div>
                    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												About
											</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Privacy
											</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												T&C
											</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Purchase
											</span>
                                </a>
                            </li>
                            <li class="m-nav__item m-nav__item--last">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
                                   data-placement="left">
                                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500"
     data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!--begin::Base Scripts -->
<script src="../../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="../../../assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="../../../assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
