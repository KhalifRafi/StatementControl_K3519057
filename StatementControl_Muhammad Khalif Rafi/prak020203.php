<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak020203</title>
</head>
<body>
    <?php
    $baris = 4;
    echo "<table border = '1' cellpadding='4' cellspacing='4'>";
    for($i = 1; $i <= $baris; $i++){
        echo "<tr>";    
        if($i == 1){
            for($j = 1; $j <= 5; $j++){
                if($j % 2 == 0){
                    echo "<td bgcolor='red'><font color='white'>$j</font></td>";
                }else{
                    echo "<td bgcolor='white'><font color='red'>$j</font></td>";
                }
            }
        }else if($i == 2){
            for($j = 6; $j <= 10; $j++){
                if($j % 2 == 0){
                    echo "<td bgcolor='red'><font color='white'>$j</font></td>";
                }else{
                    echo "<td bgcolor='white'><font color='red'>$j</font></td>";
                }
            }
        }else if($i == 3){
            for($j = 11; $j <= 15; $j++){
                if($j % 2 == 0){
                    echo "<td bgcolor='red'><font color='white'>$j</font></td>";
                }else{
                    echo "<td bgcolor='white'><font color='red'>$j</font></td>";
                }
            }
        }else if($i == 4){
            for($j = 16; $j <= 20; $j++){
                if($j % 2 == 0){
                    echo "<td bgcolor='red'><font color='white'>$j</font></td>";
                }else{
                    echo "<td bgcolor='white'><font color='red'>$j</font></td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>