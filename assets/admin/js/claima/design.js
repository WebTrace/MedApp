$(document).ready(function() {
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
    
    //print button
    $("#print").on("click", function() {
        window.print();
    })
    
    $("#user_role").on("change", function() {
        if($(this).val() == 3)
        {
            $("#practice-details").slideDown();
        }
        else
        {
            $("#practice-details").slideUp();
        }
    })
    
    $("#back").on("click", function() {
        $("#step-two").css("visibility", "hidden");
        $("#step-two").slideUp();
        $("#step-one").css("visibility", "visible");
        $("#step-one").slideDown();
        
        return false;
    })


//Spencer


    $("#Add_Field").on("click", function() {

        var str = "<tr>";
            str += "<td><input type='text' name='Tariff_Code[]' id='Tariff_Code' placeholder='Terrif Code'></td>";
            str += "<td><input type='text' name='Description[]' id='Description' placeholder='Description'></td>";
            str += "<td><input type='text' name='ICD_10_Code[]' id='ICD_10_Code' placeholder='ICD 10 Code'></td>";
            str += "<td><input type='text' name='Modifier_Code[]' id='Modifier_Code' placeholder='Modifier Code'></td>";
            str += "<td><input type='text' name='Price[]' id='Price' placeholder='Price'></td>";
            str += "<td><input type='text' name='Total[]' id='Total' placeholder='Total'></td>";
            str += "</tr>";

        $("#user-list").append(str);

    })

    $("#Remove_Field").on("click", function(){

      $("#user-list").find("td:not(:Last)").remove();

    })




});