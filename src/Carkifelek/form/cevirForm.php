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

class cevirForm extends MenuForm{
	
	private $p;
	
	public function __construct(Player $p){
		$this->p = $p;
	    parent::__construct(
		"Çarkıfelek",
		"Açmayı Onaylıyormusun?",
			[
				new MenuOption("Normal"),
				new MenuOption("Özel"),
			],
			
			function(Player $p, int $dokunulan) : void{
				if($dokunulan == 0){
					$this->normal($p);
				}
				if($dokunulan == 1){
					$p->sendMessage("Yakinda");
				}
			}
		);
	}
	public function normal(Player $p){
	   $player = $p->getPlayer();
	   $oran = rand(1,6);
     	switch($oran){
			case 1:
			    if(EconomyAPI::getInstance()->myMoney($player) >= 500){
		
		$player->getInventory()->addItem(Item::get(278,0,1));
                 $player->sendPopup("§21adet §bElmas Kazma §2çıktı.");
                 
			EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}
			break;
			case 2:
			    if(EconomyAPI::getInstance()->myMoney($player) >= 500){
                 $player->addTitle("Boş Çıktı.");
                 EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}
            break;
			case 3:
			    if(EconomyAPI::getInstance()->myMoney($player) >= 500){
		$amount = rand(10,38);
		
                 $player->sendPopup("§2$amount adet §cToprak §2çıktı.");
                 EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}
                 break;
			    case 4:
			 if(EconomyAPI::getInstance()->myMoney($player) >= 500){
                 $player->sendPopup("§2adet §7Zincir Zırh §2çıktı.");
		$player->getInventory()->addItem(Item::get(303,0,1));
		                 EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}
			        break;
			        case 5:
			     if(EconomyAPI::getInstance()->myMoney($player) >= 500){
		$amount = rand(5,25);
		
                 $player->sendPopup("§2$amount adet §eKum §2çıktı.");
		$player->getInventory()->addItem(Item::get(17,0,$amount));
		EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}

			            break;
			            case 6:
			          if(EconomyAPI::getInstance()->myMoney($player) >= 500){
                 $player->addTitle("Boş Çıktı.");
		EconomyAPI::getInstance()->reduceMoney($player, 500);
			$player->sendMessage("§8» §7Normal Çarkıfelek için 500 lira yatırıldı!");
		} else{
			$player->sendMessage("§8» §cCarkıfeleği açmak için yeterli paranız yok!");
		}
		            break;
       	}
	}
}//end