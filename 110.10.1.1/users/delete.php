<?php
  include("../../../regs1/connection.php");
  if(isset($_POST['admin_delete_btn']))
  {
    $admin_code= $_POST['admin_code'];
    if($admin_code != NULL)
    {
      $sql_admin_delete = mysqli_query($con, "DELETE FROM admin where code='$admin_code'")or die(mysqli_error($con));
      if(isset($sql_admin_delete))
      {
        echo "deleted";
      }
      else
      {
        echo "didn't update";
      }
    }
  }
?>
