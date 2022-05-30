<?php
  session_start();
  include("../../regs1/connection.php");
  //quantity
  $gtins_quantity = $_POST['gtins_quantity'];
  //year
  $gtins_year = $_POST['gtins_year'];
  $company_code = $_SESSION['company_code'];
  $ticket_code = $_SESSION['ticket_code'];
  include("../../regs1/connection.php");
  //check member
  $sql_company_information = mysqli_query($con, "SELECT * FROM company_information where company_code='$company_code' and ticket_code='$ticket_code'")or die(mysqli_error($con));
  $sql_company_information_get = mysqli_fetch_object($sql_company_information);
  //member
  $member = $sql_company_information_get->member;
  $sql_gtins = mysqli_query($con, "SELECT * FROM gtins where quantity='$gtins_quantity' and year='$gtins_year' and member='$member'")or die(mysqli_error($con));
  $sql_gtins_get = mysqli_fetch_object($sql_gtins);
  //price
  @$price = $sql_gtins_get->price;
?>
<input type="text" class="form-control bg-light border-0" name="gtins_price" id="gtins_price" value="<?php echo $price; ?>" disabled>
