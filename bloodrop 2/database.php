<?php 

  define("DB_SERVER", 'us-cdbr-east-06.cleardb.net');
  define("DB_USERNAME", 'bb453e05b2f3f1');
  define("DB_PASSWORD", '40659e4b');
  define("DB_NAME", 'heroku_d3b5119cb2fa5e5');

   // Connect to DB
   $mysqli = new mysqli(hostname: DB_SERVER,
                     username: DB_USERNAME,
                     password:DB_PASSWORD,
                     database: DB_NAME);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>