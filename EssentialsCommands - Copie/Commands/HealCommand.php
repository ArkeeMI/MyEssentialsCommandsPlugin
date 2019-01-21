<?php
    
    namespace EssentialsCommands\Commands;

    use pocketmine\command\Command;
    use pocketmine\command\CommandSender;
    use pocketmine\Server;
    use pocketmine\Player;
    use pocketmine\utils\TextFormat as "§";

    class HealCommand extends Command {

        private $prefix = "[HEAL]";

        public function __construct(string $name){
            parent::__construct(
                $name,
                "Regen la vie du Joueur",
                "/heal",
                []
            );
        };

        public function execute(CommandSender $sender, $command, array $args){
            $usage = "/heal";
            if(!$sender->isOP()){
                return $sender->sendMessage(§c.$this->prefix."Tu n'as pas la permission d'utiliser cette commande");
            };
            if(!$sender instanceof Player){
                return $sender->sendMessage(§c.$this->prefix."Tu ne peux pas éxécuter cette commande depuis la CONSOLE");
            };

            $maxheal = $sender->getMaxHeal();
            $sender->setHeal($maxheal);
            $sender->sendMessage("Votre vie à bien été régénérée !");

            return true;
        };
    };
?>