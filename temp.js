function onSaveCommentary(){

    var titleText = $('#titleText').val(),
    countText = $('*[name="countText"]').val(),
    typeText = $('*[name="typeText"]').val(),
    displayText = $('*[name="displayText"]').val(),
    messageText = $('*[name="messageText"]').val(),
    puzzleText = $('#multiselect option:selected');
    var selected = [];
    $(puzzleText).each(function(index, brand){
        selected.push($(this).val());
    });

    if(!titleText){
        alertDialog("Please enter name.", 'warning');
    } else if(selected.length<1){
        alertDialog("Please select puzzle to assign.", 'warning');
    } else if(!displayText){
        alertDialog("Please select comment option.", 'warning');
    } else if($('.msgType').is(":visible") && !messageText){
        alertDialog("Please enter message.", 'warning');
    } else if(!document.querySelector('input[name="graphic"]').files[0] && !document.querySelector('input[name="audio"]').files[0] && !document.querySelector('input[name="video"]').files[0]){
        alertDialog("Please select media.", 'warning');
    } else {
        var form_data = new FormData();
        var file_data;
        if ($('.graphicType').is(":visible")) {
            file_data = document.querySelector('input[name="graphic"]').files[0];
            form_data.append("media_type", "graphic");
        } else if ($('.audioType').is(":visible")) {
            file_data = document.querySelector('input[name="audio"]').files[0];
            form_data.append("media_type", "audio");
        } else if ($('.videoType').is(":visible")) {
            file_data = document.querySelector('input[name="video"]').files[0];
            form_data.append("media_type", "video");
        }
        form_data.append("media", file_data);
        form_data.append("id", id);
    }

    $.ajax({
        type: 'POST',
        url: allCommentaryMessageApi,
        data: form_data,
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', progress, false);
            }
            return myXhr;
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            alertDialog(data.message, 'success');
            onSuccess();
        },
        error: function (data) {
            console.log("ERROR:", data);
        }
    });

}
