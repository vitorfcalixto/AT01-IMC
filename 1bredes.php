<?php 

/* // CODIGO FEITO COM MEUS FRIENDS

$inteiro = 1; // INT

$decimal = 1.1; // FLOAT

$letras = 'ALLP'; // STRING

$vf = true; // BOOLEANO
$fv = false; // BOOLEANO


echo $letras;

$idade = 23; // INT
$filme = "Missão Impossível"; // STRING
$time = "Náutico"; //STRING
$data_aniversario = "10-02-2003" // DATETIME

*/

echo "<p> IMC </p>"; 

$peso = 40;
$altura = 1.78;

$imc = ($peso / ($altura * $altura)); 

echo "O IMC é: $imc <br>";
if ($imc < 16.00) {
    echo "magreza grau 3. \n";
 } elseif ($imc >= 16 && $imc <= 16.9) {
    echo "magreza grau 2. \n";
 } elseif ($imc >= 17 && $imc <= 18.4) {
    echo "magreza grau 1 \n";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Eutrofia \n";
 } elseif ($imc >= 25 && $imc <= 29.9) {
    echo "pré-obesidade \n";
 } elseif ($imc >= 30 && $imc <= 34.9) {
    echo "obesidade moderada. \n";
 } elseif ($imc >= 35 && $imc <= 39.9) {
    echo "obesidade severa. \n";
 } else {
   echo "obesidade muito severa";
 }
?>