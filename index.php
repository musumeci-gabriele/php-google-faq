<?php
  // db domande e risposte
  $faq = [
    [
      "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
      "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa.
                    La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per  poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
    ],
    [
      "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
      "answer" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi.
                    Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

                    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.

                    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.

                    Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
    ]
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
