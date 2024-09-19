<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 56px; /* Space for fixed navbar */
            background: linear-gradient(to right, #00aaff, #0047ff); /* Blue gradient background */
        }
        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, #00aaff, #0047ff); /* Gradient background for navbar */
            color: white;
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid #fff;
        }
        .hero-section {
            background: linear-gradient(to right, rgba(0, 170, 255, 0.8), rgba(0, 71, 255, 0.8)), url('https://via.placeholder.com/1920x400') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.25rem;
        }
        .container {
            padding: 2rem;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom right, #ffffff, #f1f1f1); /* Gradient for card background */
        }
        .card-title {
            color: #0047ff;
        }
        .btn-primary {
            background: linear-gradient(to right, #00aaff, #0047ff);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #0047ff, #00aaff);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span>Data Pegawai</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pegawai.php">Tampil Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="container">
            <h2>Selamat datang <?=$_SESSION['Nama']?> di website Pegawai.</h2>
            <p>Your one-stop solution for managing employee data</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Employees</h5>
                        <p class="card-text">View, edit, and manage employee records efficiently with our easy-to-use interface.</p>
                        <a href="tampil_pegawai.php" class="btn btn-primary">View Employees</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Jabatan</h5>
                        <p class="card-text">Easily add new job positions to the system and manage job roles.</p>
                        <a href="tambah_jabatan.php" class="btn btn-primary">Add Jabatan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Register New Users</h5>
                        <p class="card-text">Allow new users to register and access the system.</p>
                        <a href="Register.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9UJ7ZYuAlXh3e9cZZxP9L7k5FbhL0qH3f5PUkRz3M91P8LY6dT6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyni3hD0zFqkANp8Y2hP8vZX5luB9F10h7D2d/0Cjk+0LfI4t4Z3tn" crossorigin="anonymous"></script>
</body>
</html>
