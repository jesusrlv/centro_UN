<?php

// define('DB_SERVER', 'localhost');
// define('DB_SERVER_USERNAME', 'jesusrlv_pej');
// define('DB_SERVER_PASSWORD', '');
// define('DB_DATABASE', 'PEJ21');

// $conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

?>

<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE','unesco');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>