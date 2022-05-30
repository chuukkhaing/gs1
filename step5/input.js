function FetchQuantity(gtins_quantity){
  $.ajax({
    type: 'POST',
    url: '../../regs1/step5/year_retrieve.php',
    data:{
      'gtins_quantity': gtins_quantity,
    },
    success:function(data){
      $('#gtins_year').html(data);
      $('#price_retrieve').html('');
    }
  });
}
function FetchYear(gtins_year){
  $('#gtins_price').html('');
  var gtins_quantity = $('#gtins_quantity').val();
  var gtins_year = $('#gtins_year').val();
  $.ajax({
    type: 'POST',
    url: '../../regs1/step5/price_retrieve.php',
    data:{
      'gtins_quantity': gtins_quantity,
      'gtins_year': gtins_year,
    },
    success:function(data){
      $('#price_retrieve').html(data);
    }
  });
}
$('#gtins_form').on('submit', function(e){
  e.preventDefault();
  var gtins_quantity = $('#gtins_quantity').val();
  var gtins_year = $('#gtins_year').val();


  if(gtins_quantity == ''){
    $('.quantity_required').show(1000).hide(5000);
  }
  if(gtins_year == ''){
    $('.year_required').show(1000).hide(5000);
  }
});
