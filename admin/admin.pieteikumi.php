<?php $page = "pieteikumi"; include('admin.header.php'); ?>
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Pieteikumu pārvaldīšana
                </div>
                <table>
                    <tr>
                        <th>Klienta Vārds Uzvārds</th>
                        <th>Auto VNZ</th>
                        <th>Marka</th>
                        <th>Modelis</th>
                        <th>Gads</th>
                        <th>Statuss</th>
                        <th>Apskatīt</th>
                        <th>Dzēst</th>
                    </tr>
                    <?php
                        require("../Majas_lapa/connect_db.php");

                        $visiPieteikumiVaicajums = 'SELECT * FROM pieteikumi p JOIN klienti k ON p.id_klienti = k.klienti_id JOIN automasinas a ON p.id_automasinas = a.automasinas_id JOIN statuss s ON p.id_statuss = s.statuss_id ORDER BY p.pieteikuma_izveidosanas_datums DESC;';
                        $atlasaVisusPieteikumus = mysqli_query($savienojums, $visiPieteikumiVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaVisusPieteikumus) > 0){
                            while($row = mysqli_fetch_assoc($atlasaVisusPieteikumus)){
                                echo "
                                <tr>
                                    <td>{$row['vards']} {$row['uzvards']}</td>
                                    <td>{$row['vnz']}</td>
                                    <td>{$row['marka']}</td>
                                    <td>{$row['modelis']}</td>
                                    <td>{$row['gads']}</td>
                                    <td>{$row['statusa_nosaukums']}</td>
                                    <td>
                                        <form action='admin.pieteikumiRediget.php' method='post'>
                                            <button type='submit' name='apskatit' value='{$row['pieteikumi_id']}' class='btn2'><i class='fas fa-edit'></i>'</button>
                                        </form>                                    
                                    </td>
                                    <td>
                                        <form action='admin.pieteikumiDzest.php' method='post'>
                                            <button type='submit' name='izdzest' value='{$row['pieteikumi_id']}' class='btn2'><i class='fas fa-trash-alt'></i></button>
                                        </form>                                 
                                    </td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>