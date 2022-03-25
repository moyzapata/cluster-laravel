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
     dataTable=$('#subcategorias-table').DataTable({
            "bFilter": false,
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/subcategorias/grid",
                data:function(d){
                    d.inactive      = ($('#showInactive').is(':checked'))?"1":"0";
                    d.fnombre        = $('#search-form input[name=nombre]').val();
                    d.fcategoria_id = $('#search-form input[name=categoria_id]').val();
                }
            },
            "columns": [
                {data: 'nombre', name: 'nombre', title: 'Nombre'},
                {data: 'categoria_id', name: 'categoria_id', title: 'Categoria'}, //name: 'categoria_id' debe ser el nombre de la categoría eso significa que deben incluir un innner join en su consulta con categorias para poder ordenar la columna
                {data: 'actions', searchable: false, title: 'Acciones'}

            ]
        });
}

function show(recordId, viewType){
    repository.get('subcategorias', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=nombre]').val(data.nombre);
        $('.catalog-modal input[name=categoria_id]').val(data.categoria_id);
        
        if(viewType){

            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}
