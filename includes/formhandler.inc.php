<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pollingid = $_POST["polling_unit_uniqueid"];
  $partyabbreviation = $_POST["party_abbreviation"];
  $partyscore = $_POST["party_score"];
  $entereduser = $_POST["entered_by_user"];

  try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO new_pu_results (polling_unit_uniqueid, party_abbreviation, party_score, entered_by_user) VALUES(?,?,?,?);";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$pollingid, $partyabbreviation, $partyscore, $entereduser]);

    header("Location: ../index.php");

    die();

  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }
} else {
  header("Location: ../index.php");
}

?>