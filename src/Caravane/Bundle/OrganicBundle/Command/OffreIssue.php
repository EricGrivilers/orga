<?php

namespace Caravane\Bundle\OrganicBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class OffreIssue extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('organic:offre:issue')
            ->setDescription('Check for issues')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em=$this->getContainer()->get('doctrine')->getManager();
        $today=new \Datetime('now');

        $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($today, $today->add('3 years'));
        $tents=$em->getRepository('CaravaneOrganicBundle:Tent')->findAll();

        foreach($offres as $offre) {
            echo $offre->getIReference()." " .$offre->getBuildate()->format('Y-m-d');
        }
    }
}
