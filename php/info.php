<?php

//Let's store our strings for each city so we can use them below
$athens = 'athens';
$london = 'london';
$paris = 'paris';

if($_GET["select"]==$athens){
    echo "Address:Salmon 55<br>";
    echo "Phone:6535354353<br>";
    echo "Hotel name:Acropole's Paradise<br>";
}

if($_GET["select"]==$london){
    echo "Address:Elisabeth 1<br>";
    echo "Phone:4425354353<br>";
    echo "Hotel name:King's Paradise<br>";
}

if($_GET["select"]==$paris){
    echo "Address:Bordeaux 112<br>";
    echo "Phone:105354353<br>";
    echo "Hotel name:Eiffel's Paradise<br>";
}


?>