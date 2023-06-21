<?php include('header1.php'); ?>
<!-- Identificē lapusi -->
<!DOCTYPE html>
<html lang="lv">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car K</title>
    <link rel="stylesheet" href="/CarK/assets/Style/style.css">
    <link rel="stylesheet" href="/CarK/assets/Style/hederis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<div class="container-fluid mekletajs gx-0">
	<div class="row">
		<div class="col">
			<form class="container-fluid">
			<?php include('filtrs.php');  ?> 
			</form>
		</div>
	</div>
</div>


<div class="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="galva">
                        <h4 class=" h4 mb-100">Mūsu automašīnas</h4>
                    </div>

                    <div class="katalogs">
                        <ul>
                            <li class="nomāt col-md-12">
                                <div class="col-md-4">

                            <li class="nomāt col-md-12">

                                <div class="col-md-8">

                                </div>
                    </div>
                    
                    </ul>
                    </li>
                    <?php
require("connect_db.php");


$visasAutomasinasVaicajums = 'SELECT * FROM automasinas a JOIN virsbuves_tipi vi ON a.id_virsbuves_tips = vi.virsbuves_tips_id JOIN lietotaji c ON c.lietotaji_id = a.id_lietotaji JOIN atrumkarba d ON a.id_atrumkarba = d.atrumkarba_id JOIN dzineja_veids dz ON dz.dzineja_veids_id = a.id_dzineja_veids ORDER BY a.pievienosanas_datums DESC;';
$atlasaVisasAutomasinas = mysqli_query($savienojums, $visasAutomasinasVaicajums) or die("Nekorekts vaicājums!");
$result = mysqli_query($savienojums, $visasAutomasinasVaicajums);


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
            echo '<li class="nomāt col-md-12">';
                echo '<div class="col-md-4">';
                    echo '<a href="#" class="bilde">';
                    echo '<img src="' . $row['attels'] . '" alt="car image">' ;
                    echo '</a>';
                echo '</div>';
                echo '<div class="col-md-8">';
                    echo '<div class="auto_info">';
                    
                        echo '<div class="cena"><strong>$</strong><span>' . $row['cena_diena'] . ' dienā</span></div>';
                        echo '<h3><a href="auto_lapa.php?automasinas_id=' . $row['automasinas_id'] . '">' . $row['marka'] . ' ' . $row['modelis'] . '</a></h3>';
                            echo '<p>' . $row['gads'] . '</p>';
                        echo '</div>';
                    echo '</div>';
            echo '</li>';
    }
} else {
    echo "No results found.";
}


mysqli_close($savienojums);
?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>




<?php include('footer.php'); ?> <!-- Pievieno footeri. -->

<style>
    .bilde{
        max-width:350px;
        max-height:250px;
    }
    </style>
