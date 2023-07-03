
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
    <title>PhpHotel</title>
</head>
<body>

    <ul>
    <?php foreach ($hotels as $singleHotel) {?>
        <li>
            <?php echo "<p> Nome: . " . $singleHotel['name'] . "</p>"?>
            <?php echo "<p> Descrizione: " . $singleHotel['description'] . "</p>" ?> 
            <?php echo "<p> parking: " . $singleHotel['parking'] . "</p>" ?> 
            <?php echo "<p> Voto: " . $singleHotel['vote'] . "</p>" ?> 
            <?php echo "<p> Distanza dal centro: " . $singleHotel['distance_to_center'] . "</p>" ?> 
        </li>
    <?php } ?>
    </ul>




</body>
</html>