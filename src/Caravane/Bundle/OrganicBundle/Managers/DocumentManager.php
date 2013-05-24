<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Document;
use Symfony\Component\Filesystem\Filesystem;

class DocumentManager
{
    protected $em;
    protected $entity;

    public function __construct($entity,$em)
    {
        $this->em=$em;
    	$this->entity = $entity;

    }



    public function moveAttachedDocument($path) {

            $fs = new Filesystem();
            $em=$this->em;
            $entity=$this->entity;
            $documents=$entity->getDocument();
            foreach($documents as $document) {

                $fromFile=__DIR__."/../../../../../web/files/".$document->getFilename();

                if($document->getPath()!=$path && file_exists($fromFile)) {

                    if(!$fs->exists(__DIR__."/../../../../../web".$path)) {
                        $fs->mkdir(__DIR__."/../../../../../web".$path,0755);
                    }
                    $fs->rename($fromFile,__DIR__."/../../../../../web".$path."/".$document->getFilename());
                    $fs->remove(__DIR__."/../../../../../web/files/thumbnail/".$document->getFilename());
                    $document->setPath($path);
                    $em->persist($document);
                }
            }
            $em->flush();

    }




}


?>
