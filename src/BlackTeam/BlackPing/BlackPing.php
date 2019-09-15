<?php

namespace BlackTeam\BlackPing;

use pocketmine\plugin\PluginBase;

class BlackPing extends PluginBase{
	
	protected static $instance;
	
	public function onEnable():void{
		self::$instance=$this;
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getScheduler()->scheduleRepeatingTask(new BlackPingTask, 10);
	}
	public static function getInstance():self{
		return self::$instance;
	}
}
