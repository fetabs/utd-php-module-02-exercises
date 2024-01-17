<?php
$sort = [];

for ($i = 0; $i < 11; $i++) {
	array_push($sort, rand(0, 100));
}

print_r($sort);

for ($i = 0; $i < count($sort); $i++) {
  for ($j = 0; $j < count($sort); $j++) {
    if ($sort[$i] < $sort[$j]) {
      $aux = $sort[$j];
      $sort[$j] = $sort[$i];
      $sort[$i] = $aux;
    }
  }
}

echo "<br/>";
echo "O array ordenado fica: ";
echo "<br/>";

print_r($sort);
