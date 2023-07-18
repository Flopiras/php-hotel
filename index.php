<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' />
</head>

<body>
    <div class="container mt-4">
        <h1>Hotels</h1>

        <!-- form -->
        <form action="index.php">
            <!-- radios -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="parking" id="parking">
                <label class="form-check-label" for="parking">
                    Hotels con parcheggio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="parking" id="no_parking" checked>
                <label class="form-check-label" for="no_parking">
                    Hotels senza parcheggio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="parking" id="all">
                <label class="form-check-label" for="all">
                    Tutti gli hotels
                </label>
            </div>

            <!-- button -->
            <button type="button" class="btn btn-primary my-2">Filtra</button>
        </form>

        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <th scope="row"><?= $hotel['name'] ?></th>
                        <td><?= $hotel['description']  ?></td>
                        <td class="ps-4"><?= $hotel['parking'] === true ? '&#10004;' : '&#10060;' ?></td>
                        <td class="ps-4"><?= $hotel['vote'] ?></td>
                        <td class="ps-4"><?= $hotel['distance_to_center'] ?> km</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>