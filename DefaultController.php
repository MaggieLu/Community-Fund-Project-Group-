<?php

namespace K2L\CommunityFundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Community;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('K2LCommunityFundBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createCommunityAction($communityName,$communityCategory,$communityDescription)
	{
	    $community = new Community();
	    $community->setCommunityname('A Foo Community');
	    $community->setCommunitycategory('A Foo Category');
	    $community->setCommunitydescription('Lorem ipsum dolor');

	    $em = $this->getDoctrine()->getManager();

	    $em->persist($community);
	    $em->flush();

	    return new Response('Created community '.$community->getCommunityname());
	}

	public function showCommunityAction($communityName)
	{
	    $community = $this->getDoctrine()
	        ->getRepository('AppBundle:Community')
	        ->find($communityName);

	    if (!$community) {
	        throw $this->createNotFoundException(
	            'No community found for '.$communityName
	        );
	    }
	    $communityDescription= "";
	    return new Response('found community description='.$community->getCommunitydescription());
	    // ... do something, like pass the $product object into a template
	}
}
