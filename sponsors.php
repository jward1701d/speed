<?php
    require_once 'includes/mobiledetect/Mobile_Detect.php';
    $detect = new Mobile_Detect;    
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once "includes/head.php"; ?>
    <body data-spy="scroll" data-target=".navbar" data-offset="75">
        <?php 
            if($detect->isMobile() || $detect->isTablet()){
                include_once "includes/othernav.php";
                include_once "includes/gallery-page/gallery-sponsors.php";
                include_once "includes/foot.php"; 
               // include_once "includes/statcounter.php"; 
            }else{
                include_once "includes/othernav.php";
                include_once "includes/gallery-page/gallery-sponsors.php";
                include_once "includes/foot.php"; 
                //include_once "includes/statcounter.php"; 
            }
        ?>
        <script src="js/mobileDetect.js"></script>
        <script src="js/sponsors.js"></script>
    </body>
</html>
