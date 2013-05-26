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

var toggleTable = function(hasValue) {
    $("#table")[hasValue ? 'show' : 'hide']();
    $("#page_title")[hasValue ? 'hide' : 'show']();
};

$("#search_input").keyup(function() {
    var hasValue = this.value.length > 0;
    var star = $(this).val() === "*";
    if (!star) {
        $("#table").dataTable().fnFilter($(this).val());
    }
    toggleTable(hasValue);
});

$("#clear_input").on('click', function() {
    $("#search_input").val("");
    $("#table").dataTable().fnFilter($("#search_input").val());
    toggleTable(false);
});