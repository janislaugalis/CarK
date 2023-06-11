<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarK administrācija</title>
    <link rel="stylesheet" href="/CarK/admin/admin.style/admin.style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header> <!-- Izveido headeri, pievieno visas lapaspuses. Pievieno to fontu, pievieno nosaukumu. -->
        <a href="admin.index.php" class="logo">CarK</a>
        <nav class="navbar">
            <a href="admin.index.php" class="<?php echo($page == "sakums" ? "active" : "");?>"> Sākumlapa</a>
            <a href="admin.automasinas.php" class="<?php echo($page == "automasinas" ? "active" : "");?>"> Automašīnas</a>
            <a href="admin.pieteikumi.php" class="<?php echo($page == "pieteikumi" ? "active" : "");?>"></i> Pieteikumi</a>
            <a href="admin.blogs.php" class="<?php echo($page == "blogs" ? "active" : "");?>"></i> Blogs</a>
            <a href="admin.klienti.php" class="<?php echo($page == "klienti" ? "active" : "");?>"></i> Klienti</a>

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
            <a href="admin.logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
        <?php
                    if(isset($_SESSION['username'])){
                    }else{
                        echo "Nebūs !";
                        header("location:admin.login.php");
                    }
                ?>
    </header>