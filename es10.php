<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $size = 10;
        $num = 5;
        $fontSize = 10;
        for($i = 0;$i<$num;$i++) {
            echo "<p style='font-size:" . $fontSize . "px'>PARAGRAFO</p>";
            $fontSize += 2;
        }
    ?>
</body>
</html>