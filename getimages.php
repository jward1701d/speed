<?php
    $dir = "gallery-images";
    $dh = opendir($dir);
    while (false !== ($filename = readdir($dh))){
        if("." !== $filename && ".." !== $filename){
            $files[] = $filename;
        }
    }
    closedir($dh);
    rsort($files);
    $files = json_encode($files);
    echo  $files;
?>