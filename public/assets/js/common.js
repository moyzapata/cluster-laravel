var delayTyping = null;

$(document).ready(function(){
    customFunctions();
    
    $(".alert-dismistime").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-dismistime").alert('close');
    });
});

function getToken(){
    return $("meta[name=csrf-token]").attr("content");
}

// Serializa un form y regresa un objeto
function getFormFields($form){
    var formData = $form.serializeArray();
    var data = {};
    formData.forEach(function(e){
        data[e.name] = e.value;
    });
    return data;
}

function showErrors(arrayError){
    var formattedErrors = arrayError.join('<br>');
    swal({
        type: 'success',
        title: formattedErrors,
        showConfirmButton: false
      });
}

function showMessage(title, type, confirmButton){
    swal({
        type,
        title: '<div class="f-s-1">' + title + '</div>',
        showConfirmButton: confirmButton
      });
}

function getCurrentView(){
    var currentView = window.location.href;
    if(currentView.indexOf('create') != -1)
        return "CREATE";
    if(currentView.indexOf('edit') != -1)
        return "EDIT";
    
}

function customFunctions(){
    // Para elementos que necesitan delay entre tecleo (branchOffices.js ejemplo)
    $.fn.safeSearch = function(callback, delayTime){
        $(this).keyup(function(e){
            var event = e;
            delayTyping && clearTimeout(delayTyping);
            delayTyping = setTimeout(function(){
                callback(event);
            }, delayTime);
        });
    }
}