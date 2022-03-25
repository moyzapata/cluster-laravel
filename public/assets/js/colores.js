var dataTable=null;
var repository= new Repository();
$(document).ready(function() {
    all();

    $(document).on('change keyup','#search-form :input',function() {
        dataTable.draw();
    });

    $('#search-form select[name=categoria]').select2({
        width: '100%',
        ajax: {
            url: '/categories/json',
            dataType: 'json',
            // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            processResults: function (data) {
                return {
                  results: data
                };
              }
        }
    });

});

function all()
{
     dataTable=$('#colores-table').DataTable({
            "bFilter": false,
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/colores/grid",
                data:function(d){
                    d.inactive      = ($('#showInactive').is(':checked'))?"1":"0";
                    d.fcolor        = $('#search-form input[name=color]').val();
                    d.fhexadecimal  = $('#search-form input[name=hexadecimal]').val();
                }
            },
            "columns": [
                {data: 'color', name: 'color', title: 'Color'},
                {data: 'hexadecimal', name: 'hexadecimal', title: 'Hexadecimal'},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

function show(recordId, viewType){
    repository.get('colores', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=color]').val(data.color);
        $('.catalog-modal input[name=hexadecimal]').val(data.hexadecimal);
        
        if(viewType){

            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}
