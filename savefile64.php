<?php 
// Devolped by: Luis Torres Carpio
// Version: 1.0
// Report Bug: luis.torres.carpio1@gmail.com
// FB: https://facebook.com/developer.ltc
// Uso Libre
// Mas complementos web en: www.micodigolibre.com
function savefile64($d, $bb){$a = explode(' ',microtime())[0];$b = explode(",", $bb);$c = $b[1];if (strrpos($d, ".") == false) {$f = date("Ymd_His")."_". number_format($a, 5, '', '').".".$c;$d = $d."/".$f;}else{	$e = explode("/", $d);	$f = $e[count($e)-1];}$g = $b[0];$g = str_replace(" ", "+", $g);$h = base64_decode($g);file_put_contents($d, $h);return $f;}?>