$(document).ready(function() {
    $("#table").hide();
    $("#table").dataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bInfo": false,
        "bFilter": true,
        "oLanguage": {
            "sZeroRecords": "Pas de données correspondants à la recherche."
        }
    });
    $("#table_filter").remove();
});

$("#search_input").keyup(function() {
    console.log($(this).val());
    var hasValue = this.value.length > 0;
    $("#table")[hasValue ? 'show' : 'hide']();
    $("#table").dataTable().fnFilter($(this).val());
    $("#page_title")[hasValue ? 'hide' : 'show']();
});

$("#clear_input").on('click', function() {
    $("#search_input").val("");
    $("#table").dataTable().fnFilter($("#search_input").val());
    $("#table").hide();
    $("#page_title").show();
});