<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework #1 / PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    $h1 = "<h1 class='h1'>Добро пожаловать на сайт студента GeekBrains!</h1>";
    $title = "<p class='title'>Моя первая домашняя работа по PHP</p>";
?>
<body>
    <main class="content">
        <div>
            <?php echo $h1;?>
        </div>
        <div>
            <?php echo $title;?>
            <section class="answer">
                <p><span>Q:</span> Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b
                    = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.</p>
                <p><span>A:</span> [$a, $b] = [$b, $a]; либо $a=$a+$b-($b=$a);
                </p>
            </section>
        </div>
        <div class='currentYear'>
            <p><?php echo date("Y");?></p>
        </div>
    </main>
</body>
</html>