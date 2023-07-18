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

        <table class="table">
            <?php foreach ($hotels as $hotel) : ?>
                <thead>
                    <tr>
                        <?php foreach ($hotel as $key => $value) : ?>
                            <th scope="col"><?= $key ?></th>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $hotel['name'] ?></th>
                        <td><?= $hotel['description']  ?></td>
                        <td class="ps-4"><?= $hotel['parking'] === true ? '&#10004;' : '&#10060;' ?></td>
                        <td class="ps-4"><?= $hotel['vote'] ?></td>
                        <td class="ps-4"><?= $hotel['distance_to_center'] ?> km</td>

                </tbody>
            <?php endforeach ?>
        </table>


    </div>
</body>

</html>