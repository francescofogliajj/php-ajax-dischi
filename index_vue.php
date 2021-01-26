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

    <div id="root">

      <?php include __DIR__ . "/partials/header.php"; ?>

      <main>
        <div class="container">
          <div class="card" v-for="disc in discs">
            <img :src="disc.poster" alt="disc.title">
            <h2>{{ disc.title }}</h2>
            <h3>{{ disc.author }}</h3>
            <h4>{{ disc.year }}</h4>
          </div>
        </div>
      </main>

    </div>

    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
