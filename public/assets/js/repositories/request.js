function Request(){}

Request.prototype.get = function(url, callback){
    var request = this;
    $.ajax({
        url,
        type: 'GET',
        data: {_token: getToken() },
        success: function(response){
           if(response.status == 200){
                callback(response.data);
            }else{
                $.notify({ message: 'Ha ocurrido un error' },{ type: 'danger' });
            }
        },
        error: function(response){
            console.log(response);
            var errors = response.responseJSON.errors,
            formattedErrors = request.formatErrors(errors);
            swal('Oops...', formattedErrors, 'error');
        }
    });
}

Request.prototype.post = function(url, data, callback){
    var request = this;
    data._token = getToken();
    $.ajax({
        type: 'POST',
        url,
        data,
        success: function(response){
            if(response.status == 200){
                callback(response.data);
            }else{
                $.notify({ message: 'Ha ocurrido un error' },{ type: 'danger' });
            }
        },
        error: function(response){
            var errors = response.responseJSON.errors,
            formattedErrors = request.formatErrors(errors);
            swal('Oops...', formattedErrors, 'error');
        }
    })
}

Request.prototype.put = function(url, recordId, data, callback){
    var request = this;
    data._method = 'PUT';
    data._token = getToken();
    data.id = recordId;
    $.ajax({
        type: 'PUT',
        url,
        data,
        success: function(response){
            if(response.status == 200){
                callback(response.data);
            }else{
                $.notify({ message: 'Ha ocurrido un error' },{ type: 'danger' });
            }
        },
        error: function(response){
            var errors = response.responseJSON.errors,
            formattedErrors = request.formatErrors(errors);
            swal('Oops...', formattedErrors, 'error');
        }
    })
}


Request.prototype.delete = function(url, callback){
    var request = this;
    $.ajax({
        type: 'DELETE',
        url,
        data: {_token: getToken(), _method: 'DELETE'},
        success: function(response){
            if(response.status == 200){
                callback(response.data);
            }else{
                $.notify({ message: 'Ha ocurrido un error' },{ type: 'danger' });
            }
        },
        error: function(response){
            var errors = response.responseJSON.errors,
            formattedErrors = request.formatErrors(errors);
            swal('Oops...', formattedErrors, 'error');
        } 
    });
}

Request.prototype.formatErrors = function(arrayErrors){
    return _.reduce(arrayErrors, function(e1, e2){
        return e1 + e2 + '<br>';
    }, '');
}