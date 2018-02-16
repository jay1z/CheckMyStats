//== Class definition
var Team = function() {
    var datatableTeamRoster = function() {
        $('#m_select2_teamRoster').select2({
            placeholder: "Select a Team"
        });

        if ($('#m_datatable_team_roster').length === 0) {
            return;
        }

        var datatable = $('.m_datatable').mDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'data/view/team_roster'
                    }
                },
                pageSize: 20
            },

            layout: {
                theme: 'default',
                class: '',
                scroll: true,
                height: 380,
                footer: false
            },

            sortable: true,

            filterable: true,

            pagination: false,

            columns: [{
                field: "fullname",
                title: "Full Name",
                sortable: true,
                filterable: true,
                width: 150,
                template: function (row) {
                    var fullname = row.fullname;
                    return '<a href="profile/' + fullname + '">' + fullname + '</a>';
                }
            }, {
                field: "position",
                title: "Position",
                sortable: 'asc',
                filterable: false,
                width: 100
            }, {
                field: "number",
                title: "Jersey Number",
                width: 100
            }]
        });
    };
    return {
        //== Init
        init: function () {
            datatableTeamRoster();
        }
    };
}();

//== Class initialization on page load
jQuery(document).ready(function() {
    Team.init();
});