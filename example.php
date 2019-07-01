<?php
//require __DIR__ . '/class/Text.php';

use Text\Text;

$text = 'Жена посылает программиста за продуктами: — Купи палку колбасы, и если будут яйца, возьми десяток. Программист в магазине: — Дайте мне, пожалуйста, палку колбасы. Спасибо. А яйца у вас есть? — Есть. — Тогда ещё девять палок колбасы.';
$obj = new Text();
$obj->set($text);
//echo $obj->get();
echo $obj->TextClipping(22, '..');

$obj_num = new Converter();
echo '<br>' . $obj_num->romanNumbersInArabic('I');
echo '<br>' . $obj_num->arabicNumbersInRoman(6);