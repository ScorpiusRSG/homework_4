<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    public function newsAction()
    {
        die("news");
    }
    
     public function teslaAction($tesla_new_car)
    {
        die("Working with $tesla_new_car");
    }
    
    public function pageAction($number)
    {
        die("Your page is $number");
    }
    
    public function longPathAction($sort,$order)
    {
        die("Page up sort is:$sort , order is:$order");
    }
   public function languageAction($language)
   {
       die("Your language $language");
   }
}
