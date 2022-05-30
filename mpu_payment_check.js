$(document).ready(function(){
  $('#mpu_payment_check_form').on('submit', function(e){
    e.preventDefault();
    if($('#mpu-check'). is(':checked')){
      window.location = "../regs1/step1";
    }
    if($('#mpu-check'). is(':not(:checked)')){
      $('.mpu_check_required').show(1000);
    }
  });
});
