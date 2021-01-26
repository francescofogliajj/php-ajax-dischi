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

      <header>
        <div class="container">
          <img src="https://i.pinimg.com/originals/93/1a/6d/931a6dd7c814effe6e238bbdf3e0197d.jpg" alt="spotify-logo">
          <div>
            <select name="genre" v-model="genre">
              <option value="">Tutti</option>
              <option value="Rock">Rock</option>
              <option value="Pop">Pop</option>
              <option value="Jazz">Jazz</option>
              <option value="Metal">Metal</option>
            </select>
            <button type="button" name="button" @click="filter">Filtra</button>
          </div>
        </div>
      </header>

      <main>
        <div class="container">
          <div class="card" v-for="disc in discs">
            <img :src="disc.poster" alt="disc.title">
            <h2>{{ disc.title }}</h2>
            <h3>{{ disc.author }}</h3>
            <h4>{{ disc.year }}</h4>
            <h5>{{ disc.genre }}</h5>
          </div>
        </div>
      </main>

    </div>

    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
