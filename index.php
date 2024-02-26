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
<html lang="en" data-bs-theme='dark'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <!-- link bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <h1 class="text-primary my-4 text-center fw-bolder">Hotels</h1>
    <hr>

    <form action="index.php" method="GET" class="d-block mx-auto text-center my-4">
        <label for="radio-filter" class="me-2">Only Hotels With A Parking Lot</label>
        <input type="checkbox" id="radio-filter" name="parking_lotto">
        <button type="submit" class="btn btn-warning fs-6 ms-3">GET RESULTS</button>
    </form>

    <div class="w-75 mx-auto">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col" class="text-primary text-uppercase">Name</th>
                    <th scope="col" class="text-primary text-uppercase">Description</th>
                    <th scope="col" class="text-primary text-uppercase">Parking</th>
                    <th scope="col" class="text-primary text-uppercase">Vote</th>
                    <th scope="col" class="text-primary text-uppercase">Distance To Center</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($hotels as $element):?>

                    <?php 
                        if(isset($_GET['parking_lotto']) && $_GET['parking_lotto'] !== '' && $element['parking'] != $_GET['parking_lotto'] = 1){
                            continue;
                        }
                    ?>

                <tr>
                    <td><?php echo $element['name']?></td>
                    <td><?php echo $element['description']?></td>
                    <td><?php echo $element['parking']?></td>
                    <td><?php echo $element['vote']?></td>
                    <td><?php echo $element['distance_to_center']?></td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    
    <!-- link bs js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>