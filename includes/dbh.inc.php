<?php

// Database connection variable
$dsn = 'mysql:host=sql205.infinityfree.com; dbname=if0_37028207_bincomdata';
$username = '	if0_37028207';
$password = 'scicaDHPSf';

try {
  // create a new PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  // handle connection errors
  echo "connection failed: " . $e->getMessage();
}
?>

<!-- CREATE TABLE IF NOT EXISTS sum_pu_result (result_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, polling_unit_uniqueid INT(11), party_abbreviation VARCHAR(30), party_score INT(100), entered_by_user VARCHAR(30), date_entered DATETIME NOT NULL DEFAULT CURRENT_TIME); -->