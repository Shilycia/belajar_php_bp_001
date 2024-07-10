<?php

$koneksi = mysqli_connect("localhost","root","","php_dasar");

if($koneksi -> connect_error){
    die("error : " + $koneksi->error);
}
else{
    echo("koneksi succesfully");
}

?>