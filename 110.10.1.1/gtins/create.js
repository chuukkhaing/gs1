$(document).ready(function(){
  //create
  $('#gtins_create_form').on('submit', function(e){
    e.preventDefault();
    //quantity
    var quantity = $('#quantity').val();
    //yearly
    var yearly = $('#yearly').val();
    //price
    var price = $('#price').val();
    //member
    var member = $('#member').val();
    //status
    var status = $('#status').val();


    if(quantity == ''){
      $('.quantity_required').show(1000).hide(1000);
    }
    if(yearly == '')
    {
      $('.yearly_required').show(1000).hide(1000);
    }
    if(price == ''){
      $('.price_required').show(1000).hide(1000);
    }
    if(member == ''){
      $('.member_required').show(1000).hide(1000);
    }
    if(member != 'yes' && member != 'no'){
      $('.member_default_value_only').show(1000).hide(1000);
    }
    if(status == ''){
      $('.status_required').show(1000).hide(1000);
    }
    if(status != 'active' && status != 'inactive'){
      $('.status_default_value_only').show(1000).hide(1000);
    }


    if(quantity != '' && price != '' && member != '' && status != '' && yearly != ''){
      if((member == 'yes' || member == 'no') && (status == 'active' || status == 'inactive')){
        $.ajax({
          type: 'POST',
          url: '../../../regs1/110.10.1.1/gtins/create.php',
          data: {
            'create_btn':1,
            'quantity': quantity,
            'monthly': monthly,
            'yearly': yearly,
            'price': price,
            'member': member,
            'status': status,
          },
          success: function(data){
            $('#gtins_create_form')[0].reset();
            $('#gtins_retrieve').load("../../../regs1/110.10.1.1/gtins/retrieve.php");
          }
        });
      }
    }
  });
  //retrieve
  $('#gtins_retrieve').load("../../../regs1/110.10.1.1/gtins/retrieve.php");
});
