<?php

$db = new PDO('mysql:host=localhost;dbname=vezbanje;charset=utf8', 'root','');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$prep=$db->prepare('SELECT * FROM korisnici WHERE pol=?');
$prep->execute( [
    'muski'
]);

$korisnik = $prep->fetchAll(PDO::FETCH_OBJ);
print_r( $korisnik);

$prep = $db->prepare('INSERT INTO korisnici(ime, prezime, email,  pol) VALUES(?,?,?,?);');
$res = $prep->execute([
    'Radomir',
    'Mil',
    'Rale@msn.com',
    'muski'
]);

if($res) {
    echo "dodao sam novog clana";
} else {
    echo "Doslo je do greske";
}