<?php $page = "jaunumi"; include('admin.header.php'); ?>

    <section class="admin">
        <div class="row">
            <div class="info">
                <div class="head-info">Bloga dzēšana</div>
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if(isset($_POST['izdzest'])){
                            require("../Majas_lapa/connect_db.php");
                            $ID = $_POST['izdzest'];

                            $izdzestbloguVaicajums = "DELETE FROM blogs WHERE blogs_id = '$ID'";

                            if(mysqli_query($savienojums, $izdzestbloguVaicajums)){
                                echo "<div class='pieteiksanasKluda zals'>Jaunums veiksmīgi izdzēsts!</div>";
                                header("Refresh:1; url=admin.blogs.php");
                            }else{
                                echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                                header("Refresh:1; url=admin.blogs.php");
                            }
                        }
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:1; url=admin.blogs.php");
                    }
                    ?>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>
