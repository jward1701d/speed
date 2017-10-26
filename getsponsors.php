<?php
    $dir = "gallery-sponsors";
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