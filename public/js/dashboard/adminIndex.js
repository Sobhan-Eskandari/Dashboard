/*==========> show notification function <=========*/function ShowNotification(notifText) {    var notification = new NotificationFx({        wrapper : document.body,        message : notifText,        layout : 'growl',        effect : 'jelly',        type : 'error',        ttl : 6000,        onClose : function() { return false; },        onOpen : function() { return false; }    });    notification.show();}/*==========> show notification function <=========*//*==========> search function using TNT and scout <=========*/var SearchUrl = "/admins";var adminSearch = $("#search");var collect = {};adminSearch.keyup(function (event) {    if(adminSearch.val().length >=0  || event.keyCode === 8){        /**         *      loading code goes here         */        collect["query"] = adminSearch.val();        $.ajax({            url : SearchUrl,            data: collect        }).done(function (data) {            $('#loadAdmins').html(data);           // ShowNotification('نتیجه های زیر یافت شدند');        }).fail(function () {           // ShowNotification('نتیجه ای یافت نشد');        });        window.history.pushState("", "", SearchUrl + '?query=' + adminSearch.val());    }});/*==========> search function using TNT and scout <=========*/