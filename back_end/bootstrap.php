<?php
require 'vendor/autoload.php';
include 'config/config.php';

use Src\System\DatabaseConnector;

$dbConnection = (new DatabaseConnector($config['DB_HOST'], $config['DB_PORT'], $config['DB_DATABASE'], $config['DB_USERNAME'], $config['DB_PASSWORD']))->getConnection();
