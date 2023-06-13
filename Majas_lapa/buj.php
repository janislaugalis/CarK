<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>car K</title>
  <link rel="stylesheet" href="/CarK/assets/Style/style.css">
  <link rel="stylesheet" href="/CarK/assets/Style/hederis.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/CarK/assets/Style/acordion.css">
  <style>
    .navigation {
      width: 30%;
    }

    .accordion {
      width: 70%;
    }
  </style>
</head>

<body>
  <header>
    <?php include('header1.php'); ?>
  </header>

  <nav class="navigation">
    <ul>
      <li><a href="#">noteikumi</a></li>
      <li><a href="#">privātuma politika</a></li>
      <li><a href="#">cenas</a></li>
    </ul>
  </nav>

  <div class="accordion" id="accordionArea">
    <div class="accordion-group panel">
      <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">Vai ir iespējams rezervēt automašīnu ar interneta palīdzību? <i class="fa fa-angle-down"></i> </a> </div>
      <div id="oneArea" class="accordion-body in collapse">
        <div class="accordion-inner"> Jā, tas ir iespējams. Jūs to varat izdarīt mūsu mājaslapā sadaļā "Autonoma". Jums būtu obligāti jānorāda arī jūsu e-mail adrese, lai varam ar Jums sazināties sīkāku detaļu precizēšanai. </div>
      </div>
    </div>
    <div class="accordion-group panel">
      <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea"> Vai Jums ir ofiss ārpus Liepājas<i class="fa fa-angle-down"></i> </a> </div>
      <div id="twoArea" class="accordion-body collapse">
        <div class="accordion-inner"> Nē, mums nav ofiss lidostā, bet tas neliedz mums bezmaksas piegādāt automašīnu uz lidostu jebkurā Jums izdevīgākā diennakts laikā.</div>
      </div>
    </div>
    <div class="accordion-group panel">
      <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea"> Vai ir iespējams norēķināties citu valstu valūtā? <i class="fa fa-angle-down"></i> </a> </div>
      <div id="threeArea" class="accordion-body collapse">
        <div class="accordion-inner"> Jā, pastāv iespēja norēķināties ar kredītkartēm. Turklāt Jūs to varat veikt arī tad, ja automašīna tiek piegadāta uz Jūsu norādīto adresi.
Vienīgi, pirms Jūs pasūtat automašīnu, Jums būtu jāinformē, ka vēlaties veikt savstarpējos norēķinus ar kredītkarti. </div>
      </div>
    </div>
  </div>

  <footer>
    <?php include('footer.php'); ?>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/CarK/assets/js/acordion.js"></script>
</body>

</html>
