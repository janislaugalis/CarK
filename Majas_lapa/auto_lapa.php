<?php include('header1.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <style>
                #content .form {
                    margin:0px!important;

                </style>
                <?php
                require("connect_db.php");
                // Retrieve the car ID from the query parameter
                $carID = $_GET['id'];

                // Query the database to fetch the details of the specified car
                $visasAutomasinasVaicajums = 'SELECT * FROM automasinas a JOIN virsbuves_tipi vi ON a.id_virsbuves_tips = vi.virsbuves_tips_id JOIN lietotaji c ON c.lietotaji_id = a.id_lietotaji JOIN atrumkarba d ON a.id_atrumkarba = d.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids ORDER BY a.pievienosanas_datums DESC;';
                $atlasaVisasAutomasinas = mysqli_query($savienojums, $visasAutomasinasVaicajums) or die("Nekorekts vaicājums!");
                $result = mysqli_query($savienojums, $visasAutomasinasVaicajums);

                // Check if the car exists
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // Display the car details and buy option
                    echo '<div style="text-align: center;">';
                    echo '<h2>' . $row['marka'] . ' ' . $row['modelis'] . '</h2>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-md-6" id="content" style="z-index: 1000;">';
                    include('test.php');
                    echo '</div>';
                    echo '<div class="col-md-6">';
                    // Display the car picture
                    echo '<img src="' . $row['attels'] . '" alt="Car Image">';
                    echo '</div>';
                    echo '</div>';

                    // Display the buy option, e.g., a form or button to initiate the purchase
                    echo '<form action="buy_car.php" method="post">';
                    echo '<input type="hidden" name="car_id" value="' . $carID . '">';
                    echo '</form>';
                } else {
                    echo "Car not found.";
                }
                ?>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?> <!-- Pievieno footeri. -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-hru6PD2/jTgX7ME1MU8xGvLy2m7B2/lE1E5fDe/wmc3vzIeFHHETQfjW1GoVUNfG" crossorigin="anonymous"></script>

</body>
</html>