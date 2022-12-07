<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Таблицы PHP</title>
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <h1>Таблица истинности PHP</h1>
  <table border="1">
   <tr>
    <td class="hat">A</td>
    <td class="hat">B</td>
    <td class="hat">!A</td>
    <td class="hat">A || B</td>
    <td class="hat">A && B</td>
    <td class="hat">A xor B</td>
   </tr>
   <tr>
    <?php $a = 0; $b = 0; ?>
    <td class="value">0</td>
    <td class="value">0</td>
    <td class="cell2"><?php var_export (!$a);?></td>
    <td class="cell1"><?php var_export ($a || $b);?></td>
    <td class="cell1"><?php var_export ($a && $b);?></td>
    <td class="cell1"><?php var_export ($a xor $b);?></td>
  </tr>
   <tr>
    <?php $a = 0; $b = 1; ?>
    <td class="value">0</td>
    <td class="value">1</td>
    <td class="cell2"><?php var_export (!$a);?></td>
    <td class="cell2"><?php var_export ($a || $b);?></td>
    <td class="cell1"><?php var_export ($a && $b);?></td>
    <td class="cell2"><?php var_export ($a xor $b);?></td>
  </tr>
  <tr>
    <?php $a = 1; $b = 0; ?>
    <td class="value">1</td>
    <td class="value">0</td>
    <td class="cell1"><?php var_export (!$a);?></td>
    <td class="cell2"><?php var_export ($a || $b);?></td>
    <td class="cell1"><?php var_export ($a && $b);?></td>
    <td class="cell2"><?php var_export ($a xor $b);?></td>
  </tr>
  <tr>
    <?php $a = 1; $b = 1; ?>
    <td class="value">1</td>
    <td class="value">1</td>
    <td class="cell1"><?php var_export (!$a);?></td>
    <td class="cell2"><?php var_export ($a || $b);?></td>
    <td class="cell2"><?php var_export ($a && $b);?></td>
    <td class="cell1"><?php var_export ($a xor $b);?></td>
  </tr>
 </table>
 <br>
 <h1>Таблица жёсткого сравнения</h1>
  <table border="1">
    <?php $x = true; $y = false; $c = 1; $d = 0; $e = -1; $f = "1"; $g = null; $h = "php"; ?>
   <tr>
    <td class="value"></td>
    <td class="hat">true</td>
    <td class="hat">false</td>
    <td class="hat">1</td>
    <td class="hat">0</td>
    <td class="hat">-1</td>
    <td class="hat">"1"</td>
    <td class="hat">null</td>
    <td class="hat">"php"</td>
   </tr>
   <tr>
    <td class="hat">true</td>
    <td class="cell2"><?php var_export ($x === $x);?></td>
    <td class="cell1"><?php var_export ($x === $y);?></td>
    <td class="cell1"><?php var_export ($x === $c);?></td>
    <td class="cell1"><?php var_export ($x === $d);?></td>
    <td class="cell1"><?php var_export ($x === $e);?></td>
    <td class="cell1"><?php var_export ($x === $f);?></td>
    <td class="cell1"><?php var_export ($x === $g);?></td>
    <td class="cell1"><?php var_export ($x === $h);?></td>
  </tr>
   <tr>
    <td class="hat">false</td>
    <td class="cell1"><?php var_export ($y === $x);?></td>
    <td class="cell2"><?php var_export ($y === $y);?></td>
    <td class="cell1"><?php var_export ($y === $c);?></td>
    <td class="cell1"><?php var_export ($y === $d);?></td>
    <td class="cell1"><?php var_export ($y === $e);?></td>
    <td class="cell1"><?php var_export ($y === $f);?></td>
    <td class="cell1"><?php var_export ($y === $g);?></td>
    <td class="cell1"><?php var_export ($y === $h);?></td>
  </tr>
  <tr>
    <td class="hat">1</td>
    <td class="cell1"><?php var_export ($c === $x);?></td>
    <td class="cell1"><?php var_export ($c === $y);?></td>
    <td class="cell2"><?php var_export ($c === $c);?></td>
    <td class="cell1"><?php var_export ($c === $d);?></td>
    <td class="cell1"><?php var_export ($c === $e);?></td>
    <td class="cell1"><?php var_export ($c === $f);?></td>
    <td class="cell1"><?php var_export ($c === $g);?></td>
    <td class="cell1"><?php var_export ($c === $h);?></td>
  </tr>
  <tr>
    <td class="hat">0</td>
    <td class="cell1"><?php var_export ($d === $x);?></td>
    <td class="cell1"><?php var_export ($d === $y);?></td>
    <td class="cell1"><?php var_export ($d === $c);?></td>
    <td class="cell2"><?php var_export ($d === $d);?></td>
    <td class="cell1"><?php var_export ($d === $e);?></td>
    <td class="cell1"><?php var_export ($d === $f);?></td>
    <td class="cell1"><?php var_export ($d === $g);?></td>
    <td class="cell1"><?php var_export ($d === $h);?></td>
  </tr>
  <tr>
    <td class="hat">-1</td>
    <td class="cell1"><?php var_export ($e === $x);?></td>
    <td class="cell1"><?php var_export ($e === $y);?></td>
    <td class="cell1"><?php var_export ($e === $c);?></td>
    <td class="cell1"><?php var_export ($e === $d);?></td>
    <td class="cell2"><?php var_export ($e === $e);?></td>
    <td class="cell1"><?php var_export ($e === $f);?></td>
    <td class="cell1"><?php var_export ($e === $g);?></td>
    <td class="cell1"><?php var_export ($e === $h);?></td>
  </tr>
  <tr>
    <td class="hat">"1"</td>
    <td class="cell1"><?php var_export ($f === $x);?></td>
    <td class="cell1"><?php var_export ($f === $y);?></td>
    <td class="cell1"><?php var_export ($f === $c);?></td>
    <td class="cell1"><?php var_export ($f === $d);?></td>
    <td class="cell1"><?php var_export ($f === $e);?></td>
    <td class="cell2"><?php var_export ($f === $f);?></td>
    <td class="cell1"><?php var_export ($f === $g);?></td>
    <td class="cell1"><?php var_export ($f === $h);?></td>
  </tr>
  <tr>
    <td class="hat">null</td>
    <td class="cell1"><?php var_export ($g === $x);?></td>
    <td class="cell1"><?php var_export ($g === $y);?></td>
    <td class="cell1"><?php var_export ($g === $c);?></td>
    <td class="cell1"><?php var_export ($g === $d);?></td>
    <td class="cell1"><?php var_export ($g === $e);?></td>
    <td class="cell1"><?php var_export ($g === $f);?></td>
    <td class="cell2"><?php var_export ($g === $g);?></td>
    <td class="cell1"><?php var_export ($g === $h);?></td>
  </tr>
  <tr>
    <td class="hat">"php"</td>
    <td class="cell1"><?php var_export ($h === $x);?></td>
    <td class="cell1"><?php var_export ($h === $y);?></td>
    <td class="cell1"><?php var_export ($h === $c);?></td>
    <td class="cell1"><?php var_export ($h === $d);?></td>
    <td class="cell1"><?php var_export ($h === $e);?></td>
    <td class="cell1"><?php var_export ($h === $f);?></td>
    <td class="cell1"><?php var_export ($h === $g);?></td>
    <td class="cell2"><?php var_export ($h === $h);?></td>
  </tr>
 </table>
 <br>
 <h1>Таблица гибкого сравнения</h1>
 <table border="1">
  <?php $x = true; $y = false; $c = 1; $d = 0; $e = -1; $f = "1"; $g = null; $h = "php"; ?>
 <tr>
    <td class="value"></td>
    <td class="hat">true</td>
    <td class="hat">false</td>
    <td class="hat">1</td>
    <td class="hat">0</td>
    <td class="hat">-1</td>
    <td class="hat">"1"</td>
    <td class="hat">null</td>
    <td class="hat">"php"</td>
   </tr>
   <tr>
    <td class="hat">true</td>
    <td class="cell2"><?php var_export ($x == $x);?></td>
    <td class="cell1"><?php var_export ($x == $y);?></td>
    <td class="cell2"><?php var_export ($x == $c);?></td>
    <td class="cell1"><?php var_export ($x == $d);?></td>
    <td class="cell2"><?php var_export ($x == $e);?></td>
    <td class="cell2"><?php var_export ($x == $f);?></td>
    <td class="cell1"><?php var_export ($x == $g);?></td>
    <td class="cell2"><?php var_export ($x == $h);?></td>
  </tr>
   <tr>
    <td class="hat">false</td>
    <td class="cell1"><?php var_export ($y == $x);?></td>
    <td class="cell2"><?php var_export ($y == $y);?></td>
    <td class="cell1"><?php var_export ($y == $c);?></td>
    <td class="cell2"><?php var_export ($y == $d);?></td>
    <td class="cell1"><?php var_export ($y == $e);?></td>
    <td class="cell1"><?php var_export ($y == $f);?></td>
    <td class="cell2"><?php var_export ($y == $g);?></td>
    <td class="cell1"><?php var_export ($y == $h);?></td>
  </tr>
  <tr>>
    <td class="hat">1</td>
    <td class="cell2"><?php var_export ($c == $x);?></td>
    <td class="cell1"><?php var_export ($c == $y);?></td>
    <td class="cell2"><?php var_export ($c == $c);?></td>
    <td class="cell1"><?php var_export ($c == $d);?></td>
    <td class="cell1"><?php var_export ($c == $e);?></td>
    <td class="cell2"><?php var_export ($c == $f);?></td>
    <td class="cell1"><?php var_export ($c == $g);?></td>
    <td class="cell1"><?php var_export ($c == $h);?></td>
  </tr>
  <tr>
    <td class="hat">0</td>
    <td class="cell1"><?php var_export ($d == $x);?></td>
    <td class="cell2"><?php var_export ($d == $y);?></td>
    <td class="cell1"><?php var_export ($d == $c);?></td>
    <td class="cell2"><?php var_export ($d == $d);?></td>
    <td class="cell1"><?php var_export ($d == $e);?></td>
    <td class="cell1"><?php var_export ($d == $f);?></td>
    <td class="cell2"><?php var_export ($d == $g);?></td>
    <td class="cell2"><?php var_export ($d == $h);?></td>
  </tr>
  <tr>
    <td class="hat">-1</td>
    <td class="cell2"><?php var_export ($e == $x);?></td>
    <td class="cell1"><?php var_export ($e == $y);?></td>
    <td class="cell1"><?php var_export ($e == $c);?></td>
    <td class="cell1"><?php var_export ($e == $d);?></td>
    <td class="cell2"><?php var_export ($e == $e);?></td>
    <td class="cell1"><?php var_export ($e == $f);?></td>
    <td class="cell1"><?php var_export ($e == $g);?></td>
    <td class="cell1"><?php var_export ($e == $h);?></td>
  </tr>
  <tr>
    <td class="hat">"1"</td>
    <td class="cell2"><?php var_export ($f == $x);?></td>
    <td class="cell1"><?php var_export ($f == $y);?></td>
    <td class="cell2"><?php var_export ($f == $c);?></td>
    <td class="cell1"><?php var_export ($f == $d);?></td>
    <td class="cell1"><?php var_export ($f == $e);?></td>
    <td class="cell2"><?php var_export ($f == $f);?></td>
    <td class="cell1"><?php var_export ($f == $g);?></td>
    <td class="cell1"><?php var_export ($f == $h);?></td>
  </tr>
  <tr>
    <td class="hat">null</td>
    <td class="cell1"><?php var_export ($g == $x);?></td>
    <td class="cell2"><?php var_export ($g == $y);?></td>
    <td class="cell1"><?php var_export ($g == $c);?></td>
    <td class="cell2"><?php var_export ($g == $d);?></td>
    <td class="cell1"><?php var_export ($g == $e);?></td>
    <td class="cell1"><?php var_export ($g == $f);?></td>
    <td class="cell2"><?php var_export ($g == $g);?></td>
    <td class="cell1"><?php var_export ($g == $h);?></td>
  </tr>
  <tr>
    <td class="hat">"php"</td>
    <td class="cell2"><?php var_export ($h == $x);?></td>
    <td class="cell1"><?php var_export ($h == $y);?></td>
    <td class="cell1"><?php var_export ($h == $c);?></td>
    <td class="cell2"><?php var_export ($h == $d);?></td>
    <td class="cell1"><?php var_export ($h == $e);?></td>
    <td class="cell1"><?php var_export ($h == $f);?></td>
    <td class="cell1"><?php var_export ($h == $g);?></td>
    <td class="cell2"><?php var_export ($h == $h);?></td>
  </tr>
 </table>
 <br>
 <h1>Выводы о сравнении</h1>
 <h3>Во время работы с этим заданием я сделала вывод, что при жёстком сравнении вернётся "Истина", только в том случае, если оба операнда совершенно идентичны друг другу.
  При гибком сравнении оператор сначала преобразовывает типы, а потом сравнивает операнды. В этом случае "Истина" возвращается намного чаще.</h3>
 </body>
</html>
