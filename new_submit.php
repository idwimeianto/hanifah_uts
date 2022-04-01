<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>submit</title>
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

    //mpung semua var form
    $NIM = $_POST['NIM'];
    $Angkatan = $_POST['Angkatan'];
    $Kelas = $_POST['Kelas'];
    $Jenis_kelamin = $_POST['Jenis_kelamin'];
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
    //at query
    $query_str = 
    "insert into mahasiswa (NIM,Angkatan,Kelas,
    Jenis_Kelamin,Nama,Alamat,Hobi, Tempat_Lahir,Tanggal_Lahir, Nomor_Handphone,
    Cita-cita,Pembimbing_Akademik,Nama_MK,Kode_MK,Dosen_MK,UKM,UKK,Organisasi,
    Bobot_Nilai,Bobot_Angka,Email)
    values ('$NIM', '$Angkatan','$Kelas','$Jenis_Kelamin',
    '$Nama', '$Alamat', '$Hobi', '$Tempat_Lahir', ' $Tanggal_Lahir', 
    '$Nomor_Handphone', '$Cita_cita', '$Pembimbing_Akademik','$Nama_MK', '$Kode_MK', 
    '$Dosen_MK', '$UKM', '$UKK', '$Organisasi', 
    '$Bobot_Nilai','$Bobot_Angka', '$Email')";

    

    //eksekusi
    $query = mysqli_query($con, $query_str);

    echo "Sukses ... <br>" ;

    echo "<a href='index.php'> Kembali ke beranda </a>";

  ?>
</body>
</html>
