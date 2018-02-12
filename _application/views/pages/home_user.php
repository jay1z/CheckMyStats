<?php
$user_id = $this->session->userdata('id');

if (!$user_id) {
    redirect('login');
} else {
    $post_query = $this->db->get_where('post', array('author_id' => $user_id), null, null);
}
?>

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Home</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="home" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Home</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Generate Reports</span>
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
                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
<!-- END: Subheader -->
<div class="m-content">
    <!--Begin::Section-->
    <div class="col-md-12">
        <div class="m-portlet m-portlet--full-height">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">Recent Activity</h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-portlet m-portlet--unair">
                    <form class="m-form" action="user/post" method="post">
                        <div class="form-group m-form__group">
                            <div class="m-form m-form--fit m-form--label-align-right">
                                <div class="m-input-icon m-input-icon--left input-group-append m--margin-top-15">
                                    <input type="text" name="post_message" autocomplete="off" class="form-control m-input m-input--pill m-input--air" placeholder="">
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="flaticon-speech-bubble"></i></span></span>
                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom m-btn--pill">Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
                    <!--begin:Timeline 1-->
                    <div class="m-timeline-1 m-timeline-1--fixed">
                        <div class="m-timeline-1__items">
                            <div class="m-timeline-1__marker"></div>
                            <div class="m-timeline-1__item m-timeline-1__item--left m-timeline-1__item--first">
                                <div class="m-timeline-1__item-circle">
                                    <div class="m--bg-danger"></div>
                                </div>
                                <div class="m-timeline-1__item-arrow"></div>
                                <span class="m-timeline-1__item-time m--font-brand">11:35<span>AM</span></span>
                                <div class="m-timeline-1__item-content">
                                    <div class="m-timeline-1__item-title">Users Joined Today</div>
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
                                        <div class="m-timeline-1__item-body m--margin-top-15">Lorem ipsum dolor sit amit,consectetur eiusmdd<br>tempors labore et dolore.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-timeline-1__item m-timeline-1__item--right">
                                <div class="m-timeline-1__item-circle">
                                    <div class="m--bg-danger"></div>
                                </div>
                                <div class="m-timeline-1__item-arrow"></div>
                                <span class="m-timeline-1__item-time m--font-brand">02:50<span>PM</span></span>
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
                                <span class="m-timeline-1__item-time m--font-brand">02:58<span>PM</span></span>
                                <div class="m-timeline-1__item-content">
                                    <div class="m-timeline-1__item-title">Latest News</div>
                                    <div class="m-timeline-1__item-body">Lorem ipsum dolor sit amit,consectetur
                                        eiusmdd<br>tempor incididunt ut labore et dolore magna enim<br>ad minim
                                        veniam nostrud.
                                    </div>
                                    <div class="m-timeline-1__item-actions"><a href="#" class="btn btn-sm btn-outline-brand m-btn m-btn--pill m-btn--custom">Read more...</a></div>
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
                                        <img class="m--margin-right-20"
                                             src="../../assets/app/media/img/products/product1.jpg" title="">
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
                    <!--End:Timeline 1-->
                </div>
            </div>
            <div class="m-portlet__foot">
                <div class="col m--align-center">
                    <button type="button" class="btn btn-sm m-btn--custom m-btn--pill  btn-danger">Load More
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title"><h3 class="m-portlet__head-text">Running Stats</h3></div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Widget5-->
                <div class="m-widget20">
                    <div class="m-widget20__number m--font-success">.275</div>
                    <div class="m-widget20__chart" style="height:160px;">
                        <canvas id="m_chart_bandwidth1"></canvas>
                    </div>
                </div>
                <!--end::Widget 5-->
            </div>
        </div>
        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
            <div class="m-portlet__body">
                <div class="col-sm-6">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide"><i class="flaticon-statistics"></i></span>
                                    <h3 class="m-portlet__head-text">Portlet sub title goes here</h3>
                                    <h2 class="m-portlet__head-label m-portlet__head-label--danger"><span>My Leagues</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            Chart Here!
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-sm-6">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide"><i class="flaticon-statistics"></i></span>
                                    <h3 class="m-portlet__head-text">Portlet sub title goes here</h3>
                                    <h2 class="m-portlet__head-label m-portlet__head-label--info"><span>Upcoming Games</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                            an unknown printer took a galley of type and scrambled.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
</div>
