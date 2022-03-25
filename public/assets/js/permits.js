var repository = new Repository();
var permitsrepository = new PermitsRepository();
var dataTable = null;

$( document ).ready(function() {
    
    all();
    
     $("#showInactive").change(function() {
        dataTable.draw();
     });
});

function all(){
    dataTable = $('#table-roles').DataTable({
        language: { url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json' },
        processing: true,
        serverSide: true,
        "ajax":{
            url: "/permits/all",
            data: function(d){
                d.inactive= $('#showInactive').is(':checked') ? "1" : "0";
            }
        },
        columns: [
            { data: 'name', title: 'nombre' },
            { data: 'actions', title: 'acciones', searchable: false}
        ]
    });
}

// viewType = 1 = show, viewType = 0  edit
function show(recordId, viewType){
    permitsrepository.edit(recordId, function(data){
        console.log(data);
        $('.catalog-modal').modal('show');
        $('.catalog-modal input[name=name]').val(data.name);
        $('.catalog-modal input[name=type][value='+data.type+']').prop('checked',true);
        $('.catalog-modal input[name=type]').click(function(){
            return false;
        });
        //$('.catalog-modal input[name=rol_type]').attr('readonly',true);
        if(viewType){
            disableFormElements();
        }else{
            $('.catalog-modal .btn-edit').css({display: 'inline'});
            $('.catalog-modal .btn-edit').attr('data-id', recordId);
        }
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

$('.check_type input[name=type]').click(function(){
    
    var type=$(this).val();
    var types=['region','zona','grupo','sucursal'];
    var hrefs=['permits1','permits2','permits3','permits4','permitsCat'];
    types.forEach(function(type) {
        $('#'+type+' .nav-link').removeClass('active');
        $('#'+type).removeClass('none').addClass( "none");
    });
    
    $('#catalog .nav-link').removeClass('active');
    $('#'+type).removeClass('none');
    
    hrefs.forEach(function(hre){
        $('#'+hre).removeClass('active show');
    });
    
    var href=$('#'+type+' .nav-link').attr('href');
    
    $(".permissGn").prop('checked',false);
    
    $('#'+type+' .nav-link').addClass('active');
    $(href).addClass('active show');
    
    if(type=='administrador')
    {
        href=$('#catalog .nav-link').attr('href');
         $('#catalog .nav-link').addClass('active');
        $(href).addClass('active show');
    }
    
});



