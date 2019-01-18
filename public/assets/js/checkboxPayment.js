$(document).ready(function () {
    $(".checkPayment").on('change', function() {
        var checked = $(this).is(':checked');
        $(".checkPayment").prop('checked',false);
        if(checked) {
            $(this).prop('checked',true);
        }
    });
});
