<?php
/*
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola 
da censurare.
*/

// Creare una variabile con un paragrafo di testo a vostra scelta.
$title = "La mia prima pagina in PHP";
$text = "
        At vero eos et accusamus et iusto odio 
        dignissimos ducimus qui blanditiis praesentium 
        voluptatum deleniti atque corrupti quos dolores 
        et quas molestias excepturi sint occaecati cupiditate 
        non provident, similique sunt in culpa qui officia
        deserunt mollitia animi, id est laborum et dolorum fuga. 
        Et harum quidem rerum facilis est et expedita distinctio. 
        Nam libero tempore, cum soluta nobis est eligendi optio 
        cumque nihil impedit quo minus id quod maxime placeat 
        facere possimus, omnis voluptas assumenda est, omnis dolor 
        repellendus. Temporibus autem quibusdam et aut officiis 
        debitis aut rerum necessitatibus saepe eveniet ut et 
        voluptates repudiandae sint et molestiae non recusandae. 
        Itaque earum rerum hic tenetur a sapiente delectus, ut
        aut reiciendis voluptatibus maiores alias consequatur aut 
        perferendis doloribus asperiores repellat.
        ";

// Una parola da censurare viene passata dall'utente tramite parametro GET.
$word = key_exists("word", $_GET) ? $_GET["word"] : "";
$censoredText = str_ireplace($word, " *** ", $text);

$textLenght = strlen($text);
$censoredTextLenght = strlen($censoredText);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciao PHP</title>
</head>
<body>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <div style="margin-bottom: 4rem;">
        <h1> <?php echo $title ?> </h1>
        <p> <?php echo $text ?> </p>
        <small>il testo è lungo: <?php echo $textLenght ?> caratteri </small>
    </div>

    <!-- Stampare di nuovo il paragrafo e la sua lunghezza, 
        dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola 
        da censurare. 
    -->
    <div> 
        <strong>Testo censurato: </strong>
        <p> <?php echo $censoredText ?> </p>
        <small>il testo è lungo: <?php echo $censoredTextLenght ?> caratteri </small>
    </div>
</body>
</html>