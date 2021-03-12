<?php

if ( file_exists("fav_movies.xml")  ) {
    $fav_movies = fopen("fav_movies.xml", "r");
    $data = fread($fav_movies, filesize("fav_movies.xml"));
    fclose($fav_movies);
    //print_r($data);

    $xml = simplexml_load_file("fav_movies.xml");
    foreach($xml->movie as $movie) {
        echo "<p>";
        echo "<strong>Title:</strong>".$movie->title."<br />";
        echo "<strong>Picture:</strong>".$movie->image."<br />";
        echo "<strong>Director:</strong>".$movie->director."<br />";
        echo "<strong>Main Actor:</strong>".$movie->actor."<br />";
        echo "<strong>IMDB:</strong>".$movie->imdb."<br />";
        echo "<strong>Year:</strong>".$movie->year."<br />";
        echo "<strong>Genre:</strong>".$movie->genre."<br />";

        echo "</p>";

        //%3 <tr></tr> for every 3rd movie
    }

    //chmod("fav_movies.xml", 400);
    //unlink("fav_movies.xml");
    unlink("fav_movies.xml");
}   else {
    echo "file not found";
}
