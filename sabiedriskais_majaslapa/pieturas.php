<?php $page = "pieturas"; include('header.php'); ?> <!-- Izveido pieturas lapu un pievieno headeri !   -->
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Pieturu pārvaldīšana
                </div>
                <table>
                    <tr>
                        <th>Nosaukums</th>
                        <th>Maršrutā</th>
                       
                    </tr>
                    <?php
                        require("connect_db.php"); // pieprasa savienojumu ar datu bāzi

                        $visasPieturas = 'SELECT * FROM pieturas as p JOIN marsruti as m ON p.marsruti_id = m.marsruti_id ';
                        $atlasaPieturas = mysqli_query($savienojums, $visasPieturas) or ("Nekorekts vaicājums!");
                                        // izvadīto informāciju saliek pa kolonām !
                        if(mysqli_num_rows($atlasaPieturas) > 0){
                            while($row = mysqli_fetch_assoc($atlasaPieturas)){
                                echo "
                                <tr>
                                    <td>{$row['pieturas_nosaukums']}</td>
                                    <td>{$row['marsruts']}</td>
                               
                                                              
                                    
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?> 