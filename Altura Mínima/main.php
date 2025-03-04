<?php
$n_brinquedos = 6;
$altura_carlitos = 120;
$altura_brinquedos = [200, 90, 100, 123, 120, 169];
$pode_ir = 0;

for ($i = 0; $i < $n_brinquedos; $i++){
  if ($altura_carlitos >= $altura_brinquedos[$i]){
    $pode_ir++;
  }
}

echo "Carlitos pode ir $pode_ir brinquedos";