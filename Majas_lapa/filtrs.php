<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CarK/assets/Filtrs/style.css">
    <link rel="stylesheet" href="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/themes/classic.css">
    <link rel="stylesheet" href="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/themes/classic.date.css">
    <link rel="stylesheet" href="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/themes/classic.time.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div class="container-fluid mekletajs gx-0">
	<div class="row">
		<div class="col">
			<form class="container ">
				<div class="row">
					<div class="col-md-12 col-12 p-4">
						<div class="row">
							<div class="col-md col-12">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0 sanemsana">
										<label class="w-100 d-block"> Saņemšanas vieta </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col izmers p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-location-dot ikona "></i>
												</div>
												<div class="col-md-9 col-10 p-0 pe-3">
													<div id="input-box">
														<input id="input1" placeholder="Ievadi adresi" >
														<button type="button" id="close1"> <i class="fa-solid fa-xmark xmark"></i> </button>
													</div>
													<select class="w-100" onchange="selection()" id="select1" required>
														<option value="1">Stabu iela 51A-14</option>
														<option value="2">Lidosta "Rīga"</option>
														<option value="0">Adrese Rīgā</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md col-12">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0 nodosana">
										<label class="w-100 d-block"> Nodošanas vieta </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col izmers p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-location-dot ikona "></i>
												</div>
												<div class="col-md-9 col-10 p-0 pe-3">
													<div id="input-box2">
														<input id="input2" placeholder="Ievadi adresi" >
														<button type="button" id="close2"><i class="fa-solid fa-xmark xmark"></i></button>
													</div>
													<select class="w-100" onchange="selection2()" id="select2" required>
														<option value="1">Stabu iela 51A-14</option>
														<option value="2">Lidosta "Rīga"</option>
														<option value="0">Adrese Rīgā</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-datums col-12">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0">
										<label class="w-100 d-block"> Rezervācija no </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-calendar-days ikona"></i>
												</div>
												<div class="col-md-8 col-10 p-0 pe-3">
													<input id="datums1" class="sanemsanadat datumsno" type="date" name="sanemsanas_datums" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-laiks col-md-12 col-12 sanemsanalaiks">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0">
										<label class="w-100 d-block"> Pulkstens </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-clock ikona"></i>
												</div>
												<div class="col-md-7 col-10 p-0 pe-3">
													<input id="laiks1" class="sanemsanalaiks laiksno" type="time" name="sanemsanas-laiks" value="10:00" requare />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-datums col-12">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0">
										<label class="w-100 d-block"> Rezervācija līdz </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-calendar-days ikona"></i>
												</div>
												<div class="col-md-8 col-10 p-0 pe-3">
													<input id="datums2" class="sanemsanadat datumslidz" type="date" name="sanemsanas_datums" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-laiks col-md-12 col-12 laiks">
								<div class="row p-md-0 p-3">
									<div class="col-md-12 col-12 p-0 pe-md-3 pe-0">
										<label class="w-100 d-block"> Pulkstens </label>
										<div class="input-holder">
											<div class="row">
												<div class="col-md col iespejas p-0 d-flex justify-content-center align-items-center">
													<i class="fa-solid fa-clock ikona"></i>
												</div>
												<div class="col-md-7 col-10 p-0 pe-3">
													<input id="laiks2" class="sanemsanalaiks laikslidz" type="time" name="sanemsanas-laiks" value="10:00" requare/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-12 d-flex align-items-end">
								<button id="meklet" type="button" class="btn btn-primary w-100"><i class="fa-solid fa-magnifying-glass poga"></i>MEKLĒT</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/picker.js"></script>
<script src="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/picker.date.js"></script>
<script src="/CarK/assets/Filtrs/js/pickadate.js-3.6.2/lib/picker.time.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
    
<script src="/CarK/assets/Filtrs/script.js"></script>