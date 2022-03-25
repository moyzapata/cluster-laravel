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
            url: '/categoria/json',
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
     dataTable=$('#proveedores-table').DataTable({
            "bFilter": false,
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/proveedores/grid",
                data:function(d){
                    d.inactive = ($('#showInactive').is(':checked'))?"1":"0";
                    d.fempresa     = $('#search-form input[name=empresa]').val();
                    d.fnombre      = $('#search-form input[name=nombre]').val();
                    d.ftelefono    = $('#search-form input[name=telefono]').val();
                }
            },
            "columns": [
                {data: 'empresa', name: 'empresa', title: 'Empresa'},
                {data: 'nombre', name: 'nombre', title: 'Nombre'},
                {data: 'telefono', name: 'telefono', title: 'Telefono'},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

function show(recordId, viewType){
    repository.get('proveedores', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=empresa]').val(data.empresa);
        $('.catalog-modal input[name=nombre]').val(data.nombre);
        $('.catalog-modal input[name=telefono]').val(data.telefono);
        
        if(viewType){

            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}
