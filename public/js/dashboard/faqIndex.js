/** * Created by Hamid on 25-Jun-17. *//*==========> get the create faq form after clicking submit button and send an ajax request to FaqController[at]store <=========*/$('#create-submit').click(function (event) {    event.preventDefault();    var dataArray = $(this).parents('#createForm').serializeArray();    textareaValue = {        name: 'answer',        value: CKEDITOR.instances['answer'].getData()    }    dataArray[2] = textareaValue;    $.ajax({        type: "POST",        url: "/faqs",        data: dataArray    }).success(function (data) {        $("#createForm").find("input").val('');        CKEDITOR.instances['answer'].setData('');        $('#loadFaqs').html(data);        ShowNotification('سوال متداول ساخته شد');    }).fail(function () {        ShowNotification('وارد کردن دسته بندی الزامی است');    });    window.history.pushState("", "", "http://dashboard.dev/faqs");});/*==========> get the create faq form after clicking submit button and send an ajax request to FaqController[at]store <=========*//*==========> hide create faq form after clicking edit button on any faq and sends a PUT request to FaqController[at]update <=========*/$('#edit-submit').click(function (event) {    event.preventDefault();    var dataArray = $(this).parents('#editForm').serializeArray();    textareaValue = {        name: 'answer',        value: CKEDITOR.instances['answerEdit'].getData()    }    dataArray[3] = textareaValue;    console.log(dataArray);    var editUrl = $(this).parents('#editForm').attr('action');    $.ajax({        type: "PUT",        url: editUrl,        data: dataArray    }).success(function (data) {        // console.log(JSON.parse(data));        $("#createForm").find("input").val('');        CKEDITOR.instances['answer'].setData('');        $('#loadFaqs').html(data);        $('#create-div').fadeIn();        $('#edit-div').fadeOut();        ShowNotification('سوال متداول ویرایش شد');    }).fail(function () {        ShowNotification('وارد کردن دسته بندی الزامی می باشد');    });    window.history.pushState("", "", "http://dashboard.dev/faqs");});/*==========> hide create category form after clicking edit button on any category and sends a PUT request to CategoryController[at]update <=========*//*==========> show notification function <=========*/function ShowNotification(notifText) {    var notification = new NotificationFx({        wrapper : document.body,        message : notifText,        layout : 'growl',        effect : 'jelly',        type : 'error',        ttl : 6000,        onClose : function() { return false; },        onOpen : function() { return false; }    });    notification.show();}/*==========> show notification function <=========*/