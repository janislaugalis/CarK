<?php $page = "automasinas"; include('admin.header.php'); ?>
<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info head-color">Automašīnu pārvaldīšana
                <button type="submit" name="apskatit" onclick="window.location.href='admin.automasinasPievienot.php';"
                    class="btn3">Pievienot automašīnu <i class="fas fa-plus-circle"></i></button>
            </div>
            <table>
                <tr>
                    <th>Attēls</th>
                    <th>Valsts Nr. zīme</th>
                    <th>Marka</th>
                    <th>Modelis</th>
                    <th>Gads</th>
                    <th>Virsbūves tips</th>
                    <th>Ātrumkārba</th>
                    <th>Dzinējs</th>
                    <th>Pieejams</th>
                    <th>Cena par dienu</th>
                    <th>Apskatīt</th>
                    <th>Dzēst</th>
                </tr>
                <?php
                        require("../Majas_lapa/connect_db.php");

                        $visasAutomasinasVaicajums = 'SELECT * FROM automasinas a JOIN virsbuves_tipi vi ON a.id_virsbuves_tips = vi.virsbuves_tips_id JOIN lietotaji c ON c.lietotaji_id = a.id_lietotaji JOIN atrumkarba d ON a.id_atrumkarba = d.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids ORDER BY a.pievienosanas_datums DESC;';
                        $atlasaVisasAutomasinas = mysqli_query($savienojums, $visasAutomasinasVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaVisasAutomasinas) > 0){
                            while($row = mysqli_fetch_assoc($atlasaVisasAutomasinas)){
                                if($row['pieejams'] == 0){
                                    $pieejams = "<i class='sarkans1 fas fa-times'></i>";
                                }else{
                                    $pieejams = "<i class='zals1 fas fa-check'></i>";
                                }
                                echo "
                                <tr>
                                    <td class='mazieTabulasAtteliIzmers'><img class='mazieTabulasAtteli' src='{$row['attels']}'></td>
                                    <td>{$row['vnz']}</td>
                                    <td>{$row['marka']}</td>
                                    <td>{$row['modelis']}</td>
                                    <td>{$row['gads']}</td>
                                    <td>{$row['tips']}</td>
                                    <td>{$row['nosaukums']}</td>
                                    <td>{$row['dzineja_tilpums']} {$row['veids']}</td>
                                    <td>$pieejams</td>
                                    <td>{$row['cena_diena']}</td>
                                    <td>
                                        <form action='admin.automasinasRediget.php' method='post'>
                                            <button type='submit' name='apskatit' value='{$row['automasinas_id']}' class='btn2'><i class='fas fa-edit'></i>'</button>
                                        </form>                                    
                                    </td>
                                    <td>
                                        <form action='admin.automasinasDzest.php' method='post'>
                                            <button type='submit' name='izdzest' value='{$row['automasinas_id']}' class='btn2'><i class='fas fa-trash-alt'></i></button>
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