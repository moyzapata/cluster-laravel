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
     dataTable=$('#users-table').DataTable({
           language:{
                "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/users/grid",
                data:function(d){
                    d.inactive=($('#showInactive').is(':checked'))?"1":"0";
                }
            },
            "columns": [
                {data: 'name', name: 'name', title: 'Nombre'},
                {data: 'email', name: 'email', title: 'Correo Electrónico'},
                {data: 'estatus', name: 'status', title: 'Estado'},
                {data: 'profile', name: 'profile', title: 'Perfil',"orderable": false},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

//funcion para seleccionar toda la fila en la tabla
$(document).on('change','.select_all_checkbox',function(){
    var row_table = $(this).parent().parent();
    row_table.find("[type=checkbox]").prop('checked',$(this).is(':checked'));
});
//Funcion para seleccionar toda la columna en la tabla de permisos
$(document).on('change','.select_column_checkbox',function(){

    var checked = $(this).prop('checked');
    var index = $(this).parent().index();

     $('tr').each(function(i, val){
        $(val).children().eq(index).children('input[type=checkbox]').prop('checked', checked);
    });

});

$('#gridNewUsr').on('shown.bs.modal', function() {
   console.log($('#id').val());
    if($('#id').val()=="")
    {
        $('#form_new #password').attr('data-parsley-required',true);
        $('#profile').select2({
            ajax: {
                url: '/getRoleJson',
                dataType: 'json',
                processResults: function (data) {
                    console.log(data);
                    return {
                      results: data
                    };
                  }
            }
        });
    }else{
        $('#form_new #password').attr('data-parsley-required',false);
    }
});

// viewType = 1 = show, viewType = 0  edit
function show(recordId, viewType){
    repository.get('users', recordId, function(data){
        console.log(data.profile[0]);
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=name]').val(data.name);
        $('.catalog-modal input[name=email]').val(data.email);
        $('#profile').append($('<option>', {
                value: data.profile_id[0],
                text: data.profile
            }));
        if(viewType){

            disableFormElements();
        }else{

            $('#profile').select2({
                width: '100%',
                ajax: {
                    url: '/getRoleJson',
                    dataType: 'json',
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
                    processResults: function (data) {
                        console.log(data);
                        return {
                          results: data
                        };
                      }
                }
            });
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
    });
}

$('#gridNewUsr').on('hidden.bs.modal', function () {
    $('#id').val("");
    $("#profile option").remove();
    if ($('#profile').hasClass("select2-hidden-accessible")) {
        $('#profile').select2('destroy');
    }


    console.log('remove');
});
