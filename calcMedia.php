<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcMedia($n1, $n2) {
            $media = ($n1 + $n2) / 2;
            return $media;
        }

        $n1 = (int) $_POST["nota1"];
        $n2 = (int) $_POST["nota2"];

        $media = calcMedia($n1, $n2);

        echo "A média é: " . $media;
        echo "<br>";

        if ($media >= 6)
            echo '<span id="aprovado">Aprovado</span>';
        else
            echo '<span id="reprovado">Reprovado</span>';
    ?>
</body>

<style>
    #aprovado {
        color: green;
    }

    #reprovado {
        color: red;
    }
</style>

</html>
