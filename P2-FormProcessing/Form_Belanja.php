<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<main class="container border">
<div class="row">
  <div class="col-8" class="m-5 border border-success p-4 rounded">
  <form method="POST" autocomplete="off" action="form_belanja.php">
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
  </div>
  <div class="col-4" style="	background-color: white;	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><a href="#" class="list-group-item list-group-item-action active" style="	background-color: rgb(27, 105, 196);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"> Daftar harga</a>
  <div class="row">
  <div class="col-md-12">
      <a class="list-group-item list-group-item"> Tv : 4.200.000</a>
      <a class="list-group-item list-group-item"> Kulkas : 3.100.000</a>
      <a class="list-group-item list-group-item"> Mesin Cuci : 3.800.000</a>
  <div class="" style="	background-color: white;	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><a href="#" class="list-group-item list-group-item-action active" style="	background-color: rgb(27, 105, 196);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"> Harga Dapat berubah Seiring Waktu</a>

</div>
</div>    
</div>
</main>
<div class="m-5 border border-success p-4 rounded">
<?php
            if(isset($_POST['submit'])){
                $customer = $_POST['costumer'];
                $pilihproduk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                

                if($pilihproduk=='tv'){
                    $harga = 4200000;
                }
                elseif($pilihproduk=='kulkas'){
                    $harga = 3100000;
                }
                elseif($pilihproduk=='mesin'){
                    $harga = 3800000;
                }

                $hargatotal = $jumlah*$harga;

                
                switch($pilihproduk){
                    case "tv": $pilihproduk = "TV"; break;
                    case "kulkas": $pilihproduk = "Kulkas"; break;
                    case "mesin": $pilihproduk = "Mesin Cuci"; break;
                    default: "";
                }
                
            }?>
            <?php if(isset($_POST['submit'])){?>
                    <p>Nama Customer : <?= $customer?> </p>
                    <p>Pilihan Produk : <?= $pilihproduk?></p> 
                    <p>Jumlah : <?= $jumlah?></p> 
                    <p>Total Belanja : <?= $hargatotal?></p>
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Struk Belanja</div>';
                } ?>
</div>
</body>
</html>