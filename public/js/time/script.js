$(function () {
    $(".countdown").each(function () {
        $(this).countdown($(this).attr("value"), function (event) {
            $(this).text(event.strftime("%H:%M:%S"));
        });
    });
});
