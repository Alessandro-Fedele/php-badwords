<?php
    // Variabile con paragrafo
    $p = "Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura
    ché la diritta via era smarrita.
    Ahi quanto a dir qual era è cosa dura
    esta selva selvaggia e aspra e forte
    che nel pensier rinova la paura!
    Tant’è amara che poco è più morte;
    ma per trattar del ben ch’i’ vi trovai,
    dirò de l’altre cose ch’i’ v’ho scorte.
    Io non so ben ridir com’i’ v’intrai,
    tant’era pien di sonno a quel punto
    che la verace via abbandonai.";

    // Metodo GET
    $badword = $_GET["badword"];

    // Paragrafo modificato con ***
    $modP = str_replace($badword, "***",$p);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- Stringa originale con lunghezza -->
    <p><?php echo $p ?></p>
    <p>Il paragrafo è lungo <?php echo strlen($p) ?> caratteri.</p>
    <hr>
    <!-- Stringa modificata -->
    <!-- http://localhost/php-badwords/index.php?badword=tuaparola -->
    <h3>Censura la tua parola "badword"</h3>
    <h4>Es. "http://localhost/php-badwords/index.php?badword=tuaparola"</h4>
    <h3>Hai censurato la parola: <?php echo $badword ?></h3>
    <p><?php echo $modP ?></p>
    <p>Il paragrafo ora è lungo <?php echo strlen($modP) ?> caratteri.</p>
</body>
</html>