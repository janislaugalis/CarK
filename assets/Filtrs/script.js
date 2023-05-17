var $ = jQuery;

$(document).ready(function () {
     checkCookie();
   var now = new Date();
    if (getCookie("sanemsanas_datums") != -1) {
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
        $('#datumslidz').val(today);

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
    if (getCookie("nodosanas_datums") != -1) {
    now = new Date(getCookie("nodosanas_datums"));
   
}else{
    now.setDate(now.getDate() + 1);
	
}
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    $('.datumslidz').val(today);
	
    date.setDate(date.getDate() + 1);


    $('.laiksno').pickatime({
        interval: 15, formatSubmit: 'HH:i', format: 'HH:i',
        clear: 'Notīrīt'
    });

    $('.datumslidz').pickadate({

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
    $('.laikslidz').pickatime({
        interval: 15, formatSubmit: 'HH:i', format: 'HH:i',
        clear: 'Notīrīt'
    });
selection();





});
$("#input-box").hide();
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
    $("#select1").val("0");
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
    $("#select2").val("0");
});

$("#meklet").click(function(){
	var newdate1 = new Date($("#datums1").val()).getTime();
	var newdate2 = new Date($("#datums2").val()).getTime();
	var newDate3 =  newdate1[1]+"/"+ newdate1[0]+"/"+ newdate1[2]; 
	var newDate4 = newdate2[1]+"/"+ newdate2[0]+"/"+ newdate2[2]; 
	console.log("dat:"+newdate1);
	if (newdate1 < newdate2){
		if( $("#datums1").val() != "" && $("#laiks1").val() != "" && $("#datums2").val() != "" && $("#laiks2").val() != "" ){
console.log("dat:"+newdate1);
	setCookie("sanemsanas_vieta",$("#select1").find(":selected").val(),1);
	setCookie("nodosanas_vieta",$("#select2").find(":selected").val(),1);
	setCookie("custom_sanemsanas_vieta",$("#input1").val(),1);
	setCookie("custom_nodosanas_vieta",$("#input2").val(),1);
	setCookie("sanemsanas_datums",$("#datums1").val(),1);
	setCookie("sanemsanas_laiks",$("#laiks1").val(),1);
	setCookie("nodosanas_datums",$("#datums2").val(),1);
	setCookie("nodosanas_laiks",$("#laiks2").val(),1);
	
    window.location.href = "katalogs.php";
	}
		
		}

});

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(user) {
    var cookieArr = document.cookie.split(";");
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        if(user == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return -1;
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
 	 if (sanemsanas_vieta != -1) {
		  $("#select1").val(sanemsanas_vieta);
	  }
	 	 if (nodosanas_vieta != -1) {
	  $("#select2").val(nodosanas_vieta);
		 }
	 	 if (custom_sanemsanas_vieta != -1) {
	   $("#input1").val(custom_sanemsanas_vieta);
		 }
	 	 if (custom_nodosanas_vieta != -1) {
	  $("#input2").val(custom_nodosanas_vieta);
		 }
	if (sanemsanas_laiks != -1) {
	  $("#laiks1").val(sanemsanas_laiks); 
	}
	if (nodosanas_laiks != -1) {
	  $("#laiks2").val(nodosanas_laiks);
	}
	  
	  //$("#datums1").val(sanemsanas_datums);
	  selection2();
	  selection();
  }

function setdate(no,lidz) {
	var datumsno=new Date(no);
					    var day = ("0" + datumsno.getDate()).slice(-2);
    var month = ("0" + (datumsno.getMonth() + 1)).slice(-2);

    var today = datumsno.getFullYear() + "-" + (month) + "-" + (day);
			
			
		$('.datumsno').val(sanemsanas_datums);

	            var $input2 = $('.datumsno').pickadate();
            var picker2 = $input2.pickadate('picker');
            picker2.clear().set({ min: datumsno });
	
	

}