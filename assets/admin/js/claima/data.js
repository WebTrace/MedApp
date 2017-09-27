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
    
    //display full appointment details using bootstrap popover
    
    /*
    *
    *
    */
    
    $("#next").on("click", function(e) {
        //get user inputs
        var title               = $("#title").val(),
            fname               = $("#fname").val(),
            lname               = $("#lname").val(),
            hpcsa_no            = $("#hpcsa_no").val(),
            contact_no          = $("#contact_no").val(),
            tel_no              = $("#tel_no").val(),
            email_address       = $("#email_address").val(),
            confirm_email       = $("#confirm_email").val(),
            username            = $("#username").val(),
            password            = $("#password").val(),
            confirm_password    = $("#confirm_password").val(),
            errcount            = 0;
        
        /*perform client side validation to make sure that user inputs are correct
        *
        */
        
        //validate title field
        //->title must not be empty
        //->title must not contain specail chars, numbers and spaces
        if(title.trim() == 0) {
            errcount ++;
            $("#err-title").slideDown(300);
        }
        else {
            $("#err-title").slideUp(300);
        }
        
        //validate first name field
        //->first name must not contain specail chars, numbers and space
        if(fname.trim() == "") {
            errcount ++;
            $("#err-fname").slideDown(300);
        }
        else {
            $("#err-fname").slideUp(300);
        }
        
        //validate last name field
        if(lname.trim() == "") {
            errcount ++;
            $("#err-lname").slideDown(300);
        }
        else {
            $("#err-lname").slideUp(300);
        }
        
        //validate hpcsa number field
        if(hpcsa_no.trim() == "") {
            errcount ++;
            $("#err-hpcsa-no").slideDown(300);
        }
        else {
            $("#err-hpcsa-no").slideUp(300);
        }
        
        //validate contact number field
        if(contact_no.trim() == "") {
            errcount ++;
            $("#err-contact-no").slideDown(300);
        }
        else {
            $("#err-contact-no").slideUp(300);
        }
        
        //validate tel number field if not empty
        if(tel_no.trim() != "") {
            
        }
        
        //validate email address field
        if(email_address.trim() == "") {
            errcount ++;
            $("#err-email").slideDown(300);
        }
        else {
            $("#err-email").slideUp(300);
        }
        
        //validate confirm email address field
        if(confirm_email.trim() == "") {
            errcount ++;
            $("#err-confirm-email").slideDown(300);
        }
        else {
            $("#err-confirm-email").slideUp(300);
        }
        
        //validate username field
        if(username.trim() == "") {
            errcount ++;
            $("#err-username").slideDown(300);
        }
        else {
            $("#err-username").slideUp(300);
        }
        
        //validate password field
        if(password.trim() == "") {
            errcount ++;
            $("#err-password").slideDown(300);
        }
        else {
            $("#err-password").slideUp(300);
        }
        
        //validate confirm password field
        if(confirm_password.trim() == "") {
            errcount ++;
            $("#err-confirm-passw").slideDown(300);
        }
        else {
            $("#err-confirm-passw").slideUp(300);
        }
        
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
        
        //get user inputs
        var practice_name           = $("#practice_name").val(),
            practice_no             = $("#practice_no").val(),
            practice_type           = $("#practice_type").val(),
            tel_no                  = $("#practice_tel_no").val(),
            practice_email          = $("#practice_email").val(),
            confirm_prac_email      = $("#confirm_practice_email").val(),
            address_line            = $("#address_line").val(),
            location                = $("#location").val(),
            city                    = $("#city").val(),
            province                = $("#province").val(),
            terms                   = $("#terms"),
            errcount                = 0;
        
        /*perform client side validation to make sure that user inputs are correct
        *
        */
        
        //validate practice name field
        if(practice_name.trim() == "") {
            errcount ++;
            $('#err-practice-name').slideDown(300);
        }
        else {
            $('#err-practice-name').slideUp(300);
        }
        
        //validate practice number field
        if(practice_no.trim() == "") {
            errcount ++;
            $('#err-practice-no').slideDown(300);
        }
        else {
            $('#err-practice-no').slideUp(300);
        }
        
        //validate practice type field
        if(practice_type.trim() == 0) {
            errcount ++;
            $('#err-practice-type').slideDown(300);
        }
        else {
            $('#err-practice-type').slideUp(300);
        }
        
        //validate tel number field
        if(tel_no.trim() == "") {
            errcount ++;
            console.log("Tel no is empty");
        }
        else {
            console.log("Tel no is : " + tel_no);
        }
        
        //validate practice email field
        if(practice_email.trim() == "") {
            errcount ++;
            console.log("Practice email is empty");
        }
        else {
            console.log("Practice email is : " + practice_email);
        }
        
        //validate confirm practice email field
        if(confirm_prac_email.trim() == "") {
            errcount ++;
            console.log("Confirm practice email is empty");
        }
        else {
            console.log("Confirm practice email is : " + confirm_prac_email);
        }
        
        //validate address line
        if(address_line.trim() == "") {
            errcount ++;
            $('#err-prac-address').slideDown(300);
        }
        else {
            $('#err-prac-address').slideUp(300);
        }
        
        //validate location field
        if(location.trim() == "") {
            errcount ++;
            $('#err-prac-location').slideDown(300);
        }
        else {
            $('#err-prac-location').slideUp(300);
        }
        
        //validate city field
        if(city.trim() == "") {
            errcount ++;
            $('#err-prac-city').slideDown(300);
        }
        else {
            $('#err-prac-city').slideUp(300);
        }
        
        //validate province field
        if(province.trim() == "") {
            errcount ++;
            $('#err-prac-province').slideDown(300);
        }
        else {
            $('#err-prac-province').slideUp(300);
        }
        
        //validate terms field
        if(terms.is(':checked') != true) {
            errcount ++;
            $('#err-prac-terms').slideDown(300);
        }
        else {
            $('#err-prac-terms').slideUp(300);
        }
        
        //disable error checking for testing porpose
        //errcount = 0;
        console.log(errcount);
        
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
    })
})

/*function library
*
*/

