<STYLE>
  .mazieTabulasAtteli {
    height: 300px!important;
    width: 500px!important;
  }
</STYLE>

<?php $page = "blogs"; include('header1.php'); ?> <!-- Identificē lapusi -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
        </thead>
        <tbody>
          <?php
          require("connect_db.php");

          $visiblogiVaicajums = 'SELECT * FROM blogs a LEFT JOIN lietotaji b ON a.id_lietotaji = b.lietotaji_id ORDER BY pievienosanas_datums DESC';
          $atlasaVisusblogus = mysqli_query($savienojums, $visiblogiVaicajums) or die("Nekorekts vaicājums!");

          $counter = 0;
          if (mysqli_num_rows($atlasaVisusblogus) > 0) {
            echo "<tr>"; // Start the first row

            while ($row = mysqli_fetch_assoc($atlasaVisusblogus)) {
              echo "
              <td>
                <div class='item'>
                  <img class='mazieTabulasAtteli img-fluid' src='{$row['attels']}' alt=''>
                  <div class='caption'>{$row['virsraksts']}</div>
                  <div class='date'>{$row['pievienosanas_datums']}</div>
                  <button class='btn btn-primary'>Lasīt vairāk</button>
                </div>
              </td>
              ";

              $counter++;

              
              if ($counter % 3 == 0) {
                echo "</tr><tr>";
              }
            }

            
            if ($counter % 3 != 0) {
              echo "</tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('footer.php'); ?> <!-- Pievieno footeri. -->