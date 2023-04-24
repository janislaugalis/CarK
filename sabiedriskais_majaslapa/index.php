<?php $page = "sakums"; include('header.php'); ?> <!-- Identificē lapusi -->
<section class="admin">
        <div class="kopsavilkums">
            <?php
                require("connect_db.php"); // Izveido savienojumu ar datu bāzi ! 

                $ParadaAutobusus = 'SELECT count(autobusi_id) FROM autobusi';
                $AtlasaAutobusus = mysqli_query($savienojums, $ParadaAutobusus) or die("Nekorekts vaicājums!");

                $ParadaKlientus = 'SELECT count(klienti_id) FROM klienti';
                $AtlasaKlientus = mysqli_query($savienojums, $ParadaKlientus) or die("Nekorekts vaicājums!");

                        ?>
                <div class="informacija">
                    <span>
                        <i class="fas fa-user"></i>
                        <?php 
                            if(mysqli_num_rows($AtlasaKlientus) > 0){
                                while($row = mysqli_fetch_assoc($AtlasaKlientus)){
                                    echo "{$row['count(klienti_id)']}";
                                }
                            }
               
                        ?>
                    </span>
                    <h3>Klienti</h3>
                </div>
                <div class="informacija">
                    <span>
                        <i class="fas fa-bus"></i>
                        <?php 
                            if(mysqli_num_rows($AtlasaAutobusus) > 0){
                                while($row = mysqli_fetch_assoc($AtlasaAutobusus)){
                                    echo "{$row['count(autobusi_id)']}";
                                }
                            }
                                    ?>
                                    </span>
                                    <h3>Pieejamie Autobusi</h3>
                                </div>
                            </div>
        <div class="row"> 
            <div class="info">
                <div class="head-info">Pēdējās izmaiņas reisos:</div>
                <table>
                <tr><th>Šoferis</th><th> Reisa cena</th><th>Autobuss</th><th>Maršruts</th></tr>
                    <?php // Pieprasa no datu bāzes sadaļas "marsruti " tālāk pievieno lietotāji tālāk pievieno šoferus un salīdzina tos.
                        $izmainasVaicajums = 'SELECT * FROM marsruti as m JOIN soferi as s ON s.soferi_id = m.soferi_id ';
                        $atlasaIzmainas = mysqli_query($savienojums, $izmainasVaicajums) or die("Nekorekts vaicājums!"); 
                        

                        if(mysqli_num_rows($atlasaIzmainas) > 0){ // Veic darbību. No datu bāzes pieprasītās informācijas pēc funkcijas veida to izvada attiecīgajās vietās !
                            while($row = mysqli_fetch_assoc($atlasaIzmainas)){
                                echo "<tr><td>{$row['s_vards']} {$row['s_uzvards']}</td><td>{$row['cena']} </td><td> {$row['vnz']} </td><td> {$row['marsruts']}</td><td>";
                            }
                        }
                    ?>
                </table>
    </section>
<?php include('footer.php'); ?> <!-- Pievieno footeri. -->