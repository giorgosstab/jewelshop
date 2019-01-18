$(document).ready(function () {
    $(".checkPayment").dblclick(function(e){
        e.preventDefault();
        e.prop('checked',false);
        e.collapse('hide');
    });

    $(".checkPayment").on('change', function() {
        var checked = $(this).is(':checked');
        $(".checkPayment").prop('checked',false);
        $(".checkPayment").collapse('hide');
        if(checked) {
            $(this).prop('checked',true);
        }
    });
});
