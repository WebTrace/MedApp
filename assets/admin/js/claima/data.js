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
    
    //TODO : display full appointment details using bootstrap popover

    
    $("#next").on("click", function(e) {
        e.preventDefault();
        
        var errcount = 0;
        
        errcount = signupStepOneHandler();
        //disable error checking for testing porpose
        //errcount = 0;
        
        //check if errors exists in a form
        console.log("Errors : " + errcount);
        if(errcount == 0) {
            $("#step-one").css("visibility", "hidden");
            $("#step-one").slideUp();
            $("#step-two").css("visibility", "visible");
            $("#step-two").slideDown();
        }
        else {
            //alert("Err chief fill all from fields.. What are you tring to do!!!");
        }
        
        return false;
    });
    
    $("#signup_practitioner").on("submit", function(e) {
        //prevent signup form from sending user data
        e.preventDefault();
        
        var errcount = 0;
        
        errcount = signupStepTwoHandler();
        //disable error checking for testing porpose
        //errcount = 0;
        
        //check if form doesnt have errors
        if(errcount == 0) {
            //hide signup form
            $("#signup_practitioner").hide();
            //show spinner
            $(".spn-parent").show();
            //show signup status
            $(".signup-status").slideDown();
            //ajax object properties
            var url     	= $(this).attr('action'),
                type        = $(this).attr('method'),
                data        = $(this).serialize();
            
            //perform ajax request and sign up a practitioner
            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    $(".spn-parent").hide();
                    $("#signup-status").html(response);
                    console.log(response);
                },
                fail : function(response) {
                    $(".spn-parent").html(response);
                    console.log(response);
                }
            })
        }
    });
    
    /*add new system user
    */
    $("#frm_add_user").on("submit", function(e) {
        //prevent the form from submiting by default
        //e.preventDefault();
        
        var errcount = 0;
        errcount = addUserHandler();
        
        //display error check for testing the form
        errcount = 0;
        
        if(errcount == 0) {
           //start ajax
            var url     = $(this).attr("action"),
                type    = $(this).attr("method"),
                data    = $(this).serialize();
            
            $.ajax({
                url     : url,
                type    : type,
                data    : data,
                success : function(response) {
                    alert(response);
                }
            });
        }
    })
    
    $(".consultation-btn").on("click", function() {
        var patient_id = $(this).attr("id");
        $("#user_id").attr("value", patient_id);
    })
    
    //create patient
    $("#frm-add-new-patient").on("submit", function(e) {
        e.preventDefault();
        
        //show progress
        $("#save-patient-request").show();
        
        //ajax object values
        var url             = $(this).attr('action'),
            type            = $(this).attr('method'),
            data            = $(this).serialize(),
            message_type    = 'success',
            title           = '<h4><i class="fa fa-check-circle-o"></i> Saved</h4>',
            message         = 'Patient saved successfuly.';
        
        //begin ajax request
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {
                console.log("Data " + response);
                //hide progress
                $("#save-patient-request").hide();
                
                //close modal
                $("#add_user_modal").modal('hide');
                
                //show notification
                notification_message(message_type, title, message);
            }
        });
    })
    
    //search patient exisitng in claima application
    $("#frm-search").on('submit', function(e) {
        e.preventDefault();
        //hide magnifying glass icon
        $("#search-waiting").removeClass('glyphicon glyphicon-search');
        
        //show progress icon
        $("#search-waiting").addClass('fa fa-circle-o-notch fa-spin');
        
        var q       = $("#q").val(),
            type    = $(this).attr('method'),
            url     = $(this).attr('action'),
            data    = $(this).serialize();
            
        $.ajax({
            url: url,
            type: type,
            data: data,
            dataType: 'json',
            success: function(response) {
                //show magnifying glass icon
                $("#search-waiting").addClass('glyphicon glyphicon-search');
                
                //hide progress icon
                $("#search-waiting").removeClass('fa fa-circle-o-notch fa-spin');
                
                //
                var title           = '',
                    message_type    = '',
                    message         = '';
                console.log(response);
                //
                //patient_search_result(response);
                
                if(response.length > 0) 
                {
                    //hide new patient form
                    $("#frm-add-new-patient").hide();
                    //hide reset button
                    $("#btn-reset").hide();
                    
                    var full_name           = response[0].first_name + ' ' + response[0].last_name,
                        date_of_birth       = response[0].dob,
                        id_number           = response[0].id_number,
                        gender              = response[0].gender,
                        physical_address    = response[0].address_line + ', ' + response[0].suburb + ', ' + response[0].city + ', ' +response[0].postal_code,
                        postal_address      = "",
                        contact_no          = response[0].contact_no,
                        email_address       = response[0].email_address,
                        patient_id          = response[0].patient_id;
                    
                    title                   = '<h4><i class="fa fa-check-circle-o"></i> User found</h4>';
                    message_type            = 'success';
                    message                 = response[0].first_name + ' ' + response[0].last_name;

                    $("#full-name").text(full_name);
                    $("#data-of-birth").text(date_of_birth);
                    $("#id-number").text(id_number);
                    $("#gender").text(gender);
                    $("#physical-address").text(physical_address);
                    $("#postal-address").text();
                    $("#contact-number").text(contact_no);
                    $("#email-address").text(email_address);
                    $("#q_patient_id").val(patient_id);
                    
                    //show search results
                    $("#claima-patient").show();
                }
                else
                {
                    title                   = '<h4><i class="fa fa-times-circle-o"></i> User not found</h4>',
                    message_type            = 'danger',
                    message                 = 'Patient with ID number ' + q + ' does not exist.';
                }
                
                //show notification
                notification_message(message_type, title, message);
            },
            error: function() {
                
            }
        })
    })
    
    $("#cancel-search").on("click", function() {
        //hide search results
        $("#claima-patient").hide();
        
        //show new patient form
        $("#frm-add-new-patient").show();
        
        //show reset button
        $("#btn-reset").show();
    })
})

