// // /**// //  * Created by Hamid on 25-Jun-17.// //  */// //// // /*==========> get the create category form after clicking submit button// //  and send an ajax request to CategoryController[at]store <=========*/// // $('#submit').click(function (event) {// //     event.preventDefault();// //     var dataArray = $(this).parents('#createForm').serializeArray();// //     $.ajax({// //         type: "POST",// //         url: "/Inboxes",// //         data: dataArray// //     }).success(function (data) {// //         $("#createForm").find("input[name=category]").val('');// //         $('#loadInboxes').html(data);// //         ShowNotification('دسته بندی ساخته شد');// //     }).fail(function () {// //         ShowNotification('وارد کردن دسته بندی الزامی است');// //     });// //// //     window.history.pushState("", "", "http://dashboard.dev/Inboxes");// // });// // /*==========> get the create category form after clicking submit button// //  and send an ajax request to CategoryController[at]store <=========*/// //// // /*==========> hide create category form after clicking edit button// //  on any category and sends a PUT request to CategoryController[at]update <=========*/// // $('#edit-submit').click(function (event) {// //     event.preventDefault();// //     var dataArray = $(this).parents('#editForm').serializeArray();// //     var editUrl = $(this).parents('#editForm').attr('action');// //     $.ajax({// //         type: "PUT",// //         url: editUrl,// //         data: dataArray// //     }).success(function (data) {// //         $("#createForm").find("input[name=category]").val('');// //         $('#loadInboxes').html(data);// //         $('#create-div').fadeIn();// //         $('#edit-div').fadeOut();// //         ShowNotification('دسته بندی ویرایش شد');// //     }).fail(function () {// //         ShowNotification('وارد کردن دسته بندی الزامی می باشد');// //     });// //// //     window.history.pushState("", "", "http://dashboard.dev/Inboxes");// // });// // /*==========> hide create category form after clicking edit button// //  on any category and sends a PUT request to CategoryController[at]update <=========*/// ///*==========> preform ajax pagination <=========*/var loadInboxes = $('#loadInboxes');loadInboxes.on('click', '.pagination a', function(event) {    event.preventDefault();    loadInboxes.find('a').css('color', '#dfecf6');    loadInboxes.append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');    var url = $(this).attr('href');    console.log(url);    getInboxes(url);    window.history.pushState("", "", url);});function getInboxes(url) {    $.ajax({        url : url    }).done(function (data) {        loadInboxes.html(data);    }).fail(function () {        ShowNotification('مشکلی در بارگذاری بوجود آمد');    });}/*==========> preform ajax pagination <=========*//*==========> show notification function <=========*/function ShowNotification(notifText) {    var notification = new NotificationFx({        wrapper : document.body,        message : notifText,        layout : 'growl',        effect : 'jelly',        type : 'error',        ttl : 6000,        onClose : function() { return false; },        onOpen : function() { return false; }    });    notification.show();}/*==========> show notification function <=========*/// // /*==========> search function using TNT and scout <=========*/// // var SearchUrl = "/inbox";// // var inboxSearch = $("#search");// // var collect = {};// //// // inboxSearch.keyup(function (event) {// //     if(inboxSearch.val().length >=0  || event.keyCode === 8){// //// //         /**// //          *      loading code goes here// //          */// //// //         collect["query"] = inboxSearch.val();// //         $.ajax({// //             url : SearchUrl,// //             data: collect// //         }).done(function (data) {// //             $('#loadInboxes').html(data);// //             // ShowNotification('نتیجه های زیر یافت شدند');// //         }).fail(function () {// //             // ShowNotification('نتیجه ای یافت نشد');// //         });// //         window.history.pushState("", "", SearchUrl + '?query=' + inboxSearch.val());// //     }// // });// // /*==========> search function using TNT and scout <=========*/// //