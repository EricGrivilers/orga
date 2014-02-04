<?php
namespace Caravane\Bundle\OrganicBundle\Listeners;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

use Symfony\Component\Templating\EngineInterface;

use \Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use \Caravane\Bundle\OrganicBundle\Managers\InvoiceManager;
use \Caravane\Bundle\OrganicBundle\Managers\JobManager;
use \Caravane\Bundle\OrganicBundle\Managers\OffreManager;



class EntitiesStatusUpdater {




    protected $mailer;
    protected $templating;

/*
    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating)
    //public function __construct()
    {
        $this->mailer = $mailer;
        $this->templating = $templating;

    }
*/
    public function __construct($container) {
        $this->container=$container;
    }


    public function postUpdate(LifecycleEventArgs $args) {

        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Offre) {

        }
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Job) {
            $jobManager=new JobManager($entity,$entityManager);
            $mails=$jobManager->checkAvailability($this->container);
            if(!empty($mails)) {
                foreach($mails as $mail) {
                    $message = \Swift_Message::newInstance()
                    ->setSubject('Job updated')
                    ->setFrom($mail['from']->getEmail())
                    ->setTo($mail['to']->getEmail())
                    ->setCc(array($mail['from']->getEmail()))
                    ->setBody($this->container->get('templating')->render(
                        'CaravaneOrganicBundle:Job:email.update.html.twig',
                        array('messages' => $mail['messages'])),'text/html'
                    )
                    ;
                    $this->container->get('mailer')->send($message);
                }
            }
        }

      /*  if ($entity instanceof \Surgeworks\CoreBundle\Entity\Item) {
            $params = array('item_id' => $entity->getId());
            $col_repo = $entityManager->getRepository('Surgeworks\CoreBundle\Entity\ItemsToCollections');
            $status_id = $entity->getStatusId();
            $q = $entityManager->createQuery("SELECT s.status_symbol FROM Surgeworks\CoreBundle\Entity\Status s WHERE s.id = $status_id");
            $res = $q->getResult();
            if (isset($res[0]['status_symbol'])) {
                if ($res[0]['status_symbol'] != 'st_live') {
                    $col = $col_repo->findBy($params);
                    foreach ($col as $c) {
                        $c->setStatusId($entity->getStatusId());
                        $entityManager->persist($c);
                        $col_repo->setStatusToAllChilds($c->getPathWithId(), $entity->getStatusId());
                    }
                }
            }
            $entityManager->flush();
        }
        */


    }
    public function prePersist(LifecycleEventArgs $args) {

        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Client) {
            $clientManager=new ClientManager($entity,$entityManager);
            $clientManager->prePersist();
        }
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Invoice) {
            $clientManager=new InvoiceManager($entity,$entityManager);
            $clientManager->prePersist();
        }
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Offre) {

        }

    }

    public function postPersist(LifecycleEventArgs $args) {

        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Client) {

            $clientManager=new ClientManager($entity,$entityManager);
            $clientManager->postPersist();
        }
         if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Job) {

            $jobManager=new JobManager($entity,$entityManager);
            $jobManager->postPersist();
            $jobManager->checkAvailability($this->container);
        }
         if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Offre) {
            $offreManager=new OffreManager($entity,$entityManager);
            $offreManager->postPersist();

        }


    }

    public function preUpdate(PreUpdateEventArgs $args) {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        $uow = $entityManager->getUnitOfWork();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Offre) {
            if ($args->hasChangedField('offretype')  || $entity->getReference()=='temp') {
                $offreManager=new OffreManager($entity,$entityManager);
                $entity->setReference($offreManager->changeReference());
                $uow->recomputeSingleEntityChangeSet($entityManager->getClassMetadata("CaravaneOrganicBundle:Offre"),$entity);
            }
             if ($args->hasChangedField('status') && $args->getOldValue('status')=='ok' && $args->getNewValue('status')=='CONFIRMÉ') {

                //$uow->recomputeSingleEntityChangeSet($entityManager->getClassMetadata("CaravaneOrganicBundle:Offre"),$entity);
            }

        }
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Invoice) {
            if ($args->hasChangedField('status') && $args->getOldValue('status')=='draft' && $args->getNewValue('status')=='ok') {
                $invoiceManager=new InvoiceManager($entity,$entityManager);
                $entity->setReference($invoiceManager->setReference());
                $uow->recomputeSingleEntityChangeSet($entityManager->getClassMetadata("CaravaneOrganicBundle:Invoice"),$entity);
            }
            if ($args->hasChangedField('status') && $args->getOldValue('status')=='ok' && $args->getNewValue('status')=='paid') {
                $invoiceManager=new InvoiceManager($entity,$entityManager);
                $entity->setPaymentdate($invoiceManager->setPaymentdate());
                $uow->recomputeSingleEntityChangeSet($entityManager->getClassMetadata("CaravaneOrganicBundle:Invoice"),$entity);
            }
        }

    }
}
