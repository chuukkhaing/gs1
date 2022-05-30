<?php
  session_start();
  $company_code = $_SESSION['company_code'];
  $ticket_code = $_SESSION['ticket_code'];
  include("../../regs1/connection.php");
  if(isset($_POST['gtins_create_btn']))
  {
    //order code
    $order_code_bytes = random_bytes(5);
    $order_code = "order_".bin2hex($order_code_bytes);
    //quantity
    $gtins_quantity = $_POST['gtins_quantity'];
    //year
    $gtins_year = $_POST['gtins_year'];
    //price
    $gtins_price = $_POST['gtins_price'];
    if($gtins_quantity != '' && $gtins_year != '' && $gtins_price != '')
    {
      $sql_order_receive_create = mysqli_query($con, "INSERT INTO order_receive (code, company_code, ticket_code, quantity, year, price, status) values('$order_code', '$company_code', '$ticket_code', '$gtins_quantity', '$gtins_year', '$gtins_price', '')")or die(mysqli_error($con));
      if(isset($sql_order_receive_create))
      {
        echo "created";
      }
    }
  }
?>
