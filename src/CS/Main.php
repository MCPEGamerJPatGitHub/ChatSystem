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
    if(strtolower($word === $m)){
    $ev->setCancelled();
    $p->sendMessage("You can't say that youngster!");
    
    }
    }
    }
    foreach($msg as $word){
    if(strtolower($word === "how do i see my coins?" or "how do i see my money?"))){
    $p->sendMessage("Use /mymoney, /coins, or /bal. To see your money!");
    }
    }
    foreach($msg as $word){
   if(strtolower($word === "where do i go to buy a rank?"||"how to get VIP?" or "how to get vip?"))){
    $p->sendMessage("go to our website!");
    //canel event or nah?
    }
    }
    }
    }
    //anti-spam soon!
    //i am not planning on making this a PM fourms plugin so idc if code is messy like your moms clothes 
    //OHHHH ROASTED!
