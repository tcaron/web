<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    public function skillsAction()
    {
    	return $this->render('FrontBundle:Default:skills.html.twig');
    }

    public function resumeAction()
    {
    	return $this->render('FrontBundle:Default:resume.html.twig');
    }

     public function blogAction()
    {
        return $this->render('FrontBundle:Default:blog.html.twig');
    }


}
