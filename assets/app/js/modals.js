var Modals = function() {
    return {
        //== Init
        init: function () {
            $('#m_select2_LeagueSelect').select2({placeholder: "Select League"});
            $('#m_select2_SportSelect').select2({placeholder: "Select Sport"});

            $("#btn_leagueSubmit").on("click",function () {
                //event.preventDefault();
                var league_name = $('#league_name').val();
                var sport_id = $('#m_select2_SportSelect').val();
                $.ajax({
                    type: 'POST',
                    url:  'user/create_league',
                    //dataType : 'json',
                    data : {'league_name' : league_name, 'sport_id' : sport_id}
                })
                    .done( function (responseText) {
                        // Triggered if response status code is 200 (OK)
                        swal({
                            position: 'top-right',
                            type: 'success',
                            title: 'League created successfully',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    .fail( function (jqXHR, status, error) {
                        // Triggered if response status code is NOT 200 (OK)
                        swal({
                            position: 'top-right',
                            type: 'error',
                            title: 'League could not be created',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    /*.always( function() {
                        // Always run after .done() or .fail()
                        //alert("Always");
                    });*/
            });
            $("#btn_teamSubmit").on("click",function () {
                //event.preventDefault();
                var team_name = $('#team_name').val();
                var league_id = $('#m_select2_LeagueSelect').val();
                $.ajax({
                    type: 'POST',
                    url:  'user/create_team',
                    //dataType : 'json',
                    data : {'team_name' : team_name, 'league_id' : league_id}
                })
                    .done( function (responseText) {
                        // Triggered if response status code is 200 (OK)
                        swal({
                            position: 'top-right',
                            type: 'success',
                            title: 'Team created successfully',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    .fail( function (jqXHR, status, error) {
                        // Triggered if response status code is NOT 200 (OK)
                        swal({
                            position: 'top-right',
                            type: 'error',
                            title: 'Team could not be created',
                            text: status + ':' + error,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                /*.always( function() {
                    // Always run after .done() or .fail()
                    //alert("Always");
                });*/
            });
        }
    };
}();

$(document).ready(function() {
    Modals.init();
});
