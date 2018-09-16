<?php
    // Open a MySQL connection
    $link = new mysqli('localhost', 'root', '', 'test');
    if(!$link) {
        die('Connection failed: ' . $link->error());
    }

    // Create and execute a MySQL query
    $sql = "SELECT artist_name FROM artists";
    $result = $link->query($sql);

    // Loop through the returned data and output it
    while($row = $result->fetch_assoc()) {
        printf("Artist: %s<br />", $row['artist_name']);
    }

    // Free the memory associated with the query
    $result->close();

    // Close the connection
    $link->close();
?>