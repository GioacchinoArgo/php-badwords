<?php
//TODO - COSE DA FARE / SCALETTA
//~ 1 - Recuperare le chiavi degli elementi del form e successivamente assegnargli delle variabili.
//~ 2 - Riassegnare le variabili e utilizzare il trim su entrambe in maniera tale che eventuali spazi non influiscano nella conta dei caratteri.
//~ 3 - Stabilire una nuova variabile per il nuovo paragrafo censurato tramite la funzione str_replace.
//~ 4 - Costruire successivamente i messaggi riguardanti il numero di caratteri contenuti, sia nel paragrafo originale che in quello censurato.
//~ 5 - Stampare in pagina.

/* ------------------------------------ */

//# RACCOLTA DI TUTTI GLI ELEMENTI
//* 1 - Recupero gli elementi con il metodo GET.
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];


//# EFFETIVO SVOLGIMENTO DELL'ESERCIZIO
//* 2 - Riassegno entrambe le variabili ed utilizzo il trim.
$badword = trim($badword);
$paragraph = trim($paragraph);

//* 3 - Stabilisco una nuova variabile per il nuovo paragrafo censurato tramite la funzione str_replace.
$censored_paragraph = str_replace($badword, '***', $paragraph);

//* 4 - Costruisco i messaggi con l'effettivo numero dei caratteri utilizzo la funzione strlen.
$paragraph_length = 'La lunghezza della stringa è di: ' . strlen($paragraph) . ' caratteri';
$censored_paragrap_length = 'La lunghezza della nuova stringa è di: ' . strlen($censored_paragraph) . ' caratteri';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

    <!-- 5 - Stampo in pagina -->
    <p><?=$paragraph_length ?></p>
    <p><?= $paragraph ?></p>
    <p><?=$censored_paragrap_length ?></p>
    <p><?= $censored_paragraph ?></p>
</body>
</html>