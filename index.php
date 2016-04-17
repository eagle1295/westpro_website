<?php
include "const.php";

$url=isset($_GET['url']) ? $_GET['url']:null;
$url=rtrim($url,'/');
$url=explode("/",$url);

if(empty($url[0])){
    require "include/index_w.php";
}else {

    $file = "include/" . $url[0] . "_w.php";
    if (file_exists($file)) {
        require $file;
    } else {
        echo "<script>window.location='".domen."'</script>";
    }
}