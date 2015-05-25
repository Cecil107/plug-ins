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
      $this->getLogger()->info("Online!");
    }
    public function onDisable() {
      $this->getLogger()->info("Offline!");  
    }	}
    
class Text1 extends BasePlugin implements Listener{

 private $particles = [];

 public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->particles[] = new FloatingTextParticle(new Vector3($player->getX(), $player->getY(), $player->getZ()), "", TextFormat::GREEN . "Welcome back!");
 }

 public function onPlayerJoin(PlayerJoinEvent $event){
  foreach($this->particles as $particle){
   $event->getPlayer()->getLevel()->addParticle($particle, [$event->getPlayer()]);
  }
 }

}}
