<?php


use App\Entity\Person;


// Удаление
$person = new Person();
$person->remove($_GET['id']);

header('Location: http://work/frontclient.php');