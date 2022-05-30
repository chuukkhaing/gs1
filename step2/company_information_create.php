<?php
  session_start();
  include("../../regs1/connection.php");
  //user code
  $company_code_bytes = random_bytes(5);
  $company_code = "company_".bin2hex($company_code_bytes);
  //ticket code
  $ticket_code_bytes = random_bytes(5);
  $ticket_code = "ticket_".bin2hex($ticket_code_bytes);
  //company name
  $company_name = $_POST['company_name'];
  $company_name = str_replace("'", "\'", $company_name);
  //company address
  $company_address = $_POST['company_address'];
  $company_address = str_replace("'", "\'", $company_address);
  //street address
  $street_address = $_POST['street_address'];
  $street_address = str_replace("'", "\'", $street_address);
  //address
  $address = $_POST['address'];
  $address = str_replace("'", "\'", $address);
  //city
  $city = $_POST['city'];
  $city = str_replace("'", "\'", $city);
  //state / region
  $state_region = $_POST['state_region'];
  $state_region = str_replace("'", "\'", $state_region);
  //postal / zip code
  $postal_zip_code = $_POST['postal_zip_code'];
  $postal_zip_code = str_replace("'", "\'", $postal_zip_code);
  //country
  $country = $_POST['country'];
  $country = str_replace("'", "\'", $country);
  //phone
  $phone = $_POST['phone'];
  $phone = str_replace("'", "\'", $phone);
  //email
  $email = $_POST['email'];
  $email = str_replace("'", "\'", $email);
  //company license no
  $company_license_no = $_POST['company_license_no'];
  $company_license_no = str_replace("'", "\'", $company_license_no);
  //website
  $website = $_POST['website'];
  $website = str_replace("'", "\'", $website);
  //file
  @$file = $_POST['file'];
  $file = $_FILES['file']['name'];
  $file_extension = strtolower(pathinfo($file,PATHINFO_EXTENSION));
  //member
  @$member = $_POST['member'];
  $member = str_replace("'", "\'", $member);
  //null
  $null = NULL;
  if($company_name != '' && $company_address != '' && $phone != '' && $email != '' && $company_license_no != '' && $file != '' && $member != '')
  {
    if($file_extension != "jpg" && $file_extension != "jpeg" && $file_extension != "png" && $file_extension != "gif" && $file_extension != "pdf")
    {
      echo "wrong file extension";
    }
    if($file_extension == "jpg" OR $file_extension == "jpeg" OR $file_extension == "png" OR $file_extension == "gif" OR $file_extension == "pdf")
    {
      if(($country == "Myanmar" || $country == "") && ($member == "Yes" || $member == "No"))
      {
        $sql_company_information_create = mysqli_query($con, "INSERT INTO company_information (company_code, ticket_code, company_name, company_address, street_address, address, city, state_region, postal_zip_code, country, phone, email, company_license_no, website, file, member)
        values('$company_code', '$ticket_code', '$company_name', '$company_address', '$street_address', '$address', '$city', '$state_region', '$postal_zip_code', '$country', '$phone', '$email', '$company_license_no', '$website', '$file', '$member')")or die(mysqli_error($con));
        if(isset($sql_company_information_create))
        {
          //user folder
          if(file_exists("../../regs1/com-info-src/"))
          {
            mkdir("../../regs1/com-info-src/$company_code/");
          }
          //log file
          if(file_exists("../../regs1/com-info-src/$company_code/"))
          {
            move_uploaded_file($_FILES['file']['tmp_name'],"../../regs1/com-info-src/$company_code/".$_FILES['file']['name']);
            touch("../../regs1/com-info-src/$company_code/log_file.txt");
          }
          //logo file write
          if(file_exists("../../regs1/com-info-src/$company_code/log_file.txt"))
          {
            $log_file = "../../regs1/com-info-src/$company_code/log_file.txt";
            $diffWithGMT=6*60*60+30*60;
            $dateFormat="d-m-Y H:i:s";
            $timeAndDate=gmdate($dateFormat, time()+$diffWithGMT);
            $log_data = $company_name." is created ".$ticket_code." at ".$timeAndDate;
            file_put_contents($log_file, $log_data.PHP_EOL, FILE_APPEND | LOCK_EX);
          }
          //user session
          $_SESSION['company_code'] = $company_code;
          $_SESSION['ticket_code'] = $ticket_code;
          echo "created";
        }
      }
    }
  }
?>
