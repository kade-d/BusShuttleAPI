<?php
require 'vendor/autoload.php';

require 'api/Database.php';

$dbConnection = (new Database())->getConnection();
