<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Stampa Lista</title>
</head>
<body>
    <?php
        $numero = rand(1,50);
        $numCasuale = rand(1,3);
        $tipo = createType($numCasuale);
        stampaLista($numero, $tipo);

        function createType($nc){
            if($nc == 1){
                return "o";
            } else {
                return "u";
            }
        }

        function stampaLista($num, $t){
            if($t == 'o'){
                echo "<ol>";
                createLista($num);
                echo "</ol>";
            } else {
                echo "<ul>";
                createLista($num);
                echo "</ul>";
            }
        }

        function createLista($n){
            for ($i=0; $i < $n; $i++) { 
                if (($i % 2 == 0) || ($i % 5 == 0)) {
                    echo "<li>$i</li>";
                }
            }
        }
    ?>
</body>
</html>