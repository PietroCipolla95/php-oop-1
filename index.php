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

$matrix = new Movie('Matrix', 120, 'Sci-fi', 'Sorelle Wachowski');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-black">


    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="card py-4 text-center">
                    <h2>
                        <?php echo $matrix->getName() ?>
                    </h2>
                    <p>
                        <?php echo $matrix->getDuration() ?>
                    </p>
                    <p>
                        <?php echo $matrix->getGenre() ?>
                    </p>
                    <p>
                        <?php echo $matrix->getDirector() ?>
                    </p>
                </div>
            </div>
        </div>
    </div>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>