<!DOCTYPE html>
<html lang="lv">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--  -->
    <link rel="stylesheet" href="/CarK/assets/booking/style.css">
    <link rel="stylesheet" href="/CarK/assets/booking/jquery.step.main.css">
    <link rel="stylesheet" href="/CarK/assets/booking/jquery.steps.css">
    <link rel="stylesheet" href="/CarK/assets/booking/normalize.css">
    <link rel="stylesheet" href="js/pickadate.js-3.6.2/lib/themes/classic.css">
    <link rel="stylesheet" href="js/pickadate.js-3.6.2/lib/themes/classic.date.css">
    <link rel="stylesheet" href="js/pickadate.js-3.6.2/lib/themes/classic.time.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="booking-container">
        <div class="header">
        </div>

        <form id="example-form" action="#">
            <div id="wizard">
                <h3> </h3>
                <section>
                    <h4 class="booking-title">Rezervācijas datumi un laiki</h4>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <span class="small-booking-text">Rezervācija no <i
                                        class="fa-solid fa-pencil"></i></span>
                                <div class="row input-field-row">
                                    <div class="col-md-7 d-flex align-items-center">
                                        <div class="row p-md-0 p-3">
                                            <div
                                                class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-calendar-days ikona"></i>
                                            </div>
                                            <div class="col-md-9 col-10 p-0">
                                                <input class="sanemsanadat datumsno" type="date"
                                                    name="sanemsanas-datums" placeholder="dd-mm-yyyy" value=""
                                                    min="1997-01-01" max="2030-12-31">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row p-md-0 p-3">
                                            <div
                                                class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-clock ikona"></i>
                                            </div>
                                            <div class="col-md-8 col-10 p-0 pe-3 br-1">
                                                <input class="sanemsanalaiks laiksno" type="time"
                                                    name="sanemsanas-laiks" value="10:00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <span class="small-booking-text">Saņemšanas vieta <i
                                        class="fa-solid fa-pencil"></i></span>
                                <div class="row input-field-row-2">
                                    <div class="col-md col izmers p-0 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-location-dot ikona "></i>
                                    </div>
                                    <div class="col-md-11 sanemsana">
                                        <div id="input-box">
                                            <input id="input1" placeholder="Ievadi adresi">
                                            <button type="button" id="close1"> <i class="fa-solid fa-xmark xmark"></i>
                                            </button>
                                        </div>
                                        <select class="" onchange="selection()" id="select1">

                                        <option value="1">Enkurs</option>
                                        <option value="2">Lidosta "Liepāja"</option>
                                        <option value="0">Adrese Liepājā</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-7">
                            <div class="row">
                                <span class="small-booking-text">Rezervācija līdz <i
                                        class="fa-solid fa-pencil"></i></span>
                                <div class="row input-field-row">
                                    <div class="col-md-7 d-flex align-items-center">
                                        <div class="row p-md-0 p-3">
                                            <div
                                                class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-calendar-days ikona"></i>
                                            </div>
                                            <div class="col-md-9 col-10 p-0">
                                                <input class="sanemsanadat datumsno" type="date"
                                                    name="sanemsanas-datums" placeholder="dd-mm-yyyy" value=""
                                                    min="1997-01-01" max="2030-12-31">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row p-md-0 p-3">
                                            <div
                                                class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-clock ikona"></i>
                                            </div>
                                            <div class="col-md-8 col-10 p-0 pe-3 br-1">
                                                <input class="sanemsanalaiks laiksno" type="time"
                                                    name="sanemsanas-laiks" value="10:00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <span class="small-booking-text">Nodošanas vieta <i
                                        class="fa-solid fa-pencil"></i></span>
                                <div class="row input-field-row-2">
                                    <div class="col-md col izmers p-0 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-location-dot ikona "></i>
                                    </div>
                                    <div class="col-md-11 nodosana">
                                        <div id="input-box2">
                                            <input id="input1" placeholder="Ievadi adresi">
                                            <button type="button" id="close2"> <i class="fa-solid fa-xmark xmark"></i>
                                            </button>
                                        </div>
                                        <select class="" onchange="selection2()" id="select2">

                                        <option value="1">Enkurs</option>
                                        <option value="2">Lidosta "Liepāja"</option>
                                        <option value="0">Adrese Liepājā</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 border-top-bottom py-2">
                        <div class="col-md-8">
                            <span class="total d-block">Kopā</span>
                            <span class="total-description d-block">*ar 15% atlaidi rezervējot un apmaksājot
                                internetā</span>
                        </div>
                        <div class="col-md-4">
                            <span class="price d-block w-100">
                                €400*
                            </span>
                        </div>
                    </div>

                </section>
                <h3> </h3>
                <section>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="booking-title">Papildus aprīkojums</h4>
                            <div class="row">
                                <div class="col-12">


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                TomTom navigācijas ierīce
                                            </span>
                                            <span class="aprikojuma-cena">
                                                +3.00€/dienā
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                Bērnu sēdeklītis
                                            </span>
                                            <span class="aprikojuma-cena">
                                                +19.00€
                                            </span>
                                        </label>
                                    </div>




                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                Otrs vadītājs
                                            </span>
                                            <span class="aprikojuma-cena">
                                                +19.00€
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                Apdrošināšana
                                            </span>
                                            <span class="aprikojuma-cena">
                                                +9.00€/dienā
                                            </span>
                                        </label>
                                    </div>




                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                Izbraukšana uz LT, EE
                                            </span>
                                            <span class="aprikojuma-cena">
                                                +9.00€/dienā
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <span class="aprikojuma-nosaukums">
                                                Auto atdošana ar tukšu degvielas bāku
                                            </span>
                                            <span class="aprikojuma-cena">
                                                199.00€
                                            </span>
                                        </label>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 border-top-bottom py-2">
                        <div class="col-md-8">
                            <span class="rezervacija d-block">Papildus aprīkojums:</span>
                            
                        </div>
                        <div class="col-md-4">
                            <span class="nomas-maksa d-block w-100 text-end">
                                €139
                            </span>
                        </div>
                    </div>

                </section>
                <h3> </h3>
                <section>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="booking-title">Rezervācija</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row  border-bottom py-2">
                                        <div class="col-md-8 ">
                                            <span class="rezervacija"> Autonomašīnas nomas maksa:</span> 

                                        </div>
                                        <div class="col-md-4">
                                            <span class="nomas-maksa d-block w-100 text-end">
                                                €248
                                            </span> 
                                        </div>
                                    </div>
                                    <div class="row  border-bottom py-2">
                                        <div class="col-md-8 ">
                                            <span class="rezervacija"> Autonomašīnas nomas maksa:</span> 

                                        </div>
                                        <div class="col-md-4">
                                            <span class="nomas-maksa d-block w-100 text-end">
                                                €248
                                            </span> 
                                        </div>
                                    </div>


                                    <div class="row mt-5 border-top-bottom py-2">
                                        <div class="col-md-8">
                                            <span class="total d-block">Kopā</span>
                                            <span class="total-description d-block">*ar 15% atlaidi rezervējot un
                                                apmaksājot internetā</span>
                                        </div>
                                      
                                        <div class="col-md-4">
                                        <span class="price d-block w-100">
                                                €400
                                            </span> 
                                        </div>
                                        </div>

                                    </div>
                                        <div class="col-md-6">
                                        <form action="apmaksa.php?automasinas_id=<?php echo $row['automasinas_id']; ?>" method="POST">
                                            
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

            </div>
        </form>
    </div>
    

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"
    integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/CarK/assets/booking/script.js"></script>
