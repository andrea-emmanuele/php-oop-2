<?php

require_once 'User.php';
require_once 'Product.php';
require_once 'CreditCard.php';

$userRan = new User(01, 'Pippo', 'Germano', '12/06/1998', 'pippo81', 'securePass');
$bike = new Product(01, 'mountainBike', 'something here', 'available');
$cardRan = new CreditCard(5354662178382, 637, '12/28', 'Pippo Rossi', 'Mastercard');

$userRan->setCreditCards($cardRan);
$userRan->addToCart($bike, 1);
