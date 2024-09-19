<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Import Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e9ecef;
            color: #495057;
            margin-top: 50px;
        }
        .container {
            max-width: 1200px;
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 600;
            color: #007bff;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background: linear-gradient(135deg, #f5f5f5, #ffffff);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            font-size: 1.5rem;
            font-weight: 600;
        }
        table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        thead {
            background-color: #007bff;
            color: white;
        }
        th, td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #e2e6ea;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .btn-success, .btn-danger {
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.875rem;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-group {
            display: flex;
            gap: 10px;
        }
        .btn-group .btn {
            font-size: 0.875rem;
        }
    </style>

    <title>Daftar Pegawai</title>
</head>
<body>

    <h3>Daftar Pegawai</h3>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                Daftar Pegawai
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>NIK</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Gaji Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include "koneksi.php";
                        $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.Jabatan_id = jabatan.id");
                        $no = 0;
                        while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                            $no++;
                            $gaji_total = $data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'];
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_pegawai['Nama'] ?></td>
                            <td><?= $data_pegawai['Nik'] ?></td>
                            <td><?= $data_pegawai['No_tlp'] ?></td>
                            <td><?= $data_pegawai['Alamat'] ?></td>
                            <td><?= $data_pegawai['Jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                            <td><?= $data_pegawai['username'] ?></td>
                            <td><?= $data_pegawai['Nama_jabatan'] ?></td>
                            <td><?= number_format($data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'], 0, ',', '.') ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="ubah_pegawai.php?Id=<?= $data_pegawai['Id'] ?>" class="btn btn-success">Ubah</a> 
                                    <a href="hapus.php?Id=<?= $data_pegawai['Id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <a href="register.php" class="btn btn-primary w-100 mt-3">Tambah Pegawai</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
