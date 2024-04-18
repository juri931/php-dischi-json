<?php

  $json_string = file_get_contents('dischi.json');

  $list = json_decode($json_string, true);
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css'
    integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ=='
    crossorigin='anonymous' />
  <!-- Vue -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.23/vue.global.js'
    integrity='sha512-nG1pzAdB6onYkrCldpnkwHzZw7H3IUL4RLhinI7XEioaM8PHQDeHD6zPf+tog9WlKLAojc4zddvkTUpHvAZbew=='
    crossorigin='anonymous'></script>
  <link rel="stylesheet" href="style.css">
  <title>Add Album</title>
</head>
<body>
  <div id="app" class="container">

    <div class="container my-5">

      <h1>Add a new album</h1>
      <div class="container new-album-menu text-start my-5 d-flex flex-column gap-5">
        <h2>Title: <input v-model.trim="newAlbum.title" type="text"></h2>
        <h2>Author: <input v-model.trim="newAlbum.author" type="text"></h2>
        <h2>Year: <input v-model.trim="newAlbum.year" type="text"></h2>
        <h2>Poster Link: <input v-model.trim="newAlbum.poster" type="text"></h2>
        <h2>Genre: <input v-model.trim="newAlbum.genre" type="text"></h2>
        <h2>Band Logo: <input v-model.trim="newAlbum.logo" type="text"></h2>
        <h2>Description: <input v-model.trim="newAlbum.desc" type="text"></h2>
        <a @click.stop="addNewAlbum" href="index.html" class="btn btn-primary">ADD</a>
      </div>
    </div>
  </div>
  
</body>
</html>