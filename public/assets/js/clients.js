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
     dataTable=$('#clients-table').DataTable({
            "bFilter": false,
            "processing": true,
            "serverSide": true,
            "ajax":{
                url: "/clients/grid",
                data:function(d){
                    d.inactive = ($('#showInactive').is(':checked'))?"1":"0";
                    d.fname     = $('#search-form input[name=nombre]').val();
                    d.frfc      = $('#search-form input[name=rfc]').val();
                    d.femail    = $('#search-form input[name=correo]').val();
                    d.fapproved = $('#search-form select[name=aprobado]').val();
                    d.category  = $('#search-form select[name=categoria]').val();
                }
            },
            "columns": [
                {data: 'name', name: 'name', title: 'Nombre'},
                {data: 'rfc', name: 'rfc', title: 'RFC'},
                {data: 'address', name: 'address', title: 'Direccion'},
                {data: 'email', name: 'email', title: 'Email'},
                {data: 'phone', name: 'phone', title: 'Telefono'},
                {data: 'approved', name: 'approved', title: 'Aprobado'},
                {data: 'category_id', name: 'category_id', title: 'Categoria'},
                {data: 'actions', searchable: false, title: 'Acciones'}
            ]
        });
}

$('#gridNewUsr').on('shown.bs.modal', function() {
    if($('#id').val()=="")
    {
        $('#form_new #category_id').select2({
            ajax: {
                url: '/categories/json',
                dataType: 'json',
                processResults: function (data) {
                    console.log(data);
                    return {
                      results: data
                    };
                  }
            }
        });
    }
});

function show(recordId, viewType){
    repository.get('clients', recordId, function(data){
        $('.catalog-modal input[name=id]').val(data.id);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=name]').val(data.name);
        $('.catalog-modal input[name=rfc]').val(data.rfc);
        $('.catalog-modal input[name=address]').val(data.address);
        $('.catalog-modal input[name=email]').val(data.email);
        $('.catalog-modal input[name=phone]').val(data.phone);
        if(data.approved == 'Si'){
            $('.catalog-modal select[name=approved]').val(1);

        }else{
            $('.catalog-modal select[name=approved]').val(0);
        }
        $('#category_id').append($('<option>', {
                value: data.category_id,
                text: data.category_name
            }));
        if(viewType){

            disableFormElements();
        }else{
            $('#category_id').select2({
                width: '100%',
                ajax: {
                    url: '/categories/json',
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
