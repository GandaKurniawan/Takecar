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
    <div class="card text-white bg-info mb-3 mt-5" >
        <div class="card-header">
            <h3 class="text-center">Create Account</h3>
        </div>
        <div class="card-body">
            <form autocomplete="off" method="POST" enctype="multipart/form-data" action="add.php">
                <div class="form-group">
                    <label>Link Picture</label>
                    <input name="Picture" value=""class="form-control ">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input name="Nama_Depan" value=""class="form-control ">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input name="Nama_Belakang" value=""class="form-control  ">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="Email" value=""class="form-control  ">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input name="Gender" value=""class="form-control  ">
                    <div class="invalid-feedback"></div>
                </div>
              <div class="form-group">
                  <label>Pesan untuk saya</label>
                  <input name="Pesan" value=""class="form-control  ">
                  <div class="invalid-feedback"></div>
              </div>
                <input type="submit" class="btn btn-danger"name="add" value="Create" style="width:50%; margin-left: 25%;">
            </form>
        </div>
      </div>
    </div>
</div>
  </body>
</html>
