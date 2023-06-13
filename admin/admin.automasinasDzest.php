<?php $page = "automasinas"; include('admin.header.php'); ?>

<section class="admin">
    <div class="row">
        <div class="info">
            <div class="head-info">Automašīnu dzēšana</div>
            <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if(isset($_POST['izdzest'])){
                            require("../Majas_lapa/connect_db.php");
                            $ID = $_POST['izdzest'];

                            $izdzestAutomasinuVaicajums = "DELETE FROM automasinas WHERE automasinas_id = '$ID'";

                            if(mysqli_query($savienojums, $izdzestAutomasinuVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>Automašīna veiksmīgi izdzēsta!</div>";
                                header("Refresh:1; url=admin.automasinas.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda! Kāds no klientiem ir pieteicies uz šo automašīnu!</div>";
                                header("Refresh:1; url=admin.automasinas.php");
                            }
                        }
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:1; url=admin.automasinas.php");
                    }
                    ?>
        </div>
    </div>
</section>

<?php include('admin.footer.php'); ?>