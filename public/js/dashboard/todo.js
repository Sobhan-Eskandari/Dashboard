/**
 * Created by salar on 7/27/17.
 */
function task_done(id){
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

    $.ajax({
        url : '/todos/' + id,
        type : 'PATCH',
        data : { 'id': id},
        success : function(response, textStatus, jqXhr) {
            console.log("Todo Item has been PUTed!");
        },
        error : function(jqXHR, textStatus, errorThrown) {
            // log the error to the console
            console.log("The following error occured: " + textStatus, errorThrown);
        }
    });

}