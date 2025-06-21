<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Top Famopus Book</title>
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
                    <a class="nav-link" href="voting.php">Rating</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bagian Badan -->
    <div>
        <div class="container d-flex justify-content-center mt-5">
            <div class="table-responsive" style="max-width: 800px; width: 100%;">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Author</th>
                            <th scope="col">Voter</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $query = mysqli_query($konek, "SELECT * FROM data_buku ORDER BY Voter DESC");
                        $no = 1;
                        while ($data =  mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data['Author'] ?></td>
                                <td><?= $data['Voter'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="bootstrap/bootstrap.js"></script>

</body>

</html>