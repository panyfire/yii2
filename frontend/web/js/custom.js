

$(document).on('click', '.buttonPostEdit', function () {
   $('.postWithoutFormEdit').hide();
   $('.formEdit').show();

});

$(document).on('click', '.buttonAbort', function () {
    $('.formEdit').hide();
    $('.postWithoutFormEdit').show();


});