<?php

namespace HText;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\position;
use pocketmine\math\Vector3;
use pocketmine\level\particle\FloatingTextParticle;

class Main extends PluginBase implements Listener{

    public function onDisable() {
        $this->getLogger()->info("Off!");
    }
    private $particles = [];
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->particles[] = new FloatingTextParticle(new Vector3(554, 104, -114), "", TextFormat::GOLD . "Vtej na Mesru!");
        $this->getLogger()->info("On!");
    }
}
