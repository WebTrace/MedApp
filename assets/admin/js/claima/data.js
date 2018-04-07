$(document).ready(function() {
    //Graph for representing claims overview
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
    
    $("#signup_practitioner").on("submit", function(e) {
        e.preventDefault();

        var errcount = signupStepOneHandler();
        
        //check if errors exists in a form
        if(errcount == 0) {
            //hide signup form
            $("#reg-row").hide();
            
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
                error : function(response) {
                    $(".spn-parent").html(response);
                    console.log(response);
                }
            })
        }
    });
    
    //create branch
    $("").on("submit", function() {
        //prevent signup form from sending user data
        e.preventDefault();

        var errcount = 0;

        errcount = signupStepTwoHandler();
        //disable error checking for testing porpose
        //errcount = 0;

        //check if form doesnt have errors
        if(errcount == 0) {
            
        }
    })
    
    /*add new system user
    */
    $("#save-user").on("click", function(e) {
        //prevent the form from submiting by default
        //e.preventDefault();
        $("#frm_add_user").submit();
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
    
    //get patient details for new consultation modal
    $(".consultation-btn").on("click", function() {
        var patient_id = $(this).attr("id"),
            appointnemt_id = $(this).attr('data-url-patient-watitng');
        
        $("#user_id").attr("value", patient_id);
        $("#patient_id").attr("value", patient_id);
        
        $.ajax({
            url: $(this).attr('data-url'),
            type: 'post',
            dataType: 'json',
            data: { id: patient_id },
            success: function (response) {
                $('#patient_full_name').text(response.first_name);
                $('#id_number').text(response.id_number);
                $("#patient-name").text(response.first_name + " " + response.last_name);
            }
        });
        
        $.ajax({
            url: $(this).attr('data-url-patient-watitng'),
            type: 'post',
            dataType: 'json',
            data: { id: patient_id },
            success: function (response) {
                if(response.length == 1)
                {
                    $('#waiting_app_id').attr('value', response[0].appointment_id);
                    $('#reason-header').text(response[0].appointment_title);
                    $('#appointment_reason').text(response[0].reason);
                    $("#billing_code").attr("value", response[0].billing_type_code);
                    
                    //alert(response[0].billing_type_code);
                    if(response[0].billing_type_code == 1)
                    {
                        $(".treatment-details-frm").css("display", "none");
                        $("#hr-divider").css("display", "none");
                    }
                    else
                    {
                        $(".treatment-details-frm").css("display", "inline");
                        $("#hr-divider").css("display", "none", "inline");
                    }
                }
                else
                {
                    $('#reason-header').text('');
                    $('#appointment_reason').text('');
                }
                
                $("#create_cosultation").modal('show');
            }
        });
    });
    
    $("#appointment_billing_id").on("change", function() {
        var billing_type_code = $("option:selected", this).attr("data");
        
        //billing code value
        $("#patient_billing_code").attr("value", billing_type_code);
        
        if(billing_type_code == 1)
        {
            var url             = $("#medical_aid_url").val(),
                type            = "POST",
                patient_id      = $("#waiting_room_patient").val();
            
            $.ajax({
                url     : url,
                type    : type,
                data    : { id: patient_id },
                dataType: 'json',
                success : function(response) {
                    var medical_aid = "<option>Medical aid scheme</option>",
                        data_count = response.length;
                    
                    for(var i = 0; i < data_count; i ++)
                    {
                        medical_aid += "<option value='" + response[i].medical_aid_id + "'>"+ response[i].medical_scheme +"</option>";
                    }
                    
                    $("#medical-aid-scheme").html(medical_aid);
                }
            });
            
            $(".select-medical-aid").slideDown();
        }
        else
        {
            $(".select-medical-aid").slideUp();
        }
    });
    
    //create patient
    $("#save-patient").on("click", function(e) {
        e.preventDefault();
        //$("#frm-add-new-patient").submit();
        //show progress
        $("#save-patient-request").show();
        
        //ajax object values
        var url             = $("#frm-add-new-patient").attr('action'),
            type            = $("#frm-add-new-patient").attr('method'),
            data            = $("#frm-add-new-patient").serialize(),
            message_type    = 'success',
            title           = '<h4><i class="fa fa-check-circle-o"></i> Saved</h4>',
            message         = 'Patient saved successfuly.';
        console.log(data + " " + url);
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
    });
    
    //add existing patient for a practitioner
    $("#new_existng_pat").on("click", function(e) {
        var url = $("#add-existing-patient").attr("action"),
            type = $("#add-existing-patient").attr("method"),
            data = $("#add-existing-patient").serialize();
        
        $("#exi-patient-request").show();
        
        $.ajax({
            url     : url,
            type    : type,
            data    : data,
            success : function() {
                alert('Done');
            }
        });
        
        console.log(data);
    });
    
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
                    $("#save-patient").hide();
                    $("#new_existng_pat").show();
                    
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
                    $("#existing_patient_id").val(patient_id);
                    
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
        });
    });
    
    //search exisitng user on claima
    $("#frm-search-user").on("submit", function(e) {
        e.preventDefault();
        
        
    });
    
    //clear claima patient search results
    $("#cancel-search").on("click", function() {
        //hide search results
        $("#claima-patient").hide();
        
        //show new patient form
        $("#frm-add-new-patient").show();
        
        //show reset button
        $("#btn-reset").show();
        $("#save-patient").show();
        $("#new_existng_pat").hide();
    });    
    /*waiting room seaction*/
    
    //search branch patients
    $(".waiting-input").slideUp();
    
    $("#branch-patient-search").on("click", function() {
    var q                   = $("#q").val(),
        search_url          = $("#search_url").val(),
        check_waiting_url   = $("#check_waiting_url").val();
        
        //ajax call to check if a patient is already in a waiting room
        $.ajax({
            url         : check_waiting_url,
            type        : "POST",
            data        : { id_number: q },
            dataType    : 'json',
            success     : function(response) {
                if(response[0].is_patient_waiting > 0)
                {
                    alert("Patient is already in waiting room.");
                }
                else
                {
                    //ajax call for search patients
                    $.ajax({
                        url     : search_url,
                        type    : "POST",
                        data    : { q: q },
                        dataType: 'json',
                        success : function(response) {
                            if(response.length > 0)
                            {
                                $("#waiting_room_patient").attr("value", response[0].patient_id);
                                
                                var checkup_url     = $("#fetch_waiting_room").val(),
                                    patient_id      = response[0].patient_id,
                                    last_name       = response[0].last_name,
                                    title           = response[0].title,
                                    billing_type    = "",
                                    billing_object  = [],
                                    billing_url     = $("#billing_type_url").val(),
                                    billing_data    = $("#waiting_room_patient").val();
                                
                                //fetch patient billing type
                                $.ajax({
                                    url     : billing_url,
                                    type    : "POST",
                                    data    : { patient_id: billing_data },
                                    dataType: 'json',
                                    success : function(res) {
                                        if(res.length > 0)
                                        {
                                            billing_type += "<option>Select billing type</options>";
                                            
                                            for(var i = 0; i < res.length; i++)
                                            {
                                                billing_object[i] = {
                                                    billing_type_code       : res[i].billing_type_code,
                                                    billing_type_id         : res[i].patient_billing_type_id,
                                                    billing_type_name       : res[i].billing_name
                                                };
                                                
                                                billing_type += "<option data='" + res[i].billing_type_code + "' value='" + res[i].patient_billing_type_id + "'>" + res[i].billing_name + "</option>";
                                            }

                                            $("#appointment_billing_id").html(billing_type);
                                        }
                                        else
                                        {
                                            billing_type += "<option value='0'>No billing type found.</option>";
                                            $("#appointment_billing_id").html(billing_type);
                                        }
                                        
                                        console.log(billing_type);
                                    }
                                });
                                
                                //write data to the view
                                $("#checkup-par-one").text("Is " + title + " " + last_name + " here for a check?");
                                
                                //fetch checkup appointments
                                $.ajax({
                                    url         : checkup_url,
                                    type        : 'POST',
                                    data        : { id: patient_id },
                                    dataType    : 'json',
                                    success     : function(response) {
                                        if(response.length > 0)
                                        {
                                            var num_checkup = response.length,
                                                checkup_listing     = "",
                                                form_uaction        = "";
                                            
                                            for(var i = 0; i < num_checkup; i ++)
                                            {
                                                var date                = new Date(response[i].checkup_date),
                                                    day                 = date.getDate(),
                                                    month               = date.getMonth(),
                                                    //shift_month         = month + 1,
                                                    months              = Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"),
                                                    mon                 = months[month],
                                                    checkup_list_url    = $("#checkup-form-action").val();
                                                
                                                //build checkup appointment list view
                                                checkup_listing += "<a class='checkup-item' href='#'>" +
                                                    "<form class='checkup-list-frm' action='" + checkup_list_url + "' method='POST'>" +
                                                        "<div class='media'>" +
                                                            "<div class='pull-left'>" +
                                                            "<div class='parent-date-display'>" +
                                                                "<span class='date-display'>" + day + "</span>" + 
                                                                "<span class='date-display'>" + mon + "</span>" +
                                                            "</div>" +
                                                        "</div>" +
                                                        "<div class='media-body'>" +
                                                            "<h4 style='margin-bottom: 10px; font-size: 16px;' class='media-heading'>" +
                                                            "<i class='fa fa-fw fa-user-md'></i> Kgatla Emmanuel</h4>" +
                                                            "<p>" + response[i].reason + "</p>" +
                                                            "<div class='select-billing-type'>" +
                                                                "<div class='row checkup-billing-data'>" +
                                                                    "<div class='col-lg-9'>" +
                                                                        "<div class='form-input-group'>" +
                                                                            "<select name='patient_billing_type' class='text-input dr-placeholder'>" +
                                                                                billing_type +
                                                                            "</select>" +
                                                                        "</div>" +
                                                                    "</div>" +
                                                                    "<div class='col-lg-3'>" + 
                                                                        "<input class='btn btn-save pull-right' type='submit' name='add-checkup-app' value='Save'>" +
                                                                        "<input type='hidden' name='checkup_date_id' value='" + response[i].checkup_date_id + "'>" +
                                                                        "<input type='hidden' name='checkup_date' value='" + response[i].checkup_date + "'>" +
                                                                    "</div>" +
                                                                "</div>" +
                                                            "</div>" +
                                                        "</div>" +
                                                    "</div>" +
                                                    "</form>" +
                                                "</a>";
                                                console.log(response[i]);
                                            }
                                             
                                            $(".checkup-list").html(checkup_listing);
                                            $(".check-appointment-list").slideDown(400);
                                        }
                                    }
                                });

                                $(".waiting-input").slideDown();
                            }
                            else
                            {
                                $(".waiting-input").slideUp();
                            }
                        }
                    });
                    
                    $(".waiting-input").slideUp();
                }
            }
        });
    });
    
    $(".checkup-list").on("submit", ".checkup-list-frm", function(e) {
        e.preventDefault();
        //alert();
        /*$.ajax({
            url     : $(this).attr("action"),
            type    : $(this).attr("method"),
            data    : $(this).serialize()
        });*/
        
        console.log($(this).serialize());
    });
    
    $(".manage-waiting").on("click", function() {
        $("#appointment_id").attr("value", $(this).attr("data"));
        
    });
    
    //create waiting room
    $("#save-to-waiting").on("click", function(e) {
        //$("#add-new-wating-room").submit();
        //alert("here");
        var url     = $("#add-new-wating-room").attr('action'),
            type    = $("#add-new-wating-room").attr('method'),
            data    = $("#add-new-wating-room").serialize(),
            link    = $("#link").val();
        
        $.ajax({
            url     : url,
            type    : type,
            data    : data,
            dataType: 'json',
            success: function(response) {
                if(response.length > 0)
                {
                    var output = "";
                    
                    for(i = 0; i < response.length; i++)
                    {
                        output += "<div class='upcoming-appointments'>" +
                                "<div class='appointment-preview fency'>" +
                                    "<a class='appointment-details' href='" + link + "'" + 
                                        "data-prac-app-id='" + response[i].practitioner_appointment_id + "'" + 
                                        "data-value='" + response[i].appointment_id + "'>" +
                                        "<div class='media'>" +
                                            "<div class='media-body'>" +
                                                "<h5 style='text-transform: uppercase; margin-bottom: 10px;' class='media-heading'>" +
                                                    response[i].first_name + ' ' + response[i].last_name +
                                                "</h5>" +
                                                "<div class='pull-left'>" +
                                                    "<p style='margin-bottom: 2px;' class='small text-muted'><i class='fa fa-clock-o'></i> 23 Jan 2017 | 4:32 PM</p>" +
                                                    "<p style='margin-bottom: 0px;' class='appointment-desc'>" + response[i].reason + "</p>" +
                                                "</div>" +
                                            "</div>" +
                                        "</div>" +
                                    "</a>" +
                                "</div>" +
                            "</div>"
                        ;
                        $("#create_waiting_room").modal('hide');
                        $(".refresh-waiting-room-data").hide();
                        $(".refresh-waiting-room-data").html(output).fadeIn(500);
                    }
                }
            }
        });
    });
    
    $(".checkup-item").on("click", function(e) {
        e.preventDefault();
        
        var billing_type = "",
            url = $("#billing_type_url").val(),
            data = $("#waiting_room_patient").val();

        //fetch patient billing type
        $.ajax({
            url     : url,
            type    : "POST",
            data    : { patient_id: data },
            dataType: 'json',
            success : function(res) {
                if(res.length > 0)
                {
                    billing_type += "<option>Select billing type</options>";
                    
                    for(var i = 0; i < res.length; i++)
                    {
                        billing_type += "<option data='" + res[i].billing_type_code + "' value='" + res[i].patient_billing_type_id + "'>" + res[i].billing_name + "</option>";
                    }
                }
                else
                {
                    billing_type += "<option value='0'>No billing type found.</option>";
                }
                
                $("#appointment_billing_id").html(billing_type);
            }
        });
    });
    
    $("#add-to-waiting-room").on("click", function() {
        $("#create_waiting_room").modal('show');
    });
        
    /*$(".appointment-details").on("click", function() {
        $("#practitioner_app_id").attr("value", $(this).attr("data"));
    });*/
    
    $("#add_diagnosis").on("submit", function() {
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(res) {
                
            }
        });
    })
    
    $(".refresh-waiting-room-data").on("click", ".appointment-details", function() {
        var appointment_id = $(this).attr("data-value"),
            practitioner_app_id = $(this).attr("data-prac-app-id"),
            loader = $(this).find(".loading");
        
        loader.css("display", "inline");
        //.css("display", "inline") .loader__figure .loader
        $.ajax({
            url: $(this).attr('href'),
            type: 'POST',
            data: { appointment_id: appointment_id, practitioner_app_id: practitioner_app_id },
            success: function(response) {
                $("#waiting-room-data").hide();
                $("#waiting-room-data").fadeIn(2000).html(response);
                loader.fadeOut(100);
            }
        });
        
        return false;
    });
    
    //check email if it exists
    $("#email_address").on("blur", function() {
        var val = $(this).val(),
            url = $("#check_email_url").val();

        $.ajax({
            url: url,
            type: 'POST',
            data: { key: val },
            dataType: 'json',
            success: function(response) {
                console.log(response);
            }
        });
    });
    
    //check username if it exists
    $("#username").on("blur", function() {
        var val = $(this).val(),
            url = $("#check_username_url").val();
        
        $.ajax({
            url: url,
            type: 'POST',
            data: { key: val },
            dataType: 'json',
            success: function(response) {
                if(response[0].is_exists == 1)
                {
                    $("#err-username").text("This username is taken.");
                    $("#err-username").slideDown(100);
                }
                else
                {
                    $("#err-username").slideUp(100);
                    $("#err-username").text("Required username.");
                }
            }
        });
    });
    
    
});