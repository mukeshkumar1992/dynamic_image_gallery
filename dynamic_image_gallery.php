<?php
include('./admin/api/db.php');
?>




<!doctype html>
<html lang="en">

 <style>
        .imagess {

            height: 359px !important;
        }
    </style>
<!-- Mirrored from thepixelcurve.com/html/edubin/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Nov 2022 10:10:12 GMT -->
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->

<title>
  Best Cbse Schools In Meerut, Good Schools In Meerut, Best School In Partapur
</title>

    
    
     <!-- php code file -->    
    <?php require_once 'include/style-file.php'?>
    <?php require_once 'include/analysis-tag.php'?>
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N6CLQ4R3');</script>
        <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6CLQ4R3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <!--====== HEADER PART START ======-->
    <?php require_once 'include/header.php'?>
    <!--====== HEADER PART START ======-->
   
    <!--====== FAQ SECTION PART START ======-->
    
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Image Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== FAQ PART START ======-->
     <section class="pt-90 pb-120 gray-bg">
            <div class="container">
                <div class="row gallery">
                    
                    
                    
                    
                     <?php
                $ret = mysqli_query($conn, "SELECT * FROM gallery_imges ORDER BY ID DESC");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <img src="./admin/profilepics/<?php echo $row['ProfilePic']; ?>" class="img-fluid imagess">
                        </div>
                <?php
                    }
                } else {
                    echo '<h4 class="text-center text-danger">No Records Found</h4>';
                }
                ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ganesh-1.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ganesh-1.jpeg"-->
                    <!--                alt="Ganesh Chaturthi"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ganesh-3.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ganesh-3.jpeg"-->
                    <!--                alt="Ganesh Chaturthi"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ganeshnew.png" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ganeshnew.png"-->
                    <!--                alt="Ganesh Chaturthi"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ideathon-1.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ideathon-1.jpeg"-->
                    <!--                alt="Ideathon 2024: MINDSPARK"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ideathon-21.png" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ideathon-21.png"-->
                    <!--                alt="Ideathon 2024: MINDSPARK"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/ideathon-3.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/ideathon-3.jpeg"-->
                    <!--                alt="Ideathon 2024: MINDSPARK"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/public-speak-4.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/public-speak-4.jpeg"-->
                    <!--                alt="Public Speaking Seminar"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/public-speak-3.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/public-speak-3.jpeg"-->
                    <!--                alt="Public Speaking Seminar"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery//public-speak-2.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/public-speak-2.jpeg"-->
                    <!--                alt="Public Speaking Seminar"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/public-speak-1.jpeg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/public-speak-1.jpeg"-->
                    <!--                alt="Public Speaking Seminar"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/Scout2023.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/Scout2023.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/Taekwondo.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/Taekwondo.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/Rakshabandhan.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/Rakshabandhan.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/celebrated.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/celebrated.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/bestsrsglobalschool.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/bestsrsglobalschool.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/bestsrsglobalschool2.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/bestsrsglobalschool2.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/bestsrsglobalschool1.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/bestsrsglobalschool1.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    
                    
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/august-2.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/august-2.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/august-4.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/august-4.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/gallery/august-3.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/gallery/august-3.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/Unforgettable.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/Unforgettable.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/Unforgettable7.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/Unforgettable7.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/Mathematics .jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/Mathematics .jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/visit-hospital.jpg" alt="visit to shree ram hospital">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/visit-hospital.jpg"-->
                    <!--                alt="visit to shree ram hospital"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/D.E.A.R%20Activity1.jpg" >-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/D.E.A.R%20Activity1.jpg" alt="visit to dear activity"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="https://srsglobalschool.com/images/event/herbal-garden-visit.jpg" alt="visit to herbal garden">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="https://srsglobalschool.com/images/event/herbal-garden-visit.jpg"-->
                    <!--                alt="visit to herbal garden"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/lemonade-day-gallery.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/lemonade-day-gallery.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/Children-Good-Health-gallery.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/Children-Good-Health-gallery.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/lemonade-day-gallery1.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/lemonade-day-gallery1.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/lemonade-day-gallery2.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/lemonade-day-gallery2.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/guru-purnima-gallery.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/guru-purnima-gallery.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/srs-bus.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/srs-bus.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/earth-day.jpg" alt="Earth Day">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/earth-day.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/graduation-student.jpg" alt=" school in meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/graduation-student.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/khel-kud.jpg" alt="meerut best school ">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/khel-kud.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                    
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-dance.jpg" alt="best school meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-dance.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-dance1.jpg" alt="school meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-dance1.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!-- <div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-dance2.jpg" alt="best school in meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-dance2.jpg"-->
                    <!--                alt="Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-1.jpg" alt="school in meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-1.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/srs-gallery-4.jpg" alt="best meerut school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/srs-gallery-4.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-3.jpg"  alt="meerut best school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-3.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-4.jpg"  alt="best school meerut ">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-4.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/srs-gallery-3.jpg"  alt="best school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/srs-gallery-3.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/srs-gallery-1.jpg"  alt="meerut in school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/srs-gallery-1.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-5.jpg"  alt="CBSE meerut school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-5.jpg"-->
                    <!--                alt="SRS Globle School Meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/srs-gallery-2.jpg"  alt="best meerut CBSE school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/srs-gallery-2.jpg"-->
                    <!--                alt="best meerut CBSE school"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-7.jpg"  alt="best CBSE meerut school">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-7.jpg"-->
                    <!--                alt="best CBSE meerut school"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->

                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-2.jpg" alt="best CBSE  school meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-2.jpg"-->
                    <!--                alt="best CBSE  school meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-school-6.jpg" alt=" CBSE best school meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-school-6.jpg"-->
                    <!--                alt="CBSE best school meerut"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                    <!--<div class="col-md-4 col-xs-6 thumb">-->
                    <!--    <a href="images/gallery/meerut-shool-2.jpg" alt=" CBSE best school meerut">-->
                    <!--        <figure><img class="img-fluid img-thumbnail" src="images/gallery/meerut-shool-2.jpg"-->
                    <!--                alt="best school meerut CBSE"></figure>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
            </div>
        </section>

    <!--====== FAQ PART ENDS ======-->
<!-- footer tag file php -->
<?php require_once 'include/footer.php'?>
<?php require_once 'include/script-tag.php'?>  


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    { "@type": "Question", "name": "What can I see in the school gallery?", "acceptedAnswer": { "@type": "Answer", "text": "In the school gallery, you can see photos of classrooms, labs, playgrounds, cultural events, annual functions, and academic activities reflecting the school’s environment." } },
    { "@type": "Question", "name": "Why should parents check the school gallery before admission?", "acceptedAnswer": { "@type": "Answer", "text": "Checking a school’s gallery helps parents understand the learning environment, infrastructure, extracurricular activities, and overall campus life before deciding on admissions." } },
    { "@type": "Question", "name": "Does SRS Global School have a photo gallery?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, SRS Global School maintains a photo gallery showcasing smart classrooms, sports events, labs, cultural programs, and student activities for parent reference." } },
    { "@type": "Question", "name": "How does a school gallery help in digital promotion?", "acceptedAnswer": { "@type": "Answer", "text": "A well-maintained school gallery boosts digital promotion by showcasing the school’s culture and achievements, building trust among parents and students online." } },
    { "@type": "Question", "name": "What type of images should be in a school gallery?", "acceptedAnswer": { "@type": "Answer", "text": "A school gallery should include images of classrooms, sports events, science labs, library, annual functions, cultural festivals, and student achievements." } },
    { "@type": "Question", "name": "How does a gallery page help in SEO for schools?", "acceptedAnswer": { "@type": "Answer", "text": "Optimized gallery pages with alt tags and location keywords help schools rank in local searches and image searches, attracting parents searching for the best schools." } },
    { "@type": "Question", "name": "Can I share gallery images on social media?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, gallery images can be shared on Facebook, Instagram, and LinkedIn to showcase your school’s activities and attract prospective parents." } },
    { "@type": "Question", "name": "How does CheapSMMHub help in managing school galleries?", "acceptedAnswer": { "@type": "Answer", "text": "CheapSMMHub helps schools maintain, optimize, and promote gallery images across social media to increase engagement and inquiries for admissions." } }
  ]
}
</script>

</body>


<!-- Mirrored from thepixelcurve.com/html/edubin/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Nov 2022 10:10:16 GMT -->
</html>
