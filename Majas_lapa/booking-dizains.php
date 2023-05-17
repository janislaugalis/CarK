<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 123-->
    <link rel="stylesheet" href="/CarK/assets/booking/style/style.css">
    <link rel="stylesheet" href="/CarK/assets/booking/style/jquery.step.main.css">
    <link rel="stylesheet" href="/CarK/assets/booking/style/jquery.steps.css">
    <link rel="stylesheet" href="/CarK/assets/booking/style/normalize.css">
    <link rel="stylesheet" href="/CarK/assets/booking/js/pickadate.js-3.6.2/lib/themes/classic.css">
    <link rel="stylesheet" href="/CarK/assets/booking/js/pickadate.js-3.6.2/lib/themes/classic.date.css">
    <link rel="stylesheet" href="/CarK/assets/booking/js/pickadate.js-3.6.2/lib/themes/classic.time.css">
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


<div class="booking-container d-flex justify-content-center align-items-center">
    <div class="header">
    </div>
    <form id="booking" name="booking" method="POST">
        <div id="wizard">
            <h3> </h3>
            <section>
                <h4 class="booking-title">Rezervācijas datumi un laiki</h4>
                <div class="row">
                    <div class="col-pilots-7">
                        <div class="row">
                            <span class="small-booking-text">Rezervācija no <i class="fa-solid fa-pencil"></i></span>
                            <div class="row input-field-row">
                                <div class="col-md-6 d-flex align-items-center col-12">
                                    <div class="row p-md-0 pb-2 p-1">
                                        <div class="col-md col-2 iespejas p-0 d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-calendar-days ikona"></i>
                                        </div>
                                        <div class="col-md-9 col-10 p-0">
                                            <input id="datums1" class="sanemsanadat datumsno" type="date" name="sanemsanas-datums" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row p-md-0 p-1">
                                        <div class="col-md col-1 iespejas p-0 d-flex justify-content-start justify-content-md-center align-items-center">
                                            <i class="fa-solid fa-clock ikona"></i>
                                        </div>
                                        <div class="col-md-8 col-11 p-0 pe-3 br-1">
                                            <input id="laiks1" class="sanemsanalaiks laiksno" type="time" name="sanemsanas-laiks" value="10:00" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-pilots-5">
                        <div class="row pt-2 pt-md-0">
                            <span class="small-booking-text">Saņemšanas vieta <i class="fa-solid fa-pencil"></i></span>
                            <div class="row input-field-row-2">
                                <div class="col-md col-1 izmers p-0 d-flex justify-content-start justify-content-md-center align-items-center">
                                    <i class="fa-solid fa-location-dot ikona "></i>
                                </div>
                                <div class="col-md-11 col-11 sanemsana p-0">
                                    <div id="input-box">
                                        <input id="input1" placeholder="Ievadi adresi" name="custom_sanemsana">
                                        <button type="button" id="close1"> <i class="fa-solid fa-xmark xmark"></i>
                                        </button>
                                    </div>
                                    <select class="" onchange="selection()" id="select1"  name="sanemsanas_adrese">
                                        <option value="1">Stabu iela 51A-14</option>
                                        <option value="2">Lidosta "Rīga"</option>
                                        <option value="0">Adrese Rīgā</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-2 pt-md-4">
                    <div class="col-pilots-7">
                        <div class="row">
                            <span class="small-booking-text">Rezervācija līdz <i class="fa-solid fa-pencil"></i></span>
                            <div class="row input-field-row">
                                <div class="col-md-6 d-flex align-items-center col-12">
                                    <div class="row p-md-0 p-1 pb-2">
                                        <div class="col-md col-2 iespejas p-0 d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-calendar-days ikona"></i>
                                        </div>
                                        <div class="col-md-9 col-10 p-0">
                                            <input id="datums2" class="sanemsanadat datumslidz" type="date" name="nodosanas-datums" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row p-md-0 p-1">
                                        <div class="col-md col-1 iespejas p-0 d-flex justify-content-start justify-content-md-center align-items-center">
                                            <i class="fa-solid fa-clock ikona"></i>
                                        </div>
                                        <div class="col-md-8 col-11 p-0 pe-3 br-1">
                                            <input id="laiks2" class="sanemsanalaiks laikslidz" type="time" name="nodosanas-laiks" value="10:00" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-pilots-5">
                        <div class="row pt-2 pt-md-0">
                            <span class="small-booking-text">Nodošanas vieta <i class="fa-solid fa-pencil"></i></span>
                            <div class="row input-field-row-2">
                                <div class="col-md col-1 izmers p-0 d-flex justify-content-start justify-content-md-center align-items-center">
                                    <i class="fa-solid fa-location-dot ikona "></i>
                                </div>
                                <div class="col-md-11 col-11 nodosana p-0">
                                    <div id="input-box2">
                                        <input id="input2" placeholder="Ievadi adresi" name="custom_nodosana">
                                        <button type="button" id="close2"> <i class="fa-solid fa-xmark xmark"></i>
                                        </button>
                                    </div>
                                    <select class="" onchange="selection2()" id="select2" name="nodosanas_adrese">

                                        <option value="1">Stabu iela 51A-14</option>
                                        <option value="2">Lidosta "Rīga"</option>
                                        <option value="0">Adrese Rīgā</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 border-top-bottom py-2">
                    <div class="col-md-8 col-7">
                        <span class="total d-block">Kopā</span>
                        <span class="total-description d-block">*ar 15% atlaidi rezervējot un apmaksājot
                            internetā</span>
                    </div>
                    <div class="col-md-4 col-5">
                        <span class="price d-block w-100">
                           
                        </span>
                    </div>
                </div>
                <input	type="hidden" name="kopeja-masinas-cena" id="kopeja-masinas-cena" value="<?php echo getprice(); ?>">

            </section>
            <h3> </h3>
            <section>
                <div class="row">
                    <div class="col-12">
                        <h4 class="booking-title">Papildus aprīkojums</h4>
                        <div class="row">
                            <div class="col-12 ps-3">

								<?php
								foreach($aprikojums as $item){
								?>
									<div class="form-check">
										<input class="form-check-input aprikojums" type="checkbox" name="komplektacija[]" value="<?php echo $item->nosaukums;?>" id="<?php echo createSlug($item->nosaukums);?>" 
											   price="<?php echo $item->cena;?>" diena="<?php if($item->cena_par_dienu == "true"){ echo 'true'; }else{ echo 'false';} ?>">
										<label class="form-check-label" for="<?php echo createSlug($item->nosaukums); ?>">
											<span class="aprikojuma-nosaukums">
												<?php echo $item->nosaukums;?>
											</span>
											<span class="aprikojuma-cena">
												+<?php echo number_format((float)$item->cena, 2, '.', '');?>€<?php if($item->cena_par_dienu == "true"){echo '/dienā';}?>
											</span>
										</label>
									</div>
								<?php
								}
								?>
                               
                             <input	type="hidden" name="kopeja-aprikojuma-cena" id="kopeja-aprikojuma-cena">
							 <input	type="hidden" name="auto-id" id="auto-id" value="<?php echo get_the_ID();?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 border-top-bottom py-2">
                    <div class="col-md-8 col-7">
                        <span class="rezervacija d-block">Papildus aprīkojums:</span>

                    </div>
                    <div class="col-md-4 col-5">
                        <span class="nomas-maksa d-block w-100 text-end">
							€<span id="aprikojuma-cena"></span>
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
                                    <div class="col-md-8 col-7">
                                        <span class="rezervacija"> Autonomašīnas nomas maksa:</span>

                                    </div>
                                    <div class="col-md-4 col-5">
                                        <span class="auto-maksa d-block w-100 text-end">
                                            €<?php echo getprice(); ?>*
                                        </span>
                                    </div>
                                </div>
                                <div class="row  border-bottom py-2">
                                    <div class="col-md-8 col-7">
                                        <span class="rezervacija"> Cena par aprīkojumu:</span>

                                    </div>
                                    <div class="col-md-4 col-5">
                                        <span class="nomas-maksa d-block w-100 text-end">
                                            €<span id="aprikojuma-cena2"></span>
                                        </span>
                                    </div>
                                </div>


                                <div class="row mt-5 border-top-bottom py-2">
                                    <div class="col-md-8 col-7">
                                        <span class="total d-block">Kopā</span>
                                        <span class="total-description d-block">*ar 15% atlaidi rezervējot un
                                            apmaksājot internetā</span>
                                    </div>
                                    <div class="col-md-4 col-5">
                                        <span class="price2 d-block w-100">
											€<span id="total-price"></span>*
                                        </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn d-block w-100 mt-3  rezervacijas-poga1"
                                            type="button">Pieteikt rezervāciju</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn d-block w-100 mt-3  rezervacijas-poga2" name="apmaksat"
                                            type="submit">Rezervēt un apmaksāt</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<input type="hidden" name="kopa-apmaksai" id="kopa-apmaksai" value="<?php echo getprice(); ?>">
			<input type="hidden" name="auto_id" id="auto_id" value="<?php echo get_the_ID(); ?>">
			<input type="hidden" name="auto_nosaukums" id="auto_nosaukums" value="<?php echo get_the_title(); ?>">
            </section>

        </div>
    </form>
</div>

<script>
	var	cena_1_diena  = <?php echo (($cena_1_diena*0.85)*(1-($atlaide/100))); ?>;
	var cena_2_dienas = <?php echo (($cena_2_dienas*0.85)*(1-($atlaide/100))); ?>;
	var cena_3_dienas =<?php echo (($cena_3_dienas*0.85)*(1-($atlaide/100))); ?> ;
	var cena_4_dienas = <?php echo (($cena_4_dienas*0.85)*(1-($atlaide/100))); ?>;
	var cena_5_dienas = <?php echo (($cena_5_dienas*0.85)*(1-($atlaide/100))); ?>;
	var cena_6_dienas = <?php echo (($cena_6_dienas*0.85)*(1-($atlaide/100))); ?> ;
	var cena_7_dienas = <?php echo (($cena_7_dienas*0.85)*(1-($atlaide/100))); ?> ;
	var cena_1_diena_klat = <?php echo (($cena_1_diena_klat*0.85)*(1-($atlaide/100))); ?>;
	var atlaide = <?php if(empty($atlaide)){echo 0;}else {echo $atlaide;} ?>;   
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"
    integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/CarK/assets/booking/script.js"></script>
