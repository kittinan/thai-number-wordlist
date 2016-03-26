<?php

for ($i = 0; $i < 10000000; $i++) {
  echo '07' . str_pad($i, 7, STR_PAD_LEFT) . "\n";
}