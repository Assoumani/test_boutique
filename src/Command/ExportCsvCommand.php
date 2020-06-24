<?php

namespace App\Command;

use App\Controller\CsvController;
use App\Kernel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

class ExportCsvCommand extends Command
{
    protected static $defaultName = 'app:export:csv';
    private $router;

    public function __construct(
        string $name = null,
        RouterInterface $router
    )
    {
        parent::__construct($name);
        $this->router = $router;
    }

    protected function configure()
    {
        $this
            ->setDescription('Exports products list in CSV file');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $url = $this->router->generate('product_all', [], UrlGeneratorInterface::RELATIVE_PATH);
        $output->writeln('<a href=https://symfony.com>Symfony Homepage>');
        $io->success('Response sent');
        return 0;
    }
}
