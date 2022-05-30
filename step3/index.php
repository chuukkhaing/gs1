<?php
session_start();
//company session check
if(!isset($_SESSION['company_code']))
{
  header("Location: ../../regs1/step2");
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap css -->
  <link href="../../regs1/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- global css -->
  <link rel="stylesheet" href="../../regs1/global.css">
  <!-- style css -->
  <link rel="stylesheet" href="../../regs1/step3/style.css">

  <title>GS1 - Step 03</title>
</head>
<body>
  <!-- jquery -->
  <script src="../../regs1/jquery/jquery-3.6.0.min.js"></script>
  <main>
    <div class="container">
      <section>
        <?php
        include("../../regs1/header/sub.php");
        ?>
        <div class="col p-2">
          <h4 class="p-2 m-0 text-center">
            GS1 barcode application (Payment by MPU)
          </h4>
          <div class="row pt-2 pb-2">
            <div class="col-md-6 m-auto">
              <div class="card mb-2">
                <form id="contact_per_info_form">
                  <div class="card-header">
                    <h4 class="card-title p-2 m-0 text-center">
                      Primary Contact Person Information
                    </h4>
                  </div>
                  <div class="card-body">
                    <div class="first_person_name_required">
                      <p class="p-2 m-0 text-danger">
                        First Person Name <strong>required</strong>
                      </p>
                    </div>
                    <div class="col mb-2">
                      <input type="text" name="first_person_name" id="first_person_name" class="form-control" placeholder="First Person Name *" required>
                    </div>
                    <div class="first_person_email_required">
                      <p class="p-2 m-0 text-danger">
                        First Person Email <strong>required</strong>
                      </p>
                    </div>
                    <div class="col mb-2">
                      <input type="email" name="first_person_email" id="first_person_email" class="form-control" placeholder="First Person Email *" required>
                    </div>
                    <div class="first_person_phone_required">
                      <p class="p-2 m-0 text-danger">
                        First Person Phone No. <strong>required</strong>
                      </p>
                    </div>
                    <div class="col mb-2">
                      <input type="text" name="first_person_phone" id="first_person_phone" class="form-control" placeholder="First Person Phone No. *" required>
                    </div>
                    <div class="col mb-2 text-center">
                      <div class="col">
                        <div class="email_for_activate_required">
                          <p class="p-2 m-0 text-danger">
                            <strong>Check </strong>Email confirmation for GS1 activate
                          </p>
                        </div>
                        <div class="email_for_activate_default_value_only_alrt">
                          <p class="p-2 m-0 text-danger">
                            Default Value <strong>can't be change</strong>
                          </p>
                        </div>
                        <p class="p-2 m-0">
                          <strong>Is the email address of the First Person also the emaill address <br>for GS1 activate? <span class="text-danger">*</span></strong>
                        </p>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="email_for_activate" name="email_for_activate" value="Yes">
                        <label class="form-check-label">
                          Yes
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="email_for_activate" name="email_for_activate" value="No">
                        <label class="form-check-label">
                          No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="card-header border-top">
                    <h4 class="card-title p-2 m-0 text-center">
                      Secondary Contact Person Information
                    </h4>
                  </div>
                  <div class="card-body">
                    <div class="col mb-2">
                      <input type="text" name="second_person_name" id="second_person_name" class="form-control" placeholder="Second Person Name">
                    </div>
                    <div class="col mb-2">
                      <input type="email" name="second_person_email" id="second_person_email" class="form-control" placeholder="Second Person Email">
                    </div>
                    <div class="col mb-2">
                      <input type="text" name="second_person_phone" id="second_person_phone" class="form-control" placeholder="Second Person Phone No.">
                    </div>
                    <div class="personal_data_agreement_required">
                      <p class="p-2 m-0 text-danger">
                        <strong>Check </strong>Personal Data agreement to administer
                      </p>
                    </div>
                    <div class="col mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="agree_personal_data" id="agree_personal_data" value="agree" required>
                        <label class="form-check-label">
                          <strong>I agree to the use of my personal data provided with this application to administer this subscription <span class="text-danger">*</span></strong>
                        </label>
                      </div>
                    </div>
                    <div class="col mb-2">
                      <p class="p-2 m-0 text-center">
                        For More Information <a href="#">please see our privacy policy.</a>
                      </p>
                    </div>
                    <div class="col text-center">
                      <button type="submit" name="register_per_btn" id="register_per_btn" class="btn btn-primary">
                        Next
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- js -->
  <script src="../../regs1/step3/input.js"></script>
  <!-- bootstrap js -->
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
