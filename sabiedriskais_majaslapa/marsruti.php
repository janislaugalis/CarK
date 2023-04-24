<?php $page = "marsruti"; include('header.php'); ?> <!--  Izveido maršrutu lapu, kurā ir iespēja apskatīt maršrutus -->
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Visi maršruti
                </div>
                <table>
                    <tr> <!-- Izveido maršrutu sadaļu.  -->
                        <th>Valsts Nr. zīme</th>
                        <th>Maršruts</th>
                        <th>Sēdvietas</th>
                        <th>Cena par maršrutu</th>
                        <th>Pievienošanas datums</th>
                        <th>Pēdējo izmaiņu datums</th>
                        
                    </tr>
                    <?php
                        require("connect_db.php"); // Pieprasa savienojumu ar datu bāzi !
                                   // Pieprasa no datu bāzes marsruti un šoferus !
                        $visasmarsrutusadalas = 'SELECT * FROM marsruti as m JOIN soferi as s ON s.soferi_id = m.soferi_id ';
                        $atlasaVisusmarsrutus = mysqli_query($savienojums, $visasmarsrutusadalas) or die("Viss slikti!");

                        if(mysqli_num_rows($atlasaVisusmarsrutus) > 0){
                            while($row = mysqli_fetch_assoc($atlasaVisusmarsrutus)){
                       // tālāk izvieto pieprasīto informāciju to attiecīgajās vietās
                                echo "
                                <tr>
                                
                                    <td>{$row['vnz']}</td>
                                    <td>{$row['marsruts']}</td>
                                    <td>{$row['sedvietas']}</td>
                                    <td>{$row['cena']}</td>
                                    <td>{$row['pievienosanas_datums']}</td>
                                    <td>{$row['pedejo_izmainu_datums']}</td>
                                
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?> <!-- footeris  -->