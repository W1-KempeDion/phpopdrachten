<!DOCTYPE html>
<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel=stylesheet type="text/css" href="../CSS/stylesheetNA.css">
    <meta charset="utf-8">
    <title>

    </title>
</head>
<body>


<?php
    /**
    * User: Dion Kempe
    * Date: 2/13/2020
    * Time: 9:55
    * File: opdracht_3-1.hp
    */

    $evenement = "Elfstedentocht";
    $evenementDialect = "Alvestedetocht";
    $kilometer = 200;
    $kind = "schaatstocht";
    $ice = "Natuurijs";
    $orginisation = "Koninklijke Vereniging De Friesche Elf Steden";
    $town = "Leeuwarden";
    $province = "Friesland";
    $timesDone = 15;
    $firstYear = 1909;
    $maxTimesperWinter = 1;
    $story = "De" . " " . $evenement . " " . "(Fries:" . " " . $evenementDialect . ")" . " " . "is een" . " " . $kilometer . " " . "kilometer
    lange" . " " . $kind . " " . "over" . " " . $ice . " " .  "die wordt georganiseerd door
    de" . " " . $orginisation . "." . " " . $town . " " . ",
    de hoofdstad van" . " " . $province . " " . ", is start- en aankomstplaats. De
    Elfstedentocht is inmiddels" . " " . $timesDone . " " . "maal verreden en werd voor het
    eerst in" . " " . $firstYear . " " . "gereden en wordt maximaal" . " " . $maxTimesperWinter . " " .  "keer per winter
    gehouden."
?>

<?php
    echo("<p>" . $story . "</p>")
?>

</body>
</html>
