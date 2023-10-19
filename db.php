<?php

$movies = [];

$matrix = new Movie('Matrix', 120, 'Sci-fi', 'Sorelle Wachowski');

$pulpfiction = new Movie('Pulp Fiction', 140, 'Pulp', 'Quentin Tarantino');

array_push($movies, $matrix, $pulpfiction);
