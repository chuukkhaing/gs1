<?php
  session_start();
  //company code
  $company_code = $_SESSION['company_code'];
  //ticket code
  $ticket_code = $_SESSION['ticket_code'];
  include("../../regs1/connection.php");
  if(isset($_POST['agree_license_terms_btn']))
  {
    $agree_license_terms = $_POST['agree_license_terms'];
    $agree_license_terms = str_replace("'", "\'", $agree_license_terms);
    if($agree_license_terms != '')
    {
      $sql_terms_and_condition_create = mysqli_query($con, "INSERT INTO terms_and_conditions (company_code, ticket_code, terms_conditions_agreement) values('$company_code', '$ticket_code', '$agree_license_terms')");
      if(isset($sql_terms_and_condition_create))
      {
        echo "created";
      }
    }
  }
?>
