<?php   


define("br", "<br>");
$baza=mysqli_connect('localhost', 'root', '', 'web_shop');

$email=$_POST['email'];
$sifra=$_POST['sifra'];



if(!isset($email) || empty($email)){
    die ("nius uneti podaci") ;
}
if(!isset($sifra) || empty($sifra)){
   die("nisu uneti podaci") ;
}


$baza->query("INSERT INTO korisnici(email, sifra) VALUES ('$email','$sifra') ");







?>