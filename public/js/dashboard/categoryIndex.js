/*==========> get the create category form after clicking submit button and send an ajax request to CategoryController[at]store <=========*/$('#submit').click(function (event) {    event.preventDefault();    var dataArray = $(this).parents('#createForm').serializeArray();    $.ajax({        type: "POST",        url: "/categories",        data: dataArray    }).success(function (data) {        $("#createForm").find("input[name=name]").val('');        $('#loadCategories').html(data);        ShowNotification('دسته بندی ساخته شد');    }).fail(function () {        ShowNotification('وارد کردن دسته بندی الزامی است');    });    window.history.pushState("", "", "/categories");});/*==========> get the create category form after clicking submit button and send an ajax request to CategoryController[at]store <=========*//*==========> hide create category form after clicking edit button on any category and sends a PUT request to CategoryController[at]update <=========*/$('#edit-submit').click(function (event) {    event.preventDefault();    var dataArray = $(this).parents('#editForm').serializeArray();    var editUrl = $(this).parents('#editForm').attr('action');    $.ajax({        type: "PUT",        url: editUrl,        data: dataArray    }).success(function (data) {        $("#createForm").find("input[name=name]").val('');        $('#loadCategories').html(data);        $('#create-div').fadeIn();        $('#edit-div').fadeOut();        ShowNotification('دسته بندی ویرایش شد');    }).fail(function () {        ShowNotification('وارد کردن دسته بندی الزامی می باشد');    });    window.history.pushState("", "", "/categories");});/*==========> hide create category form after clicking edit button on any category and sends a PUT request to CategoryController[at]update <=========*//*==========> preform ajax pagination <=========*/var loadCategories = $('#loadCategories');loadCategories.on('click', '.pagination a', function(event) {    event.preventDefault();    loadCategories.find('a').css('color', '#dfecf6');    loadCategories.append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');    var url = $(this).attr('href');    console.log(url);    getCategories(url);    window.history.pushState("", "", url);});function getCategories(url) {    $.ajax({        url : url    }).done(function (data) {        loadCategories.html(data);    }).fail(function () {        ShowNotification('مشکلی در بارگذاری بوجود آمد');    });}/*==========> preform ajax pagination <=========*//*==========> show notification function <=========*/function ShowNotification(notifText) {    var notification = new NotificationFx({        wrapper : document.body,        message : notifText,        layout : 'growl',        effect : 'jelly',        type : 'error',        ttl : 6000,        onClose : function() { return false; },        onOpen : function() { return false; }    });    notification.show();}/*==========> show notification function <=========*//*==========> search function using TNT and scout <=========*/var SearchUrl = "/categories";var categorySearch = $("#search");var collect = {};categorySearch.keyup(function (event) {    if(categorySearch.val().length >=0  || event.keyCode === 8){        /**         *      loading code goes here         */        collect["query"] = categorySearch.val();        $.ajax({            url : SearchUrl,            data: collect        }).done(function (data) {            $('#loadCategories').html(data);//                    ShowNotification('نتیجه های زیر یافت شدند');        }).fail(function () {//                    ShowNotification('نتیجه ای یافت نشد');        });        window.history.pushState("", "", SearchUrl + '?query=' + categorySearch.val());    }});/*==========> search function using TNT and scout <=========*/