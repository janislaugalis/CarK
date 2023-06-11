<?php $page = "automasinas"; include('admin.header.php'); ?>

<section class="admin">
    <?php
            if(isset($_POST['pievienot'])){
                require("../Majas_lapa/connect_db.php");

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

             

                $lietotajiVaicajums = $savienojums->prepare('SELECT lietotaji_id FROM lietotaji WHERE lietotajvards=?');
                $lietotajiVaicajums->bind_param("s", $_SESSION['username']);
                $lietotajiVaicajums->execute();
                $lietotajaDati = $lietotajiVaicajums->get_result()->fetch_assoc();
                $Lietotajs = $lietotajaDati ? $lietotajaDati['lietotaji_id'] : null;

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


                if(!empty($AutoVNZ) && !empty($AutoMarka) && !empty($AutoModelis) && !empty($AutoGads) && !empty($AutoVirsbuve) && !empty($AutoAtrumkarba) && !empty($AutoAttels)  && !empty($AutoDzinejaVeids)  && !empty($AutoDzinejaTilpums)){
                    $pievienotAutomasinuVaicajums = "INSERT INTO automasinas (vnz, marka, modelis, gads, id_virsbuves_tips, id_atrumkarba, id_dzineja_veids, dzineja_tilpums, attels, id_lietotaji) VALUES ('$AutoVNZ', '$AutoMarka', '$AutoModelis', '$AutoGads', '$Virsbuve', '$Atrumkarba', '$Dzinejs', '$AutoDzinejaTilpums', '$AutoAttels', '$Lietotajs')";

                    if(mysqli_query($savienojums, $pievienotAutomasinuVaicajums) or die('Error: '. mysqli_error($savienojums))){
                        echo "<div class='pieteiksanasKluda zals'>Automašīna veiksmīgi pievienota!</div>";
                        header("Refresh:1; url=admin.automasinas.php");
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:1; url=admin.automasinasPievienot.php");
                    }
                }else{
                    echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                    header("Refresh:1; url=admin.automasinasPievienot.php");
                }
            }
        ?>
    <div class="row">
        <div class="info">
            <div class="head-info">Pievienot jaunu automašīnu</div>
            <form method='post'>
                <table class='noselect'>
                    <form method='post'>
                        <tr>
                            <td class='main'>Valsts Nr. zīme</td>
                            <td class='value'><input type='text' name='autoVNZ' class='box'
                                    placeholder='Ievadi automašīnas Valsts nr. zīmi*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Marka</td>
                            <td class='value'><input type='text' name='autoMarka' class='box'
                                    placeholder='Ievadi automašīnas marku*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Modelis</td>
                            <td class='value'><input type='text' name='autoModelis' class='box'
                                    placeholder='Ievadi automašīnas modeli*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Gads</td>
                            <td class='value'><input type='number' min='1950' max='2022' step='1' name='autoGads'
                                    class='box' placeholder='Ievadi automašīnas gadu*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Dzinēja veids</td>
                            <td class='value'>
                                <select name="autoDzinejaVeids" class="box2" required>
                                    <option value="" disabled selected>Izvēlies automašīnas dzineja veidu*</option>
                                    <?php 
                                require("../Majas_lapa/connect_db.php");
                                $sql = "SELECT * FROM dzineja_veids";
                                $all_categories = mysqli_query($savienojums,$sql);
                                while ($category = mysqli_fetch_array(
                                        $all_categories,MYSQLI_ASSOC)):;
                            ?>
                                    <option value="<?php echo $category["veids"];?>">
                                        <?php echo $category["veids"];?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class='main'>Dzinēja tilpums</td>
                            <td class='value'><input type='number' min='1.2' max='3.0' step='0.1'
                                    name='autoDzinejaTilpums' class='box'
                                    placeholder='Ievadi automašīnas dzinēja tilpumu*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Virsbūves tips</td>
                            <td class='value'>
                                <select name="autoVirsbuve" class="box2" required>
                                    <option value="" disabled selected>Izvēlies automašīnas virsbūves tipu*</option>
                                    <?php 
                                require("../Majas_lapa/connect_db.php");
                                $sql = "SELECT * FROM virsbuves_tipi";
                                $all_categories = mysqli_query($savienojums,$sql);
                                while ($category = mysqli_fetch_array(
                                        $all_categories,MYSQLI_ASSOC)):;
                            ?>
                                    <option value="<?php echo $category["tips"];?>">
                                        <?php echo $category["tips"];?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class='main'>Ātrumkārba</td>
                            <td class='value'>
                                <select name="autoAtrumkarba" class="box2" required>
                                    <option value="" disabled selected>Izvēlies automašīnas ātrumkārbu*</option>
                                    <?php
                                require("../Majas_lapa/connect_db.php");
                                $sql = "SELECT * FROM atrumkarba";
                                $all_categories = mysqli_query($savienojums,$sql);
                                while ($category = mysqli_fetch_array(
                                        $all_categories,MYSQLI_ASSOC)):;
                            ?>
                                    <option value="<?php echo $category["nosaukums"];?>">
                                        <?php echo $category["nosaukums"];?>
                                    </option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class='main'>Attēls</td>
                            <td class='value'><input type='text' name='autoAttels' class='box'
                                    placeholder='Ievadi automašīnas attēla saiti*' required /></td>
                        </tr>
                        <tr>
                            <td class='main'>Cena</td>
                            <td class='value'><input type='number' step='10.00' name='autoCena' class='box'
                                    placeholder='Ievadi automašīnas cenu' required /></td>
                        </tr>
                        </from>
                </table>
                <button type='submit' name='pievienot' class='btn4'>Pievienot</button>
        </div>
    </div>
</section>