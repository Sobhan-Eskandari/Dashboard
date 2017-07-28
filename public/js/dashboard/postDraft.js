/*==========> preform ajax pagination <=========*/var loadPosts = $('#loadPosts');loadPosts.on('click', '.pagination a', function(event) {    event.preventDefault();    loadPosts.find('a').css('color', '#dfecf6');    loadPosts.append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');    var url = $(this).attr('href');    console.log(url);    getPosts(url);    window.history.pushState("", "", url);});function getPosts(url) {    $.ajax({        url : url    }).done(function (data) {        loadPosts.html(data);    }).fail(function () {        ShowNotification('مشکلی در بارگذاری بوجود آمد');    });}/*==========> preform ajax pagination <=========*//*==========> show notification function <=========*/function ShowNotification(notifText) {    var notification = new NotificationFx({        wrapper : document.body,        message : notifText,        layout : 'growl',        effect : 'jelly',        type : 'error',        ttl : 6000,        onClose : function() { return false; },        onOpen : function() { return false; }    });    notification.show();}/*==========> show notification function <=========*//*==========> search function using TNT and scout <=========*/var SearchUrl = "/posts-drafts";var postSearch = $("#search");var collect = {};postSearch.keyup(function (event) {    if(postSearch.val().length >=0  || event.keyCode === 8){        /**         *      loading code goes here         */        collect["query"] = postSearch.val();        $.ajax({            url : SearchUrl,            data: collect        }).done(function (data) {            $('#loadPosts').html(data);//                    ShowNotification('نتیجه های زیر یافت شدند');        }).fail(function () {//                    ShowNotification('نتیجه ای یافت نشد');        });        window.history.pushState("", "", SearchUrl + '?query=' + postSearch.val());    }});/*==========> search function using TNT and scout <=========*/