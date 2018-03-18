var CalendarListView = function() {

    return {
        //main function to initiate the module
        init: function() {
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            $('#m_calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaDay,listWeek'
                },
                defaultView: 'month',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                navLinks: true,
                height: 900,
                eventSources:[{url:'/data/upcoming_games'}],

                eventRender: function(event, element) {
                    if (element.hasClass('fc-day-grid-event')) {
                        element.data('content', event.description);
                        element.data('placement', 'top');
                        mApp.initPopover(element); 
                    } else if (element.hasClass('fc-time-grid-event')) {
                        element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>'); 
                    } else if (element.find('.fc-list-item-title').length !== 0) {
                        element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>'); 
                    }
                }
            });

            $('#m_list_calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: ''
                },
                defaultView: 'listWeek',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                navLinks: false,
                height: 450,
                eventSources:[ {url:'/data/upcoming_games'}],

                eventRender: function(event, element) {
                    if (element.hasClass('fc-day-grid-event')) {
                        element.data('content', event.description);
                        element.data('placement', 'top');
                        mApp.initPopover(element);
                    } else if (element.hasClass('fc-time-grid-event')) {
                        element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                    } else if (element.find('.fc-list-item-title').length !== 0) {
                        element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
                    }
                }
            });
        }
    };
}();

jQuery(document).ready(function() {
    CalendarListView.init();
});