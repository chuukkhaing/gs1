$(document).ready(function(){
  $('#gtins_form').on('submit', function(e){
    e.preventDefault();
    //quantity
    var gtins_quantity = $('#gtins_quantity').val();
    //year
    var gtins_year = $('#gtins_year').val();
    //price
    var gtins_price = $('#gtins_price').val();
    if(gtins_quantity != '' && gtins_year != '' && gtins_price != ''){
      $.ajax({
        type: 'POST',
        url: '../../regs1/step5/create.php',
        data:{
          'gtins_create_btn': 1,
          'gtins_quantity': gtins_quantity,
          'gtins_year': gtins_year,
          'gtins_price': gtins_price,
        },
        success:function(data){
          $('#gtins_form')[0].reset();
          alert(data);
        }
      });
    }
  });
});
