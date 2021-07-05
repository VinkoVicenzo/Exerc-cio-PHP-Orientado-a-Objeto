<?php
include "pessoa.php";

$pessoa = new pessoa("Vinko Vicenzo Tomljanovie", "03/04/2003", "354.198.490-10", "42.521.310-21");
$engenheiro = new engenheiro("Rosangela Tomljanovie", "13/08/1969", "533.019.445-23", "51.500.413-17");

$engenheiro->setCrea("A - XXX.XXX");

$medico = new medico("Rodrigo Machado", "04/12/1989", "223.125.669-15", "31.326.521-13");

$medico->setCrm("32445699-4/BR");

var_dump($pessoa);
echo "<br>";
echo "<br>";
var_dump($engenheiro);
echo "<br>";
echo "<br>";
var_dump($medico);
