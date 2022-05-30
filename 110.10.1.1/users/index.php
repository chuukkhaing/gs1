<?php
  session_start();
  //admin session check
  if(!isset($_SESSION['admin_code']))
  {
    header("Location: ../../../regs1/110.10.1.1/");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- fontawesome css -->
  <link rel="stylesheet" href="../../../regs1/fontawesome/css/all.css">
  <!-- bootstrap css -->
  <link href="../../../regs1/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- global css -->
  <link rel="stylesheet" href="../../../regs1/global.css">
  <!-- style css -->
  <link rel="stylesheet" href="../../../regs1/110.10.1.1/style.css">

  <title>GS1 - Users</title>
</head>
<body>

  <!-- jquery -->
  <script src="../../../regs1/jquery/jquery-3.6.0.min.js"></script>

  <main>
    <!-- navigation menus -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="../../../regs1/110.10.1.1/dashboard">
          <img src="../../img-src/logo.png" class="dashboard-logo"> GS1 Myanmar
        </a>
        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="text-end">
          <span data-bs-toggle="tooltip" data-bs-placement="left" title="Create">
            <button type="button" class="btn btn-primary me-3 rounded-circle" data-bs-toggle="modal" data-bs-target="#users-modal">
              <i class="fa-solid fa-plus"></i>
            </button>
          </span>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <!-- sidebar -->
        <div class="col-md-2">
          <?php
          include("../../../regs1/110.10.1.1/dashboard/sidebar.php");
          ?>
        </div>
        <div class="col-md-10 p-2">
          <?php
          include("../../../regs1/110.10.1.1/users/modal.php");
          ?>
          <div id="users_retrieve"></div>
        </div>
      </div>
    </div>
  </main>

  <!-- js -->
  <script src="../../../regs1/110.10.1.1/users/create.js"></script>
  <!-- fontawesome js -->
  <script src="../../../regs1/fontawesome/js/all.js"></script>
  <!-- bootstrap js -->
  <script type="text/javascript">
  $(document).ready(function() {
    $('[data-bs-toggle=tooltip]').tooltip();
  });
</script>
<script src="../../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="../../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
