var onStore = null;
var onCreate = null;

$(document).ready(function(){
    // Cuando se abre un modal de un catalogo restea los campos del formulario y los elementos en disabled se habilitan
    $(document).on('show.bs.modal', function(e) {
        if(e.target.className.indexOf('catalog-modal') != -1){
            resetFormFields();
            $('.catalog-modal input,.catalog-modal select,.catalog-modal textarea').prop('disabled', false);
        }
    });

    $(".form-view").submit(function(e){
        if(!$(this).parsley().validate())
            e.preventDefault();
    });
    if($( ".form-view" ).attr( "action")=="")
    {
        disableFormElements();
    }
});

// Muestra la modal de un catalogo
function create(){
    $('.catalog-modal').modal('show');
    $('.catalog-modal .btn-create').css({display: 'inline'});
    if(onCreate)
        onCreate($('.catalog-modal form').attr('id'));
}

// Guarda catalogo
function store(element, source, keepView){
    var $form = $(element).closest('form'),
    formData = getFormFields($form);
    if($form.parsley().validate()){
        var repository = new Repository();
        repository.store(source, formData, function(data){

            swal({
                type: 'success',
                title: 'Información guardada correctamente',
                showConfirmButton: false,
                timer: 1500
            });

            if(keepView){
                resetFormFields();
                $('.catalog-modal .btn-create').css({display: 'inline'});
            }else{
                setTimeout(function(){
                    $('.catalog-modal').modal('hide');
                }, 1500);
            }
            $('.table-grid').DataTable().ajax.reload();

            if(onStore)
                onStore($form.attr('id'), data);
        });
   }
}

// Actualiza catalogo
function update(element, source){
    var $form = $(element).closest('form'),
    recordId = parseInt(element.getAttribute('data-id')),
    formData = getFormFields($form);
    if($form.parsley().validate()){
        var repository = new Repository();
        repository.update(source, recordId, formData, function(data){
            swal({
                type: 'success',
                title: 'Registro Actualizado Correctamente',
                showConfirmButton: false,
                timer: 1500
            });

            setTimeout(function(){
                $('.table-grid').DataTable().ajax.reload();
                $('.catalog-modal').modal('hide');
            }, 1500);
        });
    }
}

// Elimina un catalogo
function drop(recordId, source){
    var repository = new Repository();
    swal({
        title: '¿Estás seguro?',
        text:  'Si lo eliminas ya no podrás utilizarlo',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
    }).then(function(result){
        if(result.value){
            repository.remove(source, recordId, function(data){
                $('.table-grid').DataTable().ajax.reload();
            });
        }
    });
}

// Recupera un catalogo
function recover(recordId, source){
    var repository = new Repository();
    swal({
        title: '¿Estás seguro?',
        text:  '¿Quieres recuperarlo?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
    }).then(function(result){
        if(result.value){
            repository.recover(source, recordId, function(data){
                $('.table-grid').DataTable().ajax.reload();
            });
        }
    });
}

//crear pdf con tabla
function exportFile(url,type)
{
    url = '/'+url+'/'+type+'?';
    var value = $('.dataTables_filter input').val();
    url += 'busqueda' + '=' + value + '&' ;
    url +=  $('#search-form').serialize()
    
    var win = window.open(url, '_blank');
    win.focus();
}

function resetFormFields(){
    var $catalogForm = $('.catalog-modal form');
    $('.catalog-modal form')[0].reset();
    /*Array.from($('.catalog-modal form').parsley(), function(e){
        e.reset();
    });*/
    // $('.catalog-modal form').parsley().reset();
    Array.from($('.catalog-modal form'), function(e){
        $(e).parsley().reset()
    });
    $('.catalog-modal .btn-create').css({display: 'none'});
    $('.catalog-modal .btn-edit').css({display: 'none'});
    $('.catalog-modal form textarea').html("");
    $('.catalog-modal form .select2-hidden-accessible').select2();
}

// Pone en disable los elementos(input,select,textarea) de un formulario(popup) de un catalogo
function disableFormElements(){
    $('.catalog-modal input,.catalog-modal select,.catalog-modal textarea').prop('disabled', true);
}

// Se deben a gregar los repositorios
document.writeln("<script type='text/javascript' src='/assets/js/repositories/repository.js'></script>");
document.writeln("<script type='text/javascript' src='/assets/js/repositories/permitsRepository.js'></script>");
