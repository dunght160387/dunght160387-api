<?php

namespace Tagcade\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tagcade\EntityBundle\Model\Core\EntityTest;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TagcadeApiBundle:Default:index.html.twig', array('entityClass' => EntityTest::class));
    }
}
