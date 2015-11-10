<?php

namespace Greenifier;

use pocketmine\level\Level;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Greenifier extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Greenifier Loaded");
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    switch($command->getName()){
      case "greenify":
        if(count($args) !== 0){
		$sender->sendMessage(TextFormat::RED . "Usage: " . $command->getUsage());
		return true;
	}
				
	$sender->sendMessage("Prepare for a lag spike!");
				
	$level = $sender->getLevel();
  
        for($x = -100; $x <= 100; $x++) {
          for($z = -100; $z <= 100; $z++) {
            $level->setBiomeColor($x,$z,127,169,16);
          }
        }
        
        return true;
    }   
  }
}
?>
