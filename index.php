<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <?php
    
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3) {
        if  (strpos($mail, '@') && strpos($mail, '.') ) {
            if (is_numeric($age)) {
                $response = 'Accesso riuscito';
            } else $response = 'Accesso non riuscito, età non valida';
        } else $response = 'Accesso non riuscito, mail non valida';
    } else $response = 'Accesso non riuscito, nome troppo breve';
    // Querystring di prova: ?name=paolo&mail=paoloduzioni@hotmail.com&age=30
    ?>


    <h1>Informazioni di Accesso Utente</h1>
    <p><?php echo($response); ?></p>

</body>
</html>