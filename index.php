<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$title = "PHP";
$text = "PHP (acronimo ricorsivo di \"PHP: Hypertext Preprocessor\", preprocessore di ipertesti; originariamente acronimo di \"Personal Home Page\") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License.
Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica. Un esempio di software scritto in PHP è MediaWiki, su cui si basano i progetti wiki della Wikimedia Foundation come Wikipedia.
Grazie soprattutto alla diffusione di Wordpress (CMS scritto in PHP), secondo le statistiche, è il linguaggio lato server più usato al mondo";
$badword = $_GET['parola'];

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
    <h1> <?php echo $title ?></h1>
    <p><?php echo $text ?></p>

    <h2>La lunghezza del titolo è: <?php echo strlen($title) ?></h2>
    <h2>La lunghezza del testo è: <?php echo strlen($text) ?></h2>
</body>
</html>