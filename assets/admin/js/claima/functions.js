/*
*function that elilminates the use of numbers and special characters in fields that requires a-z.
*Returns true if special character or a number is found
*/

function clean_string(str)
{
    var special_chars_num = Array(
        "!", "@", "#", "$", "%", "^", "&", "*", "(", ")",
        "-", "+", "=", "`", "~", "|", "[", "]", "{", "}",
        "\\", "/", "<", ">", "?", ",", ".", "'", '"', "0",
        "1", "2", "3", "4", "5", "6", "7", "8", "9"
    ),
    arrlength = special_chars_num.length,
    strlength = str.length,
    found = false;
    
    for(i = 0; i < strlength; i++)
    {
        for(j = 0; j < arrlength; j++)
        {
            if(str[i] == special_chars_num[j])
            {
                found = true;
                return found;
            }
        }
    }
    return found;
}

/*
*search module
*
*/
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

/*
*notify
*
*/
function notification_message(type, title, message)
{
    $.notify(
        {
            title: title,
            message: message
        },
        //settings
        {
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            placement: {
                from: 'top',
                align: 'center'
            },
            type: type,
            z_index: 9999
        }
    );
}

/*
*notify
*
*/
function patient_data_table(response)
{
    var row = "";
    console.log(response);
    for(i = 0; i < response.length; i ++)
    {
       // console.log(response[].last_name);
        row =+ "<tr>";
        row += "<td>" + (i + 1) + "</td>";
        row += "<td>" + response[i].last_name + "</td>";
        row += "<td>" + response[i].first_name + "</td>";
        row += "<td>" + response[i].id_number + "</td>";
        row += "<td>" + response[i].dob + "</td>";
        row += "<td>" + 20 + "</td>";
        row += "<td>" + response[i].ethnic_group + "</td>";
        row += "<td>" + response[i].contact_no + "</td>";
        row += "<td>" + response[i].contact_no + "</td>";
        row += "<td><a class='consultation-btn' id='" + response[i].user_id + "' href='#' title='New consultation' data-toggle='modal' data-target='#create_consultation' onclick='return false'><i class='fa fa-arrow-circle-left'></i></a></td>";
        row += "<td><a calss='' title='Patient details' href='#'><i class='fa fa-eye'></i></a></td>";
        row += "<td><a calss='delete-user' title='Remove patient' href='#'><i class='fa fa-trash'></i></a></td>";
        row += "</tr>";
    }
    
    return row;
}

function calculate_date(dob)
{
    var date_of_birth = new Date(dob),
        today = new Date(),
        age = Math.floor((today - date_of_birth) / (365.25 * 24 * 60 * 60 + 1000));
    
    return date_of_birth;
}

//alert(calculate_date('1991-09-21'));