<?php
/**
 * Created by PhpStorm.
 * User: mevlut
 * Date: 21.08.2016
 * Time: 02:00
 */

namespace Acme;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\ClientInterface;
use ZipArchive;

class NewCommand extends Command
{
    private $client;

    /**
     * NewCommand constructor.
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
        parent::__construct();
    }

    public function configure()
    {
        $this->setName('new')
            ->setDescription('Create a new Laravel application.')
            ->addArgument('name', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $directoryName = getcwd() . '/' . $input->getArgument('name');
        $this->assertApplicationDoesNotExist($directoryName, $output);

        $output->writeln('<info>Crafting application...</info>');

        $this->download($zipFile = $this->makeFileNAme())
            ->extract($zipFile, $directoryName)
            ->cleanUp($zipFile);

        $output->writeln('<comment>Application ready!</comment>');
    }

    private function assertApplicationDoesNotExist($directoryName, OutputInterface $output)
    {
        if(is_dir($directoryName))
        {
            $output->writeln('<error>Application already exist!</error>');
            exit(1);
        }
    }

    private function makeFileName()
    {
        return getcwd() . '/laravel_' . md5(time() . uniqid()) . '.zip';
    }

    private function download($zipFile)
    {
        $response = $this->client->get('http://cabinet.laravel.com/latest.zip')->getBody();
        file_put_contents($zipFile, $response);

        return $this;
    }

    private function extract($zipFile, $directoryName)
    {
        $archive = new ZipArchive();

        $archive->open($zipFile);
        $archive->extractTo($directoryName);
        $archive->close();

        return $this;
    }

    private function cleanUp($zipFile)
    {
        @chmod($zipFile, 0777);
        @unlink($zipFile);

        return $this;
    }
}