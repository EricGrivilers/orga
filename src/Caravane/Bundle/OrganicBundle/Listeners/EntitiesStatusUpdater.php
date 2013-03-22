<?php
namespace Caravane\Bundle\OrganicBundle\Listeners;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

use \Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use \Caravane\Bundle\OrganicBundle\Managers\InvoiceManager;
use \Caravane\Bundle\OrganicBundle\Managers\OffreManager;



class EntitiesStatusUpdater {
    public function postUpdate(LifecycleEventArgs $args) {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
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


        
        else {
           
        }

    }

    public function postPersist(LifecycleEventArgs $args) {
        
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Client) {
           
            $clientManager=new ClientManager($entity,$entityManager);
            $clientManager->postPersist();
        }
        else {
           
        }

    }

    public function preUpdate(PreUpdateEventArgs $args) {
        
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
        $uow = $entityManager->getUnitOfWork();
        if ($entity instanceof \Caravane\Bundle\OrganicBundle\Entity\Offre) {
            
            if ($args->hasChangedField('offretype') ) {
                $offreManager=new OffreManager($entity,$entityManager);
                $entity->setReference($offreManager->changeReference());
                $uow->recomputeSingleEntityChangeSet(
                    $entityManager->getClassMetadata("CaravaneOrganicBundle:Offre"),
                    $entity
                 );
            }
        }
        else {
           
        }

    }
}