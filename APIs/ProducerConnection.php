<?php
    session_start();
    include 'logic.php';
    include 'connection.php';
    $conn = connect();
    $song_name = $_POST['song_name'];
    $producer_name = $_POST['producer_name'];
    $duration = $_POST['track_duration'];
    $date = $_POST['date'];
    $result = getMaxSongID($conn);
    $row = $result->fetch_assoc();
    $id = $row['max_id'] + 1;
    createSong($conn, $id, NULL, 0, $duration, $song_name, $date, $producer_name, 'producer');
?>