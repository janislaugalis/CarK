<?php include('header1.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
    
                <?php
                require("connect_db.php");
                
                $carID = $_GET['automasinas_id'];

                
                $visasAutomasinasVaicajums = "SELECT * FROM automasinas a JOIN virsbuves_tipi vi ON a.id_virsbuves_tips = vi.virsbuves_tips_id JOIN lietotaji c ON c.lietotaji_id = a.id_lietotaji JOIN atrumkarba d ON a.id_atrumkarba = d.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids where a.automasinas_id = $carID ORDER BY a.pievienosanas_datums DESC";
                $atlasaVisasAutomasinas = mysqli_query($savienojums, $visasAutomasinasVaicajums) or die("Nekorekts vaicājums!");
                $result = mysqli_query($savienojums, $visasAutomasinasVaicajums);

               
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // Display the car details and buy option
                    echo '<div style="text-align: center;">';
                    echo '<h2>' . $row['marka'] . ' ' . $row['modelis'] . '</h2>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-md-6" id="content" style="z-index: 1000;">';
                    include('bookings.php');
                    echo '</div>';
                    echo '<div class="col-md-6">';
                    
                    echo '<img src="' . $row['attels'] . '" alt="Car Image">';
                    echo '</div>';
                    echo '</div>';

                    
                    echo '<form action="buy_car.php" method="post">';
                    echo '<input type="hidden" name="automasinas_id" value="' . $carID . '">';
                    echo '</form>';
                } else {
                    echo "Car not found.";
                }
                ?>
                                    </div>
                                        <div class="col-md-6">
                                            <form action="apmaksa.php?automasinas_id=<?php echo $row['automasinas_id']; ?>" method="POST">
                                            <button name="apmaksa" id="podzina" class=" btn d-block w-100 mt-3  rezervacijas-poga2" type="submit">Rezervēt un apmaksāt</button>
                                            </form>

                                        </div>
                                    </div>
            </div>
            <div class="col-md-6">


                                        </div>
        </div>
    </div>
    <?php include('footer.php'); ?> <!-- Pievieno footeri. -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-hru6PD2/jTgX7ME1MU8xGvLy2m7B2/lE1E5fDe/wmc3vzIeFHHETQfjW1GoVUNfG" crossorigin="anonymous"></script>

</body>
<style>
#podzina{
    height:30px;
    width: 70px;
    background-color: #darkred;
    color: black;
    border: 1px;
    border-radius: 5px;
    margin-left: 5rem;
    margin-bottom: 4rem;
}
#podzina:hover{
    background-color: #red;
}

.apmaksa{
    height:30px;
    width: 70px;
    background-color: #darkred;
    color: black;
    border: 1px;
    border-radius: 5px;
    margin-left: 5rem;
    margin-bottom: 4rem;
}
.apmaksa:hover{
    background-color: #red;
}
    </style>
</html>