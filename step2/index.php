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
  <link rel="stylesheet" href="../../regs1/step2/style.css">

  <title>GS1 - Step 02</title>
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
          <div class="col-md-6 pt-2 pb-2 m-auto">
            <div class="card">
              <div class="card-header">
                <h4 class="p-2 m-0 text-center">
                  Company Information
                </h4>
              </div>
              <div class="card-body">
                <form enctype="multipart/form-data" id="company_info_form">
                  <div class="company_name_required">
                    <p class="p-2 m-0 text-danger">
                      Company Name <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name *" required>
                  </div>
                  <div class="company_address_required">
                    <p class="p-2 m-0 text-danger">
                      Company Address <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <textarea name="company_address" id="company_address" class="form-control" placeholder="Company Address *" required></textarea>
                  </div>
                  <div class="col mb-2">
                    <textarea name="street_address" id="street_address" class="form-control" placeholder="Street Address (Optional)"></textarea>
                  </div>
                  <div class="col mb-2">
                    <textarea name="address" id="address" class="form-control" placeholder="Address (Optional)"></textarea>
                  </div>
                  <div class="col mb-2">
                    <div class="input-group">
                      <input type="text" name="city" id="city" class="form-control" placeholder="City">
                      <input type="text" name="state_region" id="state_region" class="form-control" placeholder="State / Region">
                    </div>
                  </div>
                  <div class="country_default_value_only_alrt">
                    <p class="p-2 m-0 text-danger text-end">
                      Default Value <strong>can't be change</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <div class="input-group">
                      <input type="text" name="postal_zip_code" id="postal_zip_code" class="form-control" placeholder="Postal / Zip Code">
                      <select name="country" id="country" class="form-select">
                        <option value="">Select Country</option>
                        <option value="Myanmar">Myanmar</option>
                      </select>
                    </div>
                  </div>
                  <div class="phone_required">
                    <p class="p-2 m-0 text-danger">
                      Phone <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No. *" required>
                  </div>
                  <div class="email_required">
                    <p class="p-2 m-0 text-danger">
                      Email <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email *" required>
                  </div>
                  <div class="company_license_no_required">
                    <p class="p-2 m-0 text-danger">
                      Company License No. <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <input type="text" name="company_license_no" id="company_license_no" class="form-control" placeholder="Company License No. *" required>
                  </div>
                  <div class="col mb-2">
                    <input type="text" name="website" id="website" class="form-control" placeholder="Website">
                  </div>
                  <div class="file_required">
                    <p class="p-2 m-0 text-danger">
                      File <strong>required</strong>
                    </p>
                  </div>
                  <div class="col mb-2">
                    <label for="formFile" class="form-label">
                      Upload your company certificate <strong>(English Preferably)</strong> <span class="text-danger">*</span><br>
                      Allowed File Type(s) - [ <span class="text-success">.jpg, .jpeg, .png, .gif, .pdf</span> ]
                    </label>
                    <div class="wrong_file_extension_alrt">
                      <p class="p-2 m-0 text-danger">
                        <strong>Wrong </strong>file extension
                      </p>
                    </div>
                    <input type="file" name="file" id="file" id="formFile" class="form-control" accept="image/jpeg, image/jpg, image/png, image/gif, application/pdf" required>
                  </div>
                  <div class="col mt-4 mb-4 text-center">
                    <div class="member_required">
                      <p class="p-2 m-0 text-danger">
                        <strong>Choose</strong> you are a member or not
                      </p>
                    </div>
                    <div class="member_default_value_only_alrt">
                      <p class="p-2 m-0 text-danger">
                        Default Value <strong>can't be change</strong>
                      </p>
                    </div>
                    <div class="col">
                      <p class="p-2 m-0">
                        <strong>Already a GS1 Member? <span class="text-danger">*</span></strong>
                      </p>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="member" name="member" value="Yes">
                      <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="member" name="member" value="No">
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                  <div class="col text-center">
                    <button type="submit" name="register_com_btn" id="register_com_btn" class="btn btn-primary">
                      Next
                    </button>
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
  <script src="../../regs1/step2/input.js"></script>
  <!-- bootstrap js -->
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
