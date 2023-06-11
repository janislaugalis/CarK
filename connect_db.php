<?php // norāda datus, lai izveidotu savienojumu ar datu bāzi
    $serveravards = "local";
    $lietotajvards = "metadigi_cark";
    $parole = "a}gO=!WIZY*D";
    $dbvards = "metadigi_cark"; // mainot šo tiek norādīts datu bāzes nosaukums ar kuru lietotājs vēlas izveidot savienojumu

    $savienojums = mysqli_connect($serveravards, $lietotajvards, $parole, $dbvards);

    if (!$savienojums){
        die("Pieslēgties neizdevās: ".mysqli_connect_error());
    }else{
        //echo "Savienojums ar datu bāzi veiksmīgi izveidots!";
    }
?>