<?php
$name = 'MEDIASOFT';
$arr = array(
    'Yellow' => 1,
    'Red' => 2,
    'Green' => 3,
    'Orange' => 4,
    'Blue' => 5,
    'Pink' => 6,
    'Brown' => 7,
    'Рurple' => 8,
    'White' => 9,
    'Black' => 10
);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?= $name ?> </title>

</head>
<body>
    <div align="center">
        <div>
            <h1 class="a">Colors</h1>
                <?php foreach ($arr as $num => $v) {
                    echo "$num = $v" .'<br>';
                }
                ?>
        </div>
    </div>
</body>
</html>