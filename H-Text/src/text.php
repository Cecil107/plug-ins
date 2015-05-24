<?php

namespace Text;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener; // You don't need this if there aren't any events being watched
use pocketmine\Player;
use pocketmine\level\position;

    class Text extends PluginBase {
    
    public function onEnable(){
      $this->getLogger()->info("onEneble() has been called!");
    }
    public function onDisable() {
      $this->getLogger()->info("onDisable() has been called!");  
    }
    
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        	if(strtolower($command->getName()) === "text"){
        		$player = $sender->getDisplayName;
        		$pos = $player->getLevel()->getPosition();
			$pos->addParticle(new FloatingTextParticle (new Vector3($player->getX(), $player->getY(), $player->getZ()), "§1Hello §aWorld§l!"), [$player]);
                        $sender->sendMessage("§1Hotovo §3panne§l!");
        	}
	}
}
