<?php
if($_POST){
    $Nama=$_POST['Nama'];
    $NIK=$_POST['NIK'];
    $Alamat=$_POST['Alamat'];
    $Jenis_kelamin=$_POST['Jenis_kelamin'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id=$_POST['Id'];
    if(empty($Nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pegawai (Nama, NIK, Jenis_kelamin, Alamat, username, password, Id) value ('".$Nama."','".$NIK."','".$Jenis_kelamin."','".$Alamat."','".$username."','".md5($password)."','".$id."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Data Pegawai');location.href='register.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data Pegawai');location.href='register.php';</script>";
        }
    }
}
?>