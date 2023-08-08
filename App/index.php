<?php

require_once "vendor/autoload.php";

use \ZipCode\Search;

$busca =  new Search;

print_r($busca->getAddressFromZipcode('03624010'));

