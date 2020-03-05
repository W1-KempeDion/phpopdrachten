<!--
Opdracht:       Opdrachtnaam
Auteur:         Naam van de maker
Aanmaakdatum:   Startdatum + tijd
Bestandsnaam:   Bestandsnaam.html
-->

<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">	
        <link rel=stylesheet type="text/css" href="stylesheet.css">
        <meta charset="utf-8">
        <title>
            
        </title>
    </head>
    <body>
    <?php
        // Variables
        // - Strings

    $firstName = "Dion";
    $lastName = "Kempe";

    $fullName = $firstName .  " " . $lastName;

        // - Int

    $yearOfBirth = 2002;
    $currentYear = date("Y");

    $age = $yearOfBirth - $currentYear;

        // - Boolean
    $isMale = true;
    $isVirgin = true;

    if( $isVirgin == true )
    {
        if( $isMale == true )
        {
            echo("<p>Haha maagd</p>");
        }
        else
        {
            echo("<p>ga weg</p>");
        }
    }
    else {
        echo("<p>Donder op</p>");
    }
    ?>

    <div>
        <?php
            echo("<h1>Hallo " . $fullName . "</h1>");
            echo("<h2>U bent " . $age . " jaar oud </h2>");
        ?>
    </div>
    </body>
</html>

