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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    
    <div class="container my-4 text-center">
        <h1 class="mb-4">Php Hotel</h1>

        <form action="newPage.php" method="GET">
            <div>Parcheggio: </div>

            <div class="d-flex justify-content-center"> 
                <div class="mx-2">
                    <div>si</div>
                    <input type="radio" name="parcheggio" value="1">
                </div>
    
                <div class="mx-2">
                    <div>no</div>
                    <input type="radio" name="parcheggio" value="0">
                </div>
            </div>

            <select class="mx-2" name="stelle">
                <option value="0" disabled selected>Recenzioni</option>
                <option value="1">1 &#9733;</option>
                <option value="2">2 &#9733;</option>
                <option value="3">3 &#9733;</option>
                <option value="4">4 &#9733;</option>
                <option value="5">5 &#9733;</option>
            </select>
            <input type="submit" >
        </form>

        <?php 
            echo "<table class='text-center m-auto'>";
            echo "<tr class='px-2 fs-4'>";
            echo "<th class='px-2'>Nome hotel</th>";
            echo "<th class='px-2'>Descrizione Hotel</th>";
            echo "<th class='px-2'>Parcheggi</th>";
            echo "<th class='px-2'>Voto</th>";
            echo "<th class='px-2'>Distanza dal centro</th>";
            echo "</tr>";
        foreach ($hotels as &$hotel) {
            echo "<tr class='px-2'>";
            echo "<td class='px-2'>{$hotel['name']}</td>";
            echo "<td class='px-2'>{$hotel['description']}</td>";
            if($hotel['parking']){
                echo "<td class='px-2'>si</td>";
            }
            else{
                echo "<td class='px-2'>no</td>";
            }
            echo "<td class='px-2'>{$hotel['vote']} &#9733;</td>";
            echo "<td class='px-2'>{$hotel['distance_to_center']} Km</td>";
            echo "<tr>";
        }   
        echo "</table>";
        ?>
    </div>
</body>
</html>