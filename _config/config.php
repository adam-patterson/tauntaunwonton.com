<?php

// Provide a default timezone if there is not one set. Required for using the `date()` function since 5.1.0.
$default_tz = ini_get('date.timezone');
if (empty($default_tz)) date_default_timezone_set('America/LosAngeles');

// Base service for mongo data
if (!defined('MONGO')) define('MONGO', 'https://mongolab.com/welcome/');

?>