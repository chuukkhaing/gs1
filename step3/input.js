$(document).ready(function(){
  $('#contact_per_info_form').on('submit', function(e){
    e.preventDefault();
    var first_person_name = $('#first_person_name').val();
    var first_person_email = $('#first_person_email').val();
    var first_person_phone = $('#first_person_phone').val();
    var email_for_activate = $('#email_for_activate:checked').val();
    var second_person_name = $('#second_person_name').val();
    var second_person_email = $('#second_person_email').val();
    var second_person_phone = $('#second_person_phone').val();
    var agree_personal_data = $('#agree_personal_data').val();
    if(first_person_name == ''){
      $('.first_person_name_required').show(1000).hide(5000);
    }
    if(first_person_email == ''){
      $('.first_person_email_required').show(1000).hide(5000);
    }
    if(first_person_phone == ''){
      $('.first_person_phone_required').show(1000).hide(5000);
    }
    if($('#email_for_activate:checked').val()){
      if(email_for_activate != "Yes" && email_for_activate != "No"){
        $('.email_for_activate_default_value_only_alrt').show(1000).hide(5000);
      }
    }
    else{
      $('.email_for_activate_required').show(1000).hide(5000);
    }
    if($('#agree_personal_data'). is(':not(:checked)')){
      $('.personal_data_agreement_required').show(1000).hide(5000);
    }
    if(first_person_name != '' && first_person_email != '' && first_person_phone != '' && email_for_activate != '' && $('#agree_personal_data'). is(':checked')){
      $.ajax({
        type: 'POST',
        url: '../../regs1/step3/contact_person_information_create.php',
        data:{
          'first_person_name': first_person_name,
          'first_person_email': first_person_email,
          'first_person_phone': first_person_phone,
          'email_for_activate': email_for_activate,
          'second_person_name': second_person_name,
          'second_person_email': second_person_email,
          'second_person_phone': second_person_phone,
          'agree_personal_data': agree_personal_data,
        },
        success: function(data){
          $('#contact_per_info_form')[0].reset();
          if(data == "created"){
            window.location = "../../regs1/step4";
          }
        }
      });
    }
  })
})
