<?php

use Elasticsearch\ClientBuilder;

require_once '../vendor/autoload.php';

$client = ClientBuilder::create()->build();
