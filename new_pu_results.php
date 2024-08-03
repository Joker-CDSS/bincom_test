<?php
include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>New Polling Unit Result</title>
</head>

<body>
  <h1 class="header2">Insert New Polling Unit Results</h1>

  <form class="vertical-form" action="includes/formhandler.inc.php" method="POST">

    <input type="number" name="polling_unit_uniqueid" placeholder="Polling Unit Id">

    <input type="text" name="party_abbreviation" placeholder="Party Abbreviation">

    <input type="number" name="party_score" placeholder="Party Score">

    <input type="text" name="entered_by_user" placeholder="Data Inserter Name">
    <button type="submit">Submit</button>
  </form>

  <div class="div-button">
    <button><a href="index.php">Back</a></button>
  </div>

</body>

</html>