var $ = jQuery.noConflict();


$(document).ready(function($){
    $(".bitfyre-contact-modal").click(function(){
        $("#contactModal").modal('show');
    });
    $('#contactModal').on('shown.bs.modal', function () {
        $('#email').focus();
    });
 });