<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

    /
class HomeController {

    /**
     * @Route("/test2", name="home")
     */

    public function home()
    {
        var_dump('hello home'); die;
    }

}





?>