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
                                <img alt="" src="../../../assets/demo/demo7/media/img/logo/logo.png"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
                            id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                data-menu-submenu-toggle="click" aria-haspopup="true">
                                <a href="#" class="m-menu__link m-menu__toggle">
                                    <span class="m-menu__item-here"></span>
                                    <span class="m-menu__link-text">
												Dashboard
											</span>
                                    <i class="m-menu__hor-arrow la la-angle-down"></i>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                    <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                            <a href="home" class="m-menu__link ">
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
                                        <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover"
                                            data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Latest Orders
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Pending Orders
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Processed Orders
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Delivery Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Payments
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Customers
																	</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover"
                                            data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Customer Feedbacks
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Supplier Feedbacks
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Reviewed Feedbacks
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Resolved Feedbacks
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-map"></i>
                                                            <span class="m-menu__link-text">
																		Annual Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-user"></i>
                                                            <span class="m-menu__link-text">
																		HR Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                            <span class="m-menu__link-text">
																		IPO Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                            <span class="m-menu__link-text">
																		Finance Margins
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Coca Cola CRM
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Delta Airlines Booking Site
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Malibu Accounting
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Vineseed Website Rewamp
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Zircon Mobile App
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-map"></i>
                                                            <span class="m-menu__link-text">
																		Annual Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-user"></i>
                                                            <span class="m-menu__link-text">
																		HR Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                            <span class="m-menu__link-text">
																		IPO Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                            <span class="m-menu__link-text">
																		Finance Margins
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Coca Cola CRM
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Delta Airlines Booking Site
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Malibu Accounting
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Vineseed Website Rewamp
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Zircon Mobile App
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Staff Directory
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Client Directory
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Salary Reports
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Staff Payslips
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
																		Corporate Expenses
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Report Adjusments
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Sources & Mediums
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Reporting Settings
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Conversions
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
																	<span class="m-menu__link-text">
																		Report Flows
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                        <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover"
                                            data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-users"></i>
                                                            <span class="m-menu__link-text">
																		Active Users
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                            <span class="m-menu__link-text">
																		User Explorer
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-menu__link-text">
																		Users Flows
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                            <span class="m-menu__link-text">
																		Market Segments
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                        <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover"
                                            data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-signs-1"></i>
                                                            <span class="m-menu__link-text">
																		File Attributes
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                        <a href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-icon flaticon-folder"></i>
                                                            <span class="m-menu__link-text">
																		Folders
																	</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
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
                    <!-- END: Horizontal Menu -->
                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light"
                             id="m_quicksearch" data-search-type="default">
                            <!--BEGIN: Search Form -->
                            <form class="m-header-search__form">
                                <div class="m-header-search__wrapper">
											<span class="m-header-search__icon-search" id="m_quicksearch_search">
												<i class="flaticon-search"></i>
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
                            <!--END: Search Form -->
                            <!--BEGIN: Search Results -->
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
                            <!--BEGIN: END Results -->
                        </div>
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
                                    data-dropdown-toggle="click" data-dropdown-persistent="true">
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
                                                        <img src="../../../assets/app/media/img/users/user4.jpg"
                                                             class="m--img-rounded m--marginless" alt=""/>
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
                                                        <li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                                        </li>
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
            <div
                    id="m_ver_menu"
                    class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
                    data-menu-vertical="true"
                    data-menu-scrollable="true" data-menu-dropdown-timeout="500"
            >
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight"
                        aria-haspopup="true" data-menu-submenu-toggle="click"
                        data-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-menu"></i>
                            <span class="m-menu__link-text">
										Applications
									</span>
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
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                        data-menu-submenu-toggle="click" data-redirect="true">
                        <a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-add"></i>
                            <span class="m-menu__link-text">
										Add
									</span>
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
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true"
                        data-menu-submenu-toggle="click" data-redirect="true">
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
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true"
                        data-menu-submenu-toggle="click">
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
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true"
                        data-menu-submenu-toggle="click">
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
                            <li class="m-nav__separator">
                                -
                            </li>
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
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->
                <div class="m-portlet">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Stats2-1 -->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Member Profit
                                                </h3>
                                                <span class="m-widget1__desc">
															Awerage Weekly Profit
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															+$17,800
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Orders
                                                </h3>
                                                <span class="m-widget1__desc">
															Weekly Customer Orders
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
															+1,800
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Issue Reports
                                                </h3>
                                                <span class="m-widget1__desc">
															System bugs and issues
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															-27,49%
														</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Stats2-1 -->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Revenue Change-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header">
                                        <h3 class="m-widget14__title">
                                            Revenue Change
                                        </h3>
                                        <span class="m-widget14__desc">
													Revenue change breakdown by cities
												</span>
                                    </div>
                                    <div class="row  align-items-center">
                                        <div class="col">
                                            <div id="m_chart_revenue_change" class="m-widget14__chart1"
                                                 style="height: 180px"></div>
                                        </div>
                                        <div class="col">
                                            <div class="m-widget14__legends">
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                    <span class="m-widget14__legend-text">
																+10% New York
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                    <span class="m-widget14__legend-text">
																-7% London
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                    <span class="m-widget14__legend-text">
																+20% California
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Revenue Change-->
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
                                            Sales Stats
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-portlet__nav-item--last m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            data-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
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
																Sales Grow
															</span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="m-widget15__item">
															<span class="m-widget15__stats">
																54%
															</span>
                                                    <span class="m-widget15__text">
																Orders Grow
															</span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 40%;" aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
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
																Profit Grow
															</span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                             style="width: 55%;" aria-valuenow="75" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="m-widget15__item">
															<span class="m-widget15__stats">
																79%
															</span>
                                                    <span class="m-widget15__text">
																Member Grow
															</span>
                                                    <div class="m--space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                             style="width: 60%;" aria-valuenow="100" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
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
                        <!--begin:: Widgets/Inbound Bandwidth-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit "
                             style="min-height: 300px">
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
                                            data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                Today
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                      style="left: auto; right: 36.5px;"></span>
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
                                <div class="m-widget20">
                                    <div class="m-widget20__number m--font-success">
                                        670
                                    </div>
                                    <div class="m-widget20__chart" style="height:160px;">
                                        <canvas id="m_chart_bandwidth1"></canvas>
                                    </div>
                                </div>
                                <!--end::Widget 5-->
                            </div>
                        </div>
                        <!--end:: Widgets/Inbound Bandwidth-->
                        <div class="m--space-30"></div>
                        <!--begin:: Widgets/Outbound Bandwidth-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit "
                             style="min-height: 300px">
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
                                            data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                Today
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                      style="left: auto; right: 36.5px;"></span>
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
                                <div class="m-widget20">
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
                                            Top Products
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                All
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                      style="left: auto; right: 36.5px;"></span>
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
                                            <img src="../../../assets/app/media/img/client-logos/logo3.png" alt="">
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
                                            <img src="../../../assets/app/media/img/client-logos/logo1.png" alt="">
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
														+$300
													</span>
												</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="../../../assets/app/media/img/client-logos/logo4.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
													<span class="m-widget4__title">
														Starbucks
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
                                    <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20"
                                         style="height:260px;">
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
                                               href="#m_widget2_tab2_content1" role="tab">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget2_tab3_content1" role="tab">
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
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             data-dropdown-toggle="hover">
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
                                                <img class="m-widget3__img"
                                                     src="../../../assets/app/media/img/users/user1.jpg"
                                                     alt="">
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
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="m-widget3__item">
                                        <div class="m-widget3__header">
                                            <div class="m-widget3__user-img">
                                                <img class="m-widget3__img"
                                                     src="../../../assets/app/media/img/users/user4.jpg"
                                                     alt="">
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
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut
                                                wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="m-widget3__item">
                                        <div class="m-widget3__header">
                                            <div class="m-widget3__user-img">
                                                <img class="m-widget3__img"
                                                     src="../../../assets/app/media/img/users/user5.jpg"
                                                     alt="">
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
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
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
                <div class="row">
                    <div class="col-xl-12">
                        <!--begin::Portlet-->
                        <div class="m-portlet" id="m_portlet">
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
                    <div class="col-xl-6 col-lg-12">
                        <!--Begin::Portlet-->
                        <div class="m-portlet  m-portlet--full-height">
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
                                                    <img src="../../../assets/app/media/img/users/100_4.jpg" title="" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="../../../assets/app/media/img/users/100_13.jpg" title="" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="../../../assets/app/media/img/users/100_11.jpg" title="" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="../../../assets/app/media/img/users/100_14.jpg" title="" alt="">
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
                    <div class="m-portlet m-portlet--full-height">
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
                                <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                    role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab"
                                           href="#m_widget5_tab1_content" role="tab">
                                            Last Month
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab"
                                           href="#m_widget5_tab2_content" role="tab">
                                            last Year
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab"
                                           href="#m_widget5_tab3_content" role="tab">
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product6.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Great Logo Designn
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product10.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Branding Mockup
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product11.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Awesome Mobile App
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product11.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Branding Mockup
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product6.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Great Logo Designn
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product10.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Awesome Mobile App
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product10.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Branding Mockup
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product11.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Great Logo Designn
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                                <img class="m-widget7__img"
                                                     src="../../../assets/app/media/img/products/product6.jpg" alt="">
                                            </div>
                                            <div class="m-widget5__content">
                                                <h4 class="m-widget5__title">
                                                    Awesome Mobile App
                                                </h4>
                                                <span class="m-widget5__desc">
																Make Metronic Great  Again.Lorem Ipsum Amet
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
                                        data-dropdown-toggle="hover">
                                        <a href="#"
                                           class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
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
                            <div class="m-widget4">
                                <div class="m-widget4__item">
                                    <div class="m-widget4__img m-widget4__img--logo">
                                        <img src="../../../assets/app/media/img/client-logos/logo5.png" alt="">
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
                                        <img src="../../../assets/app/media/img/client-logos/logo4.png" alt="">
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
                                        <img src="../../../assets/app/media/img/client-logos/logo3.png" alt="">
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
                                        <img src="../../../assets/app/media/img/client-logos/logo2.png" alt="">
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
                                        <img src="../../../assets/app/media/img/client-logos/logo1.png" alt="">
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
<!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; CheckMyStats
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
                    <li class="m-nav__item m-nav__item">
                        <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
                           data-placement="left">
                            <i class="m-nav__link-icon flaticon-technology-1 m--icon-font-size-lg3"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end::Footer -->
</div>
<!-- end:: Page -->