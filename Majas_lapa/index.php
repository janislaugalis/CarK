<?php include('header1.php'); ?>
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
        <p> Iznomā automašīnu un sev ērtā laikā</p>

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
                    <h2>Mūsu automašīnas.</h2>
                </div>
                <div class="row">

                    <a href="katalogs.php">

                        <div class="col-md-4 col-sm-4 izceltais_bloks"> <img src="/CarK/assets/Bildes/Auto/audi.png" style=" height: 300px; width:400px;"
                                src="katalogs.php" alt="audars" class="izcelta_bilde">
                    </a>
                    <h3>Savāc sev piemērotā laikā</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-4 col-sm-4 izceltais_bloks"> <img src="/CarK/assets/Bildes/Auto/rav.png" style=" height: 300px; width:400px;"
                        alt="toyota" class="izcelta_bilde">
                    <h3>Draudzīgs apkalpošanas serviss</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-4 col-sm-4 izceltais_bloks">
                    <img src="/CarK/assets/Bildes/Auto/passats.png" alt="Passats" class="izcelta_bilde " style=" height: 300px; width:400px;">
                    <h3> Saņem auto jau rīt</h3>
                    <p>Auto ar pilnu bāku sēdies un brauc.</p>
                </div>
                <div class="col-md-12 " id="poga_uz_misenem" >
                    <a href="katalogs.php">
                        <button>Apskati visas mūsu automašīnas</button>
                    </a>


                </div>
            </div>
        </div>
    </div>

    <div class="atsauksmes_sadala" style="background-color:#f1f1f1; margin-bottom:50px;">
    <div class="row">
        <div class="col-md-12">
            <div class="lauks">
                <div class="atsauksmes_galva content full">
                    <h4 style="margin-bottom:50px;">Atsauksmes</h4>
                </div>
                <div class="card-body row">
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text">Salonā nebija smēķēts</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2023</small></p>
                    </div>
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text">Patīkama apkalpošana</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2023</small></p>
                    </div>
                    <div class="review col-md-4">
                        <h5 class="card-title">Reinis Ķēde</h5>
                        <p class="card-text"> Elementāra nomāšana</p>
                        <p class="card-text"><small class="text-muted">Publicēts 01/01/2023</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parmums" style="margin-top:150px; background-color:#FFFFFFFF;">
    <div class="row">
        <div class="col-md-12">
            <div class="lauks">
                <div class="atsauksmes_galva content full">
                    <h4 style="margin-bottom:50px;">Kas mēs esam ?</h4>
                </div>
                <div class="card-body row">
                    <div class="review col-md-12">
                        <h5 style="z-index:10; position: relative;" class="card-title">Mēs esam komanda, kas spēj tev palīdzēt, kamēr vien tev ir tiesības kabatā</h5>
                        <p class="card-text">Uzini vairāk par mums un mūsu pieredzi.</p>
                            <div class="bildite">

                        <img style="position:center left" src="/CarK/assets/Bildes/parmums.png" id="parmums_bilde" alt="Par mums bilde">
                            </div>
                        <a class="custom-button" href="parmums.php">Par mums</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6589.655796745294!2d21.034166919511595!3d56.55327559987317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46faa7c1a89be2bb%3A0xf1522c3fd385ed00!2sSp%C4%ABdolas%20iela%206%2C%20Liep%C4%81ja%2C%20LV-3402!5e0!3m2!1slv!2slv!4v1687319599492!5m2!1slv!2slv" width="100%" height="600px"  style="border:0; padding-left:0px; padding-right:0px; padding-bottom:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php include('footer.php'); ?> <!-- Pievieno footeri. -->

<style>
    .custom-button {
    width: 200px;
    padding: 10px;
    margin-bottom: 10px;
    background-color: darkred;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
    align: center;
    position: center;
    display: block;
  text-align: center;
  padding: 10px 20px;
  margin: 20px auto;
}

.custom-button:hover {
    background-color: #885050!important;
    color: white;
}
.bildite {
  display: flex;
  justify-content: right;
  align-items: center;
  height: 100px;
  z-index: -10;
}

.center-left {
  margin-right: auto;
}
    </style>