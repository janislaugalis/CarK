<?php include('header1.php'); ?>
<!-- Identificē lapusi -->
<!DOCTYPE html>
<html lang="lv">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car K</title>
    <link rel="stylesheet" href="/CarK/assets/Style/style.css">
    <link rel="stylesheet" href="/CarK/assets/Style/hederis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="page">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h3>Sazinies ar mums</h3>
              <div class="row">
                <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                  <div class="col-md-6 margin-15">
                    <div class="form-group">
                      <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                    </div>
                    <div class="form-group">
                      <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                    </div>
                    <div class="form-group">
                      <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea cols="6" rows="5" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                      <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Sazināties">
                    </div>
                  </div>
                </form>
              </div>
              <div class="clearfix"></div>
              <div id="message"></div>
            </div>
            <div class="col-md-6 col-sm-6">
            	<h3>Mūsu atrašanās vieta</h3>
              <div class="padding-as25 lgray-bg">
                    <p class="big">Nearby Street, Hudson Lane<br>
                     PO Box. 908509<br>
                     New York - USA</p>
                  <p>Email us at <a href="mailto:sales@realspaces.com"><strong>sales@realspaces.com</strong></a> or Call us on <strong>080 378678 90</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?> <!-- Pievieno footeri. -->