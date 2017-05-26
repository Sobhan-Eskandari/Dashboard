$("#hi-infoPostListGroupPanel").show();
$(document).ready(function () {
    $('#hi-infoPostListGroupFlip').click(function () {
        var clicks = $(this).data('clicks');
        if (clicks) {
            // odd clicks
            $("#hi-infoPostListGroupPanel").slideDown();
        } else {
            // even clicks
            $("#hi-infoPostListGroupPanel").slideUp();
        }
        $(this).data("clicks", !clicks);
        return false;
    });

});
//////////////////////

$(".iconClose-2").hide();
$(".iconSearch-2").hide();
$(".searchFormListGroup").hide();

$(document).ready(function () {
    $('.iconSearch-1').click(function () {
        $(".categoryTitle").hide();
        $(".caretIcon").hide();
        $(".iconSearch-1").hide();
        $(".searchFormListGroup").show();
        $(".iconSearch-2").show();
        $(".iconClose-2").show();
    });
});

$(document).ready(function () {
    $('.iconClose-2').click(function () {
        $(".categoryTitle").show();
        $(".caretIcon").show();
        $(".iconSearch-1").show();
        $(".iconDelete-1").show();
        $(".searchFormListGroup").hide();
        $(".iconSearch-2").hide();
        $(".iconClose-2").hide();
    });
});

