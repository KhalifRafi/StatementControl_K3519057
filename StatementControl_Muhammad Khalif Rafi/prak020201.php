<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak020201</title>
</head>
<body>
    <?php
    $baris = 4;
    $kolom = 5;
    echo "<table border = '1' cellpadding='4' cellspacing='4'>";
    for($i = 0; $i < $baris; $i++){
        echo "<tr>";
        for($j = 0; $j < $kolom; $j++){
            echo "<td>Hello</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>