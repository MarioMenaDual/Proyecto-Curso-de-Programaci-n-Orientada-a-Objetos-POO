<?php

require_once('Car.php');
require_once('User.php');
require_once('Driver.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('Account.php');


$uberX = new UberX("CVB123", new Account("Andres Herrera","AND456","andres@gmail.com","124453"),"Chevrolet","Spark");
$uberX->printDataCar();
$uberPool = new UberPool("TYU567", new Account("Andrea Ferran","ANDA765","andrea@gmail.com","4356787"),"Dodge","Attitude");
$uberPool->printDataCar();

$usuario = new User("Mario","ABSD","mario@gmail.com","1232435");
$usuario->printDataAccount();

$conductor = new Driver("Mario","ABSD","mario@gmail.com","1232435");
$conductor->printDataAccount();


?>