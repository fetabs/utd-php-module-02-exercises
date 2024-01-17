<?php
$checkMinMax = [];

for ($i = 0; $i < 5; $i++) {
	array_push($checkMinMax, rand(0, 100));
}

$minValue = $checkMinMax[0];
$maxValue = $checkMinMax[0];

for ($i = 1; $i < count($checkMinMax); $i++) {
  if ($checkMinMax[$i] < $minValue) {
    $minValue = $checkMinMax[$i];
  }

  if ($checkMinMax[$i] > $maxValue) {
    $maxValue = $checkMinMax[$i];
  }
}

print_r($checkMinMax);

echo "<br/>";

print("O valor mínimo é " . $minValue . " e o valor máximo é " . $maxValue . ".");
