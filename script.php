<?php

$p = "Non si intrometta! No, aspetti, mi porga l'indice, ecco lo alzi così... guardi, guardi, guardi, lo vede il dito? Lo vede che stuzzica, che prematura anche. E lei.. cosa si sente? Professore, non le dico. Antani come trazione per due anche se fosse supercazzola bitumata, ha lo scappellamento a destra. Si, ma la sbiriguda della sbrindellona come se fosse antani come faceva? Prego? Ho provato con la supercazzola con scappelamento paraplegico a sinistra, ma non funzionava. E lei.. cosa si sente? Professore, non le dico. Antani come trazione per due anche se fosse supercazzola bitumata, ha lo scappellamento a destra. Guardi, le ho ritagliato quell'articolo sul Casentino. Ma lei se la blinda la supercazzola prematurata come se fosse anche un po' di Casentino che perdura anche come cappotto, vede, m'importa. Ma allora io le potrei dire anche con il rispetto per l'autorità, che anche soltanto le due cose come vice-sindaco, capisce? Non si intrometta!No, aspetti, mi porga l'indice, ecco lo alzi così... guardi, guardi, guardi, lo vede il dito? Lo vede che stuzzica, che prematura anche. No, no.. non era troppo alto. Forse non ha capito. Io dicevo che se fosse il coso di telefono, o il dito, come se fosse. Andando su o giù, giù o su. Ho capito. Tre applicazioni di afasol, di un'ora l'una. Subito! Che c'è? Ehm.. blinda la supercazzola con scappellamento a sinistra e a destra come se fossero dei pentoloni. Si, ma la sbiriguda della sbrindellona come se fosse antani come faceva? Prego? Ho provato con la supercazzola con scappelamento paraplegico a sinistra, ma non funzionava.Non si intrometta! No, aspetti, mi porga l'indice, ecco lo alzi così... guardi, guardi, guardi, lo vede il dito? Lo vede che stuzzica, che prematura anche. E lei.. cosa si sente? Professore, non le dico. Antani come trazione per due anche se fosse supercazzola bitumata, ha lo scappellamento a destra. Si, ma la sbiriguda della sbrindellona come se fosse antani come faceva? Prego? Ho provato con la supercazzola con scappelamento paraplegico a sinistra, ma non funzionava. E lei.. cosa si sente? Professore, non le dico. Antani come trazione per due anche se fosse supercazzola bitumata, ha lo scappellamento a destra. Guardi, le ho ritagliato quell'articolo sul Casentino. Ma lei se la blinda la supercazzola prematurata come se fosse anche un po' di Casentino che perdura anche come cappotto, vede, m'importa. Ma allora io le potrei dire anche con il rispetto per l'autorità, che anche soltanto le due cose come vice-sindaco, capisce? Non si intrometta!No, aspetti, mi porga l'indice, ecco lo alzi così... guardi, guardi, guardi, lo vede il dito? Lo vede che stuzzica, che prematura anche. No, no.. non era troppo alto. Forse non ha capito. Io dicevo che se fosse il coso di telefono, o il dito, come se fosse. Andando su o giù, giù o su. Ho capito. Tre applicazioni di afasol, di un'ora l'una. Subito! Che c'è? Ehm.. blinda la supercazzola con scappellamento a sinistra e a destra come se fossero dei pentoloni. Si, ma la sbiriguda della sbrindellona come se fosse antani come faceva? Prego? Ho provato con la supercazzola con scappelamento paraplegico a sinistra, ma non funzionava.";
$p_length = strlen($p);
$word = $_GET["word"];
$p_censored = str_replace($word, '***', $p);
$p_censored_length = strlen($p_censored);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>Primo es in PHP</h1>

    <h2>Paragrafo</h2>
    <p> <?php echo $p ?> </p>
    <p>Lunghezza paragrafo: <?php echo $p_length ?> </p>

    <h2>Paragrafo cesurato</h2>
    <p> <?php echo $p_censored ?> </p>
    <p>Lunghezza paragrafo: <?php echo $p_censored_length ?> </p>

</body>
</html>

<style>
p{
    font-size: 20px
}
</style>