<?php

namespace UnknownBallin\PingTag;

use pocketmine\scheduler\Task;

class PingTagTask extends Task{
	
	public function onRun(int $tick):void{
		foreach(PingTag::getInstance()->getServer()->getOnlinePlayers() as $player){
			$tag=PingTag::getInstance()->getConfig()->get("Format");
			$tag=str_replace(array("{ping}"), $player->getPing(), $tag);
			$player->setScoreTag($tag);
		}
	}
}
