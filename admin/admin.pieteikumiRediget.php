<?php $page = "pieteikumi"; include('admin.header.php'); ?>

    <section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info">Pieteikuma apskats</div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        require("../Majas_lapa/connect_db.php");
                        if(isset($_POST['rediget'])){
                            $PietiekumaStatuss = $_POST['pieteikumaStatuss'];

                            $statusaVaicajums = $savienojums->prepare('SELECT statuss_id FROM statuss WHERE statusa_nosaukums=?');
                            $statusaVaicajums->bind_param("s", $PietiekumaStatuss);
                            $statusaVaicajums->execute();
                            $statusaDati = $statusaVaicajums->get_result()->fetch_assoc();
                            $Statuss = $statusaDati ? $statusaDati['statuss_id'] : null;

                            $atjaunotPieteikumuVaicajums = "UPDATE pieteikumi SET id_statuss = '$Statuss' WHERE pieteikumi_id =".$_POST['rediget'];

                            if($Statuss == 2){
                                $atjaunotAutomasinuVaicajums = "UPDATE automasinas SET pieejams = '0' WHERE automasinas_id = (SELECT id_automasinas FROM pieteikumi WHERE pieteikumi_id = ".$_POST['rediget'].")";
                                mysqli_query($savienojums, $atjaunotAutomasinuVaicajums);
                            }else if ($Statuss == 4 || $Statuss == 3){
                                $atjaunotAutomasinuVaicajums = "UPDATE automasinas SET pieejams = '1' WHERE automasinas_id = (SELECT id_automasinas FROM pieteikumi WHERE pieteikumi_id = ".$_POST['rediget'].")";
                                mysqli_query($savienojums, $atjaunotAutomasinuVaicajums);
                            }



                            if(mysqli_query($savienojums, $atjaunotPieteikumuVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>Pieteikums veiksmīgi atjaunots!</div>";
                                header("Refresh:1; url=admin.pieteikumi.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                                header("Refresh:1; url=admin.pieteikumi.php");
                            }
                            // darbības, kad gribēsim veikt statusa izmaiņas
                        }else{
                            $pieteikumi_id = $_POST['apskatit'];

                            $pieteikumaVaicajums = "SELECT * FROM pieteikumi p JOIN klienti k ON p.id_klienti = k.klienti_id JOIN automasinas a ON p.id_automasinas = a.automasinas_id JOIN statuss s ON p.id_statuss = s.statuss_id WHERE pieteikumi_id = $pieteikumi_id";
                            $atlasaPieteikumu = mysqli_query($savienojums, $pieteikumaVaicajums) or die('Nekorekts vaicājums');

                            while($row = mysqli_fetch_assoc($atlasaPieteikumu)){
                                echo "
                                    <table class='noselect'>
                                        <form method='POST'>
                                        <tr><td class='main'>Klienta Vārds Uzvārds</td><td class='value'>{$row['vards']} {$row['uzvards']}</td></tr>
                                        <tr><td class='main'>Klienta Epasts</td><td class='value'>{$row['epasts']}</td></tr>
                                        <tr><td class='main'>Klienta Tālrunis</td><td class='value'>{$row['talrunis']}</td></tr>
                                        <tr><td class='main'>Klienta reģistrēšanās datums un laiks</td><td class='value'>{$row['registresanas_datums']}</td></tr>
                                        <tr><td class='main'>Automašīnas Valsts Nr. Zīme</td><td class='value'>{$row['vnz']}</td></tr>
                                        <tr><td class='main'>Automašīnas Marka</td><td class='value'>{$row['marka']}</td></tr>
                                        <tr><td class='main'>Automašīnas Modelis</td><td class='value'>{$row['modelis']}</td></tr>
                                        <tr><td class='main'>Automašīnas Gads</td><td class='value'>{$row['gads']}</td></tr>
                                        <tr><td class='main'>Automašīnas nomāšanas ilgums [dienās]</td><td class='value'>{$row['auto_nomasanas_ilgums']}</td></tr>
                                        <tr><td class='main'>Kopējā summa</td><td class='value'>";
                                            $summa = $row['cena_diena']*$row['auto_nomasanas_ilgums'];
                                        echo "$summa €</td></tr>
                                        <tr><td class='main'>Pieteikuma statuss</td><td class='value'>
                                            <select name='pieteikumaStatuss' class='box2' required>
                                                <option value='{$row['statusa_nosaukums']}' selected>{$row['statusa_nosaukums']}</option>";
                                                require("../Majas_lapa/connect_db.php");
                                                    $sql = "SELECT * FROM statuss WHERE statusa_nosaukums NOT LIKE '{$row['statusa_nosaukums']}'";
                                                    $all_categories = mysqli_query($savienojums,$sql);
                                                    while ($category = mysqli_fetch_array(
                                                        $all_categories,MYSQLI_ASSOC)):;
                                                        echo "<option value=".$category['statusa_nosaukums'].">";
                                                        echo $category['statusa_nosaukums'];
                                                        echo "</option>";
                                                    endwhile;
                                            echo"
                                            </select>
                                        </td></tr>
                                        <tr><td class='main'>Pieteikuma iesniegšanas datums un laiks</td><td class='value'>{$row['pieteikuma_izveidosanas_datums']}</td></tr>
                                        <tr><td class='main'>Pēdējo izmaiņu datums un laiks</td><td class='value'>{$row['pieteikuma_pedejo_izmainu_datums']}</td></tr>
                                    </table>
                                    <button type='submit' name='rediget' value='{$row['pieteikumi_id']}' class='btn4'>Saglabāt</button>
                                    </from>
                                ";
                            }
                    }}else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kaut kas nogāja greizi! Atgriezies <a class='alert-link' href='admin.pieteikumi.php'>iepriekšējā lapā</a> un mēģini vēlreiz!</div>";
                    }
                ?>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>
