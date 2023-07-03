
<!-- Stampare tutti i nostri hotel con tutti i dati disponibili, iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PhpHotel</title>
</head>
<body>

    <ul>
    <?php foreach ($hotels as $singleHotel) {?>
        <li>
            <?php echo $singleHotel['name'] ?>
            <?php echo "<p> Descrizione: " . $singleHotel['description'] . "</p>" ?> 
            <?php echo "<p> parking: " . $singleHotel['parking'] . "</p>" ?> 
            <?php echo "<p> Voto: " . $singleHotel['vote'] . "</p>" ?> 
            <?php echo "<p> Distanza dal centro: " . $singleHotel['distance_to_center'] . "</p>" ?> 
        </li>
    <?php } ?>
    </ul>

    <h1 class="my-5">++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++</h1>


    <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">DistanceToCenter</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($hotels as $singleHotel) {?>
        <tr>
            <th scope="row"><?php echo $singleHotel['name'] ?> </th>
            <td> <?php echo $singleHotel['description'] ?></td>
            <td> <?php echo $singleHotel['parking'] ? 'Yes' : 'No' ?></td>
            <td> <?php echo $singleHotel['vote'] ?></td>
            <td> <?php echo $singleHotel['distance_to_center'] ?></td>
        </tr>
    <?php } ?>

    </tbody>
    
</table>

</body>
</html>