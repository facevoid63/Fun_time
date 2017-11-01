<form action=<?= "$_SERVER[PHP_SELF]" ?> method="GET">
    <p>Добрый день!</p>
    <p>Проверим вашу интуицию сегодня? Программа сгенерирует определенное целое цисло в промежутке от 1 до 9 включительно. Вы можете попробовать угадать его, введя предполагаемое сгенерированное число
        в строке ниже. Попробовать угадать можно как до генерации числа, так и после. Если вы хотите угадать уже сгененированное число, нажмите кнопку
        "Проверить". В обратном случае нажмите "Сгенерировать и проверить". Приятной игры!</p>
    <input type="text" name="num" placeholder="Место для вашего числа" style="width: 180px;">
    <p>Задуманное число будет тщательно проверено на "детекторе Интуиции".</p>
    <p><input type="submit" name="button1" value="Проверить"></p>
    <p><input type="submit" name="button2" value="Сгенерировать и проверить"</p>
</form>
<?php
$rand1=rand(1,9);
if (strlen($_GET["num"])==0) //не оставлена ли форма пустой
{
    echo "Введите число, это не страшно.";
}
elseif (!is_numeric($_GET["num"])) //не введен ли текст или числа не в десятичной форме
{
    echo "Извините, сегодня мы принимаем только числа, и только десятичные. Приходите завтра или попробуйте на этот раз ввести другое число";
}
if(isset($_GET["button1"]))
{
    switch (($_GET["num"]))
    {
        case($_GET["num"]==$rand1):
            echo "Вы угадали";
            break;
        default:
            echo "Не угадали, задуманное число - $rand1";
    }
}
if(isset($_GET["button2"]))
{
    $rand2=rand(1,9);
    switch (($_GET["num"]))
    {
        case($_GET["num"]==$rand2):
            echo "Вы угадали";
            break;
        default:
            echo "Не угадали, задуманное число - $rand2";
    }
}