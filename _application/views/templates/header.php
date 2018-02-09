<?php
$user_id = $this->session->userdata('id');

if (!$user_id) {
    redirect('login');
} else {
    $user_query = $this->db->get_where('user', array('id' => $user_id), null, null);
    $profile_query = $this->db->get_where('profile', array('user_id' => $user_id), null, null);

    $user = $user_query->row();
    $profile = $profile_query->row();

    if (!isset($user)) {
        redirect('login');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CheckMyStats | Dashboard</title>
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
    <link href="../../../assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../../assets/demo/demo7/media/img/logo/favicon.ico"/>
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
    <header class="m-grid__item    m-header " data-minimize-offset="200" data-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="home" class="m-brand__logo-wrapper">
                                <img alt="" src="../../../assets/demo/demo5/media/img/logo/logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block"><span></span></a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block"><span></span></a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block"><i class="flaticon-more"></i></a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                        <ul class="m-menu__nav ">
                            <li class="m-menu__item">
                                <a href="<?php echo base_url(); ?>" class="m-menu__link"><span class="m-menu__link-text">Dashboard</span></a>
                            </li>
                            <li class="m-menu__item">
                                <a href="profile" class="m-menu__link"><span class="m-menu__link-text">Profile</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END: Horizontal Menu -->
                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch" data-search-type="default">
                            <!--BEGIN: Search Form -->
                            <form class="m-header-search__form">
                                <div class="m-header-search__wrapper">
                                    <span class="m-header-search__icon-search" id="m_quicksearch_search">
                                        <i class="flaticon-search"></i>
                                    </span>
                                    <span class="m-header-search__input-wrapper">
                                        <input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
                                    </span>
                                    <span class="m-header-search__icon-close" id="m_quicksearch_close">
                                        <i class="la la-remove"></i>
                                    </span>
                                    <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
                                        <i class="la la-remove"></i>
                                    </span>
                                </div>
                            </form>
                            <!--END: Search Form -->
                            <!--BEGIN: Search Results -->
                            <div class="m-dropdown__wrapper">
                                <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__scrollable m-scrollable" data-max-height="300" data-mobile-max-height="200">
                                            <div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--BEGIN: END Results -->
                        </div>
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                    <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                        <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center">
														<span class="m-dropdown__header-title">
															9 New
														</span>
                                                <span class="m-dropdown__header-subtitle">
															User Notifications
														</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand"
                                                        role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                                               href="#topbar_notifications_notifications" role="tab">
                                                                Alerts
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#topbar_notifications_events" role="tab">
                                                                Events
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#topbar_notifications_logs" role="tab">
                                                                Logs
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active"
                                                             id="topbar_notifications_notifications" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true"
                                                                 data-max-height="250" data-mobile-max-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                            <span class="m-list-timeline__text">
																						12 new users registered
																					</span>
                                                                            <span class="m-list-timeline__time">
																						Just now
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
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
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">
																						New invoice received
																					</span>
                                                                            <span class="m-list-timeline__time">
																						20 mins
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
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
                                                                            <span class="m-list-timeline__badge"></span>
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
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">
																						New order received
																						<span class="m-badge m-badge--danger m-badge--wide">
																							urgent
																						</span>
																					</span>
                                                                            <span class="m-list-timeline__time">
																						7 hrs
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">
																						Production server down
																					</span>
                                                                            <span class="m-list-timeline__time">
																						3 hrs
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">
																						Production server up
																					</span>
                                                                            <span class="m-list-timeline__time">
																						5 hrs
																					</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_events"
                                                             role="tabpanel">
                                                            <!--<div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">-->
                                                            <div class="m-scrollable" data-max-height="250" data-mobile-max-height="200">
                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                New order received
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						Just now
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                New invoice received
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						20 mins
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                Production server up
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						5 hrs
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                New order received
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						7 hrs
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                System shutdown
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						11 mins
																					</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">
                                                                                Production server down
                                                                            </a>
                                                                            <span class="m-list-timeline__time">
																						3 hrs
																					</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_logs"
                                                             role="tabpanel">
                                                            <div class="m-stack m-stack--ver m-stack--general"
                                                                 style="min-height: 180px;">
                                                                <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                    <span class="">
                                                                        All caught up!
                                                                        <br>
                                                                        No new logs.
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    data-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-share"></i>
													</span>
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center">
                                                <span class="m-dropdown__header-title">
                                                    Quick Actions
                                                </span>
                                                <span class="m-dropdown__header-subtitle">
                                                    Shortcuts
                                                </span>
                                            </div>
                                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                <div class="m-dropdown__content">
                                                    <div class="m-scrollable" data-scrollable="false"
                                                         data-max-height="380" data-mobile-max-height="200">
                                                        <div class="m-nav-grid m-nav-grid--skin-light">
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-file"></i>
                                                                    <span class="m-nav-grid__text">
																				Generate Report
																			</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-time"></i>
                                                                    <span class="m-nav-grid__text">
																				Add New Event
																			</span>
                                                                </a>
                                                            </div>
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                    <span class="m-nav-grid__text">
																				Create New Task
																			</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                    <span class="m-nav-grid__text">
																				Completed Tasks
																			</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    data-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-topbar__userpic m--hide">
													<img src="../../../assets/app/media/img/users/user4.jpg"
                                                         class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
                                        <span class="m-nav__link-icon m-topbar__usericon">
                                            <span class="m-nav__link-icon-wrapper">
                                                <i class="flaticon-user-ok"></i>
                                            </span>
                                        </span>
                                        <span class="m-topbar__username m--hide">
													Nick
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center">
                                                <div class="m-card-user m-card-user--skin-light">
                                                    <div class="m-card-user__pic">
                                                        <img src="../../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                    </div>
                                                    <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	<?php echo $profile->fullname ?>
																</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                            <?php echo $user->email ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide"><span class="m-nav__section-text">Section</span></li>
                                                        <li class="m-nav__item">
                                                            <a href="profile" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">
																			Activity
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">
																			Messages
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="profile" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">
																			FAQ
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">
																			Support
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="user/logout"
                                                               class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                Logout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon m-nav__link-icon-alt">
                                            <span class="m-nav__link-icon-wrapper">
                                                <i class="flaticon-grid-menu"></i>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
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
                <a href="home" class="m-brand__logo">
                    <img alt="" src="../../../assets/demo/demo7/media/img/logo/logo.png"/>
                </a>
            </div>
            <!-- END: Brand -->
            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight" aria-haspopup="true" data-menu-submenu-toggle="click" data-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-menu"></i>
                            <span class="m-menu__link-text">Applications</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <div class="m-menu__wrapper">
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent m-menu__item--submenu-fullheight"
                                        aria-haspopup="true">
												<span class="m-menu__link">
													<span class="m-menu__link-text">
														Applications
													</span>
												</span>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Modules
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                        data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                        <a href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Resources
													</span>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu ">
                                            <span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Timesheet
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Payroll
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Contacts
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Members
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Clients
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Finance
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                        data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion"
                                        data-redirect="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">
																Support
															</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--danger">
																	23
																</span>
															</span>
														</span>
													</span>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu ">
                                            <span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Reports
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                                    data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion"
                                                    data-redirect="true">
                                                    <a href="#" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Cases
																</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu ">
                                                        <span class="m-menu__arrow"></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item " aria-haspopup="true"
                                                                data-redirect="true">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">
																						Pending
																					</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--warning">
																							10
																						</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item " aria-haspopup="true"
                                                                data-redirect="true">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">
																						Urgent
																					</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--danger">
																							6
																						</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item " aria-haspopup="true"
                                                                data-redirect="true">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">
																						Done
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
                                                            <li class="m-menu__item " aria-haspopup="true"
                                                                data-redirect="true">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">
																						Archive
																					</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--info m-badge--wide">
																							245
																						</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Clients
																</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">
																	Audit
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Administration
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Management
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Orders
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Order Management
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">
																Delivery
															</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--focus">
																	2
																</span>
															</span>
														</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Products
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Support
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section">
                                        <h4 class="m-menu__section-text">
                                            Reports
                                        </h4>
                                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Accounting
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">
																Products
															</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--accent m-badge--wide m-badge--rounded">
																	new
																</span>
															</span>
														</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														Sales
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-text">
														IPO
													</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="click" data-redirect="true">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-add"></i>
                            <span class="m-menu__link-text">Add</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"
                                    data-redirect="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Add
												</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-commenting"></i>
                                        <span class="m-menu__link-text">
													Post
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-user"></i>
                                        <span class="m-menu__link-text">
													Member
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-cart-arrow-down"></i>
                                        <span class="m-menu__link-text">
													Order
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-coffee"></i>
                                        <span class="m-menu__link-text">
													Entry
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true" data-menu-submenu-toggle="click" data-redirect="true">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-stopwatch"></i>
                            <span class="m-menu__link-text">
										Customers
									</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom" aria-haspopup="true"
                                    data-redirect="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Customers
												</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Reports
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover" data-redirect="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Cases
												</span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Pending
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--warning">
																			10
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Urgent
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--danger">
																			6
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Done
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
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Archive
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--info m-badge--wide">
																			245
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Clients
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Audit
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true" data-menu-submenu-toggle="click">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-settings"></i>
                            <span class="m-menu__link-text">
										Settings
									</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2"
                                    aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Settings
												</span>
											</span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    data-menu-submenu-toggle="hover" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Profile
												</span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Pending
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--warning">
																			10
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Urgent
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--danger">
																			6
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Done
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
                                            <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Archive
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--info m-badge--wide">
																			245
																		</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Accounts
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Help
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Notifications
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true" data-menu-submenu-toggle="click">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-info"></i>
                            <span class="m-menu__link-text">
										Help
									</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1"
                                    aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Help
												</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Support
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Blog
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Documentation
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Pricing
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" data-redirect="true">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
													Terms
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <div class="m-aside-menu-overlay"></div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <!-- <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">
                            Dashboard
                        </h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="home" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Dashboard
                                </span>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Generate Reports
                                </span>
                                </a>
                            </li>
                        </ul>
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
            </div> -->
            <!-- END: Subheader -->