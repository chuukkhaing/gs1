<?php
  include("../../../regs1/connection.php");
  if(isset($_POST['create_btn']))
  {
    $code_bytes = random_bytes(5);
    //admin code
    $admin_code = "admin_".bin2hex($code_bytes);
    //viewer code
    $viewer_code = "viewer_".bin2hex($code_bytes);
    //username
    $username = $_POST['username'];
    $username = str_replace("'", "\'", $username);
    //password
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    //permission
    $permission = $_POST['permission'];
    $permission = str_replace("'", "\'", $permission);
    if($username != NULL && $password != NULL && $permission != NULL)
    {
      $sql_admin = mysqli_query($con, "SELECT * FROM admin where username='$username'")or die(mysqli_error($con));
      $sql_admin_num = mysqli_num_rows($sql_admin);
      if($sql_admin_num == 0)
      {
        if($permission == "admin")
        {
          $sql_admin_create = mysqli_query($con, "INSERT INTO admin (code, username, password, permission) values('$admin_code', '$username', '$hash_password', '$permission')")or die(mysqli_error($con));
        }
        if($permission == "viewer")
        {
          $sql_admin_create = mysqli_query($con, "INSERT INTO admin (code, username, password, permission) values('$viewer_code', '$username', '$hash_password', '$permission')")or die(mysqli_error($con));
        }
      }
      else
      {
        echo "username exists";
      }
    }
  }
?>
