<?php
  // db domande e risposte
  $faq = [
    [
      "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
      "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa.
                    La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per  poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
    ],
  ];
?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google Faq</title>
  </head>

  <body>

    <div class="container">

          <!-- lista di stampa -->
          <ul>

              <?php foreach ($faq as $key => $text): ?>

                <li>
                  <h2><?php echo $text["question"] ?></h2>
                  <p><?php echo $text["answer"] ?></p>
                </li>

              <?php endforeach; ?>

          </ul>
          <!--// lista di stampa -->

    </div>

  </body>
</html>
