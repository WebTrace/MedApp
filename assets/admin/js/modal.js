 
    $(function () {$('#myModal').modal('hide')});



    $(function () { 
    $('#myModal').on('hide.bs.modal', function () {
        alert('Successfully Added...');
    })
});


 
    $(function() { 
    $(".btn").click(function(){ 
        $(this).button('loading').delay(1000).queue(function() { 
     $(this).button('reset'); 
        }); 
    }); 
}); 
