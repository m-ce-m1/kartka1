<html>
    <body>
        <?php
$n = 10;
$s1 = "Я люблю Беларусь";
$s2 = "Я учусь в Политехническом колледже";
$c = mb_substr($s1, $n-1, 1);
echo "Длина S1: " . strlen($s1) . "<br>";
echo "$n-й символ: " . $c . ", асци код: " . ord($s1[$n-1]) . "<br>";
echo "'о' на 'а': " . str_replace('о', 'а', $s2) . "<br>";
echo "<br>";
?>
    </body>
</html>