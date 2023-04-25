$(document).ready(function () {
    var now = new Date();
    now.setDate(now.getDate() + 1);
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    $('.datumsno').val(today);


    var date = new Date();  // add a day 
    date.setDate(date.getDate() + 1);
    $('.datumsno').pickadate({
        onSet: function (context) {
            var $input = $('.datumsno').pickadate()
            var picker = $input.pickadate('picker')
            var date2 = new Date(picker.get());
            date2.setDate(date2.getDate() + 1);
            var $input2 = $('.datumslidz').pickadate()
            var picker2 = $input2.pickadate('picker')
            picker2.clear().set({ min: date2 });

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






});
$("#input-box").hide();
function selection() {
    var selected = document.getElementById("select1").value;
    if (selected == 0) {
        $("#input-box").show();
        $("#select1").hide();

    } else {
        //elsewhere actions
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
        //elsewhere actions
    }
}
$("#close2").click(function () {
    $("#input-box2").hide();
    $("#select2").show();
    $("#select2").val("1");
});

