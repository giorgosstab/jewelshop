$(function () {
	// ------------------------------------------------------- //
    // Increase/Reduce product amount
    // ------------------------------------------------------ //
    $('.dec-btn').click(function () {
        var siblings = $(this).parent().siblings('input.quantity-no');
        if (parseInt(siblings.val(), 10) >= 1) {
            siblings.val(parseInt(siblings.val(), 10) - 1);
        }
    });

    $('.inc-btn').click(function () {
        var siblings = $(this).parent().siblings('input.quantity-no');
        siblings.val(parseInt(siblings.val(), 10) + 1);
    });
});
