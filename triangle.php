<?php
$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

if ($a + $b > $c && $b + $c > $a && $a + $c > $b) {
  echo "O triângulo de lados ".$a.", ".$b." e ".$c." é um ";
  
  if ($a == $b && $b == $c) {
    echo "triângulo equilátero.";
  } elseif ($a == $b || $b == $c || $a == $c) {
    echo "triângulo isósceles.";
  } else {
    echo "triângulo escaleno.";
  }
} else {
  echo "Os lados ".$a.", ".$b." e ".$c." não formam um triângulo.";
}
