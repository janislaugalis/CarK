<!DOCTYPE html>
<html lang="lv">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarK</title>
    <!-- <link rel="shortcut icon" href="/CarK/admin/admin.images/favicon.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="/CarK/admin/admin.style/admin.login_style.css"> <!--  Savieno tieši login ar login_style.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div id="login"> <!--  Izveido login boksu, kurā tiks prasīta informācija: login, password. -->
      <form name='form-login' method='post'>
                       <h1>Administrātora Pievienošanās</h1>
        <span class="fas fa-user-lock"></span>


        <input type="text" name="lietotajvards" id="user" placeholder="Lietotājvārds">

        <span class="fas fa-lock"></span>


        <input type="password" name="parole" id="pass" placeholder="Parole">
    

        <input type="submit" name="autorizacija" value="Ielogoties">

        <?php
          if(isset($_POST["autorizacija"])){
            require("../Majas_lapa/connect_db.php");
            session_start();
                   // Pārbauda no datu bāzes lietotāja lietotājvārdu un tā paroli.
            $Lietotajvards = mysqli_real_escape_string($savienojums, $_POST["lietotajvards"]);
            $Parole = mysqli_real_escape_string($savienojums, $_POST["parole"]);
            $sqlVaicajums = "SELECT * FROM lietotaji WHERE lietotajvards = '$Lietotajvards' ";
            $rezultats = mysqli_query($savienojums, $sqlVaicajums);

            if (mysqli_num_rows($rezultats) == 1){ 
                while($row = mysqli_fetch_array($rezultats)){
                    if(password_verify($Parole, $row["parole"])){ // Pieņem tikai šifrētās paroles. 
                        $_SESSION["username"] = $Lietotajvards;
                        header("location:admin.index.php"); // Ja lietotājs ir ievadījis pareizu paroli un lietotājvārdu tiek novirzīts uz admin.index.php
                    }else{
                        echo "<div class='error'><i class='fas fa-exclamation-circle'></i> Nepareizi dati! </div>";
                    }
                }
            }else{ // Pretējais iepriekšējam komentāram
                echo "<div class='error'><i class='fas fa-exclamation-circle'></i> Nepareizi dati! </div>";
            }
          }

          if(isset($GET['logout'])){ 
            session_destroy();
          }
        ?>
      </form>
    </div>
</body>
</html>