<?php

namespace Greenifier;

use pocketmine\level\Level.php
use pocketmine\level\Level__32bit.php
use pocketmine\level\Level__64bit.php
use pocketmine\level\format\mcregion\Chunk.php
use pocketmine\level\format\mcregion\Chunk__32bit.php
use pocketmine\level\format\mcregion\Chunk__64bit.php
{
  
  for($x = -10000; $x <= 10000; $x++) {
  for($z = -10000; $z <= 10000; $z++) {
    $level->setBiomeColor($x,$z,127,169,76);
  }
}
  
}
