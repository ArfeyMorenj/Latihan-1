<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .card {
            max-width: 600px;
            margin: auto;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Jabatan</h4>
            </div>
            <div class="card-body">
                <form action="proses_tambah_jabatan.php" method="post">
                    <div class="mb-3">
                        <label for="Nama_jabatan" class="form-label">Nama Jabatan</label>
                        <input type="text" id="Nama_jabatan" name="Nama_jabatan" class="form-control" placeholder="Masukkan nama jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="Gaji_pokok" class="form-label">Gaji Pokok</label>
                        <input type="text" id="Gaji_pokok" name="Gaji_pokok" class="form-control" placeholder="Masukkan gaji pokok" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tunjangan" class="form-label">Tunjangan</label>
                        <input type="text" id="Tunjangan" name="Tunjangan" class="form-control" placeholder="Masukkan tunjangan" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Tambah Jabatan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
