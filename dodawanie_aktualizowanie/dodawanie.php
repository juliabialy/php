<?php
$polaczenie = mysqli_connect('localhost','root','','ksiegarnia');

$nazw = $_POST['nazwisko'];
$im  = $_POST['imie'];
$kod = $_POST ['Kod'];
$mce = $_POST ['miejscowosc'];
$ul = $_POST ['ulica'];
$nrD = $_POST ['nr_domu'];
$pes = $_POST ['pesel'];
$tel = $_POST ['nr_telefonu'];
$mail = $_POST ['mail'];

$zapyt2 = "UPDATE Klient SET Nazwisko = '$nazw',Imie='$im',Kod_pocztowy='$kod',
Miejscowosc='$mce',Ulica='$ul',Nr_domu='$nrD',PESEL='$pes',Telefon='$tel',
AdresEmail = '$mail' WHERE Id_klienta = 1";

$wynik2 = mysqli_query($polaczenie,$zapyt2);
echo mysqli_error($polaczenie);
echo "Dodano dane klienta ".mysqli_affected_rows($polaczenie)." klienta.";
mysqli_close($polaczenie);

?>
