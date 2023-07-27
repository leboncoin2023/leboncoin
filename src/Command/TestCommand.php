<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class TestCommand extends Command {

    protected function execute(InputInterface $input, OutputInterface $output): int {

        $output->writeln('La commande fonctionne');

        $cronService = $this->getContainer()->get('app.cron.test');
        $result = $cronService->index();

        $output->writeln('Résultat : ' . $result);;

        return Command::SUCCESS;
    }

    protected function configure() {
        // the name of the command (the part after "php bin/console")
        $this->setName('app:test-command')
			 ->setDescription('Commande de test');
    }


}