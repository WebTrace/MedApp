/*
*
*
*
*/

//validate inputs
function addUserHandler()
{
    var user_role           = $("#user_role").val(),
        //title               = $("#title").val(),
        fname               = $("#fname").val(),
        lname               = $("#lname").val(),
        id_number           = $("#id_number").val(),
        /*dob                 = $("#dob").val(),*/
        practice_no         = $("#practice_no").val(),
        //hpcsa_no            = $("#hpcsa_no").val(),
        //speciality          = $("#speciality").val(),
        contact_no          = $("#contact_no").val(),
        email_address       = $("#email_address").val(),
        //confirm_email       = $("#confirm_email").val(),
        username            = $("#username").val(),
        password            = $("#passw").val(),
        connfirm_passw      = $("#confirm_passw").val(),
        errcount            = 0;

    //validate title
    /*if(title.trim() == 0) {
        errcount += 1;
        $("#err-title").slideDown(300);
    }
    else {
        $("#err-title").slideUp(300);
    }
*/
    //validate first name
    if(fname.trim() == "") {
        errcount += 1;
        $("#err-fname").slideDown(300);
    }
    else {
        $("#err-fname").slideUp(300);
    }

    //validate last name
    if(lname.trim() == "") {
        errcount += 1;
        $("#err-lname").slideDown(300);
    }
    else {
        $("#err-lname").slideUp(300);
    }

    //validate id number
    if(id_number.trim() == "") {
        errcount += 1;
        $("#err-id-no").slideDown(300);
    }
    else {
        $("#err-id-no").slideUp(300);
    }

    //validate date of birth
    /*if(dob.trim == "") {
        errcount += 1;
        $("#err-dob").slideDown(300);
    }
    else {
        $("#err-dob").slideUp(300);
    }*/
    
    if(user_role.trim() == 3) {
        //validate practice number
        if(practice_no.trim() == "") {
            errcount += 1;
            $("#err-practice-no").slideDown(300);
        }
        else {
            $("#err-practice-no").slideUp(300);
        }
        
        //validate HPCSA number
        if(hpcsa_no.trim() == "") {
            errcount += 1;
            $("#err-hpcsa-no").slideDown(300);
        }
        else {
            $("#err-hpcsa-no").slideUp(300);
        }
        
        //validate speciality
        if(speciality == 0) {
            errcount += 1;
            $("#err-speciality").slideDown(300);
        }
        else {
            $("#err-speciality").slideUp(300);
        }
    }
    else {
        $("#err-practice-no").slideUp(300);
        $("#err-hpcsa-no").slideUp(300);
        $("#err-speciality").slideUp(300);
    }

    //validate contact number
    if(contact_no.trim() == "") {
        errcount += 1;
        $("#err-contact-no").slideDown(300);
    }
    else {
        $("#err-contact-no").slideUp(300);
    }

    //validate email address
    if(email_address.trim() == "") {
        errcount += 1;
        $("#err-email-address").slideDown(300);
    }
    else {
        $("#err-email-address").slideUp(300);
    }

    //validate confirm email address
    /*if(confirm_email.trim() == "") {
        errcount += 1;
        $("#err-confirm-email").slideDown(300);
    }
    else {
        $("#err-confirm-email").slideUp(300);
    }*/

    //validate username
    if(username.trim() == "") {
        errcount += 1;
        $("#err-username").slideDown(300);
    }
    else {
        $("#err-username").slideUp(300);
    }

    //validate password
    if(password == "") {
        errcount += 1;
        $("#err-password").slideDown(300);
    }
    else {
        $("#err-password").slideUp(300);
    }

    //validate confirm password
    if(connfirm_passw == "") {
        errcount += 1;
        $("#err-confirm-passw").slideDown(300);
    }
    else {
        $("#err-confirm-passw").slideUp(300);
    }
    
    return errcount;
}

function signupStepOneHandler()
{
    //get user inputs
    //var title               = $("#title").val(),
    var fname               = $("#fname").val(),
        lname               = $("#lname").val(),
        //hpc_no              = $("#hpc_no").val(),
        practice_no         = $("#practice_no").val(),
        contact_no          = $("#contact_no").val(),
        email_address       = $("#email_address").val(),
        //confirm_email       = $("#confirm_email").val(),
        username            = $("#username").val(),
        password            = $("#password").val(),
        confirm_password    = $("#confirm_password").val(),
        terms               = $("#terms"),
        errcount            = 0;

    /*perform client side validation to make sure that user inputs are correct
    *
    */
    
    //validate title field
    //->title must not be empty
    //->title must not contain specail chars, numbers and spaces
    /*if(title.trim() == 0) {
        errcount ++;
        $("#err-title").slideDown(300);
    }
    else {
        $("#err-title").slideUp(300);
    }*/

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
    /*if(hpc_no.trim() == "") {
        errcount ++;
        $("#err-hpcsa-no").slideDown(300);
    }
    else {
        $("#err-hpcsa-no").slideUp(300);
    }*/
    
    //validate practice number field
    if(practice_no.trim() == "") {
        errcount ++;
        $("#err-practice-no").slideDown(300);
    }
    else {
        $("#err-practice-no").slideUp(300);
    }

    //validate contact number field
    if(contact_no.trim() == "") {
        errcount ++;
        $("#err-contact-no").slideDown(300);
    }
    else {
        $("#err-contact-no").slideUp(300);
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
  /*  if(confirm_email.trim() == "") {
        errcount ++;
        $("#err-confirm-email").slideDown(300);
    }
    else {
        $("#err-confirm-email").slideUp(300);
    }*/

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
    
    //validate terms field
    if(terms.is(':checked') != true) {
        errcount ++;
        $('#err-prac-terms').slideDown(300);
    }
    else {
        $('#err-prac-terms').slideUp(300);
    }
    
    return errcount;
}

function signupStepTwoHandler()
{
    //get user inputs
    var practice_name           = $("#practice_name").val(),
        practice_no             = $("#practice_no").val(),
        practice_type           = $("#practice_type").val(),
        street_name             = $("#street_name").val(),
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

    //validate address line
    if(address_line.trim() == "") {
        errcount ++;
        $('#err-prac-address').slideDown(300);
    }
    else {
        $('#err-prac-address').slideUp(300);
    }
    
    //validate street name field
    /*if(street_name.trim() == "") {
        errcount ++;
        console.log("Street name no is empty");
    }
    else {
        console.log("Tel no is : " + tel_no);
    }*/

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

    
    return errcount;
}