<?php

namespace FileBrowser;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class FileBrowser extends PluginBase {
  public function onEnable(){
    if (!is_dir($this->getDataFolder())){
      mkdir($this->getDataFolder());
    }
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "filebrowser"){
      
    }
}