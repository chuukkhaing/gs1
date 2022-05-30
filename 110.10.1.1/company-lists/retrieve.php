<div class="col p-2">
  <?php
  include("../../../regs1/connection.php");
  $sql_company_information = mysqli_query($con, "SELECT * FROM company_information")or die(mysqli_error($con));
  $sql_company_information_num = mysqli_num_rows($sql_company_information);
  ?>
  <p class="p-2 m-0">
    Company Lists <strong class="text-danger">( Total - <?php echo $sql_company_information_num; ?> )</strong>
  </p>
  <?php
  include("../../../regs1/connection.php");
  $sql_company_information = mysqli_query($con, "SELECT * FROM company_information ORDER BY id DESC")or die(mysqli_error($con));
  while($sql_company_information_get = mysqli_fetch_object($sql_company_information))
  {
    //company code
    $company_code = $sql_company_information_get->company_code;
    //ticket code
    $ticket_code = $sql_company_information_get->ticket_code;


    $sql_contact_person_information = mysqli_query($con, "SELECT * FROM contact_person_information where company_code='$company_code' and ticket_code='$ticket_code'")or die(mysqli_error($con));
    $sql_contact_person_information_get = mysqli_fetch_object($sql_contact_person_information);
    //first person name
    @$first_person_name = $sql_contact_person_information_get->first_person_name;
    //first person email
    @$first_person_email = $sql_contact_person_information_get->first_person_email;
    //first person phone
    @$first_person_phone = $sql_contact_person_information_get->first_person_phone;
    //second person name
    @$second_person_name = $sql_contact_person_information_get->second_person_name;
    //second person email
    @$second_person_email = $sql_contact_person_information_get->second_person_email;
    //second person phone
    @$second_person_phone = $sql_contact_person_information_get->second_person_phone;


    //company name
    $company_name = $sql_company_information_get->company_name;
    //company address
    $company_address = $sql_company_information_get->company_address;
    //street address
    $street_address = $sql_company_information_get->street_address;
    //address
    $address = $sql_company_information_get->address;
    //city
    $city = $sql_company_information_get->city;
    //state/region
    $state_region = $sql_company_information_get->state_region;
    //postal/zip code
    $postal_zip_code = $sql_company_information_get->postal_zip_code;
    //country
    $country = $sql_company_information_get->country;
    //phone
    $phone = $sql_company_information_get->phone;
    //email
    $email = $sql_company_information_get->email;
    //company license no
    $company_license_no = $sql_company_information_get->company_license_no;
    //website
    $website = $sql_company_information_get->website;
    //file
    $file = $sql_company_information_get->file;
    //member
    $member = $sql_company_information_get->member;
    //created_at
    $created_at = $sql_company_information_get->created_at;
    ?>
    <div class="accordion mb-2" id="accordion_<?php echo $company_code; ?>">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $company_code; ?>" aria-expanded="true" aria-controls="collapseOne">
            <?php echo $company_name; ?>
          </button>
        </h2>
        <div id="<?php echo $company_code; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_<?php echo $company_code; ?>">
          <div class="accordion-body">
            <!-- company information -->
            <div class="row">
              <div class="col-md-6">
                <p class="p-2 m-0">
                  <strong>Address: </strong> <?php echo $company_address; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Street Address: </strong> <?php echo $street_address; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Address: </strong> <?php echo $address; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>City: </strong> <?php echo $city; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>State/Region: </strong> <?php echo $state_region; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Postal/Zip Code: </strong> <?php echo $postal_zip_code; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Country: </strong> <?php echo $country; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Phone: </strong> <?php echo $phone; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Email: </strong> <?php echo $email; ?>
                </p>
              </div>
              <div class="col-md-6">
                <p class="p-2 m-0">
                  <strong>Company License No: </strong> <?php echo $company_license_no; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Website: </strong> <?php echo $website; ?>
                </p>
                <a href="../../../regs1/com-info-src/<?php echo $company_code; ?>/<?php echo $file; ?>" download="<?php echo $company_name; ?>-<?php echo $file; ?>">
                  <img src="../../../regs1/com-info-src/<?php echo $company_code; ?>/<?php echo $file; ?>" class="company_license_image rounded m-2" alt="<?php echo $file; ?>">
                </a>
                <p class="p-2 m-0">
                  <strong>Member: </strong> <?php echo $member; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Created at: </strong> <?php echo $created_at; ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <p class="p-2 m-0">
                  <strong>First Person Name: </strong> <?php echo $first_person_name; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>First Person Email: </strong> <?php echo $first_person_email; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>First Person Phone: </strong> <?php echo $first_person_phone; ?>
                </p>
              </div>
              <div class="col-md-6">
                <p class="p-2 m-0">
                  <strong>Second Person Name: </strong> <?php echo $second_person_name; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Second Person Email: </strong> <?php echo $second_person_email; ?>
                </p>
                <p class="p-2 m-0">
                  <strong>Second Person Phone: </strong> <?php echo $second_person_phone; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
}
?>
</div>
