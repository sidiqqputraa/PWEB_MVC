<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-center">Data Mahasiswa</h1>
            <a href="index.php?program=''" class="btn btn-primary">Program Study</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>NIM</th>
                        <th>PRODI</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['kelas'] ?></td>
                        <td><?php echo $row['nim'] ?></td>
                        <td><?php echo $row['prodi'] ?></td>
                        <td>
                            <a href="index.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
