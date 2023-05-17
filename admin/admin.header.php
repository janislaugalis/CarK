<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabiedrisko transportu administrēšana</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header> <!-- Izveido headeri, pievieno visas lapaspuses. Pievieno to fontu, pievieno nosaukumu. -->
        <a href="index.php" class="logo">Autobusu parks</a>
        <nav class="navbar">
            <a href="index.php" class="<?php echo($page == "sakums" ? "active" : "");?>"><i class="fas fa-home"></i> Sākumlapa</a>
            <a href="biletes.php" class="<?php echo($page == "biletes" ? "active" : "");?>"><i class="far fa-folder"></i> Biļetes</a>
            <a href="marsruti.php" class="<?php echo($page == "marsruti" ? "active" : "");?>"><i class="fas fa-bus"></i> Maršruti</a>
            <a href="pieturas.php" class="<?php echo($page == "pieturas" ? "active" : "");?>"><i class="far fa-newspaper"></i> Pieturas</a>
            <a href="klienti.php" class="<?php echo($page == "klienti" ? "active" : "");?>"><i class="fas fa-users"></i> Klienti</a>
            <a href="Soferi.php" class="<?php echo($page == "Soferi" ? "active" : "");?>"><i class="fas fa-id-card"></i> Šoferi</a>
        </nav>

        <nav class="navbar"> <!-- Izlogošanās iespēja. Kad lietotājs uzspiedīs uz izvēlētās logout ikonas, lietotāju pārvietos uz "location:login.php" -->
            <?php
                session_start();
                if(isset($_SESSION['username'])){
                    echo "<span class='lietotajs'><i class='fas fa-user-tie'></i> ".$_SESSION['username']."</span>";
                }else{
                    echo 'error';
                }
            ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
        <?php
                    if(isset($_SESSION['username'])){
                    }else{
                        echo "Nebūs !";
                        header("location:login.php");
                    }
                ?>
    </header>