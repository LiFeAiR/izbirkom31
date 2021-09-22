<?php

namespace Parser\Command;

error_reporting(0);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use SleepingOwl\Apist\Apist as _e;

;

/**
 * Class Parser
 * @package Parser\Command
 */
class Parser extends Command
{
    public function __construct(string $name = null)
    {
        parent::__construct($name);
    }

    public function configure()
    {
        parent::configure();

        $this
            ->setName('parser')
            ->setDescription('parser')
            ->setHelp(
                'parser'
            )
            ->addArgument('input_dir', InputArgument::REQUIRED, 'Path for read files of data')
            ->addArgument('output_dir', InputArgument::REQUIRED, 'Path for write files of data');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $e = new Encoder();
        $i_dir = $input->getArgument('input_dir');
        $o_dir = $input->getArgument('output_dir');

        foreach (glob($i_dir . "*.html") as $filename) {
            $name = pathinfo($filename, PATHINFO_FILENAME);
            $json = json_encode(
                $e->execute(
                    file_get_contents($filename),
                    [
                        "header" => _e::filter('ul.breadcrumb li:last-child a')->text(),
                        "breadcrumb" => _e::filter('ul.breadcrumb li a')->each(
                            function ($v) {
                                return $v->text();
                            }
                        ),
                        "rows" => _e::filter('div.table-responsive table tr')->each(
                            [
                                'key' => _e::filter('td')->eq(0)->text()->trim(),
                                //'desc' => _e::filter('td')->eq(1)->text()->trim(),
                                'values' => _e::filter('td')->eq(2)->call(
                                    function ($v) {
                                        return preg_split('/[,;\s]+/', $v->text(), -1, PREG_SPLIT_NO_EMPTY);
                                    }
                                ),
                            ]
                        ),
                    ]
                )
                , JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

            $output->writeln($filename);
            $output->writeln($json);

            file_put_contents($o_dir . $name . ".json", $json);
        }

        $output->writeln('<infocycle>parsing finished</infocycle>');

        return Command::SUCCESS;
    }
}

class Encoder extends _e
{
    function execute($content, $command)
    {
        return $this->parse($content, $command);
    }
}