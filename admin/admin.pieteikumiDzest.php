<?php $page = "pieteikumi"; include('admin.header.php'); ?>

    <section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info">Pieteikumu dzēšana</div>
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if(isset($_POST['izdzest'])){
                            require("../Majas_lapa/connect_db.php");
                            $ID = $_POST['izdzest'];

                            $izdzestPieteikumuVaicajums = "DELETE FROM pieteikumi WHERE pieteikumi_id = '$ID'";

                            if(mysqli_query($savienojums, $izdzestPieteikumuVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>Pieteikums veiksmīgi izdzēsts!</div>";
                                header("Refresh:1; url=admin.pieteikumi.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                                header("Refresh:1; url=admin.pieteikumi.php");
                            }
                        }
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:1; url=admin.pieteikumi.php");
                    }
                    ?>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>
