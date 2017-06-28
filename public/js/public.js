$(".panel").show();
$(document).ready(function () {

    $('.flip').click(function () {

        //-----------[ Open and close the menu bu toggling between isopen and isclose class ] ------------
        if ($(this).hasClass('is-open')){

            $(this).toggleClass('is-open is-close');
            $(this).closest('.menuDetector').next().find('.panel').slideUp();

        }else if($(this).hasClass('is-close')){

            $(this).toggleClass('is-close is-open');
            $(this).closest('.menuDetector').next().find('.panel').slideDown();

        }

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

