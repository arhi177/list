<?php

require './libs/vendor/autoload.php';


$page = $_GET["page"];

if($page == 'register') {
    
}
else {
    require './scripts/viewClient.php';
    require './pages/frontclient.php';
}