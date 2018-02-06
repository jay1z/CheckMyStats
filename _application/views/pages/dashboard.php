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

<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6">
            <div class="m-portlet m-portlet--full-height">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">Timeline Examples</h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab" aria-expanded="true">Last Month</a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab" aria-expanded="false">All Time</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget2_tab1_content" aria-expanded="true">
                            <!--begin:Timeline 1-->
                            <div class="m-timeline-1 m-timeline-1--fixed">
                                <div class="m-timeline-1__items">
                                    <div class="m-timeline-1__marker"></div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left m-timeline-1__item--first">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														11:35
														<span>
															AM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Users Joined Today
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                <div class="m-list-pics">
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_4.jpg" title="">
                                                    </a>
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_13.jpg" title="">
                                                    </a>
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_11.jpg" title="">
                                                    </a>
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_14.jpg" title="">
                                                    </a>
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_7.jpg" title="">
                                                    </a>
                                                    <a href="../../#">
                                                        <img src="assets/app/media/img/users/100_3.jpg" title="">
                                                    </a>
                                                </div>
                                                <div class="m-timeline-1__item-body m--margin-top-15">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                    <br>
                                                    tempors labore et dolore.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														02:50
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div style="height:170px;">
                                                <div style="height:100%;overflow:hidden;display:block;background: url(http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;zoom=5&amp;key=AIzaSyBMlTEcPR5QULmk9QUaS7lwUK7qtabunEI) no-repeat 50% 50%;">
                                                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;zoom=16&amp;key=AIzaSyBMlTEcPR5QULmk9QUaS7lwUK7qtabunEI" style="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														02:58
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Latest News
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                <br>
                                                tempor incididunt ut labore et dolore magna enim
                                                <br>
                                                ad minim veniam nostrud.
                                            </div>
                                            <div class="m-timeline-1__item-actions">
                                                <a  href="#" class="btn btn-sm btn-outline-brand m-btn m-btn--pill m-btn--custom">
                                                    Read more...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														04:10
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                My ToDo
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    12:00
                                                </div>
                                                <div class="m-list-badge__items">
                                                    <a href="#" class="m-list-badge__item">
                                                        Hiking
                                                    </a>
                                                    <a href="#" class="m-list-badge__item">
                                                        Lunch
                                                    </a>
                                                    <a href="#" class="m-list-badge__item">
                                                        Meet John
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    13:00
                                                </div>
                                                <div class="m-list-badge__items">
																<span class="m-list-badge__item">
																	Setup AOL
																</span>
                                                    <span class="m-list-badge__item">
																	Write Code
																</span>
                                                </div>
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    14:00
                                                </div>
                                                <div class="m-list-badge__items">
                                                    <a href="#" class="m-list-badge__item">
                                                        Just Keep Doing Something
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														05:00&nbsp;
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="media">
                                                <img class="m--margin-right-20" src="../../assets/app/media/img/products/product1.jpg" title="">
                                                <div class="media-body">
                                                    <div class="m-timeline-1__item-title m--margin-top-10  ">
                                                        Some Post
                                                    </div>
                                                    <div class="m-timeline-1__item-body">
                                                        Lorem ipsum dolor sit amit
                                                        <br>
                                                        consectetur eiusmdd
                                                        <br>
                                                        tempor incididunt ut labore
                                                        <br>
                                                        et dolore magna.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m--align-center">
                                    <button type="button" class="btn btn-sm m-btn--custom m-btn--pill  btn-danger">
                                        Load More
                                    </button>
                                </div>
                            </div>
                            <!--End:Timeline 1-->
                        </div>
                        <div class="tab-pane" id="m_widget2_tab2_content">
                            <!--begin:Timeline 2-->
                            <div class="m-timeline-1 m-timeline-1--fixed">
                                <div class="m-timeline-1__items">
                                    <div class="m-timeline-1__marker"></div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left m-timeline-1__item--first">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														11:35
														<span>
															AM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Users Joined Today
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                <div class="m-list-badge m--margin-bottom-20">
                                                    <div class="m-list-badge__label m--font-danger">
                                                        12:00
                                                    </div>
                                                    <div class="m-list-badge__items">
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--brand">
                                                            Technology
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--focus">
                                                            Sport
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--success">
                                                            Art
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--danger">
                                                            Music
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="m-list-badge m--margin-bottom-20">
                                                    <div class="m-list-badge__label m--font-brand">
                                                        18:30
                                                    </div>
                                                    <div class="m-list-badge__items">
																	<span class="m-list-badge__item m-list-badge__item--focus">
																		Web Design
																	</span>
                                                        <span class="m-list-badge__item m-list-badge__item--warning">
																		Programming
																	</span>
                                                        <span class="m-list-badge__item m-list-badge__item--info">
																		Illustration
																	</span>
                                                    </div>
                                                </div>
                                                <div class="m-list-badge">
                                                    <div class="m-list-badge__label m--font-warning">
                                                        12:40
                                                    </div>
                                                    <div class="m-list-badge__items">
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--brand">
                                                            Yoga
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--primary">
                                                            Cooking
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--danger">
                                                            Dance
                                                        </a>
                                                        <a href="#" class="m-list-badge__item m-list-badge__item--warning">
                                                            Gym
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														02:50
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div style="height:170px;">
                                                <div style="height:100%;overflow:hidden;display:block;background: url(http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;zoom=5&amp;key=AIzaSyBMlTEcPR5QULmk9QUaS7lwUK7qtabunEI) no-repeat 50% 50%;">
                                                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;zoom=16&amp;key=AIzaSyBMlTEcPR5QULmk9QUaS7lwUK7qtabunEI" style="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														02:58
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Latest News
                                            </div>
                                            <div class="m-timeline-1__item-body m--margin-top-20">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                <br>
                                                tempor incididunt ut labore et dolore magna enim
                                                <br>
                                                ad minim veniam nostrud
                                            </div>
                                            <div class="m-timeline-1__item-btn m--margin-top-25">
                                                <a  href="#" class="btn btn-sm btn-outline-brand m-btn m-btn--pill m-btn--custom">
                                                    Read more...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														04:10
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                My ToDo
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    12:00
                                                </div>
                                                <div class="m-list-badge__items">
                                                    <a href="#" class="m-list-badge__item">
                                                        Hiking
                                                    </a>
                                                    <a href="#" class="m-list-badge__item">
                                                        Lunch
                                                    </a>
                                                    <a href="#" class="m-list-badge__item">
                                                        Meet John
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    13:00
                                                </div>
                                                <div class="m-list-badge__items">
																<span class="m-list-badge__item">
																	Setup AOL
																</span>
                                                    <span class="m-list-badge__item">
																	Write Code
																</span>
                                                </div>
                                            </div>
                                            <div class="m-list-badge m--margin-top-15">
                                                <div class="m-list-badge__label m--font-success">
                                                    14:00
                                                </div>
                                                <div class="m-list-badge__items">
                                                    <a href="#" class="m-list-badge__item">
                                                        Just Keep Doing Something
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left m--margin-top-10">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">
														05:00
														<span>
															PM
														</span>
													</span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="media">
                                                <img class="m--margin-right-20" src="../../assets/app/media/img/products/product1.jpg" title="">
                                                <div class="media-body">
                                                    <div class="m-timeline-1__item-title m--margin-top-10  ">
                                                        Some Post
                                                    </div>
                                                    <div class="m-timeline-1__item-body">
                                                        Lorem ipsum dolor sit amit
                                                        <br>
                                                        consectetur eiusmdd
                                                        <br>
                                                        tempor incididunt ut labore
                                                        <br>
                                                        et dolore magna
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m--align-center">
                                    <button type="button" class="btn btn-sm m-btn--custom m-btn--pill  btn-focus">
                                        Load More
                                    </button>
                                </div>
                            </div>
                            <!--End:Timeline 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Inbound Bandwidth-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">Inbound Bandwidth</h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget20">
                        <div class="m-widget20__number m--font-success">670</div>
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
    </div>
</div>
