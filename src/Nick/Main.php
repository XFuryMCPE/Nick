<?php
namespace Nick;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
class Main extends PluginBase implements Listener;

    public function onEnable(){

   }

   
   public function onCommand(CommandSender $sender, Command $cmd, $list, Array $args){
    switch($cmd){
            case "nick":
                     if(count($args == 1)){
                       if($args[0] == "set"){
                    $sender->sendMessage(TF::BOLD . TF::ITALIC . TF::BLUE . "Your nick has now been set to " . TF::RED . $args[0]);
                if($sender instanceof Player){         
      $sender->setNameTag(TF::BOLD. TF::BLUE . $args[0] . TF::GOLD . $sender->getHealth() . TF::GREEN . "/" . TF::GOLD . $sender->getMaxHealth());
             if($args[0] == null){
               $sender->sendMessage(TF::RED . "Invalid Nick!");
               }
             }
          }
     }

   }
}
