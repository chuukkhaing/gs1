$(document).ready(function(){
  $("#terms_conditions_agree_form").on('submit', function(e){
    e.preventDefault();
    var agree_license_terms = $('#agree_license_terms:checked').val();
    if($('#agree_license_terms'). is(':checked')){
      $.ajax({
        type: 'POST',
        url: '../../regs1/step4/terms_and_conditions_agreement_create.php',
        data: {
          'agree_license_terms_btn': 1,
          'agree_license_terms': agree_license_terms,
        },
        success: function(data){
          if(data == "created")
          {
            window.location = "../../regs1/step5";
          }
        }
      });
    }
    if($('#agree_license_terms'). is(':not(:checked)')){
      $('.terms_conditions_agree_required').show(1000).hide(5000);
    }
  });
});
