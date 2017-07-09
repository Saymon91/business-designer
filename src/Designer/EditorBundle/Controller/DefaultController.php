<?php

namespace Designer\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DesignerEditorBundle:Default:index.html.twig');
    }
}
