<html>
    <body>
       <?php
function calc($x, $y) {
    return (pow($x,5) + $y*sqrt(abs($y+$x)))/log10(275.18) - pow($x,$y) + tan($x)/(sin($x)+2);
}
echo calc(1, 2);
?>
    </body>
</html>