$(function(){

    $(".phone").mask("(00)00000-0000");
    $('.price').mask('000.000.000.000.000,00', {reverse: true});

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
