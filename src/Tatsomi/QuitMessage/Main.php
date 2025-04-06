<?php

declare(strict_types = 1);

namespace Tatsomi\QuitMessage;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {

    private Config $config;

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Plugin Has Enabled!");

        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
    }

    public function getQuitMessage(): string {
        return $this->config->get("QuitMessage");
    }

    public function onJoin(PlayerQuitEvent $event): void
    {
        $player = $event->getPlayer()->getName();
        $message = str_replace('{player}', $player, $this->getQuitMessage());

        if ($message == null) {
            $this->getLogger()->warning("QuitMessage is empty!");
            return;
        }

        $event->setQuitMessage($message);
    }

    public function onDisable(): void {
        $this->getLogger()->notice("Plugin Has Disabled!");
    }
}
