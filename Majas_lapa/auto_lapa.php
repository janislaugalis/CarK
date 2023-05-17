<?php include('header1.php'); ?>
<!-- Identificē lapusi -->
<!DOCTYPE html>
<html lang="lv">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car K</title>
    <link rel="stylesheet" href="/CarK/assets/Style/auto_lapa_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <?php
                require("connect_db.php");
                // Retrieve the car ID from the query parameter
                $carID = $_GET['id'];

                // Query the database to fetch the details of the specified car
                $carQuery = "SELECT * FROM automasinas WHERE automasinas_id = ?";
                $stmt = mysqli_prepare($savienojums, $carQuery);
                mysqli_stmt_bind_param($stmt, 'i', $carID);
                mysqli_stmt_execute($stmt);
                $carResult = mysqli_stmt_get_result($stmt);

                // Check if the car exists
                if (mysqli_num_rows($carResult) > 0) {
                    $carData = mysqli_fetch_assoc($carResult);
                    // Display the car details and buy option
                    echo '<h2>' . $carData['marka'] . ' ' . $carData['modelis'] . '</h2>';
                    echo '<p>Year: ' . $carData['gads'] . '</p>';
                    echo '<p>Price per day: $' . $carData['cena_diena'] . '</p>';
                    echo '<p>Motors: ' . $carData['dzineja_tilpums'] . '</p>';

                    // Display the buy option, e.g., a form or button to initiate the purchase
                    echo '<form action="buy_car.php" method="post">';
                    echo '<input type="hidden" name="car_id" value="' . $carID . '">';
                    echo '<input type="submit" value="Buy Car">';
                    echo '</form>';
                } else {
                    echo "Car not found.";
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php
                // Display the car picture
                echo '<img src="' . $carData['attels'] . '" alt="Car Image">';
                ?>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?> <!-- Pievieno footeri. -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-hru6PD2/jTgX7ME1MU8xGvLy2m7B2/lE1E5fDe/wmc3vzIeFHHETQfjW1GoVUNfG" crossorigin="anonymous"></script>

</body>
</html>