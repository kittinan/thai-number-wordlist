<?php

for ($i = 0; $i < 1000000; $i++) {
  echo '03' . str_pad($i, 7, STR_PAD_LEFT) . "\n";
}