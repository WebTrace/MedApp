$(document).ready(function() {
    //Grah for representing claims overview
    if ($('#graph_bar_group').length )
    {
        Morris.Bar({
            element: 'graph_bar_group',
            data: [
                {"month": "Jan", "accepted_claims": 3148, "recjected_claims": 660},
                {"month": "Feb", "accepted_claims": 2115, "recjected_claims": 729},
                {"month": "Mar", "accepted_claims": 1769, "recjected_claims": 1018},
                {"month": "Apr", "accepted_claims": 2246, "recjected_claims": 1461},
                {"month": "May", "accepted_claims": 2657, "recjected_claims": 1967},
                {"month": "Jun", "accepted_claims": 900,  "recjected_claims": 2627},
                {"month": "Jul", "accepted_claims": 2000, "recjected_claims": 1500},
                {"month": "Aug", "accepted_claims": 2871, "recjected_claims": 2216},
                {"month": "Sep", "accepted_claims": 2401, "recjected_claims": 1656},
                {"month": "Oct", "accepted_claims": 2115, "recjected_claims": 1022},
                {"month": "Nov", "accepted_claims": 3471, "recjected_claims": 1022},
                {"month": "Dec", "accepted_claims": 2115, "recjected_claims": 1022}
            ],
            xkey:           'month',
            barColors:      ['#61e4e2', '#ffba5a', '#eeeee', '#3498DB'],
            ykeys:          ['accepted_claims', 'recjected_claims'],
            labels:         ['Accepted claims', 'Rejected claims'],
            hideHover:      'auto',
            xLabelAngle:    60,
            resize:         true
        });
    }
    
    // Progressbar
    if ($(".progress .progress-bar")[0]) {
        $('.progress .progress-bar').progressbar();
    }
    
    //Manage users table search
})