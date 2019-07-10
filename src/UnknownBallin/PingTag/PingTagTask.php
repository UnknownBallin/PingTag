<?php

namespace UnknownBallin\PingTag;

use pocketmine\Server;

use pocketmine\scheduler\Task;

class PingTagTask extends Task{

		public function onRun(int $tick):void{

		foreach(Server::getInstance()->getOnlinePlayers() as $player){

			$playerping=$player->getPing();

			if($playerping >= 0){

				$ping="§a".$playerping."ms";

				}

				if($playerping >= 50){

					$ping="§e".$playerping."ms";

					}

					if($playerping >= 100){

						$ping="§c".$playerping."ms";

						}

						$player->setScoreTag($ping);

		}

	}

}
