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
        $this->genre = implode(', ', $genre);
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

