<?php
include 'connect.php'
// session_start();
?>
 <!DOCTYPE html>
 <html class="no-js" lang="zxx">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--=== Favicon ===-->
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

     <title>TakeCar</title>

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
     <!-- Animated -->
     	<link rel="stylesheet" href="animate.css">


     <!--[if lt IE 9]>
         <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
 </head>

 <body class="loader-active">

     <!--== Preloader Area Start ==-->
     <div class="preloader">
         <div class="preloader-spinner">
             <div class="loader-content">
                 <img src="assets/img/preloader.gif" alt="JSOFT">
             </div>
         </div>
     </div>
     <!--== Preloader Area End ==-->

     <!--== Header Area Start ==-->
     <header id="header-area" class="fixed-top">
         <!--== Header Top Start ==-->
         <div id="header-top" class="d-none d-xl-block">
             <div class="container">
                 <div class="row">
                     <!--== Single HeaderTop Start ==-->
                     <div class="col-lg-3 text-left">
                         <i class="fa fa-map-marker"></i> Fasilkom Universitas Jember
                     </div>
                     <!--== Single HeaderTop End ==-->

                     <!--== Single HeaderTop Start ==-->
                     <div class="col-lg-3 text-center">
                         <i class="fa fa-mobile"></i> Hub Kami +62 813 367 006 77
                     </div>
                     <!--== Single HeaderTop End ==-->

                     <!--== Single HeaderTop Start ==-->
                     <div class="col-lg-3 text-center">
                         <i class="fa fa-clock-o"></i> Buka Jam 08.00 - 17.00
                     </div>
                     <div class="col-lg-3 text-center">
                         <i class="fa fa-clock-o"></i> Pelanyanan Setiap Hari
                     </div>
                     <!--== Single HeaderTop End ==-->


                 </div>
             </div>
         </div>
         <!--== Header Top End ==-->

         <!--== Header Bottom Start ==-->
         <div id="header-bottom">
             <div class="container">
                 <div class="row">
                     <!--== Logo Start ==-->
                     <div class="col-lg-4">
                         <a href="index.php" class="logo">
                             <img src="assets/img/logo.png" alt="JSOFT" style="width:40%;">
                         </a>
                     </div>
                     <!--== Logo End ==-->

                     <!--== Main Menu Start ==-->
                     <div class="col-lg-8 d-none d-xl-block">
                         <nav class="mainmenu alignright">
                             <ul>
                                 <li class="active"><a href="#">Beranda</a>
                                 </li>
                                 <li><a href="about.php">Tentang</a></li>
                                 <!-- <li><a href="services.php">servis</a></li> -->

                                 <li><a href="gallery.php">Galeri</a>
                                 </li>
                                 <!-- <li><a href="#">Blog</a>
                                     <ul>
                                         <li><a href="article.php">Blog Page</a></li>
                                         <li><a href="article-details.php">Blog Details</a></li>
                                     </ul>
                                 </li> -->
                                 <li><a href="contact.php">Kontak</a></li>
<!--
                                 <li class="frombtn"><a class="btn btn-warning rounded-pill mt-2" style="padding:5%; border-radius:15px;"href="form/register.html">Daftar</a></li>
                                 <li><a class="btn btn-outline-warning" href="form/login.html">Login</a></li> -->
                             </ul>
                         </nav>
                     </div>
                     <!--== Main Menu End ==-->
                 </div>
             </div>
         </div>
         <!--== Header Bottom End ==-->
     </header>
     <!--== Header Area End ==-->

     <!--== SlideshowBg Area Start ==-->
     <section id="slideslow-bg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <div class="slideshowcontent">
                         <div class="display-table">
                             <div class="display-table-cell">
                               <h1>SEWA MOBIL SEKARANG</h1>
                               <p>Kami menawarkan harga rental mobil yang kompetitif, kualitas servis yang baik <br> Serta Menyediakan mobil - mobil yang dirawat secara teratur, serta mobil kami dalam kondisi yang prima.</p>

                                 <div class="book-ur-car" style="width:55%;">
                                         <div class="bookcar-btn bookinput-item " style="margin-left: 40%;padding: 2%;">
                                           <!-- <a href="sewamobil.php"></a> -->
                                             <button class="bookinput-item " type="submit" data-toggle="modal" data-target="#exampleModal" >Klik Disini</button>

                                             <!-- Modal -->
                                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                          <h5 class="modal-title" id="exampleModalLabel" style="color:#FFD000;" >Silahkan Isi Form Berikut</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form action="c_pemesanan.php" method="POST">
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:71%;">Nama Lengkap</label>
                                                                <input name="nama" type="text" class="form-control" id="formGroupExampleInput"  style="background-color:#C0C0C0;" required >
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:87%;">No HP</label>
                                                                <input name="telephone" type="number" class="form-control" id="formGroupExampleInput"  style="background-color:#C0C0C0;" required>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:85%;" >Alamat</label>
                                                                <input name="alamat" type="text" class="form-control" id="formGroupExampleInput"  style="background-color:#C0C0C0;" required>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:77%;" >Jenis Mobil</label>
                                                                <select name="id_mobil" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="background-color:#C0C0C0;" required>
                                                                  <option selected>Pilih Mobil</option>
                                                                  <?php
                                                                  $sql = "SELECT * FROM mobil ";
                                                                  foreach ($db->query($sql) as $row) {
                                                                    if ($row['status']=="tersedia") {
                                                                  ?>
                                                                  <option value="<?=$row['id_mobil']?>"><?=$row['nama']?></option>
                                                                <?php }
                                                                }  ?>
                                                                </select>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:73%;" >Tanggal Sewa</label>
                                                                <input name="tgl_pemakaian" type="date" class="form-control" id="formGroupExampleInput" placeholder="" style="background-color:#C0C0C0;" required>
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1"style="color:#FFD000; margin-right:66%;" >Tanggal Kembali</label>
                                                                <input name="tgl_kembali" type="date" class="form-control" id="formGroupExampleInput" placeholder="" style="background-color:#C0C0C0;" required>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="" data-dismiss="modal" style="background-color:red;">Kembali</button>
                                                                <button type="submit" name="submit" style="background-color:#FFD000;">Booking</button>
                                                            </div>
                                                       </form>
                                                    </div>
                                              </div>
                                              <!-- modal -->

                                         </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!--== About Us Area Start ==-->
     <section id="about-area" class="section-padding">
         <div class="container">
             <div class="row">
                 <!-- Section Title Start -->
                 <div class="col-lg-12">
                     <div class="section-title  text-center">
                       <h2>Tentang Kami</h2>
                       <span class="title-line"><i class="fa fa-car"></i></span>
                       <p> Kami Menyediakan Jasa Penyewaan Berbagai Macam Mobil. Visi Kami Mengembangkan Website ini Untuk Memberikan <br> Kemudahan Bagi Pelanggan yang Ingin Menyewa Mobil dan Kami Selalu Memberikan Pelanyanan yang Terbaik </p>
                   </div>
                 </div>
                 <!-- Section Title End -->
             </div>

             <div class="row">
                 <!-- About Content Start -->
                 <div class="col-lg-6">
                     <div class="display-table">
                         <div class="display-table-cell">
                           <div class="about-content">
                               <p>Rental Mobil Dijamin Pelanggan Puas. <br> Kami jamin Aman , Terpercaya dan Selalu mengutamakan Pelanggan <br> Hubungi Kami di No 082568765894 </p>
                           </div>
                         </div>
                     </div>
                 </div>
                 <!-- About Content End -->

                 <!-- About Video Start -->
                 <div class="col-lg-6">
                     <div class="about-image">
                         <img src="assets/img/home-2-about.png" alt="JSOFT">
                     </div>
                 </div>
                 <!-- About Video End -->
             </div>

             <!-- About Fretutes Start -->
             <div class="about-feature-area">
                 <div class="row">
                     <!-- Single Fretutes Start -->

                     <!-- <div class="col-lg-4">
                         <div class="about-feature-item active">
                             <i class="fa fa-car"></i>
                             <h3>ALL BRANDS</h3>
                             <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                         </div>
                     </div> -->

                     <!-- Single Fretutes End -->

                     <!-- Single Fretutes Start -->

                     <!-- <div class="col-lg-4">
                         <div class="about-feature-item">
                             <i class="fa fa-car"></i>
                             <h3>ALL BRANDS</h3>
                             <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                         </div>
                     </div> -->

                     <!-- Single Fretutes End -->

                     <!-- Single Fretutes Start -->

                     <!-- <div class="col-lg-4">
                         <div class="about-feature-item">
                             <i class="fa fa-car"></i>
                             <h3>ALL BRANDS</h3>
                             <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                         </div>
                     </div> -->

                     <!-- Single Fretutes End -->
                 </div>
             </div>
             <!-- About Fretutes End -->
         </div>
     </section>
     <!--== About Us Area End ==-->

     <!--== Partner Area Start ==-->
     <div id="partner-area">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <div class="partner-content-wrap">
                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->

                         <!-- Single Partner Start -->
                         <div class="single-partner">
                             <div class="display-table">
                                 <div class="display-table-cell">
                                     <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                 </div>
                             </div>
                         </div>
                         <!-- Single Partner End -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--== Partner Area End ==-->

     <!--== Services Area Start ==-->
     <section id="service-area" class="section-padding">
         <div class="container">
             <div class="row">
                 <!-- Section Title Start -->
                 <div class="col-lg-12">
                     <div class="section-title  text-center">
                         <h2>Pelanyanan yang Kami Tawarkan </h2>
                         <span class="title-line"><i class="fa fa-car"></i></span>
                         <p>Disini kami memberikan kenyaman kepada pelanggan dengan memberikan pelayanan di bawah ini </p>
                     </div>
                 </div>
                 <!-- Section Title End -->
             </div>

 			<!-- Service Content Start -->
 			<div class="row">
 				<div class="col-lg-11 m-auto text-center">
 					<div class="service-container-wrap">
 						<!-- Single Service Start -->
 						<div class="service-item">
 							<i class="fa fa-taxi"></i>
 							<h3>Kondisi Mobil Terawat</h3>
 							<p>erawatan mesin rutin selalu kami lakukan, yaitu perawatan mobil harian, mingguan bulanan.</p>
 						</div>
 						<!-- Single Service End -->

 						<!-- Single Service Start -->

 						<div class="service-item">
 							<i class="fa fa-life-ring"></i>
 							<h3>Harga Rental Murah</h3>
 							<p>Kami jamin tarif yang kami tawarkan sangat murah kompetitif.</p>
 						</div>

 						<!-- Single Service End -->

 						<!-- Single Service Start -->
 						<div class="service-item">
 							<i class="fa fa-map-marker"></i>
 							<h3>Terdapat GPS</h3>
 							<p>Kami memberikan alat GPS di setiap mobil guna mempermudah Pengguna dan Memberikan rasa nyaman.</p>
 						</div>
 						<!-- Single Service End -->

 						<!-- Single Service Start -->
 						<div class="service-item">
 							<i class="fa fa-bath"></i>
 							<h3>Pencucian Mobil</h3>
 							<p>kami juga memberikan pelayanan pencucian mobil sebelum menggunakan mobil</p>
 						</div>
 						<!-- Single Service End -->

 						<!-- Single Service Start -->
 						<div class="service-item">
 							<i class="fa fa-phone"></i>
 							<h3>Proses Sewa Mudah</h3>
 							<p>Proses rental dan sewa mobil cukup mudah, hanya telepon atau WA ke contact center kami.</p>
 						</div>
 						<!-- Single Service End -->
 					</div>
 				</div>
 			</div>
 			<!-- Service Content End -->
         </div>
     </section>
     <!--== Services Area End ==-->

     <!--== Fun Fact Area Start ==-->
     <section id="funfact-area" class="overlay section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-11 col-md-12 m-auto">
                     <div class="funfact-content-wrap">
                         <div class="row">
                             <!-- Single FunFact Start -->
                             <div class="col-lg-4 col-md-6">
                                 <div class="single-funfact">
                                     <div class="funfact-icon">
                                         <i class="fa fa-smile-o"></i>
                                     </div>
                                     <div class="funfact-content">
                                         <p><span class="counter">550</span>+</p>
                                         <h4>Pelanggan</h4>
                                     </div>
                                 </div>
                             </div>
                             <!-- Single FunFact End -->

                             <!-- Single FunFact Start -->
                             <div class="col-lg-4 col-md-6">
                                 <div class="single-funfact">
                                     <div class="funfact-icon">
                                         <i class="fa fa-car"></i>
                                     </div>
                                     <div class="funfact-content">
                                         <p><span class="counter">45</span>+</p>
                                         <h4>Stock Mobil</h4>
                                     </div>
                                 </div>
                             </div>
                             <!-- Single FunFact End -->

                             <!-- Single FunFact Start -->
                             <div class="col-lg-4 col-md-6">
                                 <div class="single-funfact">
                                     <div class="funfact-icon">
                                         <i class="fa fa-bank"></i>
                                     </div>
                                     <div class="funfact-content">
                                         <p><span class="counter">20</span>+</p>
                                         <h4>Cabang sebanyak</h4>
                                     </div>
                                 </div>
                             </div>
                             <!-- Single FunFact End -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--== Fun Fact Area End ==-->

     <!--== Choose Car Area Start ==-->

     <!--== Choose Car Area End ==-->

     <!--== Pricing Area Start ==-->

     <!--== Pricing Area End ==-->

     <!--== Team Area Start ==-->
     <section id="team-area" class="section-padding">
         <div class="container">
             <div class="row">
                 <!-- Section Title Start -->
                 <div class="col-lg-12">
                     <div class="section-title  text-center">
                         <h2>Perintis Website Rental Mobile</h2>
                         <span class="title-line"><i class="fa fa-car"></i></span>
                         <!-- <p>Lorem ipsum dolor sit amet elit.</p> -->
                     </div>
                 </div>
                 <!-- Section Title End -->
             </div>

             <div class="row">
                 <div class="col-lg-12">
                     <div class="team-content">
                         <div class="row">
                             <!-- Team Tab Menu start -->
                             <div class="col-lg-4">
                                 <div class="team-tab-menu">
                                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link active" id="tab_item_1" data-toggle="tab" href="#team_member_1" role="tab" aria-selected="true">
                                                 <div class="team-mem-icon">
                                                     <img src="assets/img/team/team-mem-thumb-1.png" alt="JSOFT">
                                                 </div>
                                                 <h5>Ganda Kurniawan</h5>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" id="tab_item_2" data-toggle="tab" href="#team_member_2" role="tab" aria-selected="true">
                                                 <div class="team-mem-icon">
                                                     <img src="assets/img/team/team-mem-thumb-2.png" alt="JSOFT">
                                                 </div>
                                                 <h5>Devy Saraswati</h5>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" id="tab_item_3" data-toggle="tab" href="#team_member_3" role="tab" aria-selected="true">
                                                 <div class="team-mem-icon">
                                                     <img src="assets/img/team/team-mem-thumb-2.png" alt="JSOFT">
                                                 </div>
                                                 <h5>Arinda Vika Nur Hanifah</h5>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <!-- Team Tab Menu End -->

                             <!-- Team Tab Content start -->
                             <div class="col-lg-8">
                                 <div class="tab-content" id="myTabContent">
                                     <!-- Single Team  start -->
                                     <div class="tab-pane fade show active" id="team_member_1" role="tabpanel" aria-labelledby="tab_item_1">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-pro-pic">
                                                     <img src="assets/img/team/team-mem-1.png" alt="JSOFT">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-info text-center">
                                                     <h4>Ganda Kurniawan</h4>
                                                     <h5>Developer</h5>
                                                     <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                     <p>Sebagai Perancang dan membuat web rental mobil guna menyelesaikan tugas akhir pemograman berbasis web</p>
                                                     <!-- <div class="team-social-icon">
                                                         <a href="#"><i class="fa fa-facebook"></i></a>
                                                         <a href="#"><i class="fa fa-twitter"></i></a>
                                                         <a href="#"><i class="fa fa-linkedin"></i></a>
                                                         <a href="#"><i class="fa fa-pinterest"></i></a>
                                                         <a href="#"><i class="fa fa-dribbble"></i></a>
                                                     </div> -->
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Single Team  End -->

                                     <!-- Single Team  start -->
                                     <div class="tab-pane fade" id="team_member_2" role="tabpanel" aria-labelledby="tab_item_2">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-pro-pic">
                                                     <img src="assets/img/team/team-mem-2.png" alt="JSOFT">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-info text-center">
                                                     <h4>Devy Saraswati</h4>
                                                     <h5>Developer</h5>
                                                     <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                     <p>Sebagai Perancang dan membuat web rental mobil guna menyelesaikan tugas akhir pemograman berbasis web</p>
                                                     <!-- <div class="team-social-icon">
                                                         <a href="#"><i class="fa fa-facebook"></i></a>
                                                         <a href="#"><i class="fa fa-twitter"></i></a>
                                                         <a href="#"><i class="fa fa-linkedin"></i></a>
                                                         <a href="#"><i class="fa fa-pinterest"></i></a>
                                                         <a href="#"><i class="fa fa-dribbble"></i></a>
                                                     </div> -->
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Single Team  End -->

                                     <!-- Single Team  start -->
                                     <div class="tab-pane fade" id="team_member_3" role="tabpanel" aria-labelledby="tab_item_3">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-pro-pic">
                                                     <img src="assets/img/team/team-mem-2.png" alt="JSOFT">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-md-6">
                                                 <div class="team-member-info text-center">
                                                     <h4>Arinda Vika Nur Hanifah</h4>
                                                     <h5>Developer</h5>
                                                     <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                     <p>Sebagai Perancang dan membuat web rental mobil guna menyelesaikan tugas akhir pemograman berbasis web</p>
                                                     <!-- <div class="team-social-icon">
                                                         <a href="#"><i class="fa fa-facebook"></i></a>
                                                         <a href="#"><i class="fa fa-twitter"></i></a>
                                                         <a href="#"><i class="fa fa-linkedin"></i></a>
                                                         <a href="#"><i class="fa fa-pinterest"></i></a>
                                                         <a href="#"><i class="fa fa-dribbble"></i></a>
                                                     </div> -->
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Single Team  End -->
                                 </div>
                             </div>
                             <!-- Team Tab Content End -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--== Team Area End ==-->

     <!--== Mobile App Area Start ==-->
     <div id="mobileapp-video-bg"></div>
     <section id="mobile-app-area">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="mobile-app-content">
                         <p>Transaksi Menggunakan website dan temukan promo lainnya</p>
                         <!-- <div class="app-btns">
                             <a href="#"><i class="fa fa-android"></i> Android Store</a>
                             <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                         </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--== Mobile App Area End ==-->

     <!--== Footer Area Start ==-->
     <section id="footer-area">
         <!-- Footer Widget Start -->
         <div class="footer-widget-area">
             <div class="container">
                 <div class="row">
                     <!-- Single Footer Widget Start -->
                     <div class="col-lg-4 col-md-6">
                         <div class="single-footer-widget">
                             <h2>Tentang</h2>
                             <div class="widget-body">
                                 <img src="assets/img/logo.png" alt="JSOFT">
                                 <p>Rental Mobil Dijamin Pelanggan Puas <br> Kami jamin Aman , Terpercaya dan Selalu mengutamakan Pelanggan <br> Hubungi Kami di No 082568765894</p>

                                 <div class="newsletter-area">
                                     <form action="index.php">
                                         <input type="email" placeholder="Subscribe Our Newsletter">
                                         <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                     </form>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <!-- Single Footer Widget End -->

                     <!-- Single Footer Widget Start -->
                     <div class="col-lg-4 col-md-6">
                         <div class="single-footer-widget">
                             <h2>Komentar</h2>
                             <div class="widget-body">
                                 <ul class="recent-post">
                                     <li>
                                         <a href="#">
                                            Aplikasinya bagus:)
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                           Gak perlu ribet cari tempat sewa
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                            Wih Keren bisa memudahkan penyewaan jauh" hari
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- Single Footer Widget End -->

                     <!-- Single Footer Widget Start -->
                     <div class="col-lg-4 col-md-6">
                         <div class="single-footer-widget">
                             <h2>Hubungi Kami</h2>
                             <div class="widget-body">
                                 <p>Untuk Pemesanan dan Informasi Lengkap. Silahkan Telepon Kontak Kami di bawah ini.</p>

                                 <ul class="get-touch">
                                     <li><i class="fa fa-map-marker"></i>Fasilkom Universitas Jember</li>
                                     <li><i class="fa fa-mobile"></i> +62 825 6876 5894</li>
                                     <li><i class="fa fa-envelope"></i>TugasAkhirPweb@gamil.com</li>
                                 </ul>
                                 <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Lokasi</a>
                             </div>
                         </div>
                     </div>
                     <!-- Single Footer Widget End -->
                 </div>
             </div>
         </div>
         <!-- Footer Widget End -->

         <!-- Footer Bottom Start -->
         <div class="footer-bottom-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Fasilkom Universitas Jember &copy;<script>document.write(new Date().getFullYear());</script> TugasAkhirPweb <i class="fa fa-heart-o" aria-hidden="true"></i> by Ganda Kurniawan, Devy Saraswati dan Arinda Vika Nur Hanifah
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Footer Bottom End -->
     </section>
     <!--== Footer Area End ==-->

     <!--== Scroll Top Area Start ==-->
     <div class="scroll-top">
         <img src="assets/img/scroll-top.png" alt="JSOFT">
     </div>
     <!--== Scroll Top Area End ==-->

     <!--=======================Javascript============================-->
     <!--=== Jquery Min Js ===-->
     <script src="assets/js/jquery-3.2.1.min.js"></script>
     <!--=== Jquery Migrate Min Js ===-->
     <script src="assets/js/jquery-migrate.min.js"></script>
     <!--=== Popper Min Js ===-->
     <script src="assets/js/popper.min.js"></script>
     <!--=== Bootstrap Min Js ===-->
     <script src="assets/js/bootstrap.min.js"></script>
     <!--=== Gijgo Min Js ===-->
     <script src="assets/js/plugins/gijgo.js"></script>
     <!--=== Vegas Min Js ===-->
     <script src="assets/js/plugins/vegas.min.js"></script>
     <!--=== Isotope Min Js ===-->
     <script src="assets/js/plugins/isotope.min.js"></script>
     <!--=== Owl Caousel Min Js ===-->
     <script src="assets/js/plugins/owl.carousel.min.js"></script>
     <!--=== Waypoint Min Js ===-->
     <script src="assets/js/plugins/waypoints.min.js"></script>
     <!--=== CounTotop Min Js ===-->
     <script src="assets/js/plugins/counterup.min.js"></script>
     <!--=== YtPlayer Min Js ===-->
     <script src="assets/js/plugins/mb.YTPlayer.js"></script>
     <!--=== Magnific Popup Min Js ===-->
     <script src="assets/js/plugins/magnific-popup.min.js"></script>
     <!--=== Slicknav Min Js ===-->
     <script src="assets/js/plugins/slicknav.min.js"></script>

     <!--=== Mian Js ===-->
     <script src="assets/js/main.js"></script>

 </body>

 </html>
