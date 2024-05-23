<html>
    <head></head>
    <body>
        <!--
    <ul>
        <li> hola </li>
        <li>como </li>
        <li> estas?</li>
</ul>
    -->
    <?php
        $agenda= ["Dentista a las 12h", "Gimnasio a las 15h" , "Trabajo a las 08h" , "Fiesta a las 18h"];
        var_dump($agenda);
        echo "<br>";
        $agenda[0]="Dentista a las 16h";
        var_dump($agenda);
        echo "<br>";
        unset($agenda[0]); // la función unset elimina un elemento del array
        var_dump($agenda);

        ?>
        <ul>
        <?php
        foreach($agenda as $hora){
            echo "<li>$hora</li>";
        }
        // Tanbajo echo por Francisco Montes de Oca y Jonathan Raymond
    ?>
    </ul>
    </body>
</html>