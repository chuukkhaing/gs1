<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap css -->
  <link href="../regs1/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- global css -->
  <link rel="stylesheet" href="../regs1/global.css">
  <!-- style css -->
  <link rel="stylesheet" href="../regs1/style.css">

  <title>GS1</title>
</head>
<body>

  <!-- jquery -->
  <script src="../regs1/jquery/jquery-3.6.0.min.js"></script>

  <main>
    <div class="container">
      <section>
        <?php
        include("../regs1/header/main.php");
        ?>
        <div class="col p-2">
          <h4 class="p-2 m-0 text-center">
            GS1 Myanmar Office barcode application form
          </h4>
          <h5 class="p-2 m-0 text-center">
            Choice of payment method
          </h5>
          <p class="p-2 m-0 text-center">
            Which type of payment do you prefer?
          </p>
          <div class="col text-center">
            <div class="mpu_check_required">
              <p class="p-2 m-0 text-danger">
                MPU Check <strong>required</strong>
              </p>
            </div>
            <form id="mpu_payment_check_form">
              <div class="col p-2">
                <label>
                  <input type="checkbox" name="mpu-check" id="mpu-check" class="form-check-input" value="MPU" required> Form with MPU Payment
                </label>
              </div>
              <div class="col p-2">
                <button type="submit" name="mpu-submit" class="btn btn-primary">
                  Next
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>

  <script src="../regs1/mpu_payment_check.js"></script>
  <!-- bootstrap js -->
  <script src="../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
