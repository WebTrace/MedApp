$("#start_date, #due_date").datepicker();

$("#due_date").change(function () {
    var start_date = document.getElementById("start_date").value;
    var due_date = document.getElementById("due_date").value;
    
    if ((Date.parse(due_date) <= Date.parse(start_date)))
        {
            alert("Due date can not be greater than start date");
            document.getElementById("due_date").value = '';
        }
})