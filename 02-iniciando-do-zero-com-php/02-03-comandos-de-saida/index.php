<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!</p>";
echo "<p>Olá Mundo!", "<span class='tag'>Bora Programar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'>Bora Programar!</span>";
echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = 'dia';
echo "<p>Falta 1 $day para o evento.</p>";
echo "<p>Faltam 2 {$day}s para o evento.</p>";

echo "<h4>{$hello} {$code}</h4>";
?>
<h4><?= $hello;?> <?= $code; ?></h4>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;
print "<p>{$hello} {$code}</p>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "course"=> "FSPHP",
    "class"=> "Comandos de Saída",
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$welcome = "<p>Bem-vindo, %s %s!</p>";
$name = 'Tiago';
$lastName = 'Davanzo';

printf($welcome, $name, $lastName);

echo sprintf($welcome, $name, $lastName);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$header = "<h4>Curso %s - Aula %s</h4>";
vprintf($header, $array);

echo vsprintf($header, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($hello);
var_dump($code);
var_dump($array);