<?php $page = "biletes"; include('header.php'); ?>  <!-- Biļešu lapaspuse -->
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Biļešu pārvaldīšana
                </div>
                <table>
                    <tr> <!-- Izveido tabulu. -->
                        <th>Klienta Vārds Uzvārds</th>
                        <th>Autobusa VNZ</th>
                        <th>Maršruts</th>
                        <th>Brauciena sākums</th>
                        <th>Šofera vārds, uzvārds</th>
                        <th>Statuss</th>
                    </tr>
                    <?php
                        require("connect_db.php"); // Pieprasa no datu bāzes informāciju par biļetēnm maršrutiem, šoferiem, klientiem un salīdzina tos. Kā arī pieprasa statusu.

                        $visasBiletes = 'SELECT * FROM biletes as b JOIN marsruti as m ON b.marsruti_id = m.marsruti_id JOIN soferi as s ON s.soferi_id = m.soferi_id JOIN klienti as k ON k.klienti_id = b.klienti_id JOIN statuss as st ON st.statuss_id = b.statuss_id ';
                        $atrodPieturas = mysqli_query($savienojums, $visasBiletes) or die("viss slikti: " . mysqli_error($atrodPieturas));

                    

                        if(mysqli_num_rows($atrodPieturas) > 0){ // Pievieno izvilkto informāciju no datu bāzes attiecīgajās kolonās.
                            while($row = mysqli_fetch_assoc($atrodPieturas)){
                                echo "
                                <tr>
                                    <td>{$row['k_vards']} {$row['k_uzvards']}</td>
                                    <td>{$row['vnz']}</td>
                                    <td>{$row['marsruts']}</td>
                                    <td>{$row['brauciena_sakums']}</td>
                                    <td>{$row['s_vards']} {$row['s_uzvards']}</td>
                                    <td>{$row['statusa_nosaukums']}</td>
                                                                    
                                    </td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?> <!-- Pievieno footeri -->