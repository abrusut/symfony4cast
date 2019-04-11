<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticuloController
{

    /**
     * @Route("/")
     */
    public function homePage(){
        return new Response("Respuesta de ArticuloController");
        
    }

}


?>