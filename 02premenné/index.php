<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>" . 2 + 4 . "</p>";

    $cislo = 4;
    echo $cislo;

    echo "<br>";
    $desCisclo = 4.5;
    echo $desCisclo;

    echo "<br>";

    $cisclo1 = 4.3;
    $cisclo2 = 4.5;

    $vysledok = (int)$cisclo1 + (int)$cisclo2;

    echo "<br>";

    $text = "toto je môj text";
    echo $text;

    echo "<br>";

    $textCislo = "toto je moje cislo" . $cislo1;
    echo $textCislo;

    boolean $pravda = true;
    echo $vysledok;
    ?>
</body>
</html>