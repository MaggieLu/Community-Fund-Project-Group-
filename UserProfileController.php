<?php

namespace K2L\CommunityFundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserProfileController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('K2LCommunityFundBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createUserProfileAction(Request $request)
	{

	    $UserProfile = new User();
	    $UserProfile->setUsername('');
	    $UserProfile->setFirstname('');
	    $UserProfile->setLastname('');
	    $UserProfile->setTel('');
		$UserProfile->setEmail('');
		$UserProfile->setDob('');
		$UserProfile->setAddress('');
		$UserProfile->setSex('');
		$UserProfile->setWebsite('');
		$UserProfile->setProfessionalskill('');
		$UserProfile->setInterest('');
		$UserProfile->setPassword('');

		$form = $this->createFormBuilder($UserProfile)
            ->add('userName', 'text')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            //->add('tel', 'text')
            ->add('email', 'text')
            //->add('dob','text')
            //->add('address', 'text')
            //->add('sex', 'text')
            //->add('website', 'text')
            //->add('professionalSkill', 'text')
            //->add('interest', 'text')
            ->add('password', 'text')
            ->add('save', 'submit', array('label' => 'Create'))
            ->getForm();

        $form->handleRequest($request);

    	if ($form->isSubmitted()) {
    		$UserProfile=$form->getData();
	        $em= $this->getDoctrine()->getManager();
	        $em->persist($UserProfile);
	        $em->flush();

        	return $this->redirect($this->generateUrl('login',array('userName'=>$UserProfile->getUsername())));
    	}

	    return $this->render('K2LCommunityFundBundle:Default:createUserProfile.html.twig', array(
            'form' => $form->createView(),
        ));
	}


	public function showUserProfileAction()
	{
		$userProfile= $this->get('security.context')->getToken()->getUser();
		$userName = $userProfile->getUsername();

	    //$userProfile = $this->getDoctrine()
	    //    ->getRepository('AppBundle:User')
	    //    ->find($userName);

	    if (!$userProfile) {
	        throw $this->createNotFoundException(
	            'No UserProfile found for '.$userName
	        );
	    }
	    //return new Response('found UserProfile description='.$UserProfile->getUserProfiledescription());
	    return $this->render('K2LCommunityFundBundle:Default:showUserProfile.html.twig', array('firstName' => $userProfile->getFirstname(),'lastName' => $userProfile->getLastname()));
	    //return $this->render('K2LCommunityFundBundle:Default:showUserProfile.html.twig', array('username' => $userProfile->getUsername(),'firstName' => $userProfile->getFirstname(),'lastName' => $userProfile->getLastname()));
	}

	public function showUserProfileListAction()
	{
	    $userProfileList = $this->getDoctrine()
	        ->getRepository('AppBundle:User')
	        ->findBy(array(), array('username' => 'ASC'));
	        //->findAllOrderedByUserProfileName();


	    //return $this->render('K2LCommunityFundBundle:Default:showUserProfileList.html.twig', array('UserProfileName' => $UserProfile->getUserProfilename(),'UserProfileCategory' => $UserProfile->getUserProfilecategory(),'UserProfileDescription' => $UserProfile->getUserProfiledescription()));
		return $this->render('K2LCommunityFundBundle:Default:showUserProfileList.html.twig', array('userProfileList' => $userProfileList));
	
	}
	public function showPasswordRetrievalAction()
	{
	    return $this->render('K2LCommunityFundBundle:Default:showPasswordRetrieval.html.twig');
	
	}
}
