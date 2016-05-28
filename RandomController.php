<?php

namespace K2L\CommunityFundBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        //return new Response(
        //    '<html><body>Number: '.rand(1, $limit).'</body></html>'
        //);
        $number = rand(1, $limit);
        $name= "KPC";

        return $this->render(
            'K2LCommunityFundBundle:Random:index.html.twig',
            array('number' => $number,'name' => $name)
        );

        // render a PHP template instead
        // return $this->render(
        //     'K2LCommunityFundBundle:Random:index.html.php',
        //     array('number' => $number)
        // );
    }
}