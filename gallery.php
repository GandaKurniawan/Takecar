<?php
include 'connect.php'
// session_start();
?>
<!doctype html>
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
                                <li><a href="index.php">Beranda</a>
                                </li>
                                <li><a href="about.php">Tentang</a></li>

                                <li class="active"><a href="gallery.php">Galeri</a>

                                </li>
                                <li><a href="contact.php">Kontak</a></li>
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

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Galleri</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Di galeri ini ada banyak pilihan mobil kami yang akan kami sewakan untuk anda </p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular-cars-wrap">
                        <!-- Filtering Menu -->
                        <div class="popucar-menu text-center">
                            <a href="#" data-filter="*" class="active">all</a>
                            <!-- <a href="#" data-filter=".hat">Mobil Box</a>
							<a href="#" data-filter=".mpv">MPV</a>
							<a href="#" data-filter=".sedan">Sedan</a>
							<a href="#" data-filter=".suv">Pikep</a> -->
                        </div>
                        <!-- Filtering Menu -->

                        <div class="row popular-car-gird">
                            <!-- Single Popular Car Start -->
                            <?php
                            $sql = "SELECT * FROM mobil ";
                            foreach ($db->query($sql) as $row) {
                            ?>
                                <div class="col-lg-4 col-md-6 con">
                                    <div class="single-popular-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="car/<?= $row["foto"]; ?>">
                                                <img src="car/<?= $row["foto"]; ?>" alt="JSOFT">
                                            </a>
                                        </div>

                                        <div class="p-car-content">
                                            <h3> Mobil :
                                                <?= $row['nama'] ?>
                                                <a href="#" <?= $row['nama'] ?>></a>
                                                <span class="price"><i class="fa fa-tag"><?= $row['harga'] ?></i> K/Hari</span>
                                            </h3>
                                            <tr>
                                                <p>Tipe :<?= $row['jenis'] ?></p>
                                                <p>Kapasitas : <?= $row['kapasitas'] ?></p>
                                                <p>Plat : <?= $row['plat'] ?></p>
                                                <p></p>
                                                <div class="p-car-feature">
                                                    <!-- <a href="#">2016</a>
											<a href="contact.html">Komentar</a>
											<a href="car-details.html">Info Detail </a> -->
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>
                            <!-- Single Popular Car End -->

                            <!-- Single Popular Car Start -->
                            <!-- <div class="col-lg-4 col-md-6 suv ">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="assets/img/car/su p1.jpg">
										  <img src="assets/img/car/su p1.jpg" alt="JSOFT">
									   </a>
									</div>

									<div class="p-car-content">
										<h3>
                      <a href="#">Suzuki Traga</a>
											<span class="price"><i class="fa fa-tag"></i>600K/Hari</span>
										</h3>

										<h5>Mesin sekira 80 ps di RPM yang cukup rendah 3.500 dan terutama di torsi 19,5 Kg.m pada 1.800 rpm. </h5>

										<div class="p-car-feature">
                      <a href="#">2017</a>
                      <a href="contact.php">Komentar</a>
											<a href="car-details.php">Info Detail </a>
										</div>
									</div>
								</div>
							</div>

							<!Single Popular Car End -->

                            <!-- Single Popular Car Start -->
                            <!-- <div class="col-lg-4 col-md-6 hat">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="assets/img/car/su b1.jpg">
										  <img src="assets/img/car/su b1.jpg" alt="JSOFT">
									   </a>
									</div>

									<div class="p-car-content">
										<h3>
                      <a href="#">Nissan Ravana</a>
                      <span class="price"><i class="fa fa-tag"></i> 600K/Hari</span>
                    </h3>

                    <h5>Bermesin 2,488 cc (2.5 liter) 4-silinder inline, DOHC, 16 valve</h5>

                    <div class="p-car-feature">
                      <a href="#">2017</a>
                      <a href="contact.html">Komentar</a>
                      <a href="car-details.html">Info Detail </a>
										</div>
									</div>
								</div>
							</div> -->
                            <!-- Single Popular Car End -->

                            <!-- Single Popular Car Start -->
                            <!-- <div class="col-lg-4 col-md-6 con mpv sedan">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="assets/img/car/ns1.jpg">
										  <img src="assets/img/car/ns1.jpg" alt="JSOFT">
									   </a>
									</div>

									<div class="p-car-content">
										<h3>
											<a href="#">Nissan Murano</a>
											<span class="price"><i class="fa fa-tag"></i>600K/Hari</span>
										</h3>

										<h5>mesin VQ35DE dengan kekuatan puncak sekitar 305 bhp</h5>

										<div class="p-car-feature">
                      <a href="#">2017</a>
                      <a href="contact.html">Komentar</a>
											<a href="#">Info Detail </a>
										</div>
									</div>
								</div>
							</div> -->
                            <!-- Single Popular Car End -->

                            <!-- Single Popular Car Start -->
                            <!-- <div class="col-lg-4 col-md-6 con sedan mpv">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="assets/img/car/ls3.jpg">
										  <img src="assets/img/car/ls3.jpg" alt="JSOFT">
									   </a>
									</div>

									<div class="p-car-content">
										<h3>
											<a href="#">Lexus LM 300h</a>
											<span class="price"><i class="fa fa-tag"></i> 600K/Hari</span>
										</h3>

										<h5> tersedia dalam dua varian mesin yaitu 3.500 cc dan 2.500 cc</h5>

										<div class="p-car-feature">
											<a href="#">2017</a>
                      <a href="contact.html">Komentar</a>
											<a href="#">Info Detail </a>
										</div>
									</div>
								</div>
							</div> -->
                            <!-- Single Popular Car End -->

                            <!-- Single Popular Car Start -->
                            <!-- <div class="col-lg-4 col-md-6  mvp sedan">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="assets/img/car/car-6.jpg">
										  <img src="assets/img/car/car-6.jpg" alt="JSOFT">
									   </a>
									</div>
									<div class="p-car-content">
										<h3>
											<a href="#">lexus Ls 500cc </a>
											<span class="price"><i class="fa fa-tag"></i>600K/Hari</span>
										</h3>

										<h5> mesin 3.500 cc twin turbo dikombinasikan dengan transmisi 10 percepatan terbaru</h5>

										<div class="p-car-feature">
                      <a href="#">2017</a>
                      <a href="contact.html">Komentar</a>
											<a href="#">Info Detail </a>
										</div>
									</div>
								</div>
							</div> -->
                            <!-- Single Popular Car End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->

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
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Fasilkom Universitas Jember &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> TugasAkhirPweb <i class="fa fa-heart-o" aria-hidden="true"></i> by Ganda Kurniawan, Devy Saraswati dan Arinda Vika Nur Hanifah
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

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