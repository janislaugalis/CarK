<?php $page = "klienti"; include('header.php'); ?>
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Klientu pārvaldīšana
                </div>
                <table>
                    <tr> <!-- Izveido klientu attiecīgās sadaļas ! -->
                        <th>Vārds Uzvārds</th>
                        <th>Epasts</th>
                        <th>Tālrunis</th>
                        <th>Reģistrēšanās datums un laiks</th>
                    </tr>
                    <?php
                        require("connect_db.php"); // Pieprasa savienojumu ar datu bāzi !
                         // Pieprasa Klientu informāciju no datu bāzes un sakārto pēc reģistrēšanās datuma !
                        $visiklienti = 'SELECT * FROM klienti ORDER BY registeresanas_datums DESC;'; 
                        $atlasaVisusKlientus = mysqli_query($savienojums, $visiklienti) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaVisusKlientus) > 0){  // Veic funkciju pēc kā izvada informāciju attiecīgajās kolonās.
                            while($row = mysqli_fetch_assoc($atlasaVisusKlientus)){


                                echo // K_vards, k_uzvards norāda precīzi klienta vārdu un uzvārdu, lai nepieļautu informācijas saplūšanu, jo vārds un uzvārds ir arī šoferiem.
                                "
                                <tr>
                                    <td>{$row['k_vards']} {$row['k_uzvards']}</td> 
                                    <td>{$row['epasts']}</td>
                                    <td>{$row['talrunis']}</td>
                                    <td>{$row['registeresanas_datums']}</td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?> <!-- Pievieno footeri ! -->