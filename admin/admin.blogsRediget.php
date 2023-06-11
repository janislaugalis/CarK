<?php $page = "blogs"; include('admin.header.php'); ?>

    <section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info">bloga apskats</div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        require("../Majas_lapa/connect_db.php");
                        if(isset($_POST['rediget'])){
                            $jaunVirsraksts = $_POST['jaunVirsraksts'];
                            $jaunTeksts = $_POST['jaunTeksts'];
                            $jaunAttels = $_POST['jaunAttels'];

                            $atjaunotblogaVaicajums = "UPDATE blogs SET virsraksts = '$jaunVirsraksts', teksts = '$jaunTeksts', attels = '$jaunAttels' WHERE blogs_id =".$_POST['rediget'];

                            if(mysqli_query($savienojums, $atjaunotblogaVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>blogs veiksmīgi atjaunots!</div>";
                                header("Refresh:1; url=admin.blogs.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                                header("Refresh:1; url=admin.blogs.php");
                            }
                            // darbības, kad gribēsim veikt statusa izmaiņas
                        }else{
                            $blogaid = $_POST['apskatit'];

                            $blogaVaicajums = "SELECT * FROM blogs WHERE blogs_id = $blogaid";
                            $atlasablogu = mysqli_query($savienojums, $blogaVaicajums) or die('Nekorekts vaicājums');

                            while($row = mysqli_fetch_assoc($atlasablogu)){
                                echo "
                                    <table class='noselect'>
                                        <tr><td rowspan = '6' class='tabuluAttels'><img class='tabAttels' src='{$row['attels']}'></td></tr>
                                        <form method='POST'>
                                        <tr><td class='main'>Virsraksts</td><td class='value'><input type='text' name='jaunVirsraksts' value='{$row['virsraksts']}' class='box'></td></tr>
                                        <tr><td class='main'>Teksts</td><td><textarea class='box' name='jaunTeksts' rows='11'>{$row['teksts']}</textarea></td></tr>
                                        <tr><td class='main'>Attēls</td><td class='value'><input type='text' name='jaunAttels' value='{$row['attels']}' class='box'></td></tr>
                                        <tr><td class='main'>Pievienošanas datums un laiks</td><td class='value'>{$row['pievienosanas_datums']}</td></tr>
                                        <tr><td class='main'>Pēdējo izmaiņu datums un laiks</td><td class='value'>{$row['pedejo_izmainu_datums']}</td></tr>
                                    </table>
                                    <button type='submit' name='rediget' value='{$row['blogs_id']}' class='btn4'>Saglabāt</button>
                                    </from>
                                ";
                            }
                    }}else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kaut kas nogāja greizi! Atgriezies <a class='alert-link' href='admin.blogs.php'>iepriekšējā lapā</a> un mēģini vēlreiz!</div>";
                    }
                ?>
            </div>
        </div>
    </section>
<?php include('admin.footer.php'); ?>
