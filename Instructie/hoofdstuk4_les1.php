<?php
//Vertellen dat ons script de tijd van tokyo aan moet houden
date_default_timezone_set("Asia/Tokyo");

//Toon de tijd in HH:MM formaat
    $currentTime = date("D d-m-y H:i:s");
    //, strtotime("-3 day"));
//Echo van currentTime
echo("<p>Het is nu " . $currentTime . " In Tokyo</p>");

// Switches
    $currentDay = date("D");
    switch($currentDay)
    {
        case "Mon":
            echo("Garfield haat jou.");
            break;
        case "Tue":
            echo("If(current time == 23:00) {<br>Mastrubeer<br>}<br><br>else {<br>Cry<br>}");
            break;
        case "Wed":
            echo("You have won a free virus,<br>Downloading now...");
            break;
        case "Thu":
            echo("De pope is onderweg, Ga maar vast de kelder in.");
            break;
        case "Fri":
            echo("Yay weekend, Tijd om depresief op je bed te gaan huilen omdat je geen vrienden hebt.");
            break;
        case "Sat":
            echo("Kom maar niet naar school vandaag.");
            break;
        case "Sun":
            echo("Stop met bestaan.");
            break;
    }
?>
