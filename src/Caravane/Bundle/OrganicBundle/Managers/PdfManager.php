<?php
namespace Caravane\Bundle\OrganicBundle\Managers;
use Caravane\Bundle\OrganicBundle\Entity\Invoice;

class PdfManager
{
    protected $em;
    protected $templateEngine;

    public function __construct($em,$templateEngine,$html2pdf)
    {
        $this->em=$em;
    	$this->templateEngine = $templateEngine;
    	$this->html2pdf=$html2pdf;
        
    }

    public function createPdf($entity,$template,$file,$_locale,$force=false) {
        
        if(!file_exists($file['path']."/".$file['filename']) || !$entity->getReference() || $force==true) {
            $content=$this->templateEngine->render($template,array("entity"=>$entity,"_locale"=>$_locale,"dir"=>__DIR__."/../../../../.."));
            $html2pdf = $this->html2pdf->create();
            $html2pdf->writeHTML($content);
            $html2pdf->Output($file['path']."/".$file['filename'], 'F');
        }
    }
}