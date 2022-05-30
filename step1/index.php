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

  <title>GS1 - Step 01</title>
</head>
<body>
  <main>
    <div class="container">
      <section>
        <?php
        include("../../regs1/header/sub.php");
        ?>
        <div class="col p-2">
          <h4 class="p-2 m-0 text-center">
            GS1 barcode application (payment by MPU)
          </h4>
          <h4 class="p-2 m-0 text-center text-danger">
            IMPORTANT - READ CAREFULLY
          </h4>
          <p class="p-2 m-0 text-center">
            GS1 myanmar office only provides a basic servie to countries where there is NO GST Member Organisation.<br>
            This means that we only provide the barcode numbers/GTINS (EAN 13) and barcode images.
            <br>
            If you want to have more services, please go to any of our Member Organisation mentioned listed at
            <strong>
              <a href="https://www.gs1.org/contact/overview">https://www.gs1.org/contact/overview</a>
            </strong>
          </p>
          <p class="p-2 m-0 text-center text-danger">
            * Please note that once you have made payment, <strong>we cannot give you a refund.</strong> *
          </p>
          <div class="col p-2 text-center">
            <?php
              if(isset($_POST['next']))
              {
                header("Location: ../../regs1/step2");
              }
            ?>
            <form method="post">
              <button type="submit" name="next" class="btn btn-primary">
                Next
              </button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- bootstrap js -->
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
