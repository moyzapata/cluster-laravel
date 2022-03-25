function PermitsRepository(){}

PermitsRepository.prototype.edit = function(recordId,callback){
    var request = new Request();
    request.get('/permits/' + recordId+'/edit', callback);
}