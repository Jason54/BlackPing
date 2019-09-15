<?php

namespace BlackTeam\BlackPing;

use pocketmine\scheduler\Task;

class BlackPingTask extends Task{
	
	public function onRun(int $tick):void{
		foreach(BlackPing::getInstance()->getServer()->getOnlinePlayers() as $player){
			$tag=BlackPing::getInstance()->getConfig()->get("Format");
			$tag=str_replace("{ping}", $player->getPing(), $tag);
			$player->setScoreTag($tag);
		}
	}
}
