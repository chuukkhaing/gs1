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

  <!-- fontawesome css -->
  <link rel="stylesheet" href="../../regs1/fontawesome/css/all.css">
  <!-- bootstrap css -->
  <link href="../../regs1/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- global css -->
  <link rel="stylesheet" href="../../regs1/global.css">
  <!-- style css -->
  <link rel="stylesheet" href="../../regs1/step5/style.css">

  <title>GS1 - Step 05</title>
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
          <div class="col-md-4 pt-3 mx-auto">
            <form id="gtins_form">
              <?php
              $company_code = $_SESSION['company_code'];
              $ticket_code = $_SESSION['ticket_code'];
              include("../../regs1/connection.php");
              //check member
              $sql_company_information = mysqli_query($con, "SELECT * FROM company_information where company_code='$company_code' and ticket_code='$ticket_code'")or die(mysqli_error($con));
              $sql_company_information_get = mysqli_fetch_object($sql_company_information);
              //member
              $member = $sql_company_information_get->member;
              $sql_gtins = mysqli_query($con, "SELECT distinct quantity FROM gtins where member='$member'")or die(mysqli_error($con));
              ?>
              <div class="col mb-2">
                <div class="quantity_required">
                  <p class="p-2 m-0 text-danger">
                    Quantity <strong>required</strong>
                  </p>
                </div>
                <select class="form-select" name="gtins_quantity" id="gtins_quantity" onchange="FetchQuantity(this.value)" required>
                  <option value="">GTINs Quantity</option>
                  <?php
                    while($sql_gtins_get = mysqli_fetch_object($sql_gtins))
                    {
                      //quantity
                      $quantity = $sql_gtins_get->quantity;
                      ?>
                      <option value="<?php echo $quantity; ?>">
                        <?php echo $quantity; ?>
                      </option>
                      <?php
                    }
                  ?>
                </select>
              </div>
              <div class="col mb-2">
                <div class="year_required">
                  <p class="p-2 m-0 text-danger">
                    Year <strong>required</strong>
                  </p>
                </div>
                <select class="form-select" name="gtins_year" id="gtins_year" onchange="FetchYear(this.value)" required>
                  <option value="">Year</option>
                </select>
              </div>
              <div class="col mb-2">
                <div id="price_retrieve"></div>
              </div>
              <div class="col text-center">
                <button type="submit" class="btn btn-primary">
                  <i class="fa-solid fa-credit-card"></i> Payment
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- js -->
  <script src="../../regs1/step5/input.js"></script>
  <script src="../../regs1/step5/create.js"></script>
  <!-- fontawesome js -->
  <script src="../../regs1/fontawesome/js/all.js"></script>
  <!-- bootstrap js -->
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
