<?php

//Creazione classe movie
class Movie
{
    public $title;
    public $genre;
    public $releaseYear;
    public $directedBy;
    public $distributedBy;
    public $runningTime;

    function __construct(string $title, array $genre, int $releaseYear, string $directedBy, string $distributedBy, int $runningTime)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->directedBy = $directedBy;
        $this->distributedBy = $distributedBy;
        $this->runningTime = $runningTime;
    }

}


$movie1_genres = ['comedy', 'action', 'crime'];
$movie1 = new Movie('Murder Mystery 2', $movie1_genres, 2023, 'Jeremy Garelick', 'Netflix', 89);

var_dump($movie1);
