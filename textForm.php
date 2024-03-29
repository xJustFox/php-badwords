<?php
    // inizializzazione variabile assegnadogli come valore i dati presi dal Form 
    $badWord = $_GET['badword'];
    $text = $_GET['text'];

    // recupero la lunghezza di tutta la stringa, compresi gli spazi
    $textLeng = strlen($text);

    // Censura parole
    $newText = str_replace($badWord, '***', $text);

    // recupero la lunghezza di tutta la stringa con la censura, compresi gli spazi
    $newLeng = strlen($newText);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Bad Worlds</title>
</head>

<body>
    <div class="container-fluid my-vh my-bg-black">
        <div class="row justify-content-center align-items-center my-vh">
            <div class="col-4 my-bg-gray rounded-1 py-2 text-white">
                <h1 class="text-center mb-4">Bad Words</h1>
                <h4>This is your uncensored text, its length is <?php echo $textLeng ?> characters:</h4>
                <p><?php echo $text ?></p>
                <hr>
                <h4>This is your censored text: its length is <?php echo $newLeng ?> characters:</h4>
                <p><?php echo $newText ?></p>
            </div>
        </div>
    </div>
</body>

</html>