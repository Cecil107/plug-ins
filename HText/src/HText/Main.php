<?php

namespace H-Text;

use pocketmine\plugin\PluginBase;
use pocketmine\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\level\position;

class Main extends PluginBase implements Listener{
    
    public function onDisable() {
      $this->getLogger()->info("Offline!");  
    }

 private $particles = [];

 public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->particles[] = new FloatingTextParticle(new Vector3($player->getX(), $player->getY(), $player->getZ()), "", TextFormat::GREEN . "Welcome back!");
 }

 public function onPlayerJoin(PlayerJoinEvent $event){
  foreach($this->particles as $particle){
   $event->getPlayer()->getLevel()->addParticle($particle, [$event->getPlayer()]);
   $p->addSound(new Explode(new Vector3($player->getX(), $player->getY(), $player->getZ()); 
  }
 }

}