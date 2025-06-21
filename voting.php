<?php
include "koneksi.php";
$autor = mysqli_query($konek, "SELECT DISTINCT Author FROM data_buku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Rating Buku</title>
</head>

<body>
    <!-- Bagian Kepala -->
    <nav class="navbar bg-light shadow">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="gambar/logo_buku.png" alt="Logo" width="auto" height="60">
                <span class="fw-bold fs-4">Gramedia Jhony Joestar</span>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bukuatas.php">Top Famous</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bagian Badan -->


    <div class="container mt-5">
        <h4 class="text-center mb-4">Rating Buku</h4>
        <form action="proses_rating.php" method="POST" class="p-4 border rounded shadow-sm" style="max-width: 500px; margin: auto;">
            <div class="mb-3 row align-items-center">
                <label for="author" class="col-sm-4 col-form-label">Nama Author :</label>
                <div class="col-sm-8">
                    <select class="form-select" id="author" name="author" required>
                        <option value=""> Pilih Author </option>
                        <?php while ($row = mysqli_fetch_assoc($autor)) { ?>
                            <option value="<?= $row['Author'] ?>"><?= $row['Author'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="mb-3 row align-items-center">
                <label for="book" class="col-sm-4 col-form-label">Nama Buku :</label>
                <div class="col-sm-8">
                    <select class="form-select" id="book" name="book" required>
                        <option value=""> Pilih Buku </option>
                    </select>
                </div>
            </div>

            <!-- Rating -->
            <div class="mb-3 row align-items-center">
                <label for="rating" class="col-sm-4 col-form-label">Rating :</label>
                <div class="col-sm-8">
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="">Pilih Rating</option>
                        <?php for ($i = 1; $i <= 10; $i++) { ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button class="btn btn-primary" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    <script src="bootstrap/bootstrap.js"></script>
</body>

</html>