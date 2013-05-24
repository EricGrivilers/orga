<?php

namespace Caravane\Bundle\BIJUploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once(__DIR__."/../../../../../vendor/blueimp/jQuery-File-Upload/server/php/UploadHandler.php");

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $options=array(
            'param_name' => 'caravane_intranetbundle_jobtype[files]'
        );
        $upload_handler=new \UploadHandler();

        return new Response('');
    }
}
