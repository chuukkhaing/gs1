$(document).ready(function(){
  $('#company_info_form').on('submit', function(e){
    e.preventDefault();
    var form_data = new FormData();
    //company name
    var company_name = $('#company_name').val();
    form_data.append('company_name', company_name);
    //company address
    var company_address = $('#company_address').val();
    form_data.append('company_address', company_address);
    //street address
    var street_address = $('#street_address').val();
    form_data.append('street_address', street_address);
    //address
    var address = $('#address').val();
    form_data.append('address', address);
    //city
    var city = $('#city').val();
    form_data.append('city', city);
    //state / region
    var state_region = $('#state_region').val();
    form_data.append('state_region', state_region);
    //postal / zip code
    var postal_zip_code = $('#postal_zip_code').val();
    form_data.append('postal_zip_code', postal_zip_code);
    //country
    var country = $('#country').val();
    form_data.append('country', country);
    //phone
    var phone = $('#phone').val();
    form_data.append('phone', phone);
    //email
    var email = $('#email').val();
    form_data.append('email', email);
    //company license no.
    var company_license_no = $('#company_license_no').val();
    form_data.append('company_license_no', company_license_no);
    //website
    var website = $('#website').val();
    form_data.append('website', website);
    //file
    var file_data = $('#file').prop('files')[0];
    form_data.append('file', file_data);
    //member
    var member = $('#member:checked').val();
    form_data.append('member', member);
    //null
    form_data.append('null', 'null');


    if(company_name == ''){
      $('.company_name_required').show(1000).hide(5000);
    }
    if(company_address == ''){
      $('.company_address_required').show(1000).hide(5000);
    }
    if(country != ''){
      if(country != 'Myanmar'){
        $('.country_default_value_only_alrt').show(1000).hide(5000);
      }
    }
    if(phone == ''){
      $('.phone_required').show(1000).hide(5000);
    }
    if(email == ''){
      $('.email_required').show(1000).hide(5000);
    }
    if(company_license_no == ''){
      $('.company_license_no_required').show(1000).hide(5000);
    }
    if($('#file')[0].files.length == 0){
      $('.file_required').show(1000).hide(5000);
    }
    if($('#member:checked').val()){
      if(member != "Yes" && member != "No"){
        $('.member_default_value_only_alrt').show(1000).hide(5000);
      }
    }
    else{
      $('.member_required').show(1000).hide(5000);
    }


    if(company_name != '' && company_address != '' && phone != '' && email != '' && company_license_no != '' && $('#file')[0].files.length != 0 && member != ''){
      if((country == 'Myanmar' || country == '') && (member == 'Yes' || member == 'No')){
        $.ajax({
          type: 'POST',
          url: '../../regs1/step2/company_information_create.php',
          data: new FormData(this),
          dataType: 'text',
          contentType: false,
          cache: false,
          processData:false,
          success: function(data){
            $('#company_info_form')[0].reset();
            if(data == 'created'){
              window.location = "../../regs1/step3";
            }
            if(data == 'wrong file extension')
            {
              $('.wrong_file_extension_alrt').show(1000);
            }
          }
        });
      }
    }
  })
});
