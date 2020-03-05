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
$trafficLightColor = "groen";
$ambulanceComing = true;
$driveOn = true;

if($trafficLightColor == "groen" && $ambulanceComing == false) {
    echo("<p color='green'>U mag doorrijden.</p>");
}
else{
    echo("<p color='red'>U moet stoppen!</p>");
}

?>

<hr>

<?php
$countryName = "Nederland";
$currentAge = 18;

    if($countryName == "Belgie" && $currentAge >= 16 && $currentAge < 18) {
        echo("Jij mag zwakke alchol drinken");
}
    else if($countryName == "Belgie" && $currentAge >= 18) {
        echo("Jij mag sterke alchol drinken");
    }
    else if($countryName == "Bulgaraije" && $currentAge >= 18) {
        echo("U mag alle soorten alcohol drinken");
    }
    else if($countryName == "Cyprus" && $currentAge >= 17) {
        echo("U mag alle soorten alcohol drinken");
    }
    else if($countryName == "Nederland" && $currentAge >= 18) {
        echo("U mag alle soorten alcohol drinken");
    }
    else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge < 20) {
        echo("Jij mag zwakke alchol drinken");
    }
    else if($countryName == "Zweden" && $currentAge >= 20) {
        echo("Jij mag sterke alchol drinken");
    }
    else{
        echo("U mag niet drinken");
    }

?>

</body>
</html>