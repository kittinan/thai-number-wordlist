<?php

for ($i = 0; $i < 100000000; $i++) {
  echo '08' . str_pad($i, 8, STR_PAD_LEFT) . "\n";
}