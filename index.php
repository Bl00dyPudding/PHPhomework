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
    $title = "<p class='title'>Моя третья домашняя работа по PHP</p>";
?>
<body>
    <main class="content">
        <div>
            <?php echo $h1;?>
        </div>
        <div>
            <?php echo $title;?>
            <section class="answer">
                <p><span>Q:</span> С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без
                    остатка.
                </p>
                <p><span>A:</span>
                    <?php
                    $i = 0;

                    while ($i <= 100) {
                        if ($i % 3 === 0) {
                            echo "$i ";
                        }
                        $i++;
                    }
                    ?>
                </p>
            </section>
            <section class="answer">
                <p><span>Q:</span> С помощью цикла do…while написать функцию для вывода чисел от 0 до 10.
                </p>
                <p><span>A:</span>
                    <?php
                    $n = 10;
                    $i = 0;

                    function numbers($i) {
                        if ($i === 0) {
                            return "$i" . ' - это ноль<br>';
                        } elseif ($i % 2) {
                            return "$i" . ' - нечетное число<br>';
                        } else {
                            return "$i" . ' - четное число<br />';
                        }
                    }

                    do {
                        echo numbers($i);
                        $i++;
                    } while ($i <= $n);
                    ?>
                </p>
            </section>
        </div>
        <div class='currentYear'>
            <p><?php echo date("Y");?></p>
        </div>
    </main>
</body>
</html>