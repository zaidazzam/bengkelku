<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>Daftar</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form action="" method="post" class="col-lg-6 col-md-8 col-10 mx-auto">
            @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Deskripsi gambar" class="navbar-brand-img"
                    style="width: 200px; height: auto;">
            </a>
            <h2 class="my-3">Daftar</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Nama Lengkap</label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="nama">
            <input type="hidden" class="d-none" name="role_id" value="2">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="username">Username</label>
              <input type="text" placeholder="username" name="username" id="username" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="no_hp">Nomor Telephone</label>
              <input type="number" placeholder="089****" name="no_hp" id="lastname" class="form-control">
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
              </div>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
          <div class="text-center mt-3">
            <p>Sudah Punya Akun? <a href="{{ route('login') }}" class="text-decoration-none">Masuk</a>
            </p>
        </div>
          <p class="mt-5 mb-3 text-muted text-center">© Tim Developer 2024</p>
        </form>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>
