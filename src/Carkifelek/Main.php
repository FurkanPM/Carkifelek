<?php

namespace Carkifelek;
/*
Eklenti Furkan Can Mera tarafından kodlanmıştır, izinsiz satılması yasaktır!
*/
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use Carkifelek\form\cevirForm;
use Carkifelek\form\bilgiForm;
use pocketmine\utils\MainLogger;

class Main extends PluginBase{
	
	public function onEnable(){
	    MainLogger::getLogger()->notice("Eklenti Aktif - Ryuga");
	    MainLogger::getLogger()->notice("My github : https://github.com/FurkanPM");
	}
	
	public function onCommand(CommandSender $p, Command $kmt, string $label, array $args): bool{
	    		switch($kmt->getName() == "carkifelek"){
			case "carkifelek":
			if(isset($args[0])){
				if(strtolower($args[0] == "cevir")){
			$p->sendForm(new cevirForm($p));
				}
				if(strtolower($args[0] == "yardim")){
			$p->sendMessage("§7- §cCarkifelek §7-");
			$p->sendMessage("§c/carkifelek cevir §7| Carkifelek cevirir");
			$p->sendMessage("§c/carkifelek yardim §7| Carkifelek yardim");
			$p->sendMessage("§c/carkifelek bilgi §7| Carkifelek Bilgi");
				}
				if(strtolower($args[0] == "bilgi")){
				    $p->sendForm(new bilgiForm($p));
				}
			}else{
			    $p->sendMessage("§cKomutları bilmiyorsan.\n §7/carkifelek yardim komutunu kullan.");
			}
			return true;
		}
	}
}
