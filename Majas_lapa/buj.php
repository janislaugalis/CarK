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
      <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea"> Accordion Panel #1 <i class="fa fa-angle-down"></i> </a> </div>
      <div id="oneArea" class="accordion-body in collapse">
        <div class="accordion-inner"> tekststekststekststekststeksts </div>
      </div>
    </div>
    <div class="accordion-group panel">
      <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea"> Accordion Panel #2 <i class="fa fa-angle-down"></i> </a> </div>
      <div id="twoArea" class="accordion-body collapse">
        <div class="accordion-inner"> tekststekststekststekststekststeksts </div>
      </div>
    </div>
    <div class="accordion-group panel">
      <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea"> Accordion Panel #3 <i class="fa fa-angle-down"></i> </a> </div>
      <div id="threeArea" class="accordion-body collapse">
        <div class="accordion-inner"> tekststekststekststekststeksts </div>
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
