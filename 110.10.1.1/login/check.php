<?php
  session_start();
  include("../../../regs1/connection.php");
  if(isset($_POST['lg_btn']))
  {
    //username
    $un = $_POST['un'];
    $un = str_replace("'", "\'", $un);
    //password
    $ps = $_POST['ps'];
    $ps = str_replace("'", "\'", $ps);
    //login check
    $sql_admin = mysqli_query($con, "SELECT * FROM admin where username='$un'")or die(mysqli_error($con));
    $sql_admin_get = mysqli_fetch_object($sql_admin);
    //sql username
    $sql_n = $sql_admin_get->username;
    //sql password
    $sql_ps = $sql_admin_get->password;
    $ps_verify = password_verify($ps, $sql_ps);
    //sql admin code
    $admin_code = $sql_admin_get->code;
    if($un == $sql_n && $ps_verify == 1)
    {
      $_SESSION['admin_code'] = $admin_code;
      echo "correct";
    }
    else
    {
      echo "wrong";
    }
  }
?>
