<?php
  session_start();
  $admin_code = $_SESSION['admin_code'];
  include("../../../regs1/connection.php");
  if(isset($_POST['create_btn']))
  {
    //gtins code
    $gtins_code_bytes = random_bytes(5);
    $gtins_code = "gtins_".bin2hex($gtins_code_bytes);
    //quantity
    $quantity = $_POST['quantity'];
    $quantity = str_replace("'", "\'", $quantity);
    //yearly
    $yearly = $_POST['yearly'];
    $yearly = str_replace("'", "\'", $yearly);
    //price
    $price = $_POST['price'];
    $price = str_replace("'", "\'", $price);
    //member
    $member = $_POST['member'];
    $member = str_replace("'", "\'", $member);
    //status
    $status = $_POST['status'];
    $status = str_replace("'", "\'", $status);
    if($quantity != NULL && $price != NULL && $member != NULL && $status != NULL && $yearly != NULL)
    {
      if(($member == 'yes' || $member == 'no') && ($status == 'active' || $status == 'inactive'))
      {
        $sql_gtins_create = mysqli_query($con, "INSERT INTO gtins (code, admin_code, quantity, year, price, member, status)
        values('$gtins_code', '$admin_code', '$quantity', '$yearly', '$price', '$member', '$status')")or die(mysqli_error($con));
        echo "gtins created";
      }
    }
  }
?>
