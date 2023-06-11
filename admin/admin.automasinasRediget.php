<?php $page = "admin.automasinas"; include('admin.header.php'); ?>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info">Automašīnas dati</div>
            <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        require("../Majas_lapa/connect_db.php");
                        if(isset($_POST['rediget'])){
                            $AutoVNZ = $_POST['autoVNZ'];
                            $AutoMarka = $_POST['autoMarka'];
                            $AutoModelis = $_POST['autoModelis'];
                            $AutoGads = $_POST['autoGads'];
                            $AutoDzinejaVeids = $_POST['autoDzinejaVeids'];
                            $AutoDzinejaTilpums = $_POST['autoDzinejaTilpums'];
                            $AutoVirsbuve = $_POST['autoVirsbuve'];
                            $AutoAtrumkarba = $_POST['autoAtrumkarba'];
                            $AutoAttels = $_POST['autoAttels'];
                            $AutoCena = $_POST['autoCena'];
                            $AutoPieejams = $_POST['autoPieejams'];

                            $dzinejaVaicajums = $savienojums->prepare('SELECT dzineja_veids_id FROM dzineja_veids WHERE veids=?');
                            $dzinejaVaicajums->bind_param("s", $AutoDzinejaVeids);
                            $dzinejaVaicajums->execute();
                            $dzinejaDati = $dzinejaVaicajums->get_result()->fetch_assoc();
                            $Dzinejs = $dzinejaDati ? $dzinejaDati['dzineja_veids_id'] : null;

                            $virsbuvesVaicajums = $savienojums->prepare('SELECT virsbuves_tips_id FROM virsbuves_tipi WHERE tips=?');
                            $virsbuvesVaicajums->bind_param("s", $AutoVirsbuve);
                            $virsbuvesVaicajums->execute();
                            $virsbuvesDati = $virsbuvesVaicajums->get_result()->fetch_assoc();
                            $Virsbuve = $virsbuvesDati ? $virsbuvesDati['virsbuves_tips_id'] : null;

                            $atrumkarbaVaicajums = $savienojums->prepare('SELECT atrumkarba_id FROM atrumkarba WHERE nosaukums=?');
                            $atrumkarbaVaicajums->bind_param("s", $AutoAtrumkarba);
                            $atrumkarbaVaicajums->execute();
                            $atrumkarbaDati = $atrumkarbaVaicajums->get_result()->fetch_assoc();
                            $Atrumkarba = $atrumkarbaDati ? $atrumkarbaDati['atrumkarba_id'] : null;

                            $atjaunotAutomasinuVaicajums = "UPDATE automasinas SET vnz = '$AutoVNZ', marka = '$AutoMarka', modelis = '$AutoModelis', gads = '$AutoGads', id_virsbuves_tips = '$Virsbuve', id_atrumkarba = '$Atrumkarba', id_dzineja_veids = '$Dzinejs', dzineja_tilpums = '$AutoDzinejaTilpums', attels = '$AutoAttels', pieejams = '$AutoPieejams', cena_diena = '$AutoCena' WHERE automasinas_id =".$_POST['rediget'];

                            if(mysqli_query($savienojums, $atjaunotAutomasinuVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>Automašīna veiksmīgi atjaunota!</div>";
                                header("Refresh:1; url=admin.automasinas.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                                header("Refresh:1; url=admin.automasinas.php");
                            }
                            // darbības, kad gribēsim veikt statusa izmaiņas
                        }else{
                            $automasinasID = $_POST['apskatit'];

                            $automasinasVaicajums = "SELECT * FROM automasinas a JOIN virsbuves_tipi v ON a.id_virsbuves_tips = v.virsbuves_tips_id JOIN atrumkarba ag ON a.id_atrumkarba = ag.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids JOIN lietotaji l ON a.id_lietotaji = l.lietotaji_id WHERE automasinas_id = $automasinasID";
                            $atlasaAutomasinu = mysqli_query($savienojums, $automasinasVaicajums) or die('Nekorekts vaicājums');

                            while($row = mysqli_fetch_assoc($atlasaAutomasinu)){
                                echo "
                                    <table class='noselect'>
                                        <tr><td rowspan = '15' class='tabuluAttels'><img class='tabAttels' src='{$row['attels']}'></td></tr>
                                        <form method='POST'>
                                        <tr><td class='main'>Valsts Nr. zīme</td><td class='value'><input type='text' name='autoVNZ' value='{$row['vnz']}' class='box'></td></tr>
                                        <tr><td class='main'>Marka</td><td class='value'><input type='text' name='autoMarka' value='{$row['marka']}' class='box'></td></tr>
                                        <tr><td class='main'>Modelis</td><td class='value'><input type='text' name='autoModelis' value='{$row['modelis']}' class='box'></td></tr>
                                        <tr><td class='main'>Gads</td><td class='value'><input type='number' min='1950' max='2022' step='1' name='autoGads' value='{$row['gads']}' class='box'></td></tr>
                                        <tr><td class='main'>Dzinēja veids</td><td class='value'>
                                        <select name='autoDzinejaVeids' class='box2' required>
                                            <option value='{$row['veids']}' selected>{$row['veids']}</option>";
                                            require("../Majas_lapa/connect_db.php");
                                                $sql = "SELECT * FROM dzineja_veids WHERE veids NOT LIKE '{$row['veids']}'";
                                                $all_categories = mysqli_query($savienojums,$sql);
                                                while ($category = mysqli_fetch_array(
                                                    $all_categories,MYSQLI_ASSOC)):;
                                                    echo "<option value=".$category['veids'].">";
                                                    echo $category['veids'];
                                                    echo "</option>";
                                                endwhile;
                                        echo"
                                        </td></tr>
                                        <tr><td class='main'>Dzinēja tilpums</td><td class='value'><input type='number' min='1.2' max='3.0' step='0.1' name='autoDzinejaTilpums' value='{$row['dzineja_tilpums']}' class='box'></td></tr>
                                        <tr><td class='main'>Virsbūves tips</td><td class='value'>
                                            <select name='autoVirsbuve' class='box2' required>
                                                <option value='{$row['tips']}' selected>{$row['tips']}</option>";
                                                require("../Majas_lapa/connect_db.php");
                                                    $sql = "SELECT * FROM virsbuves_tipi WHERE tips NOT LIKE '{$row['tips']}'";
                                                    $all_categories = mysqli_query($savienojums,$sql);
                                                    while ($category = mysqli_fetch_array(
                                                        $all_categories,MYSQLI_ASSOC)):;
                                                        echo "<option value=".$category['tips'].">";
                                                        echo $category['tips'];
                                                        echo "</option>";
                                                    endwhile;
                                            echo"
                                            <tr><td class='main'>Ātrumkārba</td><td class='value'>
                                            <select name='autoAtrumkarba' class='box2' required>
                                                <option value='{$row['nosaukums']}' selected>{$row['nosaukums']}</option>";
                                                require("../Majas_lapa/connect_db.php");
                                                    $sql = "SELECT * FROM atrumkarba WHERE nosaukums NOT LIKE '{$row['nosaukums']}'";
                                                    $all_categories = mysqli_query($savienojums,$sql);
                                                    while ($category = mysqli_fetch_array(
                                                        $all_categories,MYSQLI_ASSOC)):;
                                                        echo "<option value=".$category['nosaukums'].">";
                                                        echo $category['nosaukums'];
                                                        echo "</option>";
                                                    endwhile;
                                            echo"
                                            </select>
                                        </td></tr>
                                        <tr><td class='main'>Pieejams</td><td class='value'>
                                            <select name='autoPieejams' class='box2' required>";
                                                if($row['pieejams'] == 0){
                                                    echo "<option value='{$row['pieejams']}' selected>Nē</option>";
                                                    echo "<option value='1'>Jā</option>";

                                                }else if($row['pieejams'] == 1){
                                                    echo "<option value='{$row['pieejams']}' selected>Jā</option>";
                                                    echo "<option value='0'>Nē</option>";
                                                }
                                                echo "
                                            </select>
                                        </td></tr>
                                        <tr><td class='main'>Attēls</td><td class='value'><input type='text' name='autoAttels' value='{$row['attels']}' class='box'></td></tr>
                                        <tr><td class='main'>Automašīnas cena par dienu</td><td class='value'><input type='number' step='10.00' name='autoCena' value='{$row['cena_diena']}' class='box'></td></tr>
                                        <tr><td class='main'>Pievienoja</td><td class='value'>{$row['lietotajvards']}</td></tr>
                                        <tr><td class='main'>Pievienošanas datums un laiks</td><td class='value'>{$row['pievienosanas_datums']}</td></tr>
                                        <tr><td class='main'>Pēdējo izmaiņu datums un laiks</td><td class='value'>{$row['pedejo_izmainu_datums']}</td></tr>
                                    </table>
                                    <button type='submit' name='rediget' value='{$row['automasinas_id']}' class='btn4'>Saglabāt</button>
                                    </from>
                                ";
                            }
                    }}else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kaut kas nogāja greizi! Atgriezies <a class='alert-link' href='admin.automasinas.php'>iepriekšējā lapā</a> un mēģini vēlreiz!</div>";
                    }
                ?>
        </div>
    </div>
</section>