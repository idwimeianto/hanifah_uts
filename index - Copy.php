<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>Index-2</title>
</head>
<body>    
    <!-- buat form search  -->
    <form action="index.php" method="post">
        <input id="filter" type="text" name='filter' placeholder="Filter">
        <input type="submit" name='submit'>
        <input type="reset" name='reset'>    
    </form>

    <?php 
    //koneksi ke db
    $con = mysqli_connect("localhost","root","","db_webuts");
    
    //membuat query
    if (isset($_POST['Shearch'])) {
        $filter_key ="%".$_POST['Shearch']."%";
    } else {
        $filter_key="%%";
    }
    $sql = "select * from mahasiswa where NIM like '$filter_key' or 
           Angkatan like '$filter_key' or Kelas like '$filter_key'";
    $query = mysqli_query($con, $sql);

    //inisialisasi ->eksekusi query
    $nomor =1;

    //awal loop
    echo "<br><a href='new.php'>New Record </a><br>";
    echo "<b>Record -- NIM -- Angkatan -- Kelas -- Jenis_Kelamin 
		--Nama --Alamat --Hobi --Tempat_Lahir --Tanggal_Lahir --Nomor_Handphone 
		--Cita-cita --Pembimbing_Akademik --Nama_Mk --Kode_MK --Dosen_MK
		--UKM --UKK --Organisasi --Bobot_Nilai --Bobot_Angka --Email</b><br>";
    while ($data = mysqli_fetch_array($query)) {

        //print -> menampilkan data
        echo $nomor . "--" . $data["NIM"] ."---" . $data["Angkatan"] . "---" .
            $data["Kelas"] . "---" . $data["Kelas"] . "---". $data["Jenis_Kelamin"] .
			$data["Nama"] . "---" . $data["Alamat"] . "---" .$data["Hobi"] . "---" . 
            $data["Tempat_Lahir"] . "---" .$data["Tanggal_Lahir"] . "---" . 
            $data["Nomor_Handphone"] . "---". $data["Cita-cita"] . "---" .
            $data["Pembimbing_Akademik"] . "---" . $data["Nama_MK"] . "---" . 
            $data["Kode_MK"]. "---" . $data["Doses_MK"] . "---" . $data["UKM"] . "---" . 
            $data["UKK"] . "---" . $data["Organisasi"] . "---" . $data["Bobot_Nilai"] . "---" . 
            $data["Bobot_Angka"] . "---" . $data["Email"];

        $key = $data['ID'];
        echo "<a href='update.php?key=$key'>Update </a>&nbsp;";
        echo "<a href='delete.php?key=$key'>Delete </a><br>";

        //next -> next record
        $nomor++;

    } 
    ?>
</body>
</html>
