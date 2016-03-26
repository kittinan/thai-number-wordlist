<?php

for ($i = 0; $i < 10000000; $i++) {
  echo '09' . str_pad($i, 8, STR_PAD_LEFT) . "\n";
}