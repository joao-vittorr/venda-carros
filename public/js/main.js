$(function(){

    $(".phone").mask("(00)00000-0000");
    $('.price').mask('000.000.000.000.000,00', {reverse: true});
    $(".cpf").mask("000.000.000-00");
    $('.cep').mask('00000-000');



    $('.cep').on('keyup',function(a){
        if ($(this).val().length == 9){
            $.ajax("http://viacep.com.br/ws/"+$(this).val().replace("-","")+"/json/",{
                success:function(res){
                    $("[name=logradouro]").val(res.logradouro);
                    $("[name=bairro]").val(res.bairro);
                    $("[name=localidade]").val(res.localidade);
                    $("[name=uf]").val(res.uf);
                }
            });
        }
    });


});

var pendingFormConfirmation;
function confirmDeleteModal(button){
    var confModal = new bootstrap.Modal(document.getElementById('confirm_modal'))
    confModal.show('fast');
    pendingFormConfirmation = button.parentElement;
    console.log(pendingFormConfirmation);
}

function confirmButton(){
    pendingFormConfirmation.submit();
}
