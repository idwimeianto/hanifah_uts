<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>Hanifah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #e3e3e3;">
<div class="container" style=" height: 100%;
  margin-top: 40px;
  padding: 10px;
  border: 1px solid #3e3e3e;
  background-color: white;
  border-radius: 5px 0;">
    <form action="new_submit.php" method="post">
        <h1 style="text-align: center; margin: 10px; font-size: 35px;">INPUT Mahasiswa</h1>
        
        <div class="form-group">
            <label for="exampleInputEmail1">NIM</label>
            <input type="text" class="form-control" name="NIM"required value=<?=$NIM;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Angkatan</label>
            <select placeholder="Disabled input" class="form-select" id="Angkatan" value=<?=$Angkatan;?> aria-label="Default select example"  name="angkatan">

                    <option value="2016" <?php if($Angkatan==='2016') echo 'selected="selected"';?>>2016</option>
                    <option value="2017"<?php if($Angkatan==='2017') echo 'selected="selected"';?>>2017</option>
                    <option value="2018"<?php if($Angkatan==='2018') echo 'selected="selected"';?>>2018</option>
                    <option value="2019"<?php if($Angkatan==='2019') echo 'selected="selected"';?>>2019</option>
                    <option value="2020"<?php if($Angkatan='2020') echo 'selected="selected"';?>>2020</option>
                    <option value="2021"<?php if($Angkatan==='2021') echo 'selected="selected"';?>>2021</option>
                    <option value="2022"<?php if($Angkatan='2022') echo 'selected="selected"';?>>2022</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kelas</label>
            <select placeholder="Disabled input" class="form-select" id="Kelas" value=<?='Kelas'?> aria-label="Default select example"  name="class">
                    <option value="A" <?php if($Kelas==='A') echo 'selected="selected"';?>>A</option>
                    <option value="B"<?php if($Kelas==='B') echo 'selected="selected"';?>>B</option>
                    <option value="C"<?php if($Kelas==='C') echo 'selected="selected"';?>>C</option>
                    <option value="D"<?php if($Kelas==='D') echo 'selected="selected"';?>>D</option>
                    <option value="E"<?php if($Kelas='E') echo 'selected="selected"';?>>E</option>
            </select>
        </div>
        <div>
            <label class="form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline" id="Jenis_Kelamin">
                    <input class="form-check-input" type="radio" name="ojk" id="jk1" value=<?='Laki-laki'?>checked=" <?php if ($Jenis_Kelamin == 'Laki-laki'){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="jk1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ojk" id="jk2" value=<?='Perempuan'?> checked="<?php if ($Jenis_Kelamin == 'Perempuan'){ echo 'checked'; } ?>>
                    <label class="form-check-label" for="jk2">Perempuan</label>
                </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="Nama" value=<?=$Nama;?> required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" name="Alamat" value=<?=$Alamat;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Hobi</label>
            <input type="text" class="form-control" name="Hobi" value=<?=$Hobi;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tempat lahir</label>
            <input type="text" class="form-control" name="Tempat_Lahir" value=<?=$Tempat_Lahir;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal lahir</label>
            <input type="date" class="form-control" name="Tanggal_Lahir" value=<?=$Tanggal_Lahir;?> required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomor Handphone</label>
            <input type="number" class="form-control" name="Nomor_Handphone" value=<?=$Nomor_Handphone;?> required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cita-cita</label>
            <input type="text" class="form-control" name="Cita-cita" value=<?=$Cita_cita;?>>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Pembimbing Akademik</label>
            <input type="text" class="form-control" name="Pembimbing_Akademik" value=<?=$Pembimbing_Akademik;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama MK</label>
            <input type="text" class="form-control" name="Nama_MK" value=<?=$Nama_MK;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kode MK</label>
            <input type="text" class="form-control" name="Kode_MK" value=<?=$Kode_MK;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dosen MK</label>
            <input type="text" class="form-control" name="Dosen_MK" value=<?=$Dosen_MK;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UKM</label>
            <input type="text" class="form-control" name="UKM" value=<?=$UKM;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UKK</label>
            <input type="text" class="form-control" name="UKK" value=<?=$UKK;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Organisasi</label>
            <input type="text" class="form-control" name="Organisasi" value=<?=$Organisasi;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Bobot nilai</label>
            <select placeholder="Disabled input" class="form-select" id="Bobot_Nilai" value=<?=$Bobot_Nilai;?> aria-label="Default select example"  name="Nilai">
                    <option value="A" <?php if($Bobot_Nilai==='A') echo 'selected="selected"';?>>A</option>
                    <option value="B"<?php if($Bobot_Nilai==='B') echo 'selected="selected"';?>>B</option>
                    <option value="C"<?php if($Bobot_Nilai==='C') echo 'selected="selected"';?>>C</option>
                    <option value="D"<?php if($Bobot_Nilai==='D') echo 'selected="selected"';?>>D</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Bobot angka</label>
            <input type="text" class="form-control" name="Bobot_Angka" value=<?=$Bobot_Angka;?>>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="Email" value=<?=$Email;?>>
        </div>
        <p><input type="submit" name="save" value="Save">
        <input type="submit" name="cancel" value="Cancel"></p>
    </form>
</div>
    
</body>
</html>