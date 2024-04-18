<?php

$json_string = file_get_contents('dischi.json');

$list = json_decode($json_string);


if(isset($_POST['newAlbumTitle'])){
  $new_item = [
    'title' => $_POST['newAlbumTitle'],
    'author' => $_POST['newAlbumAuthor'],
    'year' => $_POST['newAlbumYear'],
    'poster' => $_POST['newAlbumPoster'],
    'genre' => $_POST['newAlbumGenre'],
    'logo' => $_POST['newAlbumLogo'],
    'desc' => $_POST['newAlbumDesc']
  ];
  $list = $new_item;
  file_put_contents('dischi.json', json_encode($list));
}


header('Content-type: application/json');

echo json_encode($list);