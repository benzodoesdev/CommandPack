<?php

namespace: CoammndPack;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Listener;

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
                        $this->getLogger()->info("You are no longer hungry!")
                    }
                break;

                case "heal":
                    if ($sender instanceof PLayer) {
                         $sender->setHealth(20);
                         $this->getLogger()->info("You have been healed!")
                    }
                break;

                case "cure":
                    if($sender instanceof PLayer){
                        $sender->setHealth(20);
                    if($sender instanceof Player){
                        $sender->setHunger(20);
                        $this->getLogger()->info("You have been cured!")
                case "clearinv":
                    if($sender instanceof Player) {
                        $sender->getinventory()->clearALL();
                        $sender->getArmorInventory()->clearAll();





                        class Fly extends PluginBase implements Listener[



        Public function onEnable(){



                            $this->getLogger()->info("Fly Succesfully Enabled");



                        }







        Public function onDisable(){



                            $this->getLogger()->info("Fly Succesfully Disabled");
                    }
                break;

            }
            return true;
        }

}
