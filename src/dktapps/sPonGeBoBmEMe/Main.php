<?php

namespace dktapps\sPonGeBoBmEMe;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onPlayerChat(PlayerChatEvent $ev){
		$message = $ev->getMessage();
		for($k = 0, $kMax = strlen($message); $k < $kMax; ++$k){
			$char = strtolower($message[$k]);
			if(mt_rand(0, 1) === 1){
				$char = strtoupper($char);
			}
			$message[$k] = $char;
		}

		$ev->setMessage($message);
	}
}
