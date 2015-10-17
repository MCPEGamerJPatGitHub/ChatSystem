<?php

namespace CS;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    
    
    public $isActive = array();
    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onChat(PlayerChatEvent $ev){
    $p = $ev->getPlayer();
    $badwords = array("fuck","pussy","bitch","nigga","cunt","whore","asshole","bitch nigga","dick",/*spanish word for penis*/"pene",
    "penis","cock");
    $msg = explode(" ",$ev->getMessage());
    foreach($msg as $word){
    foreach($badwords as $m){
    if(strtolower($word) === $m){
    $ev->setCancelled();
    $p->sendMessage("You can't say that youngster!");
    
    }
    }
    }
    foreach($msg as $word){
        $word = "op";
            $search = strpos($msg, $word);
            if ($search === false) {
                return false;
            } else {
              //  $ev->setCancelled();
                $ev->setMessage(str_replace("op","noob"));
            }
    }
   /* muting chat if($this->isActive[$p->getName()]{
        $p->sendMessage($ev->getMessage(null));
        
    } */
    }
    }
    //End of plugin.
