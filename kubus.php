<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nightcore&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="hitung.css">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">(Ade Nugraha)</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a 
            class="nav-link active text-white"
            aria-current="page"
            href="home.html"
            ><i class="fas fa-home"></i> Home</a
            >
          </li>
            <li class="nav-item">
                <a
                class="nav-link active text-white"
                aria-current="page"
                href="kontak.html"
                ><i class="fas fa-address-book"></i> Kontak</a
              >
            </li>
            <li class="nav-item">
                <a
                class="nav-link active text-white"
                aria-current="page"
                href="tanggal.php"
                ><i class="fas fa-calendar-alt"></i> Tanggal</a
              >
            </li>
            <li class="nav-item">
                <a
                class="nav-link active text-white"
                aria-current="page"
                href="segitiga.php"
                ><i class="fas fa-tree"></i> Segitiga</a
              >
            </li>
            <li class="nav-item">
                <a
                class="nav-link active text-white"
                aria-current="page"
                href="kubus.php"
                ><i class="fas fa-wheelchair"></i> Kubus</a
              >
            </li>
           
          </ul>
        </div>
      </div>
    </nav>


    <h2>Volume Kubus</h2>
  
    <div class="container mt-5">
      <div class="row justify-content-center">
      <div class="col-md-4">
        <form method="post" action="">
        <div class="mb-3">
          <label for="sisi" class="form-label">Masukan Nilai Sisi:</label>
          <input type="number" class="form-control text-center" id="sisi" name="sisi" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung Volume</button>
        </form>
      </div>
      </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST['sisi'];
        $volume = pow($sisi, 3);
        echo "<div class='alert alert-success mt-3'>Volume Kubus: $sisi * $sisi * $sisi = $volume </div>";
    }
    ?>

    <footer class="bg-transparent text-white py-2 text-end">
      <div class="container text-end">
        <p class="mb-0">&copy; 2025 Ade Nugraha</p>
      </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
