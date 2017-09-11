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
    
    //Table pagination
    var table = "#user-list";
    
    //assign value to the hidden field
    $("#width-fix a").click(function() {
        var numRoms = $(this).text() + ' <span class="caret"></span>',
            rowsVal = $(this).text();
        
        $("#diplay-option").html(numRoms);
        $("#rows").attr("value", rowsVal);
        
        //Start with pagination
        $(".pagination").html("");
        var trnum = 0,
            maxRows = parseInt(rowsVal),
            totalRows = $(table + ' tbody tr').length;
        
        $(table + " tr:gt(0)").each(function() {
            trnum++;
            if(trnum > maxRows)
            {
                $(this).hide();
            }
            if(trnum <= maxRows)
            {
               $(this).show();
            }
        });
        
        if(totalRows > maxRows)
        {
            var pagenum = Math.ceil(totalRows / maxRows);
            
            for(var i = 1; i <= pagenum;)
            {
                $(".pagination").append('<li data-page="' + i + '">\<span>' + i++ + '<span class="sr-only">(current)</span></span>\</li>').show();
            }
        }
        
        $('.pagination li:first-child').addClass('active');
        $(".pagination li").on("click", function() {
            var pagenum = $(this).attr("data-page"),
                trindex = 0;
            
            $(".pagination li").removeClass("active");
            $(this).addClass("active");
            $(table + " tr:gt(0)").each(function() {
                trindex++;
                
                if(trindex > (maxRows * pagenum) || trindex <= ((maxRows * pagenum) - maxRows))
                {
                   $(this).hide();
                }
                else
                {
                    $(this).show();
                }
            })
        })
    });
    
    //table search
    $("#search").keyup(function() {
        //var q = $(this).val();
        search_table($(this).val());
    });
    
    function search_table(q)
    {
        $("#user-list tr:gt(0)").each(function() {
            var found = "false";
            
            console.log($(this).val());
            
            $(this).each(function() {
                
                if($(this).text().toLowerCase().indexOf(q.toLowerCase()) >= 0)
                {
                    found = "true";
                }
            });
            
            if(found == "true")
            {
                $(this).show();
            }
            else
            {
                $(this).hide();
            }
        })
    }
    
    //print buttin
    $("#print").on("click", function() {
        window.print();
    })
    
    //Change user role text
    $("#role-list a").on ("click", function() {
        var text = $(this).text();
        $("#user-role-text").text(text);
        $("#user_role").attr("value", text);
        
        //Toggle practice details fieldset
        if(text == "Practitioner")
        {
            $("#practice-details").slideDown();
        }
        else
        {
            $("#practice-details").slideUp();
        }
        
    })
    
    //User title
    $("#title-list a").on("click", function() {
        var text = $(this).text();
        $("#title-text").text(text);
        $("#user_title").attr("value", text)
    })
    
    $("#speciality-list a").on("click", function() {
        var text = $(this).text();
        $("#specility-text").text(text);
        $("#user_speciality").attr("value", text);
    })
    
    //display fulll appointment details using bootstrap popover
})