<html>
    <head>
        <title>
            Prova 2
        </title>
    </head>
    <body>
        <?php
        $date = new DateTime();
        $result = $date->format("d-m-Y H:i:s");

        echo "<h1>Avaliação SOCPS II</h1>";
        echo "<h3>Matheus Wilhelm Siqueira</h3>";
        echo "<h3>$result</h3>";
        ?>
    </body>
</html>