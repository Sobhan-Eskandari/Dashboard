/**
 * Created by sobhaneskandari on 5/4/17.
 */

// ============[ Admin card dismissal button ]===========

$(".dismissAdminCardBtn").click(function () {
    $(this).parent().parent().parent().fadeOut();
});