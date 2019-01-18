$(document).ready(function(){
    $('.img-check').click(function() {
        $('.img-check').not(this).removeClass('check').siblings('input').prop('checked',false);
        $(this).addClass('check').siblings('input').prop('checked',true);
    });
});
