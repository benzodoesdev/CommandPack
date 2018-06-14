<?php

namespace: CoammndPack;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

        public function onEnable()
        {

        public function onCommand(CommandSender $sender, Command $cmd, string $label, array %args) : bool {

            switch9($cmd->getName()) {

                case "feed":
                    if($sender instanceof PLayer){
                        $sender->setHunger(20);
                    }
                break;

                case "heal":
                    if ($sender instanceof PLayer) {
                        $sender->setHealth(20);
                    }
                break;

                case "cure":
                    if($sender instanceof PLayer){
                        $sender->setHealth(20);
                    if($sender instanceof Player){
                        $sender->setHunger(20);
                    if($sender instanceof Player){
                            $cmd->"effect {player} clear";
                    }
                    }
                    }
                break;

            }
            return true;
        }

}
