<?php

namespace CoammandPack;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Commands extends PluginBase implements Listener{

        public function onEnable(): void {
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }

        public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {

            switch($cmd->getName()) {
                case "feed":
                    if($sender instanceof Player){
                        $sender->setHunger(20);
                        $sender->sendMessage("You are no longer hungry!");
                    }
                break;

                case "heal":
                    if ($sender instanceof Player) {
                         $sender->setHealth(20);
                         $sender->sendMessage("You have been healed!");
                    }
                break;

                case "cure":
                    if($sender instanceof Player){
                        $sender->setHealth(20);
                        $sender->setHunger(20);
                        $sender->sendMessage("You have been cured!");
                    }
                case "clearinv":
                    if($sender instanceof Player) {
                        $sender->getInventory()->clearAll();
                        $sender->getArmorInventory()->clearAll();
                    }
                break;
                case "fly":
                    if($sender instanceof Player) {
                        if($sender->getAllowFlight()){
                            $sender->setAllowFlight(true);
                        } else {
                            $sender->setAllowFlight(false);
                        }
                    }
                break;
            }
        }
}
