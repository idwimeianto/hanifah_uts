<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>index</title>
</head>
<body>    
    <!-- buat form search  -->
    <!-- <form action="index.php" method="post">
        <input id="filter" type="text" name='filter' placeholder="Filter">
        <input type="submit" name='submit'>
        <input type="reset" name='reset'>    
    </form> -->

    <?php 
    include("Template.php");
    //koneksi ke db
    $con = mysqli_connect("localhost","root","","db_webuts");
    
    //membuat query
    if (isset($_POST['filter'])) {
        $filter_key ="%".$_POST['filter']."%";
    } else {
        $filter_key="%%";
    }
    $sql = "select * from mahasiswa where NIM like '$filter_key' or 
            Angkatan like '$filter_key' or Kelas like '$filter_key' or 
            Nama like '$filter_key' or Alamat like '$filter_key' or Hobi
            like '$filter_key' or Tempat_Lahir like '$filter_key' or Tanggal_Lahir like 
            '$filter_key' or Nomor_Handphone like '$filter_key'";
    //$sql = "select * from mahasiswa where NIM" ;
    $query = mysqli_query($con, $sql);

    //inisialisasi ->eksekusi query
    $nomor =1;
    $tabel = null;
    //awal loop
    // echo "<br><a href='new.php'>New Record </a><br>";
    // echo "<b>Record -- Name -- Adress -- Phone Number -- Email --Catatan ---Action</b><br>";
    while ($data = mysqli_fetch_array($query)) {

        $key = $data['ID'];
        $tabel .= "<tr>
        <td>". $data["ID"]."</td>
        <td>". $data["NIM"]."</td>
        <td>". $data["Angkatan"]."</td>
        <td>". $data["Kelas"]."</td>
        <td>". $data["Jenis_Kelamin"]."</td>
        <td>". $data["Nama"]."</td>
        <td>". $data["Alamat"]."</td>
        <td>". $data["Hobi"]."</td>
        <td>". $data["Tempat_Lahir"]."</td>
        <td>". $data["Tanggal_Lahir"]."</td>
        <td>". $data["Nomor_Handphone"]."</td>
        <td>". $data["Cita-cita"]."</td>
        <td>". $data["Pembimbing_Akademik"]."</td>
        <td>". $data["Nama_MK"]."</td>
        <td>". $data["Kode_MK"]."</td>
        <td>". $data["Dosen_MK"]."</td>
        <td>". $data["UKM"]."</td>
        <td>". $data["UKK"]."</td>
        <td>". $data["Organisasi"]."</td>
        <td>". $data["Bobot_Nilai"]."</td>
        <td>". $data["Bobot_Angka"]."</td>
        <td>". $data["Email"]."</td>
        <td><button class='btn btn-danger' nama='hapus'><a href='delete.php?key=$key' style='color: white; font-weight: bold;'>Delete</a>&nbsp</button>
		<button class='btn btn-success' ><a href='update.php?key=$key' style='color: white; font-weight: bold;'>Update</a></button></td>

        </tr>";

        //next -> next recordx
        $nomor++;

    } 
    $tpl = new Template("templates/skin.html");
    
    // Mengganti kode Data_Tabel dengan data yang sudah diproses
    $tpl->replace("DATA_TABEL", $tabel);

    // Menampilkan ke layar
    $tpl->write();
    // echo "<a href='new.php'>New Record </a><br>";
    ?>
</body>
</html>
