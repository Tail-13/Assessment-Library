$(document).ready(function () {
    $("#searchButton").click(function (event) {
        event.stopPropagation();

        $("#searchButton").hide();
        $("#searchForm").show();

        $(document).on("click", function (e) {
            if ($(e.target).closest("#searchForm, #searchButton").length === 0) {
                $("#searchForm").hide();
                $("#searchButton").show();
            }
        });
    });
});