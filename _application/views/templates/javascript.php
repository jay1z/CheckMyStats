<?php
$page = $this->session->userdata('page');
if ($page != 'landing')     {load_for_every_page();}

if ($page == 'about')       {load_about();}
if ($page == 'calendar')    {load_calendar();}
if ($page == 'dashboard')   {load_dashboard();}
if ($page == 'game')        {load_game();}
if ($page == 'home')        {load_home();}
if ($page == 'leagues')     {load_leagues();}
if ($page == 'profile')     {load_profile();}
if ($page == 'register')    {load_register();}
if ($page == 'teams')       {load_teams();}

function load_for_every_page(){
    echo '<script src="../../../assets/vendors/base/vendors.bundle.js"></script>';
    echo '<script src="../../../assets/demo/demo7/base/scripts.bundle.js"></script>';
    echo '<script src="../../../assets/app/js/modals.js"></script>';
}
function load_about(){echo '';}
function load_calendar(){
    echo '<script src="../../../assets/app/js/team.js"></script>';
    echo '<script src="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"></script>';
    echo '<script src="../../../assets/default/custom/components/calendar/list-view.js"></script>';
}
function load_dashboard(){echo '';}
function load_game(){
    echo '<script src="../../../assets/default/custom/components/datatables/child/data-ajax.js"></script>';
}
function load_home(){echo '';}
function load_leagues(){
    echo '<script src="../../../assets/app/js/team.js"></script>';
    echo '<script src="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"></script>';
    echo '<script src="../../../assets/default/custom/components/calendar/list-view.js"></script>';
}
function load_profile(){echo '';}
function load_register(){echo '';}
function load_teams(){
    echo '<script src="../../../assets/app/js/team.js"></script>';
};
?>

</body>
<!-- end::Body -->
</html>