<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; //to give acess to specific methodes (post/ get)

class HometecController extends AbstractController
{
    /**
     * @Route("/hometec", name="hometec")
     */
    public function index()
    {
        $pagename="Template"; 
        return $this->render('phpfiles/template.html.twig',array('pagename' => $pagename));
    }

    /**
     * @Route("/aboutus",name="aboutus")
     * @Method({"GET"})
     */

     public function aboutUs(){
         $pagename ="homteq: app and cloud controlled tech for your home";
         return $this->render('phpfiles/aboutus.html.twig',array('pagename' => $pagename));
     }
}
