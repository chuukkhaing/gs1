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
  <link rel="stylesheet" href="../../regs1/110.10.1.1/style.css">

  <title>GS1 - Administration</title>
</head>
<body>
  <!-- jquery -->
  <script src="../../regs1/jquery/jquery-3.6.0.min.js"></script>

  <main>
    <div class="container">
      <section class="position-absolute top-50 start-50 translate-middle w-100">
        <div class="col-md-6 m-auto">
          <div class="p-2">
            <div class="form-text p-2">GS1 Myanmar [<span class="text-primary">Administration</span>]</div>
            <div class="username_required">
              <p class="text-danger">
                Username <strong> required</strong>
              </p>
            </div>
            <div class="password_required">
              <p class="text-danger">
                Password <strong> required</strong>
              </p>
            </div>
            <div class="username_words_limit_over_alrt">
              <p class="text-danger">
                [Username] maximum words is <strong>10</strong>
              </p>
            </div>
            <div class="password_words_limit_over_alrt">
              <p class="text-danger">
                [Password] maximum words is <strong>10</strong>
              </p>
            </div>
            <div class="wrong_alrt">
              <p class="text-danger">
                Username or Password is <strong>wrong</strong>
              </p>
            </div>
            <form id="lgin_form">
              <div class="input-group">
                <input type="text" name="un" id="un" class="form-control" placeholder="Username" maxlength="10" required>
                <input type="password" name="ps" id="ps" class="form-control" placeholder="Password" maxlength="10" required>
                <button type="submit" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login">
                  <i class="fa-solid fa-right-to-bracket"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- js -->
  <script src="../../regs1/110.10.1.1/check.js"></script>
  <!-- fontawesome js -->
  <script src="../../regs1/fontawesome/js/all.js"></script>
  <!-- bootstrap js -->
  <script type="text/javascript">
  $(document).ready(function() {
    $('[data-bs-toggle=tooltip]').tooltip();
  });
  </script>
  <script src="../../regs1/bootstrap/js/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="../../regs1/bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
