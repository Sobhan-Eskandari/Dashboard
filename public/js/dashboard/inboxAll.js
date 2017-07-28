/*==========> get the category form after clicking singleDelete button and send an ajax request to CategoryController@destroy <=========*/$('.singleDestroy').click(function (event) {    event.preventDefault();    var singleDeleteUrl = this.action;    var dataArray = $(this).serializeArray();    $.ajax({        type: "POST",        url: singleDeleteUrl,        data: dataArray    }).success(function (data) {        $('#loadInboxes').html(data);        ShowNotification('پیام پاک شد');    }).fail(function () {        ShowNotification('لطفا دوباره تلاش کنید');    });    window.history.pushState("", "", "/inbox");});/*==========> get the category form after clicking singleDelete button and send an ajax request to CategoryController@destroy <=========*//*==========> get the csrf token of multi delete button form <=========*/var token = $('#deleteForm').find('input[name=_token]').val();var csrf = {    name: '_token',    value: token};/*==========> get the csrf token of multi delete button form <=========*//*==========> get the selected Inboxes to be deleted <=========*/var checkboxes = [];var selectedInboxes = {};$('input[type=checkbox]').click(function () {    var checkedId = this.id;    if(this.checked){        checkboxes.push(checkedId);    }else{        $.each(checkboxes, function (index, value) {            if(checkedId === value){                checkboxes.splice(index, 1);            }        });    }    selectedInboxes = {        name: 'ids',        value: checkboxes    };});/*==========> get the selected Inboxes to be deleted <=========*//*==========> send a POST request to delete selected Inboxes using CategoryController@multiDestroy <=========*/$('#multiDestroy').click(function (event) {    event.preventDefault();    $.ajax({        type: "POST",        url: "/inbox-multiDestroy",        data: [            csrf, selectedInboxes        ]    }).success(function (data) {        $('#loadInboxes').html(data);        ShowNotification('پیام (ها) پاک شدند');    }).fail(function () {        ShowNotification('یک یا چند پیام انتخاب کنید');    });    window.history.pushState("", "", "/inbox");});/*==========> send a POST request to delete selected Inboxes using CategoryController@multiDestroy <=========*/