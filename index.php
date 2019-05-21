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
    $title = "<p class='title'>Моя вторая домашняя работа по PHP</p>";
//  Тут у меня рандомизаторы
    $a = mt_rand(-99, 99);
    $b = mt_rand(-99, 99);
    $c = mt_rand(0, 15);
?>
<body>
    <main class="content">
        <div>
            <?php echo $h1;?>
        </div>
        <div>
            <?php echo $title;?>
            <section class="answer">
                <p><span>Q:</span> Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
                    значения. <br>
                    Если $a и $b положительные, вывести их разность. <br>
                    Если $а и $b отрицательные, вывести их произведение. <br>
                    Если $а и $b разных знаков, вывести их сумму.
                </p>
                <p><span>A:</span>
                    <?php
                        echo "<br>A = $a";
                        echo "<br>B = $b";

                        if ($a >= 0 && $b >= 0) {
                            echo "<br>Разность " .  ($a - $b);
                        } elseif ($a < 0 && $b < 0) {
                            echo "<br>Произведение " .  ($a * $b);
                        } else {
                            echo "<br>Сумма " .  ($a + $b);
                        }
                    ?>
                </p>
            </section>
            <section class="answer">
                <p><span>Q:</span> Присвоить переменной $c значение в промежутке [0..15]. С помощью оператора
                    switch организовать вывод чисел от $c до 15.
                </p>
                <p><span>A:</span>
                    <?php
//                  В методичке такого нет, А ЗРЯ! Вот так правильно будет:)
                    oneMoreTime:
                    switch ($c) {
                        case 15:
                            echo 15;
                            break;
                        default:
                            echo $c . " ";
                            $c++;
                            goto oneMoreTime;
                    }
                    ?>
                </p>
            </section>
            <section class="answer">
            <p><span>Q:</span> Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
                Обязательно использовать оператор return.
            </p>
            <p><span>A:</span>
                <?php
                    function mathOperations ($x = 1 , $y = 1) {
                        return "<br>" .
                               "$x + $y = " . ($x + $y) . "<br>" .
                               "$x - $y = " . ($x - $y) . "<br>" .
                               "$x * $y = " . ($x * $y) . "<br>" .
                               "$x / $y = " . (($y === 0)?'На ноль делить нельзя!':($x / $y));
                    }

                    echo mathOperations($a , $b);
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

