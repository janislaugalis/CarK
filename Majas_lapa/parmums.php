<style>
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 150vh;
    }

    .content {
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        margin-bottom: 300px;
    }

    .col-md-6,
    .col-sm-6 {
        margin-bottom: 20px;
    }

    .accordion-group {
        margin-bottom: 20px;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .accordion-toggle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background-color: #f9f9f9;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .accordion-toggle:hover {
        background-color: #e0e0e0;
    }

    .accordion-body {
        padding: 20px;
        background-color: #fff;
    }

    .heading-icon {
        margin-right: 10px;
    }

    .block-heading {
        text-align: center;
        margin-bottom: 30px;
    }

    .block-heading h4 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .togglize {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background-color: #f9f9f9;
        color: #333;
        text-decoration: none;
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .togglize:hover {
        background-color: #e0e0e0;
    }

    .togglize i {
        font-size: 18px;
    }

    .accordion-inner {
        padding: 10px;
    }
    .fa{
        padding-left: 20px;
    }
    #parmums_bilde{
        height: 500px;
        width: 600px;
    }
</style>
<?php include('header1.php'); ?>
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="page">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Par mums</h3>
                        <p class="pt-30px">Mums ir lojāls pastāvīgo klientu loks, mēs esam pilnveidojuši savas zināšanas klientu vēlmju apmierināšanas jautājumos, kā arī uzlabojuši sniegto pakalpojumu klāstu.</p>
                        <img src="/CarK/assets/Bildes/parmums.png" id="parmums_bilde" alt="Par mums bilde">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Kāpēc mēs ?</h3>
                        <!-- akordions -->
                        <div class="accordion" id="accordionArea">
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize">
                                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
                                        Esam cilvēki ar pieredzi. <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="oneArea" class="accordion-body in collapse">
                                    <div class="accordion-inner">Pārzinam šo jomu ilgi. Esam eksperti un līderi autonomu sfērā.</div>
                                </div>
                            </div>
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea">
                                        Draudzīgi darbinieki un labvēlīga atmosfēra. <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="twoArea" class="accordion-body collapse">
                                    <div class="accordion-inner">Mūsu darbinieki garantēs labāko apkalpošanas servisu, kuri nebaidās atbildēt uz jautājumiem un sasmērēt rokas uz ceļa.</div>
                                </div>
                            </div>
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea">
                                        Paziņojumi un informācija. <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="threeArea" class="accordion-body collapse">
                                    <div class="accordion-inner">Mēs nekad neslēpjam informāciju, vienmēr paziņojam mūsu klientiem aktuālāko informāciju par autonomu un rēķiniem.</div>
                                </div>
                            </div>
                        </div>
                        <!-- beiidzas akordions -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-heading">
                            <h4>
                                <span class="heading-icon"><i class="fa fa-car"></i></span>CarK autonomas pakalpojumi
                            </h4>
                            <p> Auto noma CarK ir viena no pazīstamākajām vieglo automašīnu nomām Latvijā. Pateicoties auto nomas CarK lielajai pieredzei auto nomas tirgū, ir iepazītas klientu vajadzības un vēlmes, izstrādāta ērta sistēma, kā rezervēt automašīnu un pēc tam to atdot auto nomas pārstāvjiem, un izveidots plašs un daudzveidīgs vieglo auto parks ar vairāk kā 50 automašīnām.</p>
                        </div>
                        <div class="accordion" id="toggleArea">
                            <div class="accordion-group panel">
                                <div class="accordion-heading togglize">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">
                                    Vieglo automašīnu noma <i class="fa fa-plus-circle"></i> <i class=""></i>
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse">
                                    <div class="accordion-inner">CARK PIEDĀVĀ VIEGLO AUTOMAŠĪNU NOMU NO VAIRĀK NEKĀ 50 DAŽĀDU MARKU AUTOMAŠĪNĀM.​ </div>
                                </div>
                            </div>
                            <div class="accordion-group panel">
                                <div class="accordion-heading togglize">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">
                                        Šofera pakalpojumi <i class="fa fa-plus-circle"></i> <i class=""></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner"> CARK PIEDĀVĀ ŠOFERU PAKALPOJUMUS LATVIJĀ. BRAUCIET AR MIERU UN ĒRTĪBĀM, UZTICOTIES MŪSU PROFESIONĀLAJIEM ŠOFERIEM.</div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading togglize">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">
                                        Ilgtermiņa noma <i class="fa fa-plus-circle"></i> <i class=""></i>
                                    </a>
                                </div>
                                <div id="collapseThird" class="accordion-body collapse">
                                    <div class="accordion-inner"> ILGTERMIŅA NOMA NO 2 LĪDZ 12 MĒNEŠIEM. MAKSĀJUMI VEICAMI VIENU REIZI MĒNESĪ. PĒC 6 MĒNEŠU VEIKSMĪGAS SADARBĪBAS IESPĒJAMAS ATLAIDES.</div>
                                </div>
                            </div>
                        </div>
                        <!-- beidzas toggle-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?> <!-- Pievieno footeri. -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/CarK/assets/js/acordion.js"></script>
  <script src="/CarK/assets/js/toggle.js"></script>