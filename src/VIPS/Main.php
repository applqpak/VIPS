<?php

  namespace VIPS;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\event\player\PlayerKickEvent;
  use pocketmine\Player;

  class Main extends PluginBase implements Listener
  {

    public function onEnable()
    {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onKick(PlayerKickEvent $event)
    {

      if($event->getReason() == "disconnectionScreen.serverFull")
      {

        if($event->getPlayer()->hasPermission("vip.join"))
        {

          $event->setCanccelled();

        }

      }

    }

  }

?>
