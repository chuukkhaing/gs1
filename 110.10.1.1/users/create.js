$(document).ready(function(){
  //create
  $('#person_create_form').on('submit', function(e){
    e.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    var permission = $('#permission').val();


    if(username == ''){
      $('.users_username_required').show(1000).hide(1000);
    }
    if(password == ''){
      $('.users_password_required').show(1000).hide(1000);
    }
    if(permission == ''){
      $('.users_permission_required').show(1000).hide(1000);
    }
    if(permission != 'admin' && permission != 'viewer')
    {
      $('.users_default_value_only').show(1000).hide(1000);
    }


    if(username != '' && password != '' && permission != ''){
      if(permission == 'admin' || permission == "viewer")
      {
        $.ajax({
          type: 'POST',
          url: '../../../regs1/110.10.1.1/users/create.php',
          data: {
            'create_btn': 1,
            'username': username,
            'password': password,
            'permission': permission,
          },
          success: function(data){
            $('#person_create_form')[0].reset();
            $('#users_retrieve').load('../../../regs1/110.10.1.1/users/retrieve.php');
            if(data == "username exists")
            {
              $('.username_already_take_alrt').show(1000).hide(1000);
            }
          }
        });
      }
    }
  });
  //retrieve
  $('#users_retrieve').load('../../../regs1/110.10.1.1/users/retrieve.php');
});
