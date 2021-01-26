<?php
  include __DIR__ . "/db.php";

  header("Content-type: application/json");

  $genre = strtolower($_GET["genre"]);

  if (empty($genre)) {
    $filteredDiscs = $discs;
  } else {
    $filteredDiscs = [];

    foreach ($discs as $disc) {
      if (strtolower($disc["genre"]) == $genre) {
        $filteredDiscs[] = $disc;
      }
    }
  }

  echo json_encode($filteredDiscs);
?>
