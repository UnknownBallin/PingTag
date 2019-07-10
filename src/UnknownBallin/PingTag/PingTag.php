<?php

namespace UnknownBallin\PingTag;

use pocketmine\plugin\PluginBase;

class PingTag extends PluginBase{

		public function onEnable():void{

		$this->getScheduler()->scheduleRepeatingTask(new PingTagTask, 10);

	}

}
