<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>Delete</title>
</head>
<body>    
    <?php 
        //cek key, jika kosong kembali ke index
        if (!isset($_GET['key'])) {
            header("location:index.php");
            exit();
        }

        //ambil key
        $key = $_GET['key'];

        //koneksi ke db
        $con = mysqli_connect("localhost","root","","db_webuts");
        
        //membuat query
        $query = mysqli_query($con, "delete from mahasiswa where ID = '$key'");

        echo "Record telah dihapus!<br>";
        echo "<a href='index.php'>Kembali ke beranda</a>";
        //awal loop
    ?>
</body>
</html>
