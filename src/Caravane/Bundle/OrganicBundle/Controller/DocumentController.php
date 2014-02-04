<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Filesystem\Filesystem;


/**
 * Client controller.
 *
 */
class DocumentController extends Controller
{

/*
    public function moveAttachedDocument($entity,$path) {
            $fs = new Filesystem();
            $em=$this->getDoctrine()->getManager();
            $documents=$entity->getDocument();
            foreach($documents as $document) {
                $fromFile=__DIR__."/../../../../../web/files/".$document.getFilename();
                if(!$document->getPath()!=$path && file_exists($fromFile)) {
                    $fs->rename($fromFile,__DIR__."/../../../../../www".$path.$document->getFilename());
                    $fs->remove(__DIR__."/../../../../../www/files/thumbnail/".$document.getFilename());
                    $document->setPath($path);
                    $em->persist($document);
                }
            }
            $em->flush();
    }
    */

}
