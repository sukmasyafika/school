<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK N 2</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/logo/1.png" alt="Bootstrap" width="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto fs-5 ">
          <li class="nav-item mx-3 ">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="../index.php">About</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#jurusan">Jurusan</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="../index.php">Artikel</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="../index.php">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto fs-5 shadow-sm">
          <li class="nav-item fw-bold btn btn btn-outline-info">
            <a class="nav-link" href="./pages/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- login -->
  <section class="vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card-lgn p-5 border border-info rounded-4 shadow">
            <h2 class="text-center mb-4 fw-bold">LOGIN</h2>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group input-group-lg">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" class="form-control" id="email" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-lg">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="bi bi-lock"></i>
                  </span>
                  <input type="password" class="form-control" id="password" required>
                </div>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-info btn-lg text-light">Login</button>
              </div>
              <div class="text-center mt-4">
                <a href="#" class="text-secondary">Belum punya akun? Registrasi di sini</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-info mt-5 py-3">
    <div>
      <p class="footer text-center text-light">Copyright &copy WEBII 2024</p>
    </div>
  </footer>

  <!-- Script Alpine.js-->
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>