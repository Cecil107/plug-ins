<?php

namespace Text{

use pocketmine\plugin\PluginBase;
use pocketmine\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\level\position;

    class Text extends PluginBase {
    
    public function onEnable(){
      $this->getLogger()->info("onEneble() has been called!");
    }
    public function onDisable() {
      $this->getLogger()->info("onDisable() has been called!");  
    }	}
    
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName(text)){
			case "text":
                            .->addParticle(new FloatingTextParticle (new Vector3($player->getX(), $player->getY(), $player->getZ()), "§1Hello §aWorld§l!"), [$player])
                                $sender->sendMessage("§1Hotovo §3panne§l!")
                                }}}
