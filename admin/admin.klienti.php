<?php $page = "klienti"; include('admin.header.php'); ?>
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Klientu pārvaldīšana
                </div>
                <table>
                    <tr>
                        <th>Vārds Uzvārds</th>
                        <th>Epasts</th>
                        <th>Tālrunis</th>
                        <th>Reģistrēšanās datums un laiks</th>
                    </tr>
                    <?php
                        require("../Majas_lapa/connect_db.php");

                        $visiPieteikumiVaicajums = 'SELECT * FROM klienti ORDER BY registresanas_datums DESC;';
                        $atlasaVisusPieteikumus = mysqli_query($savienojums, $visiPieteikumiVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaVisusPieteikumus) > 0){
                            while($row = mysqli_fetch_assoc($atlasaVisusPieteikumus)){
                                echo "
                                <tr>
                                    <td>{$row['vards']} {$row['uzvards']}</td>
                                    <td>{$row['epasts']}</td>
                                    <td>{$row['talrunis']}</td>
                                    <td>{$row['registresanas_datums']}</td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>