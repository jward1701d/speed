<?php
    require_once 'includes/mobiledetect/Mobile_Detect.php';
    $detect = new Mobile_Detect;    
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once "includes/head.php"; ?>
    <body data-spy="scroll" data-target=".navbar" data-offset="75">
        <?php include_once "includes/loader.php"; ?>
        <?php 
if($detect->isMobile() || $detect->isTablet()){
    include_once "includes/main-page/home-mobile.php";
    include_once "includes/nav.php";
    include_once "includes/main-page/about-mobile.php";
    include_once "includes/main-page/parallax-break-four-mobile.php";
    //include_once "includes/main-page/parallax-break-one-mobile.php";
    include_once "includes/main-page/calendar.php"; 
    include_once "includes/main-page/parallax-break-two-mobile.php";
    include_once "includes/main-page/annoucement.php";
   include_once "includes/main-page/parallax-break-one-mobile.php";
    include_once "includes/main-page/weather.php";
    include_once "includes/main-page/parallax-break-three-mobile.php";
    include_once "includes/main-page/contact.php"; 
    include_once "includes/foot.php";
    include_once "includes/singlescripts.php";
    include_once "includes/statcounter.php"; 
}else{
    include_once "includes/main-page/home.php";
    include_once "includes/nav.php";
    include_once "includes/main-page/about.php";
    include_once "includes/main-page/parallax-break-four.php";
    //include_once "includes/main-page/parallax-break-one.php";
    include_once "includes/main-page/calendar.php";
    include_once "includes/main-page/parallax-break-two.php";
    include_once "includes/main-page/annoucement.php";
    include_once "includes/main-page/parallax-break-one.php";
    include_once "includes/main-page/weather.php";
    include_once "includes/main-page/parallax-break-three.php";
    include_once "includes/main-page/contact.php";
    include_once "includes/foot.php"; 
    include_once "includes/singlescripts.php";
    include_once "includes/statcounter.php"; 
}
?>

    </body>
</html>



