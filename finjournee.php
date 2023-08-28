<?php
require_once("includes/header.php");
?>

<?php require_once("includes/classes/FinJourneeHandler.php"); ?>
<?php
$handler = new FinJourneeHandler($con);
$stats = $handler->postData();
?>

<div class="container mb-70">

  <div class="row">

  </div>
  <div class="row pt-2 mt-2">
    <div class="col s9 ">
      <h5 class="pt-2 mt-2">Statistiques</h5>
    </div>
  </div>

  <table class="highlight">
    <thead>
      <tr>
        <th> Agence</th>
        <!-- <th>NbreTrasactions</th> -->
        <th>Total Non Retiré</th>
        <th>Sous Total</th>
        <th>Frais Transfert(%)</th>
        <th>Reste Place Agence</th>
        <th>Reste Place Captital</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

      <div class="row">

        <?php

          $userId = $userLoggedInObj->getUserId();
          $city = $userLoggedInObj->getCity();
          if ($userId == 999) {
            echo $handler->getData();
          }else{
            echo $handler->getDataPerCity($city);
          }
        ?>

      </div>

    </tbody>
  </table>

</div>