<?php
$checkPalindrome = "Carro";

echo $checkPalindrome." ";

if (strtolower($checkPalindrome) == strtolower(strrev($checkPalindrome))) {
  echo "é um palíndromo.";
} else {
  echo "não é um palíndromo.";
}
