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
    public $newRelease;

    function __construct(string $title, array $genre, int $releaseYear, string $directedBy, string $distributedBy, int $runningTime)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->directedBy = $directedBy;
        $this->distributedBy = $distributedBy;
        $this->runningTime = $runningTime;
        $this->newRelease = $this->setNewRelease();
    }

    //Metodo che in base all'anno corrente indica se il film è una nuova uscita oppure no.
    public function setNewRelease()
    {
        $current_year = date('Y');

        if ($this->releaseYear == $current_year) {
            return 'Yes';
        } else {
            return 'No';
        }
    }
}


$movie1_genres = ['comedy', 'action', 'crime'];
$movie1 = new Movie('Murder Mystery 2', $movie1_genres, 2023, 'Jeremy Garelick', 'Netflix', 89);

$movie2_genres = ['fantasy', 'sci-fi', 'adventure', 'action'];
$movie2 = new Movie('Star Wars: Episode IV - A New Hope', $movie2_genres, 1977, 'George Lucas', '20th Century-Fox', 121);

var_dump($movie1, $movie2);
