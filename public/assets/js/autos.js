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
     dataTable=$('#autos-table').DataTable({
            "bFilter": false,
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/autos/grid",
                data:function(d){
                    d.inactive = ($('#showInactive').is(':checked'))?"1":"0";
                    d.fpropietario     = $('#search-form input[name=propietario]').val();
                    d.fplacas      = $('#search-form input[name=placas]').val();
                    d.fcolor_id    = $('#search-form input[name=color_id]').val();
                    d.fversion = $('#search-form input[name=version]').val();
                    d.fvendido  = $('#search-form select[name=vendido]').val();
                    d.fproveedor_id = $('#search-form input[name=proveedor_id]').val();
                }
            },
            "columns": [
                {data: 'propietario', name: 'propietario', title: 'Propietario'},
                {data: 'placas', name: 'placas', title: 'Placas'},
                {data: 'color_id', name: 'color_id', title: 'Color'},
                {data: 'version', name: 'version', title: 'Versión'},
                {data: 'vendido', name: 'vendido', title: 'Vendido'},
                {data: 'proveedor_id', name: 'proveedor_id', title: 'Proveedor'},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

function show(recordId, viewType){
    repository.get('autos', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=propietario]').val(data.propietario);
        $('.catalog-modal input[name=placas]').val(data.placas);
        $('.catalog-modal input[name=color_id]').val(data.color_id);
        $('.catalog-modal input[name=version]').val(data.version);
        $('.catalog-modal select[name=vendido]').val(data.vendido);
        $('.catalog-modal select[name=proveedor_id]').val(data.proveedor_id);
        
        if(viewType){

            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}
