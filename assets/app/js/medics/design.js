$(document).ready(function() {
    //Manage users table search
    
    //Table pagination
    var table = "#patients-list";
    
    //assign value to the hidden field
    $("#limit").change(function() {
        var numRoms = $(this).text() + ' <span class="caret"></span>',
            rowsVal = $(this).val();
        
        //$("#diplay-option").html(numRoms);
        //$("#rows").attr("value", rowsVal);
        
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
    });
    
    $("#user_role").on("change", function() {
        if($(this).val() == 3 || $(this).val() == 4)
        {
            $("#practice-details").slideDown();
        }
        else
        {
            $("#practice-details").slideUp();
        }
    });
    
    $("#back").on("click", function() {
        $("#step-two").css("visibility", "hidden");
        $("#step-two").slideUp();
        $("#step-one").css("visibility", "visible");
        $("#step-one").slideDown();
        
        return false;
    });
    
    $("#billing_type").on("change", function() {
        var billing_type = $("#billing_type").val();
        
        if(billing_type == 1)
        {
            $("#cash-payment").hide();
            $("#credit-card-payment").hide();
            $("#medical-aid-details").slideDown();
        }
        else
        {
            $("#medical-aid-details").hide();
            
            if(billing_type == 2)
            {
                $("#credit-card-payment").hide();
                $("#cash-payment").slideDown();
            }
            else
            {
                $("#cash-payment").hide();
                if(billing_type == 3)
                {
                    $("#credit-card-payment").slideDown();        
                }
                else
                {
                    $("#credit-card-payment").hide();  
                }
            }
        }
    });
    
    $(".edit-input").on("focus", function() {
        $(this).parent().find(".edit-data-icon").css("visibility", "visible");
    });
    
    $(".edit-input").on("blur", function() {
        $(this).parent().find(".edit-data-icon").css("visibility", "hidden"); 
    });
    
    //radio button code
    /*$("input[name='dependant']").on("click", function() {
        var dependant = $("input[name='dependant']:checked").val();
        
        if(dependant == "Yes")
        {
            $("#dependant-relation").slideDown();
        }
        else
        {
            $("#dependant-relation").slideUp();
        }
    })
        var dependant = $("input[name='dependant']:checked").val();
    */
    
    $("input[name='next_date[]']").on("click", function() {
        var next_date = $("input[name='next_date[]']:checked").val();
        if(next_date == "Yes")
        {
            $(".set-checkup-appointment").slideDown();
        }
        else
        {
            $(".set-checkup-appointment").slideUp();
        }
    });
    
    $(".checkup-list").on("click", "a", function() {
        var billing_data = $(this).find(".checkup-billing-data");
        billing_data.addClass("checkup-active");
        
        if(billing_data.hasClass("checkup-active"))
        {
            $(this).find(".checkup-billing-data").slideDown(200);
            billing_data.removeClass("checkup-active");
        }
        else
        {
            $(this).find(".checkup-billing-data").slideUp(200);
        }
    });
    
    //checkbox
    $(".switch").on("click", function() {
        if($("#is_waiting_room").is(":checked"))
        {
            $(".modal-footer").slideUp(200);
            $(".checkup-list").slideDown(200);
            $("#add-new-wating-room").slideUp(200);
        }
        else
        {
            $(".modal-footer").slideDown(200);
            $(".checkup-list").slideUp(200);
            $("#add-new-wating-room").slideDown(200);
        }
    });
    
    $("#dependant").on("change", function() {
        if($(this).val() == "Yes")
        {
            $("#dependant-relation").slideDown();
        }
        else
        {
            $("#dependant-relation").slideUp();
        }
    });
    
    //generate diagnosis table rows and
    $("#add-row").on("click", function() {
        /*var row = "<tr>";
        row += "<td><input type='text' name='tariff_code[]' class='diagnosis-input text-input'></td>";
        row += "<td><input type='text' name='description[]' class='diagnosis-input text-input'></td>";
        row += "<td><input type='text' name='idc_code[]' class='diagnosis-input text-input'></td>";
        row += "<td><input type='text' name='price[]' class='diagnosis-input text-input'></td>";
        row += "<td><input type='text' name='quantity[]' class='diagnosis-input text-input'></td>";
        row += "<td><input type='text' name='sub_total[]' class='diagnosis-input text-input'></td>";
        row += "<td><a href='#' class='remove-row' title='Remove'><i class='fa fa-times-circle'></i></a></td>";
        row += "</tr>"; */
        
        var row = $("#append-tr"),
            trcopy = row.clone(true, true).find('input').val('').end();
        
        $(".add-consultation").append(trcopy);
        
        return false;
    });
    
    //remove diagnosis table row
    $(".remove-row").on("click", function() {
        var row = $(this).parents('tr').first();
        row.remove();
    });
    
    //generate dispensing table rows
    $("#add-row-dispense").on("click", function() {
        var row = $("#dispense-row"),
            trcopy = row.clone(true, true).find('input').val('').end();
        $(".add-dispensing").append(trcopy);
    });
    
    //remove dispensing table rows
    $(".remove-row-dispense").on("click", function() {
        var row = $(this).parents('tr').first();
        row.remove();
    });
    
    //
    $("#same_address").on("click", function() {
        if($(this).is(':checked') == true)
        {
            $(".postal-address").slideUp();
        }
        else
        {
            $(".postal-address").slideDown();
        }
    });
    
    //
    $(".dr-placeholder").on("change", function() {
        if($(this).val() != 0)
        {
            $(this).css("color", "#444");
        }
        else
        {
            $(this).css("color", "#bbb");
        }
    });
    
    $(".delete-user").on("click", function (e) {
        var patient_id = $(this).attr('id');
        $('#remove_patient_id').attr('value', patient_id);
        $("#remove-confirm").modal('show');
        return false;
    });
    
    $('#dismiss-remove-patient').on("click", function() {
        $("#remove-confirm").modal('hide');
    });
    
    /*$(".add-waiting-room").on("click", function() {
        var patient_id = $(this).parent().attr('data-target');
        
        $("#waiting_room_patient").attr("value", patient_id);
        $("#create_waiting_room").modal("show");
    })*/
    
    $("#add_visiting_reason").on("click", function() {
        $("#create_waiting_room").modal("show");
        $("#add_user_modal").modal("hide");
    });
    
    /*check if add visiting reason modal is close*/
    /*if(!$("#add_visiting_reason").is(":visible"))
    {
        $("#add_user_modal").modal("show");
    }*/
});