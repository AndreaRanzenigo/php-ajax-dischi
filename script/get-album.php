<?php
//GET ALBUM 
require __DIR__ . '/../partials/discs.php';

$artist = empty($_GET['artist']) ?  false : $_GET['artist'];

$albums = [];

if($artist == false || $artist == 'all') {
    $albums = $database;
}
else {
    foreach($database as $album) {
        if($album['author'] == $artist)
        $albums[] = $album;
    }
}

$artists = [];
foreach($database as $album) {
    if(! in_array($album['author'], $artists)) {
        $artists[] = $album['author'];
    }
}

$response = [
    'albums' => $albums,
    'artists' => $artists
];

header('Content-type: application/json');
echo json_encode($response);

?>