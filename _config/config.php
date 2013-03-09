<?php

// Provide a default timezone if there is not one set. Required for using the `date()` function since 5.1.0.
$default_tz = ini_get('date.timezone');
if (empty($default_tz)) date_default_timezone_set('America/Vancouver');

if (!defined('DEBUG')) define('DEBUG', false);

// Base service for mongo data
if (!defined('MONGO')) define('MONGO', 'https://api.mongolab.com/api/1/databases/ttwt/collections');
if (!defined('MONGO_PAGES')) define('MONGO_PAGES', '/pages');
if (!defined('MONGO_APIKEY')) define('MONGO_APIKEY', 'apiKey=2-ue_AxSTtbETF3cZeQEyNEMPISGqbSL');

// Mapping to resource IDs in Mongo
global $MONGO_IDS;
$MONGO_IDS['resume']	= '/513a9f36e4b0f3a3623dfbbe';

?>