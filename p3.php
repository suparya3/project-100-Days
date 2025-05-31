<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <table border="5" cellpadding="10" cellspacing="0">
        <tr>
            <?php

            for($i = 1; $i <= 3; $i++){
                echo "<tr>";
                for($j = 1; $j <= 5; $j++) {
                    echo "<td> $i,$j </td>";
                }
            }

            ?>
        </tr>
    </table>
    
</body>
</html>