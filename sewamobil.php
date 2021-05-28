<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
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
    <div class="container" style="width:60%; height:60%;">
      <div class="card text-white bg-info mb-3 mt-5 ">
        <div class="card-header">
            <h3 class="text-center">Update Account</h3>
        </div>
        <div class="card-body" >
          <form  action="" method="POST" autocomplete="off">
          <div class="form-grub">
            <label for="">Link Gambar</label>
            <input type="text" class="form-control"value="" name="Picture" required/>
            <div class="invalid-feedback"></div>
            <label for="">Nama Depan</label>
            <input type="text" class="form-control"value="" name="Nama_Depan" required/>
            <div class="invalid-feedback"></div>
            <label for="">Nama Belakang</label>
            <input type="text" class="form-control"value="" name="Nama_Belakang" required/>
            <div class="invalid-feedback"></div>
            <label for="">Email</label>
            <input type="text" class="form-control"value="" name="Email" required/>
            <div class="invalid-feedback"></div>
            <label for="">Gender</label>
            <input type="text" class="form-control"value="" name="Gender" required/>
            <div class="invalid-feedback"></div>
            <label for="">Pesan</label>
            <input type="text" class="form-control"value="" name="Pesan" required/>
            <div class="invalid-feedback"></div>
            <input name="add" type="hidden" value=""/>
            <input type="submit" class="btn btn-danger mt-3"name="update" style="width:50%; margin-left: 25%;"/>
          </div>
        </div>
        </form>
      </div>
    </div>

  </form>
  </body>
</html>
