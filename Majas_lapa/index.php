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

<section class="hero">
    <div class="hero-content">
        <h1>Auto noma Liepājā </h1>
        <p>šis lauks nav svarīgs</p>

    </div>
</section>

<div class="container-fluid mekletajs gx-0">
	<div class="row">
		<div class="col">
			<form class="container-fluid">
			<?php include('filtrs.php');  ?> 
			</form>
		</div>
	</div>
</div>



<div class="main" role="main">
    <div id="content" class="content full">
        <div class="izceltie_bloki">
            <div class="container">
                <div class="hadivi">
                    <h2>Mūsu karstākie pievedumi.</h2>
                </div>
                <div class="row">

                    <a href="katalogs.php">

                        <div class="col-md-4 col-sm-4 izceltais_bloks"> <img src="/CarK/assets/Bildes/Auto/opelis.png"
                                src="katalogs.php" alt="opels" class="izcelta_bilde">
                    </a>
                    <h3>Savāc sev piemērotā laikā</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-4 col-sm-4 izceltais_bloks"> <img src="/CarK/assets/Bildes/Auto/audars.png"
                        alt="audars" class="izcelta_bilde">
                    <h3>Draudzīgs apkalpošanas serviss</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-4 col-sm-4 izceltais_bloks">
                    <img src="/CarK/assets/Bildes/Auto/beha.png" alt="beha" class="izcelta_bilde ">
                    <h3> Saņem auto jau rīt</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-12 " id="poga_uz_misenem">
                    <a href="katalogs.php">
                        <button>Apskati visas mūsu misenes</button>
                    </a>


                </div>
            </div>
        </div>
    </div>

    <div class="atsauksmes_sadala">
    <div class="row">
        <div class="col-md-12">
            <div class="lauks">
                <div class="atsauksmes_galva content full">
                    <h4>Atsauksmes</h4>
                </div>
                <div class="card-body row">
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text">Salonā nebij smēķēts</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2022</small></p>
                    </div>
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text">Salonā nebij smēķēts</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2022</small></p>
                    </div>
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text">Salonā nebij smēķēts</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2022</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php include('footer.php'); ?> <!-- Pievieno footeri. -->