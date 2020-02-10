<html>
<head>
</head>
<body>
    <?php
    // Hier echo ik mijn welkoms tekst 
    echo "<h1>Hoi, welkom op mijn website</h1>";
    ?>

    <?php 
    $naam = 'Tyrone ';
    $leeftijd = '18 ';
    $leeftijd2 = (string) $leefttijd;
    $lengte = '1.81 ';
    $woonplaats = 'Leiden';
    
    echo gettype($leeftijd);
    $leeftijd2 =(string) $leeftijd;

    echo gettype($leeftijd);
    echo $leeftijd2;

    ?>

    <?php 
    echo "Ik ben ".$naam."ik ben ".$leeftijd.'jaar '."oud en ben ".$lengte.'m lang ';
    echo sprintf('ik ben %s ik ben %s en ben %s m lang en ik woon in %s.', $naam, $leeftijd, $lengte, $woonplaats);
    ?>

    <img src="assets/img/logo.png"/>

</body>
</html>