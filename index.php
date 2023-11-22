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

    
?> 

<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Hotel</th>
      <?php 
foreach ($hotels as $key => $hotel) {  
            ?>
           <td><?php echo $key + 1 ?></td>
            <?php
}
?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
<?php 
foreach ($hotels as $hotel) {   
            ?>
           <td><?php echo $hotel['name']?></td>
            <?php
}
?>   
    </tr>
    <tr>
      <th scope="row">Description</th>
      <?php 
foreach ($hotels as $hotel) {  
            ?>
            <td><?php echo $hotel['description'] ?></td>
            <?php  
}
?>
    </tr>
    <tr>
      <th scope="row">Parking</th>
      <?php 
foreach ($hotels as $hotel) {
    
            ?>
           <td><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
            <?php
}
?>
    </tr>
    <tr>
      <th scope="row">Vote</th>
      <?php 
foreach ($hotels as $hotel) { 
            ?>
            <td><?php echo $hotel['vote'] ?></td>
            <?php
}
?>
    </tr>
    <tr>
      <th scope="row">Distance to Center</th>
      <?php 
foreach ($hotels as $hotel) {
            ?>
           <td><?php echo $hotel['distance_to_center'] ?>Km</td>
            <?php
}
?>
    </tr>
  </tbody>
</table>
</body>
</html>

