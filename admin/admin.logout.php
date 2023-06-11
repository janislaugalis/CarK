<?php // Ja tiek izpildīta izlogošanās funkcija, lietotājs tiek novirzīts uz login.php lapu !
    session_start();

    if(session_destroy()){
        header("Location: admin.login.php");
    }
?>