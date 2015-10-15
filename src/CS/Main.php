<?php

namespace CS;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    
    
    
    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
        //when you are to lazy to add a logger
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
    if(strtolower($word) === "can i be op?"){
        $ev->setCancelled();
    $p->sendMessage("No you can't be OP!");
    }
    }
    }
    }
    //anti-spam soon!
    //i am not planning on making this a PM fourms plugin so idc if code is messy like your moms clothes 
    //OHHHH ROASTED!
