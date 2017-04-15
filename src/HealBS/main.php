<?php

namespace Op_Command;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class main extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on")
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($sender->isOp()){
      switch($cmd->getName()){
        case 'heal':
          $sender->sethealth(20)
      } else {
        $sender->sethealth(Color::RED."You Not OP !!");
      }
    }
  }
}
