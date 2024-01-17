<?php
$luckyNumbers = [];

for ($i = 0; $i < 6; $i++) {
  $randomNumber = rand(1, 60);

  while (in_array($randomNumber, $luckyNumbers)) {
    $randomNumber = rand(1, 60);
  }

  array_push($luckyNumbers, $randomNumber);
}

echo "Os números da sorte são: ";

for ($i = 0; $i < 4; $i++) {
	echo$luckyNumbers[$i].", ";
}

echo $luckyNumbers[4]." e ".$luckyNumbers[5].".";
