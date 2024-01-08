<?php

namespace App\Command;

use App\Services\TVSerieRename;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;


#[AsCommand(
    name: 'TVR:rename',
    description: 'Renomme les fichiers vidéo du dossier transmis.',
)]
class TVRRenameCommand extends Command
{
    
    private ?array $_Files;
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('folder', InputArgument::REQUIRED, 'Emplacement des vidéos à renommer')
            ->addArgument('modele', InputOption::VALUE_OPTIONAL, 'Modele à utiliser pour le renommage')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $folder = $input->getArgument('folder');

        try {
            $app = new TVSerieRename($folder, "");          
        } catch (\Throwable $th) {
            $io->error($th->getMessage());
        }
        
        $io->success("Fin de l'opération de renommage.");
        return Command::SUCCESS;
        
         /*
        $io->note(sprintf('You passed an argument: %s', $folder));
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
         if ($input->getOption('modele')) {
            // ...
        }
        */
    }



}
