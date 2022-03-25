function Repository(){}

Repository.prototype.all = function(source, callback){
    var request = new Request();
    request.get('/'+source+'/all', callback);
}

Repository.prototype.get = function(source, recordId, callback){
    var request = new Request();
    request.get('/'+source+'/' + recordId, callback);
}

Repository.prototype.store = function(source, data, callback){
    var request = new Request();
    request.post('/'+source, data, callback);
}

Repository.prototype.update = function(source, recordId, data, callback){
    var request = new Request();
    request.put('/'+source+'/'+ recordId, recordId, data, callback);
}

Repository.prototype.remove = function(source, recordId, callback){
    var request = new Request();
    request.delete('/'+source+'/'+ recordId, callback);
}

Repository.prototype.recover = function(source, recordId, callback){
    var request = new Request();
    request.put('/'+source+'/' + recordId+'/recover', recordId, {}, callback);
}