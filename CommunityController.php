<?php

namespace K2L\CommunityFundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Community;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CommunityController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('K2LCommunityFundBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createCommunityAction(Request $request)
	{

	    $community = new Community();
	    $community->setCommunityname('');
	    $community->setCommunitycategory('');
	    $community->setCommunitydescription('');

		$form = $this->createFormBuilder($community)
            ->add('communityName', 'text')
            ->add('communityCategory', 'text')
            ->add('communityDescription', 'textarea')
            ->add('save', 'submit', array('label' => 'Create'))
            ->getForm();

        $form->handleRequest($request);

    	if ($form->isSubmitted()) {
        // perform some action, such as saving the task to the database
    		$community=$form->getData();
	        $em= $this->getDoctrine()->getManager();
	        $em->persist($community);
	        $em->flush();

        	return $this->redirect($this->generateUrl('showCommunity',array('communityName'=>$community->getCommunityname())));
    	}

	    return $this->render('K2LCommunityFundBundle:Default:createCommunity.html.twig', array(
            'form' => $form->createView(),
        ));
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
	    //return new Response('found community description='.$community->getCommunitydescription());
	    
	    return $this->render('K2LCommunityFundBundle:Default:showCommunity.html.twig', array('communityName' => $community->getCommunityname(),'communityCategory' => $community->getCommunitycategory(),'communityDescription' => $community->getCommunitydescription()));
	}

	public function showCommunityListAction()
	{
	    $communityList = $this->getDoctrine()
	        ->getRepository('AppBundle:Community')
	        ->findBy(array(), array('communityname' => 'ASC'));
	        //->findAllOrderedByCommunityName();


	    //return $this->render('K2LCommunityFundBundle:Default:showCommunityList.html.twig', array('communityName' => $community->getCommunityname(),'communityCategory' => $community->getCommunitycategory(),'communityDescription' => $community->getCommunitydescription()));
		return $this->render('K2LCommunityFundBundle:Default:showCommunityList.html.twig', array('communityList' => $communityList));
	
	}

	public function showCommunitySearchAction()
	{
	    $communityList = $this->getDoctrine()
	        ->getRepository('AppBundle:Community')
	        ->findBy(array(), array('communityname' => 'ASC'));
	        //->findAllOrderedByCommunityName();


	    return $this->render('K2LCommunityFundBundle:Default:showCommunitySearch.html.twig', array('communityList' => $communityList));
	
	}
}
