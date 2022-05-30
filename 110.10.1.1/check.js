$(document).ready(function(){
  $('#lgin_form').on('submit', function(e){
    e.preventDefault();
    //name
    var un = $('#un').val();
    //password
    var ps = $('#ps').val();
    if(un == '' && ps != '')
    {
      $(".username_required").show(1000).hide(1000);
    }
    if(un != '' && ps == '')
    {
      $(".password_required").show(1000).hide(1000);
    }
    if(un == '' && ps == '')
    {
      $(".username_required").show(1000).hide(1000);
      $(".password_required").show(2000).hide(1000);
    }
    if(un != '' && ps != '')
    {
      if(un.length > 10 && ps.length < 10)
      {
        $(".username_words_limit_over_alrt").show(1000).hide(1000);
      }
      if(un.length < 10 && ps.length > 10)
      {
        $(".password_words_limit_over_alrt").show(1000).hide(1000);
      }
      if(un.length > 10 && ps.length > 10)
      {
        $(".username_words_limit_over_alrt").show(1000).hide(1000);
        $(".password_words_limit_over_alrt").show(2000).hide(1000);
      }
      if(un.length < 10 && ps.length < 10)
      {
        $.ajax({
          type: 'POST',
          url: '../../regs1/110.10.1.1/login/check.php',
          data: {
            'lg_btn': 1,
            'un': un,
            'ps': ps,
          },
          success: function(data){
            $('#lgin_form')[0].reset();
            if(data == "correct")
            {
              window.location = "../../regs1/110.10.1.1/dashboard";
            }
            if(data == "wrong")
            {
              $('.wrong_alrt').show(1000).hide(1000);
            }
          }
        });
      }
    }
  })
});
