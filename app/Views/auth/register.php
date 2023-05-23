<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- //css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Register</title>
  </head>
  <body>
       <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
     

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
          <h1 class="text-center mb-4">Register</h1>
          <?php $session = session(); ?>
          <?php if ($session->getFlashdata('error')) { ?>
            <div class="alert alert-danger">
              <?php foreach ($session->getFlashdata('error') as $error) { ?>
                <p><?= esc($error) ?></p>
              <?php } ?>
            </div>
          <?php } ?>

          <form method="post" action="<?= base_url('auth/valid_register') ?>">
            <div class="form-group mb-3">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group mb-3">
              <label for="confirm">Konfirmasi Password</label>
              <input type="password" name="confirm" id="confirm" class="form-control" required>
            </div>

            <button type="submit" name="register" class="btn btn-primary">Register</button>
          </form>

          <p class="mt-3 text-center">
            Sudah punya akun? <a href="<?= base_url('auth/login') ?> " >Login</a>
          </p>
        </div>
      </div>
    </div>
        
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>