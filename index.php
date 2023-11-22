<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

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
    $parking = ($_GET['parcheggio'] ?? 'off');
    

?> 

<body>
    <h1 class="d-flex justify-content-center pt-5">PHP Hotel</h1>
<div class="container-sm pt-5">
    <form action="" method="GET">
        <input type="checkbox" name="parcheggio" id="1" > Filtra Hotels con parcheggio
        <input type="submit" value="Cerca">
    
    </form>
    <table class="table table-striped">
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
            <?php 
    foreach ($hotels as $hotel) {

        if ($parking === 'on' && $hotel['parking'] === true) {

            ?>
            <tr>
                <td><?php echo $hotel['name']?></td>
                <td><?php echo $hotel['description']?></td>
                <td><?php echo $hotel['parking'] ? 'Si' : 'No'?></td>
                <td><?php echo $hotel['vote']?></td>
                <td><?php echo $hotel['distance_to_center']?> Km</td>
            </tr>
            <?php
        } else if ($parking === 'off') {
            ?>
            <tr>
                <td><?php echo $hotel['name']?></td>
                <td><?php echo $hotel['description']?></td>
                <td><?php echo $hotel['parking'] ? 'Si' : 'No'?></td>
                <td><?php echo $hotel['vote']?></td>
                <td><?php echo $hotel['distance_to_center'] ?> Km</td>
            </tr>
            <?php
        }

        
    };
    ?>
  </tbody>
</table>
</div>
</body>
</html>

