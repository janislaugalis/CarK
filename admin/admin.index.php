<?php $page = "sakums"; include('admin.header.php'); ?> <!-- Identificē lapusi -->
<section class="admin">
        <div class="kopsavilkums">
            <?php
                require("../Majas_lapa/connect_db.php");
                $jauniPieteikumiVaicajums = 'SELECT count(pieteikuma_izveidosanas_datums) FROM pieteikumi WHERE pieteikuma_izveidosanas_datums BETWEEN now() - INTERVAL 1 DAY AND now()';
                $atlasaJaunakoPieteikumuSkaitu = mysqli_query($savienojums, $jauniPieteikumiVaicajums) or die("Nekorekts vaicājums!");

                $parbauditieDokumentiVaicajums = 'SELECT count(pieteikuma_izveidosanas_datums) FROM pieteikumi WHERE id_statuss = 2 or id_statuss = 3';
                $atlasaParbauditoDokumentuSkaitu = mysqli_query($savienojums, $parbauditieDokumentiVaicajums) or die("Nekorekts vaicājums!");

                $pieteikumiKopaVaicajums = 'SELECT count(pieteikuma_izveidosanas_datums) FROM pieteikumi';
                $atlasaPieteikumiKopaSkaitu = mysqli_query($savienojums, $pieteikumiKopaVaicajums) or die("Nekorekts vaicājums!");

                $pieejamasAutomasinasVaicajums = 'SELECT count(automasinas_id) FROM automasinas WHERE pieejams = 1';
                $atlasaPieejamoAutomasinuSkaitu = mysqli_query($savienojums, $pieejamasAutomasinasVaicajums) or die("Nekorekts vaicājums!");

                $klientiKopaVaicajums = 'SELECT count(klienti_id) FROM klienti';
                $atlasaKlientuSkaitu = mysqli_query($savienojums, $klientiKopaVaicajums) or die("Nekorekts vaicājums!");
            ?>
            <div class="informacija">
                <span>
                    <i class="fas fa-file-contract"></i>
                    <?php 
                        if(mysqli_num_rows($atlasaJaunakoPieteikumuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaJaunakoPieteikumuSkaitu)){
                                echo "{$row['count(pieteikuma_izveidosanas_datums)']}";
                            }
                        }
                    ?>
                </span>
                <h3>Jauni pieteikumi</h3>
                <p>Pēdējo 24h laikā</p>
            </div>
            <div class="informacija">
                <span>
                    <i class="fas fa-file-signature"></i>
                    <?php 
                        if(mysqli_num_rows($atlasaParbauditoDokumentuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaParbauditoDokumentuSkaitu)){
                                echo "{$row['count(pieteikuma_izveidosanas_datums)']}";
                            }
                        }
                    ?>
                </span>
                <h3>Pārbaudīti pieteikumi</h3>
                <p>Pēdējo 24h laikā</p>
            </div>
            <div class="informacija">
                <span>
                    <i class="fas fa-file"></i>
                    <?php 
                        if(mysqli_num_rows($atlasaPieteikumiKopaSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaPieteikumiKopaSkaitu)){
                                echo "{$row['count(pieteikuma_izveidosanas_datums)']}";
                            }
                        }
                    ?>
                </span>
                <h3>Iesniegti pieteikumi</h3>
                <p>Kopš uzņēmuma sākuma</p>
            </div>
            <div class="informacija">
                <span>
                    <i class="fas fa-car"></i>
                    <?php 
                        if(mysqli_num_rows($atlasaPieejamoAutomasinuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaPieejamoAutomasinuSkaitu)){
                                echo "{$row['count(automasinas_id)']}";
                            }
                        }
                    ?>
                </span>
                <h3>Pieejamās automašīnas</h3>
                <p>Kurām var pieteikties uz nomāšanu</p>
            </div>
            <div class="informacija">
                <span>
                    <i class="fas fa-user"></i>
                    <?php 
                        if(mysqli_num_rows($atlasaKlientuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaKlientuSkaitu)){
                                echo "{$row['count(klienti_id)']}";
                            }
                        }
                    ?>
                </span>
                <h3>Klienti</h3>
                <p>Kopš uzņēmuma sākuma</p>
            </div>
        </div>
        <div class="row">
            <div class="info">
                <div class="head-info">Pēdējās izmaiņas pieteikumos:</div>
                <table>
                <tr><th>Klients</th><th>Automašīna</th><th>Statuss</th><th>Pēdejās izmaiņas datums un laiks</th></tr>
                    <?php
                        $izmainasVaicajums = 'SELECT * FROM pieteikumi p JOIN klienti k ON p.id_klienti = k.klienti_id JOIN automasinas a ON p.id_automasinas = a.automasinas_id JOIN statuss s ON p.id_statuss = s.statuss_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids ORDER BY pieteikuma_pedejo_izmainu_datums DESC LIMIT 10';
                        $atlasaIzmainas = mysqli_query($savienojums, $izmainasVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaIzmainas) > 0){
                            while($row = mysqli_fetch_assoc($atlasaIzmainas)){
                                echo "<tr><td>{$row['vards']} {$row['uzvards']}</td><td>{$row['gads']} {$row['marka']} {$row['modelis']} {$row['dzineja_tilpums']} {$row['veids']}</td><td>{$row['statusa_nosaukums']}</td><td>{$row['pieteikuma_pedejo_izmainu_datums']}</td></tr>";
                            }
                        }
                    ?>
                </table>
            </div>

            <div class="info2">
                <div class="head-info">Pieprasītākās automašīnas:</div>
                <table>
                    <tr><th>Automašīna</th><th>Pieteikumi</th></tr>
                    <?php
                        $izmainasVaicajums = 'SELECT id_automasinas, a.gads, a.marka, a.modelis, a.dzineja_tilpums, dz.veids, COUNT(*) FROM pieteikumi p JOIN automasinas a ON p.id_automasinas = a.automasinas_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids GROUP BY id_automasinas ORDER BY COUNT(*) DESC LIMIT 10;';
                        $atlasaIzmainas = mysqli_query($savienojums, $izmainasVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasaIzmainas) > 0){
                            while($row = mysqli_fetch_assoc($atlasaIzmainas)){
                                echo "<tr><td>{$row['gads']} {$row['marka']} {$row['modelis']} {$row['dzineja_tilpums']} {$row['veids']}</td><td>{$row['COUNT(*)']}</td></tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
<?php include('admin.footer.php'); ?>