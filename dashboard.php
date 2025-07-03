<?php
include "koneksi.php";

if (isset($_POST['keyword'])) {
    $keyword = mysqli_real_escape_string($konek, $_POST['keyword']);
    $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE Nama_buku LIKE '%keyword%' OR Author LIKE '%keyword%'");
} else {
    $query = mysqli_query($konek, "SELECT * FROM data_buku");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Toko Buku Mr. John</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="voting.php">Rating</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bagian Badan -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3 d-flex justify-content-between mb-3">
            <h4 class="m-0 font-weight-bold text-primary">Daftar Pustaka</h4>
            <form method="POST" class="d-flex align-items-center gap-2">
                <input type="search" name="keyword" class="form-control" placeholder="Judul Buku..." autocomplete="off" list="kegiatan" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
                <input class="btn btn-outline-success" type="submit" value="Cari">
            </form>
        </div>
        <div class="card-body">
            <!-- Tabel Data Buku Pak John -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Kategori</th>
                            <th>Author</th>
                            <th>Rating</th>
                            <th>Voter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($konek, "SELECT * FROM data_buku ORDER BY Rating DESC");
                        $no = 1;
                        $keyword = isset($_POST['keyword']) ? mysqli_real_escape_string($konek, $_POST['keyword']) : '';

                        if(!empty($keyword)){
                            $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE Nama_buku LIKE '%keyword%' OR Author LIKE '%keyword%' ORDER BY Rating DESC");
                        }else{
                            $query = mysqli_query($konek, "SELECT * FROM data_buku ORDER BY Rating DESC");
                        }

                        while ($data =  mysqli_fetch_assoc($query)) {
                            $penanda = '';

                             if(!empty($keyword) &&(stripos($data['Nama_buku'], $keyword) !== false||
                             stripos($data['Author'], $keyword) !==  false
                             )){
                                $penanda = 'kasi-tanda';
                             }
                        ?>
                            <tr class="<?= $penanda?>">
                                <td><?= $no++ ?></td>
                                <td><?= $data['Nama_buku'] ?></td>
                                <td><?= $data['Kategori'] ?></td>
                                <td><?= $data['Author'] ?></td>
                                <td><?= $data['Rating'] ?></td>
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