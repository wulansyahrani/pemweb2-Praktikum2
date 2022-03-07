<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="m-5 border border-success p-4 rounded">
<form class="form-horizontal" method="POST" autocomplete="off" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
        <option value="ddp">Dasar-Dasar Pemprograman</option>
        <option value="pw">Pemprograman2</option>
        <option value="bs">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai Uas" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</body>

<div class="m-5 border border-success p-4 rounded">
<?php
if ($_POST)
{

    $nama = $_POST['nama'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas / 3;

    if ($total_nilai >= 85){
        $grade = "A";
    }elseif ($total_nilai >= 70)
    {   $grade = "B";
    }elseif ($total_nilai >= 56)
    {   $grade = "C";
    }elseif ($total_nilai >= 36)
    {   $grade = "D";
    }else{
        $grade = "E";
    } 
    $hasil = $grade;

    switch($grade){
        case "A": $grade = "Sangat Memuaskan"; break;
        case "B": $grade = "Memuaskan"; break;
        case "C": $grade = "Cukup"; break;
        case "D": $grade = "Kurang"; break;
        case "E": $grade = "Sangat Kurang"; break;
        default: "";
    }
}   
?>
<?php if(isset($_POST['submit'])){?>
                    <p>Nama Lengkap : <?= $nama?> </p>
                    <p>Mata Kuliah : <?= $mata_kuliah?></p> 
                    <p>Nilai UTS : <?= $nilai_uts?></p> 
                    <p>Nilai UAS : <?= $nilai_uas?></p>
                    <p>Nilai Tugas/Praktikum : <?= $nilai_tugas?></p> 
                    <p>Nilai Akhir : <?= $total_nilai?></p> 
                    <p>Grade : <?= $hasil?></p>
                    <p>Predikat : <?= $grade?></p>
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                } ?>
                
        </div>
</html>