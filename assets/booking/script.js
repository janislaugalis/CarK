var $ = jQuery;

$("#wizard").steps({
    headerTag: "h3",

    bodyTag: "section",

    transitionEffect: "fade",

    enableAllSteps: true,

    enableFinishButton: false,
    enablePreviousButton: false,



    transitionEffectSpeed: 500,

    labels: {

        current: "",
        next: "Turpināt <i class='fa-solid fa-angle-right'></i>",
        previous: "<i class='fa-solid fa-angle-left'></i> Atgriezties",

    },

    onStepChanged: function (event, current, next) {
        if (current != 2) {
            $('.actions > ul > li:first-child').attr('style', '');
        } else {
            $('.actions > ul > li:first-child').attr('style', 'display:none');
        }
    },

});

// Custome Button Jquery Step
$('.forward').click(function () {
    $("#wizard").steps('next');
})

$(document).ready(function () {
    checkCookie();
    var now = new Date();
    if (getCookie("sanemsanas_datums") != "") {
        now = new Date(getCookie("sanemsanas_datums"));
        
    }else{
        now.setDate(now.getDate() + 1);
    }
    

	var day = ("0" + now.getDate()).slice(-2);
	var month = ("0" + (now.getMonth() + 1)).slice(-2);
	var today = now.getFullYear() + "-" + (month) + "-" + (day);
	$('#datums1').val(today);

	var date = new Date();  // add a day 

		date.setDate(date.getDate() + 1);



	$('#datums1').pickadate({
		onSet: function (context) {
			var $input = $('#datums1').pickadate()
			var picker = $input.pickadate('picker')
			var date2 = new Date(picker.get());
			date2.setDate(date2.getDate() + 1);
			var $input2 = $('#datums2').pickadate()
			var picker2 = $input2.pickadate('picker')
			picker2.clear().set({ min: date2 });
			var day = ("0" + date2.getDate()).slice(-2);
			var month = ("0" + (date2.getMonth() + 1)).slice(-2);
			var today = date2.getFullYear() + "-" + (month) + "-" + (day);
			$('#datums2').val(today);
			nomas_maksa();
		},
		monthsFull: ['Janvāris', 'Februāris', 'Marts', 'Aprīlis', 'Maijs', 'Jūnijs', 'Jūlijs', 'Augusts', 'Septembris', 'Oktobris', 'Novembris', 'Decembris'],
		monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
		weekdaysFull: ['Svētdiena', 'Pirmdiena', 'Otrdiena', 'Trešdiena', 'Ceturtdiena', 'Piektdiena', 'Sestdiena'],
		weekdaysShort: ['Svēt', 'Pirm', 'Otr', 'Treš', 'Cet', 'Piekt', 'Sestd'],
		today: 'Šodiena',
		clear: 'Notīrīt',
		close: 'Aizvērt',
		firstDay: 1,
		min: date,
		formatSubmit: 'yyyy-mm-dd', format: 'yyyy-mm-dd',

	});
	if (getCookie("nodosanas_datums") != "") {
		now = new Date(getCookie("nodosanas_datums"));

	}else{
		now.setDate(now.getDate() + 1);
	}
	var day = ("0" + now.getDate()).slice(-2);
	var month = ("0" + (now.getMonth() + 1)).slice(-2);
	var today = now.getFullYear() + "-" + (month) + "-" + (day);
	$('#datums2').val(today);


		date.setDate(date.getDate() + 1);


	$('#laiks1').pickatime({
		interval: 15, formatSubmit: 'HH:i', format: 'HH:i',
		clear: 'Notīrīt'
	});

	$('#datums2').pickadate({
		onSet: function (context) {
			nomas_maksa();
		},
		monthsFull: ['Janvāris', 'Februāris', 'Marts', 'Aprīlis', 'Maijs', 'Jūnijs', 'Jūlijs', 'Augusts', 'Septembris', 'Oktobris', 'Novembris', 'Decembris'],
		monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'],
		weekdaysFull: ['Svētdiena', 'Pirmdiena', 'Otrdiena', 'Trešdiena', 'Ceturtdiena', 'Piektdiena', 'Sestdiena'],
		weekdaysShort: ['Svēt', 'Pirm', 'Otr', 'Treš', 'Cet', 'Piekt', 'Sestd'],
		today: 'Šodiena',
		clear: 'Notīrīt',
		close: 'Aizvērt',
		firstDay: 1,
		min: date,
		formatSubmit: 'yyyy-mm-dd', format: 'yyyy-mm-dd',

	});

	$('#laiks2').pickatime({
		interval: 15, formatSubmit: 'HH:i', format: 'HH:i',
		clear: 'Notīrīt'
	});

	aprikojums();
	setDefaults();


	var date1 = $("#datums1").val();


	var date2 = $("#datums2").val();



	date1 = new Date(date1);
	date2 = new Date(date2);
	var milli_secs = date2.getTime() - date1.getTime();

	// Pārveido mili sekundes
	var days = milli_secs / (1000 * 3600 * 24);

	
	calculate();
});
$("#input-box").hide();

function setDefaults() {
    $("#aprikojuma-cena").html("0.00");
    $("#aprikojuma-cena2").html("0.00");
    $("#kopeja-aprikojuma-cena").val("0.00");
}

function selection() {
    var selected = document.getElementById("select1").value;
    if (selected == 0) {
        $("#input-box").show();
        $("#select1").hide();

    } else {
        $("#input-box").hide();
        $("#select1").show();
    }
}
$("#close1").click(function () {
    $("#input-box").hide();
    $("#select1").show();
    $("#select1").val("1");
});



$("#input-box2").hide();
function selection2() {
    var selected = document.getElementById("select2").value;
    if (selected == 0) {
        $("#input-box2").show();
        $("#select2").hide();


    } else {
        $("#input-box2").hide();
        $("#select2").show();
    }
}
$("#close2").click(function () {
    $("#input-box2").hide();
    $("#select2").show();
    $("#select2").val("1");
});



$("#meklet2").click(function () {

    setCookie("sanemsanas_vieta", $("#select1").find(":selected").val(), 1);
    setCookie("nodosanas_vieta", $("#select2").find(":selected").val(), 1);
    setCookie("custom_sanemsanas_vieta", $("#input1").val(), 1);
    setCookie("custom_nodosanas_vieta", $("#input2").val(), 1);
    setCookie("sanemsanas_datums", $("#datums1").val(), 1);
    setCookie("sanemsanas_laiks", $("#laiks1").val(), 1);
    setCookie("nodosanas_datums", $("#datums2").val(), 1);
    setCookie("nodosanas_laiks", $("#laiks2").val(), 1);


});
function getCookie(user) {
    var cookieArr = document.cookie.split(";");
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        if (user == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

function checkCookie() {
    var sanemsanas_vieta = getCookie("sanemsanas_vieta");
    var nodosanas_vieta = getCookie("nodosanas_vieta");
    var custom_sanemsanas_vieta = getCookie("custom_sanemsanas_vieta");
    var custom_nodosanas_vieta = getCookie("custom_nodosanas_vieta");
    var sanemsanas_datums = getCookie("sanemsanas_datums");
    var sanemsanas_laiks = getCookie("sanemsanas_laiks");
    var nodosanas_datums = getCookie("sanemsanas_vieta");
    var nodosanas_laiks = getCookie("nodosanas_laiks");
    if (sanemsanas_vieta != "") {
        $("#select1").val(sanemsanas_vieta);
        $("#select2").val(nodosanas_vieta);
        $("#input1").val(custom_sanemsanas_vieta);
        $("#input2").val(custom_nodosanas_vieta);
        $("#laiks1").val(sanemsanas_laiks);
        $("#laiks2").val(nodosanas_laiks);

        $("#datums1").val(sanemsanas_datums);





        selection2();
        selection();
         setdate(sanemsanas_datums,nodosanas_datums);

    } else {


    }
}

var cart = [];
var aprikojums_total = 0;

function aprikojums() {
    $(".aprikojums").change(function () {
        if ($(this).is(':checked')) {
            var nosaukums = $(this).attr("id");
            var cena = $(this).attr("price");
            var diena = $(this).attr("diena");
            var array = [nosaukums, cena, diena];
            cart.push(array);
            calculate();
        } else {
            var nosaukums = $(this).attr("id");
            cart = cart.filter(function (item) { return item[0] != nosaukums })
            calculate();
        }
    });
}

function calculate() {
    var temp = 0;
    for (var x = 0; x < cart.length; x++) {
        //console.log("array".cart[x])
        temp += parseFloat(cart[x][1]);
    }
    aprikojums_total = temp;

    $("#aprikojuma-cena").html(aprikojums_total.toFixed(2));
    $("#aprikojuma-cena2").html(aprikojums_total.toFixed(2));
    $("#kopeja-aprikojuma-cena").val(aprikojums_total.toFixed(2));
    total();
}


function total() {
    var masinas_cena = parseFloat($("#kopeja-masinas-cena").val());
    var aprikojuma_cena = parseFloat($("#kopeja-aprikojuma-cena").val());

    var kopa = masinas_cena + aprikojuma_cena;

    $("#kopa-apmaksai").val(kopa.toFixed(2));
    $("#total-price").html(kopa.toFixed(2));
    
}

function dienas() {

    var date1 = $("#datums1").val();


    var date2 = $("#datums2").val();



    date1 = new Date(date1);
    date2 = new Date(date2);
    var milli_secs = date2.getTime() - date1.getTime();

    // Convert the milli seconds to Days 
    var days = milli_secs / (1000 * 3600 * 24);

    console.log(days);
    return days;
}
function moreThanMonth(date1, date2) {
  const d1 = new Date(date1);
  const d2 = new Date(date2);
  const diffInDays = (d2.getTime() - d1.getTime()) / (1000 * 60 * 60 * 24);
  return diffInDays > 30;
}

function nomas_maksa() {
    let price_auto = 0;
	var date1 = $("#datums1").val();
    var date2 = $("#datums2").val();
    let day = dienas();
	moreThanMonth(date1, date2);
    if (day == 1) {
        price_auto = cena_1_diena;
    } else if (day == 2) {
        price_auto = cena_1_diena + cena_2_dienas;
    } else if (day == 3) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas;
    } else if (day == 4) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas + cena_4_dienas;
    } else if (day == 5) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas + cena_4_dienas + cena_5_dienas;
    } else if (day == 6) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas + cena_4_dienas + cena_5_dienas + cena_6_dienas;
    } else if (day == 7) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas + cena_4_dienas + cena_5_dienas + cena_6_dienas + cena_7_dienas;
    } else if (day >= 8 && !moreThanMonth(date1, date2)) {
        price_auto = cena_1_diena + cena_2_dienas + cena_3_dienas + cena_4_dienas + cena_5_dienas + cena_6_dienas + cena_7_dienas + ((day - 7) * cena_1_diena_klat);
	} else if (day >= 8 && moreThanMonth(date1, date2)) {
	  	price_auto = (cena_1_diena_klat - 1) * day;
	}
    $("#kopeja-masinas-cena").val(price_auto.toFixed(2));
    $(".price").html("€" + price_auto.toFixed(2) + "*");
    $(".auto-maksa").html("€" + price_auto.toFixed(2) + "*");
    calculate();
}


$("[name='apmaksat']").click(function(){
	if( $("#datums1").val() != "" && $("#laiks1").val() != "" && $("#datums2").val() != "" && $("#laiks2").val() != "" ){
		setCookie("sanemsanas_vieta",$("#select1").find(":selected").val(),1);
		setCookie("nodosanas_vieta",$("#select2").find(":selected").val(),1);
		setCookie("custom_sanemsanas_vieta",$("#input1").val(),1);
		setCookie("custom_nodosanas_vieta",$("#input2").val(),1);
		setCookie("sanemsanas_datums",$("#datums1").val(),1);
		setCookie("sanemsanas_laiks",$("#laiks1").val(),1);
		setCookie("nodosanas_datums",$("#datums2").val(),1);
		setCookie("nodosanas_laiks",$("#laiks2").val(),1);
	}
});

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
