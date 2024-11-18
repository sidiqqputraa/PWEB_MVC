<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Mahasiswa</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>NIM</th>
                        <th>PRODI</th>
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
                    </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
