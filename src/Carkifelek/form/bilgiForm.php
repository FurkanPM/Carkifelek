<?php

namespace Carkifelek\form;
/*
Form
*/
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\Server;
use Carkifelek\Main;
use dktapps\pmforms\{MenuForm, MenuOption, FormIcon};
use onebone\economyapi\EconomyAPI;

class bilgiForm extends MenuForm{
	
	private $p;
	
	public function __construct(Player $p){
		$this->p = $p;
	    parent::__construct(
		"§7-§cCarkıfelek Bilgi§7-",
		"§7Normal\n§cElmas Kazma\n§cKum\n§cZincir Zırh\n§cToprak\n§cBoş\n§cBoş\n§cBoş",
			[
				new MenuOption("Cikis"),
			],
			
			function(Player $sender, int $dokunulan) : void{
				if($dokunulan == 0){
					$sender->sendMessage("X");
				}
			}
		);
	}
}//end