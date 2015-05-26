<?php

namespace Caravane\Bundle\OrganicBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class OffreCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('organic:offre:reminder')
            ->setDescription('Daily 3 days left of validity reminder')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em=$this->getContainer()->get('doctrine')->getManager();
        if($offres=$em->getRepository('CaravaneOrganicBundle:Offre')->getValids()) {
            $today=new \Datetime('now');
            $entities=array();
            foreach($offres as $offre) {
                $lap=$offre->getValidity()-3;
                //$lap=27;
                $date = $offre->getUpdateDate();
                $firstDay =$date;

                $lastDay= $date->modify("+".$lap." days");
                if($lastDay->format('Y-m-d')==$today->format('Y-m-d')) {
                    $entities[$offre->getUserid()->getEmail()][]=$offre;
                }
                    
            }

            foreach($entities as $to=>$offres) {
                $body=$this->getContainer()->get('templating')->render('CaravaneOrganicBundle:Offre:email.reminder.html.twig',
                    array('offres' => $offres));

                //$to="eric@caravanemedia.com";
                
                $message = \Swift_Message::newInstance()
                ->setSubject('Offers to validate')
                ->setFrom("organic@caravanemedia.com")
                ->setTo($to)
                ->setCc("eric@caravanemedia.com")
                ->setBody($body,'text/html');
                
                if(!$this->getContainer()->get('mailer')->send($message)) {
                    echo "error";
                } 
            }
            
        }
    }
}