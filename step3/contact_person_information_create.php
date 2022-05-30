<?php
  session_start();
  //company code
  $company_code = $_SESSION['company_code'];
  //ticket code
  $ticket_code = $_SESSION['ticket_code'];
  include("../../regs1/connection.php");
  //CEO name
  $first_person_name = $_POST['first_person_name'];
  $first_person_name = str_replace("'", "\'", $first_person_name);
  //CEO email
  $first_person_email = $_POST['first_person_email'];
  $first_person_email = str_replace("'", "\'", $first_person_email);
  //CEO phone no.
  $first_person_phone = $_POST['first_person_phone'];
  $first_person_phone = str_replace("'", "\'", $first_person_phone);
  //CEO email confirm
  $email_for_activate = $_POST['email_for_activate'];
  $email_for_activate = str_replace("'", "\'", $email_for_activate);
  //secondary person name
  $second_person_name = $_POST['second_person_name'];
  $second_person_name = str_replace("'", "\'", $second_person_name);
  //secondary person email
  $second_person_email = $_POST['second_person_email'];
  $second_person_email = str_replace("'", "\'", $second_person_email);
  //secondary person phone no.
  $second_person_phone = $_POST['second_person_phone'];
  $second_person_phone = str_replace("'", "\'", $second_person_phone);
  //person data agreement
  $agree_personal_data = $_POST['agree_personal_data'];
  $agree_personal_data = str_replace("'", "\'", $agree_personal_data);
  if($first_person_name != "" && $first_person_email != "" && $first_person_phone != "" && $email_for_activate != "" && $agree_personal_data != "")
  {
    if($email_for_activate == "Yes" || $email_for_activate == "No")
    {
      $sql_contact_person_information_create = mysqli_query($con, "INSERT INTO contact_person_information (company_code, ticket_code, first_person_name, first_person_email, first_person_phone, email_for_activate, second_person_name, second_person_email, second_person_phone, personal_data_agreement)
      values('$company_code', '$ticket_code', '$first_person_name', '$first_person_email', '$first_person_phone', '$email_for_activate', '$second_person_name', '$second_person_email', '$second_person_phone', '$agree_personal_data')")or die(mysqli_error($con));
      if(isset($sql_contact_person_information_create))
      {
        echo "created";
      }
    }
  }
?>
