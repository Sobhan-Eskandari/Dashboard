$('.categorySingleDestroy').click(function (event) {    event.preventDefault();    var singleDeleteUrl = this.action;    var dataArray = $(this).serializeArray();    $.ajax({        type: "POST",        url: singleDeleteUrl,        data: dataArray    }).success(function (data) {        $('#postCategories').html(data);        ShowNotification('دسته بندی پاک شد');    }).fail(function () {        ShowNotification('لطفا دوباره تلاش کنید');    });    window.history.pushState("", "", "http://dashboard.dev/posts/create");});$('.tagSingleDestroy').click(function (event) {    event.preventDefault();    var singleDeleteUrl = this.action;    var dataArray = $(this).serializeArray();    $.ajax({        type: "POST",        url: singleDeleteUrl,        data: dataArray    }).success(function (data) {        $('#postTags').html(data);        ShowNotification('برچسب پاک شد');    }).fail(function () {        ShowNotification('لطفا دوباره تلاش کنید');    });    window.history.pushState("", "", "http://dashboard.dev/posts/create");});