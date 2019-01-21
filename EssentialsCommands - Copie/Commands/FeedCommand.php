<?php

    namespace EssentialsCommands\Commands;

    use pocketmine\command\Command;
    use pocketmine\command\CommandSender;
    use pocketmine\Server;
    use pocketmine\Player;
    use pocketmine\utils\TextFormat as "§";

    class FeedCommand extends Command {
        
        private $prefix = "[FEED]";

        public function __construct(string $name){
            parent::__construt(
                $name,
                "Regen la nourriture d'un Joueur"
                "/feed",
                []
            );
        };

        public function execute(CommandSender $sender, $command, array $args){
            $usage = "/feed";
            if(!$sender->isOP()){
                return $sender->sendMessage(§c.$this->prefix."Tu n'as pas la permission d'utiliser cette commande");
            };
            if(!$sender instanceof Player){
                return $sender->sendMessage(§c.$this->prefix."Tu ne peux pas éxécuter cette commande depuis la CONSOLE");
            };

            $maxfood = $sender->getMaxFood();
            $sender->maxFood($maxfood);
            $sender->sendMessage("Votre nourriture à bien été régénérée !");

            return true;
        };
    };
?>