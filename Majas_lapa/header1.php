<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car-K</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="/CarK/assets/Style/hederis.css">
    <link rel="shortcut icon" href="" type="ikona">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/CarK/assets/Style/style.css">
    <link rel="stylesheet" href="/CarK/assets/Style/hederis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

    </style>

</head>

<body>
    <header>
        <div class="header">
            <h1 class="logo">
                <a href="index.php"><img src="/CarK/assets/Bildes/logo.png" alt="Logo"></a>
            </h1>
            <div class="kontakti">
                <div>
                    <i class="fa fa-phone"></i>
                    <span>+371 26573440</span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>cark@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="navigacija">
            <ul>
                <li><a href="index.php" class="<?php echo ($page == "sakums" ? "active" : ""); ?>"><i
                            class="fas fa-home"></i>Sākums</a></li>
                <li><a href="parmums.php" class="<?php echo ($page == "automasinas" ? "active" : ""); ?>"><i
                            class="far fa-folder"></i>Par Car K</a></li>
                <li><a href="katalogs.php" class="<?php echo ($page == "pieteikumi" ? "active" : ""); ?>"><i
                            class="fas fa-bus"></i>Autonoma</a></li>
                <li><a href="buj.php" class="<?php echo ($page == "blogs" ? "active" : ""); ?>"><i
                            class="far fa-newspaper"></i>BUJ</a></li>
                <li><a href="kontakti.php" class="<?php echo ($page == "klienti" ? "active" : ""); ?>"><i
                            class="fas fa-users"></i>Kontakti</a></li>
                <li><a href="blogs.php" class="<?php echo ($page == "blogs" ? "active" : ""); ?>"><i
                            class="fas fa-users"></i>Blogs</a></li>
            </ul>
        </div>
    </header>
</body>

</html>