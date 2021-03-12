<?php

if ( file_exists("fav_movies.xml")  ) {
    $fav_movies = fopen("fav_movies.xml", "r");
    $data = fread($fav_movies, filesize("fav_movies.xml"));
    fclose($fav_movies);
    //print_r($data);

    $xml = simplexml_load_file("fav_movies.xml");

    $i = 0;

        echo '<table border="1" cellspacing="2">';        

        foreach($xml->movie as $movie) {

        echo '
                <td>
                    <h1>
                    '.$movie->image.'</br>
                    '.$movie->title.'('.$movie->year.')'.'</br>
                    </h1>
                    <strong>Director</strong>: '.$movie->director.'</br>
                    <strong>Main Actor/Actress:</strong>: '.$movie->actor.'</br>
                    <strong>Genre</strong>: '.$movie->genre.'
                </td>

            ';
        $i++;

        if ($i % 3 == 0) {
            echo '<tr></tr>';
        }
        //%3 <tr></tr> for every 3rd movie
    }

        echo '</table>';

    //chmod("fav_movies.xml", 400);
    //unlink("fav_movies.xml");
    unlink("fav_movies.xml");
}   else {
    echo "file not found";
}
