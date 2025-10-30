<?php
require_once "./animal.php";
require_once "./frog.php";
require_once "./ape.php";

$sheep = new Animal("shaun");
$kodok = new Frog("buduk");
$sungokong = new Ape("kera sakti");

echo "<h2>Output Akhir</h2>";

echo "Name: " . $sheep->name . "<br>";
echo "Legs: " . $sheep->legs . "<br>";
echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>";

echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: " . $kodok->jump() . "<br><br>";

echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: " . $sungokong->yell() . "<br>";
