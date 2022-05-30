<?php
  include("../../../regs1/connection.php");
  if(isset($_POST['gtins_delete_btn']))
  {
    $gtins_code = $_POST['gtins_code'];
    $sql_gtins_delete = mysqli_query($con, "DELETE FROM gtins where code='$gtins_code'")or die(mysqli_error($con));
    if(isset($sql_gtins_delete))
    {
      echo "gtins deleted";
    }
  }
?>
