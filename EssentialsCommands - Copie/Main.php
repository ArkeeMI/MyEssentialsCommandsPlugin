<?php

    namespace EssentialsCommands;

    use pocketmine\plugin\PluginBase;
    use pocketmine\Server;
    use pocketmine\Player;
    use pocketmine\event\Listener;
    use pocketmine\utils\TextFormat as "§";

    use EssentialsCommands\Commands\HealCommand;
    use EssentialsCommands\Commands\FeedCommand;

    class Main extends PluginBase implements Listener {

        public static $logger = null;

        public function onLoad(){

            self::$logger = $this->getLogger();
            self::$logger->info("Version 0.0.1");

            $this->getServer()->getCommandMap()->register("heal", new HealCommand("heal"));
            $this->getServer()->getCommandmap()->register("feed", new FeedCommand("feed"));
        };
    };
?>