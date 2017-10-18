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