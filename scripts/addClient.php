<?php

use App\Entity\Person;


$person = new Person();

$all = $person->all();
$aaaa = count($all);
$col = $aaaa+1;

$name = $_POST['name'];
$age = $_POST['age'];

$person->id = $col;
$person->name = $name;
$person->age = $age;
$person->save();

header('Location: http://work/frontclient.php' );