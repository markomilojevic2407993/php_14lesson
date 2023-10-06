<?php   

require_once "baza.php";

$proizvodi=$baza->query("SELECT * FROM proizvodi");

if($proizvodi->num_rows>0){


    $allProizvodi=$proizvodi->fetch_all(MYSQLI_ASSOC);

    foreach($allProizvodi as $proizvod){
        echo $proizvod['ime'].br.$proizvod['opis'].br.$proizvod['cena'].br.$proizvod['kolicina'].br  ; 
    }


}else{
    echo 'nijedan proizvod nije nadjen ';
}
//$rezultat=$baza-> query("SELECT * FROM korisnici");
/*
if($rezultat->num_rows>0){
    echo $rezultat->num_rows;

    $korisnici= $rezultat-> fetch_all(MYSQLI_ASSOC);
   

    foreach ($korisnici as $korisnik ) {
        echo $korisnik['email'].br;
        echo $korisnik['id'].br;
        echo $korisnik['sifra'].br;
    }

}
else{
    echo 'nije nadjen ni jedan korisnik';
}

?>*/