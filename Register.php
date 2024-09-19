<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sekarang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Background color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
            margin: 1rem;
        }
        .form-title {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #007bff;
            font-size: 2rem;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
            outline: none;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem;
            width: 100%;
            font-size: 1.125rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn-primary:active {
            background-color: #004085;
            transform: translateY(0);
        }
        label {
            font-weight: 500;
            color: #495057;
        }
        .form-text {
            color: #6c757d;
        }
        table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 100%;
        }
        thead {
            background-color: #007bff;
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #e2e6ea;
        }
        .btn-group {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3 class="form-title">Daftar Sekarang</h3>
        <form action="proses_register.php" method="post">
            <div class="form-group">
                <label for="Nama">Nama Lengkap</label>
                <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="text" id="NIK" name="NIK" class="form-control" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group">
                <label for="no_tlp">No Telepon</label>
                <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
                <label for="Jenis_kelamin">Jenis Kelamin</label>
                <select id="Jenis_kelamin" name="Jenis_kelamin" class="form-control" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea id="Alamat" name="Alamat" class="form-control" rows="4" placeholder="Masukkan alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select id="jabatan" name="id" class="form-control" required>
                    <option value="" disabled selected>Pilih Jabatan</option>
                    <?php 
                    include "koneksi.php";
                    $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                    while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                        echo '<option value="' . $data_jabatan['id'] . '">' . $data_jabatan['Nama_jabatan'] . '</option>';    
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="simpan" value="Register" class="btn btn-primary">
            </div>
        </form>
    </div>

            </thead>
           
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
