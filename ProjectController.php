<?php

namespace K2L\CommunityFundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('K2LCommunityFundBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createProjectAction(Request $request)
	{

	    $project = new Project();
	    $project->setProjectname('');
	    $project->setCommunityname('');
	    $project->setInitiatorusername('');
	    $project->setProjectdescription('');
		$project->setGoalamount('');
		$project->setCurentamount('');
		$project->setStartdate('');
		$project->setFinishdate('');


		$form = $this->createFormBuilder($project)
            ->add('Projectname', 'text')
            ->add('Communityname', 'text')
            ->add('Initiatorusername', 'text')
            ->add('Projectdescription', 'text')
            ->add('Goalamount', 'text')
            //->add('Curentamount','text')
            //->add('Startdate', 'text')
            //->add('Finishdate', 'text')
            ->add('save', 'submit', array('label' => 'Create'))
            ->getForm();

        $form->handleRequest($request);

    	if ($form->isSubmitted()) {
    		$project=$form->getData();
	        $em= $this->getDoctrine()->getManager();
	        $em->persist($project);
	        $em->flush();

        	return $this->redirect($this->generateUrl('showProject',array('projectName'=>$project->getProjectname())));
    	}

	    return $this->render('K2LCommunityFundBundle:Default:createProject.html.twig', array(
            'form' => $form->createView(),
        ));
	}


	public function showProjectAction($projectName)
	{
	    $project = $this->getDoctrine()
	        ->getRepository('AppBundle:Project')
	        ->findOneByProjectname($projectName);

	    if (!$project) {
	        throw $this->createNotFoundException(
	            'No project found for '.$projectName
	        );
	    }
	    return $this->render('K2LCommunityFundBundle:Default:showProject.html.twig', array('projectName' => $project->getProjectname(),'communityName' => $project->getCommunityname(),'initiatorUsername' => $project->getInitiatorusername()));
	}

	public function showProjectListAction()
	{
	    $projectList = $this->getDoctrine()
	        ->getRepository('AppBundle:Project')
	        ->findBy(array(), array('projectname' => 'ASC'));
	        //->findAllOrderedByprojectName();


	    //return $this->render('K2LCommunityFundBundle:Default:showprojectList.html.twig', array('projectName' => $project->getprojectname(),'projectCategory' => $project->getprojectcategory(),'projectDescription' => $project->getprojectdescription()));
		return $this->render('K2LCommunityFundBundle:Default:showProjectList.html.twig', array('projectList' => $projectList));
	
	}

	public function showProjectSearchAction()
	{
	    $communityList = $this->getDoctrine()
	        ->getRepository('AppBundle:Project')
	        ->findBy(array(), array('communityname' => 'ASC'));

	    return $this->render('K2LCommunityFundBundle:Default:showProjectSearch.html.twig');
	
	}
}
