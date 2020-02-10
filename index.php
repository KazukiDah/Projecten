<html>
<head>
</head>
<body>
    <?php
    // Hier echo ik mijn welkoms tekst 
    echo "<h1>Hoi, welkom op mijn website</h1>";
    ?>

    <?php 
    $mijn_array = array('Tyrone', '18', '1.82');
    var_dump($mijn_array);
    ?>

    <?php 
    echo "Ik ben ".$naam."ik ben ".$leeftijd.'jaar '."oud en ben ".$lengte.'m lang ';
    echo sprintf('ik ben %s ik ben %s en ben %s m lang en ik woon in %s.', $naam, $leeftijd, $lengte, $woonplaats);
    ?>

    <img src="assets/img/logo.png"/>

</body>
</html>