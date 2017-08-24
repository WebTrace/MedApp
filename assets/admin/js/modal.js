<script> 
    $(function () {$('#myModal').modal('hide')});
</script>

<script> 
    $(function () { 
    $('#myModal').on('hide.bs.modal', function () {
        alert('Successfully Added...');
    })
});
</script>

<script> 
    $(function() { 
    $(".btn").click(function(){ 
        $(this).button('loading').delay(1000).queue(function() { 
     $(this).button('reset'); 
        }); 
    }); 
}); 
</script>