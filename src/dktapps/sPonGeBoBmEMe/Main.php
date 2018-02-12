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
		$message = str_split($ev->getMessage());
		foreach($message as $k => $char){
			$char = strtolower($char);
			if(mt_rand(0, 1) === 1){
				$char = strtoupper($char);
			}

			$message[$k] = $char;
		}

		$ev->setMessage(implode('', $message));
	}
}
