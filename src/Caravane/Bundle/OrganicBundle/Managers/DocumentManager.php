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

            if($documents=$entity->getDocument()) {
                foreach($documents as $document) {

                    $fromFile=__DIR__."/../../../../../web/files/".$document->getFilename();

                    if($document->getPath()!=$path && file_exists($fromFile)) {

                        if(!$fs->exists(__DIR__."/../../../../../web".$path)) {
                            $fs->mkdir(__DIR__."/../../../../../web".$path,0755);
                        }
                        $toFile=__DIR__."/../../../../../web".$path."/".$document->getFilename();
                        if($fs->exists($toFile)) {
                            $toFile=__DIR__."/../../../../../web".$path."/".rand(0,100)."_".$document->getFilename();
                        }
                        $fs->rename($fromFile,$toFile);
                        $fs->remove(__DIR__."/../../../../../web/files/thumbnail/".$document->getFilename());
                        $document->setPath($path);
                        $em->persist($document);
                    }
                }
                $em->flush();
            }


    }

    public function deleteDocument() {
        $document=$this->entity;
        $em=$this->em;
        $fs=new Filesystem();
        $file=__DIR__."/../../../../../web".$document->getPath()."/".$document->getFilename();
        if($fs->exists($file)) {
            $fs->remove($file);
        }
        $em->remove($document);
        $em->flush();
    }


}


?>
