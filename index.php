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

    $a = mt_rand(-99, 99);
    $b = mt_rand(-99, 99);
    $c = mt_rand(0, 15);
    $arg1 = mt_rand(-99, 99);
    $arg2 = mt_rand(-99, 99);
    $sign = mt_rand(1, 4);
    $x = mt_rand(-10, 10);
    $y = mt_rand(-10, 10);
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
//  В методичке такого нет, А ЗРЯ! Вот так правильно будет, я думаю:)
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
                    function mathOperationA ($x = 1 , $y = 1) {
                        return "$x + $y = " . ($x + $y);
                    }

                    function mathOperationS ($x = 1 , $y = 1) {
                        return "$x - $y = " . ($x - $y);
                    }

                    function mathOperationM ($x = 1 , $y = 1) {
                        return "$x * $y = " . ($x * $y);
                    }

                    function mathOperationD ($x = 1 , $y = 1) {
                        return "$x / $y = " . (($y === 0)?'На ноль делить нельзя!':($x / $y));
                    }

                    echo "<br>" . mathOperationA($a , $b);
                    echo "<br>" . mathOperationS($a , $b);
                    echo "<br>" . mathOperationM($a , $b);
                    echo "<br>" . mathOperationD($a , $b);
                ?>
            </p>
            </section>
            <section class="answer">
                <p><span>Q:</span>  Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
                    где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
                    зависимости от переданного значения операции выполнить одну из арифметических операций
                    (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
                </p>
                <p><span>A:</span>
                    <?php
                        function mathOperation ($arg1 , $arg2 , $operation) {
                            switch ($operation) {
                                case 1:  $x = mathOperationA($arg1, $arg2); break;
                                case 2:  $x = mathOperationS($arg1, $arg2); break;
                                case 3:  $x = mathOperationM($arg1, $arg2); break;
                                case 4:  $x = mathOperationD($arg1, $arg2); break;
                                default: $x = "Упс!";
                            }
                            return $x;
                        }

                    echo "<br>" . mathOperation($arg1 , $arg2 , $sign);
                    ?>
                </p>
            </section>
            <section class="answer">
                <p><span>Q:</span> С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
                    power($val, $pow), где $val – заданное число, $pow – степень.
                </p>
                <p><span>A:</span>
                    <?php
                        function power ($val , $pow) {
                            if ($pow === 0) {
                                return 1;
                            }
                            if ($pow < 0) {
                                return power (1/$val, -$pow);
                            }
                            return $val * power ($val, $pow-1);
                        }

                        echo "<br> $x в степени $y = " . power ($x , $y);
                    ?>
                </p>
            </section>
            <section class="answer">
                <p><span>Q:</span> Написать функцию, которая вычисляет текущее время и возвращает его в формате с
                    правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.
                </p>
                <p><span>A:</span>
                    <?php
                        function whatTimeIsItNow ($number, $endings) {
                            $number = $number % 100;
                            if ($number >= 11 && $number <= 19) {
                                $ending = $endings[2];
                            } else {
                                $i = $number % 10;
                                switch ($i)
                                {
                                    case (1): $ending = $endings[0]; break;
                                    case (2): $ending = $endings[1]; break;
                                    case (3): $ending = $endings[1]; break;
                                    case (4): $ending = $endings[1]; break;
                                    default:  $ending = $endings[2];
                                }
                            }
                            return $ending;
                        }
                        $hours   = date('G');
                        $minutes = date('m');
                        $seconds = date('s');

                        echo 'Сейчас ' .
                            $hours   . ' ' . whatTimeIsItNow($hours,   ['час', 'часа', 'часов']) . ' ' .
                            $minutes . ' ' . whatTimeIsItNow($minutes, ['минута', 'минуты', 'минут']) . ' ' .
                            $seconds . ' ' . whatTimeIsItNow($seconds, ['секунда', 'секунды', 'секунд']);
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