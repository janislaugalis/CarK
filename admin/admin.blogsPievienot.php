<?php $page = "blogs"; include('admin.header.php'); ?>

    <section class="admin">
        <?php
            if(isset($_POST['pievienot'])){
                require("../Majas_lapa/connect_db.php");
                $JaunsVirsraksts = $_POST['jaunVirsraksts'];
                $JaunsTeksts = $_POST['jaunsTeksts'];
                $JaunsAttels = $_POST['jaunsAttels'];
                $stmt = $savienojums->prepare('SELECT lietotaji_id FROM lietotaji WHERE lietotajvards=?');
                $stmt->bind_param("s", $_SESSION['username']);
                $stmt->execute();
                $data = $stmt->get_result()->fetch_assoc();
                $value = $data ? $data['lietotaji_id'] : null;


                if(!empty($JaunsVirsraksts) && !empty($JaunsTeksts) && !empty($JaunsAttels)){
                    $pievienotJaunumuVaicajums = "INSERT INTO blogs (virsraksts, teksts, id_lietotaji, attels) VALUES ('$JaunsVirsraksts', '$JaunsTeksts', '$value', '$JaunsAttels')";

                    if(mysqli_query($savienojums, $pievienotJaunumuVaicajums) or die('Error: '. mysqli_error($savienojums))){
                        echo "<div class='pieteiksanasKluda zals'>Jaunums veiksmīgi pievienots!</div>";
                        header("Refresh:1; url=admin.blogs.php");
                    }else{
                        echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                        header("Refresh:1; url=admin.blogs.php");
                    }
                }else{
                    echo "<div class='pieteiksanasKluda sarkans'>Kļūda!</div>";
                    header("Refresh:1; url=admin.blogsPievienot.php");
                }
                // darbības, kad gribēsim veikt statusa izmaiņas
            }
        ?>
        <div class="row">
            <div class="info">
                <div class="head-info">Pievienot jblogu</div>
                <form method='post'>
                <table class='noselect'>
                    <form method='post'>
                    <tr><td class='main'>Virsraksts</td><td class='value'><input type='text' name='jaunVirsraksts' class='box' placeholder='Ievadi bloga virsrakstu*' required/></td></tr>
                    <tr><td class='main'>Teksts</td><td class='value'><textarea class='box' name='jaunsTeksts' rows='11' placeholder='Ievadi bloga tekstu*' required></textarea></td></tr>
                    <tr><td class='main'>Attēls</td><td class='value'><input type='text' name='jaunsAttels' class='box' placeholder='Ievadi bloga attēla saiti*' required/></td></tr>
                    </from>
                </table>
                <button type='submit' name='pievienot' class='btn4'>Pievienot</button>
            </div>
        </div>
    </section>

<?php include('admin.footer.php'); ?>
