<?php include('header1.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                require("connect_db.php");
                
                $carID = $_GET['automasinas_id'];

                $visasAutomasinasVaicajums = "SELECT * FROM automasinas a JOIN virsbuves_tipi vi ON a.id_virsbuves_tips = vi.virsbuves_tips_id JOIN lietotaji c ON c.lietotaji_id = a.id_lietotaji JOIN atrumkarba d ON a.id_atrumkarba = d.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids WHERE a.automasinas_id = $carID ORDER BY a.pievienosanas_datums DESC";
                $result = mysqli_query($savienojums, $visasAutomasinasVaicajums);



                
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // auto galvenā informācija
                    echo '<div style="text-align: center; margin-top:50px;">';
                    echo '<h1>' . $row['marka'] . ' ' . $row['modelis'] . '</h1>';
                    echo '</div>';
                
                    // auto info
                    echo '<div>';
                    echo '<p>Gads: ' . $row['gads'] . '</p>';
                    echo '<p>Dzinēja tilpums: ' . $row['dzineja_tilpums'] . '</p>';
                    echo '<h3>Cena: ' . $row['cena_diena'] . '</h3>';
                    //echo '<h4>datums no: <span id="datums1"></span></h4>';
                    echo '</div>';
                } else {
                    echo "Automašīna netika atrasta.";
                }
                

       
                ?>
                            </div>
            <div class="col-md-6">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    // Attēlo bildi
                    echo '<div class="car-image">';
                    echo '<img src="' . $row['attels'] . '" alt="Car Image">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <?php
            if(isset($_POST['pievienot'])){
                require("connect_db.php");
                $Jaunsvards = $_POST['jaunsvards'];
                $Jaunsuzvards = $_POST['jaunsuzvards'];
                $Jaunsepasts = $_POST['jaunsepasts'];
                $Jaunstalrunis = $_POST['jaunstalrunis'];
                $stmt = $savienojums->prepare('SELECT lietotaji_id FROM lietotaji WHERE lietotajvards=?');
                $stmt->bind_param("s", $_SESSION['username']);
                $stmt->execute();
                $data = $stmt->get_result()->fetch_assoc();
                $value = $data ? $data['lietotaji_id'] : null;


                if(!empty($Jaunsvards) && !empty($Jaunsuzvards) && !empty($Jaunsepasts)&& !empty($Jaunstalrunis)){
                    $pievienotJaunumuVaicajums = "INSERT INTO klienti (vards, uzvards, klienti_id, epasts, talrunis) VALUES ('$Jaunsvards', '$Jaunsuzvards', '$value', '$Jaunsepasts', '$Jaunstalrunis')";

                    if(mysqli_query($savienojums, $pievienotJaunumuVaicajums) or die('Error: '. mysqli_error($savienojums))){
                        echo "<div class='pieteiksanasKluda zals'> Auto noma veiksmīgi reģistrēta!</div>";
                        header("Refresh:2; url=paldies.php");
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:2; url=index.php");
                    }
                }else{
                    echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                    header("Refresh:2; url=index.php");
                }
                // darbības, kad gribēsim veikt statusa izmaiņas
            }
        ?>
        <div class="row">
            <div class="info">
                <?php echo '<p>Nomāt: ' . $row['marka'] . ' ' . $row['modelis'] . '</p>'; ?>
                <form method='post'>
                <table class='noselect'>
                    <form method='post'>
                    <tr><td class='main'>Jūsu vārds</td><td class='value'><input type='text' name='jaunsvards' class='box' placeholder='Ievadi savu vārdu*' required/></td></tr>
                    <tr><td class='main'>Jūsu uzvārds</td><td class='value'><input type='text' name='jaunsuzvards' class='box' placeholder='Ievadi savu uzvārdu*' required/></td></tr>
                    <tr><td class='main'>Jūsu ēpasts</td><td class='value'><input type='text' name='jaunsepasts' class='box' placeholder='Ievadi savu ē-pastu*' required/></td></tr>
                    <tr><td class='main'>Jūsu telefons</td><td class='value'><input type='text' name='jaunstalrunis' class='box' placeholder='Ievadi savu nummuru*' required/></td></tr>

                    </from>
                </table>
                <button type='submit' name='pievienot'>Pievienot</button>
            </div>
        </div>
    </div>
</div>

<?php

?>


    <?php include('footer.php'); ?> <!-- Pievieno footeri. -->


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap');
        .info {
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .head-info {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .noselect {
            width: 100%;
        }

        .noselect .main {
            font-weight: bold;
            padding: 10px 0;
        }

        .noselect .value {
            padding-bottom: 10px;
        }

        .noselect .box {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .podzina {
            background-color: #darkred!important;
            color: white!important;
            padding: 10px 20px!important;
            border-radius: 5px!important;
            border: none!important;
            cursor: pointer!important;
        }

        #podzina:hover {
            background-color: #red;
        }
        .h3{
            transform: bold;
            size: 32px;
        }
        .h1{
            margin-top: 50px;
            padding-top: 50px;
        }
        .row{
            margin-bottom: 50px;
        }
    </style>
    </body>
</html>
