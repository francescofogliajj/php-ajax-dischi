<?php
  include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>php-ajax-dischi</title>
  </head>
  <body>

    <?php include __DIR__ . "/partials/header.php"; ?>

    <main>
      <div class="container">
        <?php foreach ($discs as $disc) { ?>
          <div class="card">
            <img src="<?= $disc["poster"]; ?>" alt="<?= $disc["title"]; ?>">
            <h2><?= $disc["title"]; ?></h2>
            <h3><?= $disc["author"]; ?></h3>
            <h4><?= $disc["year"]; ?></h4>
          </div>
        <?php } ?>
      </div>
    </main>

  </body>
</html>
