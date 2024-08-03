<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>2011 Election Result</title>
</head>

<body>
  <h1 id="header">Data from SQL Database.</h1>

  <?php
  // include the database connection file
  include 'includes/dbh.inc.php';

  try {
    // write your sql query
    $sql = "SELECT * FROM announced_pu_results WHERE polling_unit_uniqueid = 10";

    // prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // fetch all results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
      // Output data in an HTML table
      echo "<table border='3' class='table-container'>";
      echo "<tr><th>Result ID</th><th>Polling Unit ID</th><th>Party Abbreviation</th><th>Party Score</th></tr>";
      foreach ($results as $row) {
        echo "<tr><td>" . htmlspecialchars($row['result_id']) . "</td><td>" . htmlspecialchars($row['polling_unit_uniqueid']) . "</td><td>" . htmlspecialchars($row['party_abbreviation']) . "</td><td>" . htmlspecialchars($row['party_score']) . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }

  } catch (PDOException $e) {
    // Handle query errors
    echo "Query failed: " . $e->getMessage();
  }

  $pdo = null;
  ?>

  <div class="div-button">
    <button><a href="new_pu_result.php">Next Page</a></button>
  </div>
</body>

</html>
<!-- <th>ID</th>
<td>" . htmlspecialchars($row['phone']) . "</td> -->