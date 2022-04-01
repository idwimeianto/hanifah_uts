<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="assets/mycss.css">  -->  
    <title>UpdateS</title>
</head>
<body>
   <?php 

   //display all varibel
   //print_r($_POST);

   //cek submit
   if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      header("location: index.php");
      exit();
   } elseif (isset($_POST['cancel'])){
      header("location: index.php");
      exit();
   }

   //koneksi ke db
   $con = mysqli_connect("localhost","root","","db_webuts");
   //tampung semua var form
   
   //$key = $_GET['ID'];
   $key = $_GET['key'];
   $NIM = $_POST['NIM'];
   $Angkatan = $_POST['Angkatan'];
   $Kelas = $_POST['Kelas'];
   $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
   $Nama = $_POST['Nama'];
   $Alamat = $_POST['Alamat'];
   $Hobi = $_POST['Hobi'];
   $Tempat_Lahir = $_POST['Tempat_Lahir'];
   $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
   $Nomor_Handphone = $_POST['Nomor_Handphone'];
   $Cita_cita = $_POST['Cita-cita'];
   $Pembimbing_Akademik = $_POST['Pembimbing_Akademik'];
   $Nama_MK = $_POST['Nama_MK'];
   $Kode_MK = $_POST['Kode_MK'];
   $Dosen_MK = $_POST['Dosen_MK'];
   $UKM = $_POST['UKM'];
   $UKK = $_POST['UKK'];
   $Organisasi = $_POST['Organisasi'];
   $Bobot_Nilai = $_POST['Bobot_Nilai'];
   $Bobot_Angka = $_POST['Bobot_Angka'];
   $Email = $_POST['Email'];
   //echo $_POST;
   //buat query
   $query_str = "update mahasiswa set key='$key' Angkatan = '$Angkatan',Kelas = '$Kelas',Jenis_Kelamin = '$Jenis_Kelamin',
                  Nama = '$Nama',Alamat = '$Alamat', Hobi = '$Hobi',Tempat_Lahir = '$Tempat_Lahir',Tanggal_Lahir = '$Tanggal_Lahir',
                  Nomor_Handphone = '$Nomor_Handphone',Cita-cita = '$Cita_cita',Pembimbing_Akademik = '$Pembimbing_Akademik',
                  Nama_MK = '$Nama_MK',Kode_MK = '$Kode_MK',Dosen_MK = '$Dosen_MK',UKM = '$UKM',UKK = '$UKK',Organisasi = '$Organisasi',
                  Bobot_Nilai = '$Bobot_Nilai',Bobot_Angka = '$Bobot_Angka', Email = '$Email' where NIM = '$NIM'";

   //eksekusi
   $query = mysqli_query($con, $query_str);

   echo "Sukses ... <br>" ;
   echo $Angkatan;
   echo $Kelas;


   echo "<a href='index.php'> Kembali ke beranda </a>";
   //eader("location:index.php");

   ?>
</body>
</html>
