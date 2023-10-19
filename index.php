<?php

include __DIR__ . '/models/movie.php';

include __DIR__ . '/db.php'

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
            <?php foreach ($movies as $movie) : ?>
                <div class="col-6">
                    <div class="card py-4 bg-info text-center">
                        <h2 class="border-bottom border-3 border-black pb-4">
                            <?php echo $movie->getName() ?>
                        </h2>
                        <div class="card-body pt-4">
                            <p>
                                <strong>Duration:</strong> <?php echo $movie->getDuration() ?>
                            </p>
                            <p>
                                <strong>Genre:</strong> <?php echo $movie->getGenre() ?>
                            </p>
                            <p>
                                <strong>Director:</strong> <?php echo $movie->getDirector() ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>