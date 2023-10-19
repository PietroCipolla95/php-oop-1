<?php

class Movie
{

    public $name;
    public $duration;
    public $genre;
    public $director;


    function __construct($name, $duration, $genre, $director)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->director = $director;
    }

    function getName()
    {
        return $this->name;
    }

    function getDuration()
    {
        return $this->duration;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getDirector()
    {
        return $this->director;
    }
}
