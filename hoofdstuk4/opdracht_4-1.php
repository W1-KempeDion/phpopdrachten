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
<h1>
    ICT academie AO
</h1>
<h3>
    Opdracht 4.1
</h3>
<?php
date_default_timezone_set("Europe/Amsterdam");

$currentTime = date("H:i");

if($currentTime >= "00:00" && $currentTime <= "05:00") {
    echo("<p>Goedennacht bezoeker, &copy Dion Kempe 2020</p>");
}
else if($currentTime >= "05:00" && $currentTime <= "12:00") {
    echo("<p>Goedenochtend bezoeker, &copy Dion Kempe 2020</p>");
}
else if($currentTime >= "12:00" && $currentTime <= "17:00") {
    echo("<p>Goedenmiddag bezoeker, &copy Dion Kempe 2020</p>");
}
else {
    echo("<p>Goedennacht bezoeker, &copy Dion Kempe 2020</p>");
}

?>
</body>
<module type="WEB_MODULE" version="4">
    <component name="NewModuleRootManager">
        <content url="file://$MODULE_DIR$" />
        <orderEntry type="inheritedJdk" />
        <orderEntry type="sourceFolder" forTests="false" />
    </component>
</module>
