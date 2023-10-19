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
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>

<body>

</body>

</html>