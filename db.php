<?php

$movie1_genres = ['comedy', 'action', 'crime'];
$movie1 = new Movie('Murder Mystery 2', $movie1_genres, 2023, 'Jeremy Garelick', 'Netflix', 89);

$movie2_genres = ['fantasy', 'sci-fi', 'adventure', 'action'];
$movie2 = new Movie('Star Wars: Episode IV - A New Hope', $movie2_genres, 1977, 'George Lucas', '20th Century-Fox', 121);

$movies[] = $movie1;
$movies[] = $movie2;
