<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table border="2" cellpading="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if( $i % 2 == 0 ) :?>
                    <tr class="warna-baris">
                <?php else: ?>
                    <tr></tr>
                <?php endif; ?>
                    <?php for($j = 1; $j <= 5; $j++): ?>
                        <td><?= "$i,$j"; ?></td>
                    <?php endfor; ?>
                    </tr>

        <?php endfor; ?>
    </table>
    
</body>
</html>

