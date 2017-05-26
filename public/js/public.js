$(".panel").show();
$(document).ready(function () {
    $('.flip').click(function () {
        var clicks = $(this).data('clicks');
        var id = $(this).attr('id');
        console.log('id:'+id);
        if (clicks) {
            // odd clicks
            $("#"+id).next().slideDown();
        } else {
            // even clicks
            $("#"+id).next().slideUp();
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

