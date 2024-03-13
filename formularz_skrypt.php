<?php
$polaczenie = mysqli_connect('localhost','root','','ksiegarnia');
$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie'];
$kod = $_POST['Kod'];
$miejscowosc = $_POST['miejscowosc'];
$ulica = $_POST['ulica'];
$nr_domu = $_POST['nr_domu'];
$pesel = $_POST['pesel'];
$nr_telefonu = ['nr_telefonu'];
$mail = $_POST['mail'];

$zapyt = "INSERT INTO klient VALUES (null,$nazwisko,'$imie','$kod','$miejscowosc','$ulica','$nr_domu',$pesel,$nr_telefonu,'$mail')";

// $zapyt = "INSERT INTO klient VALUES (null,'$nazwisko','$imie','$kod','$miejscowosc','$ulica','$nr_domu',$pesel,$nr_telefonu,'$mail')";
// $wynik = mysqli_query($polaczenie,$zapyt);
// echo "wstawiono ".mysqli_affected_rows($polaczenie)."rekordów.";



?>
