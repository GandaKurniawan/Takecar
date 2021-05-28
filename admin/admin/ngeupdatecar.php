
<?php
include_once '../../connect.php';

$sql = "SELECT * FROM mobil where id_mobil = '".$_GET['id']."'";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>TakeCar</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <title></title>
  </head>
  <body>

<div class="container" style="width:50%; height:20%;">
  <div class="card text-white bg-info mb-3 mt-5 ">
    <div class="card-header">
        <h3 class="text-center">Ubah Data Mobil</h3>
    </div>
    <div class="card-body" >
      <?php
      $sql = "SELECT * FROM mobil where id_mobil = '".$_GET['id']."'";
      foreach ($db->query($sql) as $row) {
      ?>
        <form action="c_updatecar.php" method="POST" >
            <input type="hidden" name="foto" value="<?= $row['foto']?>">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Mobil</label>
              <input name="nama" type="text" value="<?=$row['nama']?>" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <div class="form-group col-md-16">
                    <label for="inputState">Jenis</label>
                    <select name="jenis"  id="inputState" class="form-control form-control-lg">
                      <option value="Manual" <?php if($row['jenis'] == 'Manual'){echo 'selected';} ?>>Manual</option>
                      <option value="Matic" <?php if($row['jenis'] == 'Matic'){echo 'selected';} ?>>Matic</option>
                    </select>
                  </div>
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Kapasitas</label>
              <input name="kapasitas" value="<?=$row['kapasitas']?>" type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">No Plat</label>
              <input name="plat" value="<?=$row['plat']?>" type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Harga</label>
              <input name="harga" value="<?=$row['harga']?>" type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <input name="id_mobil" value="<?=$row['id_mobil']?>" type="hidden" class="form-control" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
    <?php }  ?>
  </div>
</div>
  </body>
</html>
