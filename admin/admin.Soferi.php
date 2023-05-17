<?php $page = "Soferi"; include('header.php'); ?> <!-- Izveido šoferu lapu un pievieno headeri !   -->
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Klientu pārvaldīšana
                </div>
                <table>
                    <tr> <!-- Izveido boksu kur tiek norādīti virsraksti   -->
                        <th>Vārds Uzvārds</th>
                        <th>Epasts</th>
                        <th>Tālrunis</th>
                        <th>Šofera maršruts</th>
                    </tr>
                    <?php
                        require("connect_db.php"); // pieprasa savienojumu ar datu bāzi

                        $visiSoferi = 'SELECT * FROM marsruti as m JOIN soferi as s ON s.soferi_id = m.soferi_id ';
                        $atlasaVisusSoferus = mysqli_query($savienojums, $visiSoferi) or die("Nekorekts vaicājums!");
// izvēlēto info saliek attiecīgajās vietās !
                        if(mysqli_num_rows($atlasaVisusSoferus) > 0){
                            while($row = mysqli_fetch_assoc($atlasaVisusSoferus)){
                                // s_vards s_uzvards lai nedublicetos ar klientu vardu uzvardu
                                echo "
                                <tr>
                                    <td>{$row['s_vards']} {$row['s_uzvards']}</td> 
                                    <td>{$row['epasts']}</td>
                                    <td>{$row['telefons']}</td>
                                    <td>{$row['marsruts']}</td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?> <!-- iekļauj footeri -->