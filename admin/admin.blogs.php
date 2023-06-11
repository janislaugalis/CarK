<?php $page = "jaunumi"; include('admin.header.php'); ?>
<section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info head-color">Jaunumu pārvaldīšana
                <button type='submit' name='apskatit' onclick="location.href='admin.blogsPievienot.php';" class='btn3'>Pievienot jaunumu <i class="fas fa-plus-circle"></i></button>
                </div>
                <table>
                    <tr>
                        <th>Attēls</th>
                        <th>Virsraksts</th>
                        <th>Teksts</th>
                        <th>Pievienošanas datums un laiks</th>
                        <th>Pievienoja</th>
                        <th>Apskatīt</th>
                        <th>Dzēst</th>
                    </tr>
                    <?php
                        require("../Majas_lapa/connect_db.php");

                        $visiblogaVaicajums = 'SELECT * FROM blogs a LEFT JOIN lietotaji b ON a.id_lietotaji = b.lietotaji_id ORDER BY pievienosanas_datums DESC';
                        $atlasavisusblogus = mysqli_query($savienojums, $visiblogaVaicajums) or die("Nekorekts vaicājums!");

                        if(mysqli_num_rows($atlasavisusblogus) > 0){
                            while($row = mysqli_fetch_assoc($atlasavisusblogus)){
                                echo "
                                <tr>
                                    <td class='mazieTabulasAtteliIzmers'><img class='mazieTabulasAtteli' src='{$row['attels']}'></td>
                                    <td>{$row['virsraksts']}</td>
                                    <td class='teksts'>{$row['teksts']}</td>
                                    <td>{$row['pievienosanas_datums']}</td>
                                    <td>{$row['lietotajvards']}</td>
                                    <td>
                                        <form action='admin.blogsRediget.php' method='post'>
                                            <button type='submit' name='apskatit' value='{$row['blogs_id']}' class='btn2'><i class='fas fa-edit'></i>'</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action='admin.blogsDzest.php' method='post'>
                                            <button type='submit' name='izdzest' value='{$row['blogs_id']}' class='btn2'><i class='fas fa-trash-alt'></i></button>
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