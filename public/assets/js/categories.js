var dataTable=null;
var repository= new Repository();
$(document).ready(function() {
    all();

    $("#showInactive").change(function() {
        dataTable.draw();
    });

});

function all()
{
     dataTable=$('#categories-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/categories/grid",
                data:function(d){
                    d.inactive=($('#showInactive').is(':checked'))?"1":"0";
                }
            },
            "columns": [
                {data: 'name', name: 'name', title: 'Nombre'},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

// viewType = 1 = show, viewType = 0  edit
function show(recordId, viewType){
    repository.get('categories', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=name]').val(data.name);
        if(viewType){

            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}
