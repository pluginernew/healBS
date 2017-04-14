<?php

namespace HealBS;

use pockemine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
class Main extends PluginBase{

pubilc function onEnable(){
 $this->getServer()->getlogger()->info("[HealBS] Plugin has been enabled");
 }
  
  pubilc function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getname()){
      case 'heal':
          $sender->setHealth(20)
            case 'message':
        $this->getServer()->broadcast($args[0]);
        
       
    
    }
}
