<?php
  session_start();
  include("../../regs1/connection.php");
  if(isset($_POST['gtins_quantity']))
  {
    $company_code = $_SESSION['company_code'];
    $ticket_code = $_SESSION['ticket_code'];
    include("../../regs1/connection.php");
    //check member
    $sql_company_information = mysqli_query($con, "SELECT * FROM company_information where company_code='$company_code' and ticket_code='$ticket_code'")or die(mysqli_error($con));
    $sql_company_information_get = mysqli_fetch_object($sql_company_information);
    //member
    $member = $sql_company_information_get->member;
    //quantity
    $gtins_quantity = $_POST['gtins_quantity'];
    $sql_gtins = mysqli_query($con, "SELECT distinct year FROM gtins where member='$member' and quantity='$gtins_quantity'")or die(mysqli_error($con));
    ?>
    <option value="">How many year do you need?</option>
    <?php
    while($sql_gtins_get = mysqli_fetch_object($sql_gtins))
    {
      //year
      $year = $sql_gtins_get->year;
      ?>
      <option value="<?php echo $year; ?>">
        <?php echo $year; ?>
      </option>
      <?php
    }
  }
?>
