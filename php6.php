<?php

$bilangan = 0;

if ($bilangan > 0) {
  echo "ini adalah bilangan positif <br>";
  if ($bilangan % 2 == 0) {
    echo "$bilangan merupakan bilangan genap";
  } else {
    echo "$bilangan merupakan bilangan ganjil";
  }
} else if ($bilangan < 0) {
  echo "Ini adalah bilangan negatif <br>";
  if ($bilangan % 2 == 0) {
    echo "$bilangan merupakan bilangan genap";
  } else {
    echo "$bilangan merupakan bilangan ganjil";
  }
} else if ($bilangan == 0) {
  echo "Ini adalah NOL";
}

 ?>
