<?php
    if ($this->session->userdata('id')) {
        $this->session->set_userdata('page', 'home');

        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/modals');
        $this->load->view('templates/quick_sidebar');
        $this->load->view('templates/scroll_top');
        $this->load->view('templates/footer');
        $this->load->view('templates/javascript');
        return;
    }
?>

<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Check My Stats</title>
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
    <link href="../../../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
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
                                <a href="<?php echo base_url(); ?>" class="m-brand__logo-wrapper"><img alt="" src="../../../assets/demo/demo5/media/img/logo/logo.png"/></a>
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
                                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                                            <span class="m-menu__link-text">Statistical Charts</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-users"></i>
                                            <span class="m-menu__link-text">Team & Player Profiles</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-network"></i>
                                            <span class="m-menu__link-text">Sports Networking</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item m-menu__item--rel" aria-haspopup="false">
                                        <a href="login" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-user"></i>
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
    </header>
    <!-- end::Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
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
                        <!--begin:: Widgets/Announcements 1-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
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
                        <span class="m-footer__copyright">2018 &copy; CheckMyStats</span>
                    </div>
                    <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                            <li class="m-nav__item"><a href="#" class="m-nav__link"><span class="m-nav__link-text">About</span></a></li>
                            <li class="m-nav__item"><a href="#" class="m-nav__link"><span class="m-nav__link-text">Privacy</span></a></li>
                            <li class="m-nav__item"><a href="#" class="m-nav__link"><span class="m-nav__link-text">T&C</span></a></li>
                            <li class="m-nav__item m-nav__item--last">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
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
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
</body>
<!-- end::Body -->
</html>
