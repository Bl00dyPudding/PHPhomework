<?php
$x = false;
$y = false;

if(isset($_POST)) {

    $x = $_POST['x'];
    $y = $_POST['y'];

    if (is_numeric($x) && is_numeric($y) && $x !== false && $y !== false) {

        if ($_POST['+']) {
            $answer = ($x + $y);
        }

        if ($_POST['-']) {
            $answer = ($x - $y);
        }

        if ($_POST['*']) {
            $answer = ($x * $y);
        }

        if ($_POST['/']) {

            if ($y == 0) {
                $answer = 'На ноль делить нельзя!';
            } else {
                $answer = ($x / $y);
            }

        }

    } else {

        echo 'Ошибка! Введите корректные данные!';

    }
}

?>

<form action="calc.php" method="post" name="calc">
    <label for="x">
       X: <input type="text" name="x" id="x" value="<?=$x?>">
    </label>
    <label for="y">
        Y: <input type="text" name="y" id="y" value="<?=$y?>">
    </label>
    <input type="submit" name="+" value="+">
    <input type="submit" name="-" value="-">
    <input type="submit" name="/" value="/">
    <input type="submit" name="*" value="*">
</form>
<?='Ответ: '.$answer?>