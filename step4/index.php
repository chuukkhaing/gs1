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
  <link rel="stylesheet" href="../../regs1/step4/style.css">

  <title>GS1 - Step 04</title>
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
          <div class="col">
            <h4 class="p-2 m-0 text-center">
              Terms and Conditions
            </h4>
            <p class="p-2 m-0 text-center">
              When you apply for a barcode, the following services are included:
            </p>
            <div class="col-md-6 m-auto">
              <ol class="list">
                <li>
                  You are given a licence on a "GS1 Company Prefix" which is needed to create the individual barcode numbers identifying your products.
                </li>
                <li>
                  You are given access to our "GS1 Activate" tool, which allows you to create and manage you barcode numbers and to generate corresponding barcode images automatically.
                </li>
                <li>
                  You make it possible to share a limited set of product data about the products identified by your barcode through the "GS1 Cloud", a global data respository (going live this year) that will allow your trading partners (retailers, e-tailers, marketplaces) to authenticate your barcode numbers and will enchance the visibility of your products around the world.
                </li>
              </ol>
            </div>
            <div class="col-md-6 p-2 m-auto">
              <p class="p-2 m-0 text-center">
                Please review the <a href="#">terms and conditions that apply to each of these services</a> and confirm your agreement below. This step is necessary to be able to generate your barcode and barcode numbers.
              </p>
            </div>
            <div class="col-md-6 p-2 m-auto">
              <div class="terms_conditions_agree_required">
                <p class="p-2 m-0 text-danger">
                  Check <strong>GS1 Terms & Conditions Agreement</strong>
                </p>
              </div>
              <form id="terms_conditions_agree_form">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="agree_license_terms" id="agree_license_terms" value="agree" required>
                  <label class="form-check-label">
                    I / We agree to abide by the GS1 Company Prefix License,
                    the GS1 Active Terms of Use and
                    the GS1 cloud Brand Owner Terms of Participation <span class="text-danger">*</span>
                  </label>
                </div>
                <div class="col p-2 text-center">
                  <button type="submit" id="terms_conditions_agree_btn" class="btn btn-primary">
                    Next
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- js -->
  <script src="../../regs1/step4/input.js"></script>
  <!-- bootstrap js -->
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
