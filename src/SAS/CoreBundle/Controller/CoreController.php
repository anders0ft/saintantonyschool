<?php

namespace SAS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
	
	public function indexAction()
	{
		return $this->render('SASCoreBundle:Core:index.html.twig');
	}
	
	public function slideAction()
	{
		$listSlide = $this	->getDoctrine()
							->getManager()
							->getRepository('SASCoreBundle:Slide')
							->findSlide();
		
		return $this->render('SASCoreBundle:Core:slide.html.twig', array('list_slide' => $listSlide));
	}
	
	public function welcomeAction()
	{
		$listWelcome = $this	->getDoctrine()
								->getManager()
								->getRepository('SASCoreBundle:Welcome')
								->findWelcome();
		
		return $this->render('SASCoreBundle:Core:welcome.html.twig', array('list_welcome' => $listWelcome));
	}
	
	public function activitiesAction()
	{
		$listActivities = $this	->getDoctrine()
								->getManager()
								->getRepository('SASCoreBundle:Activities')
								->findActivities();
		
		return $this->render('SASCoreBundle:Core:activities.html.twig', array('list_activities' => $listActivities));
	}
	
	public function menuAction()
	{
		$listMenu = $this	->getDoctrine()
							->getManager()
							->getRepository('SASCoreBundle:Menu')
							->findMenu();
		
		return $this->render('SASCoreBundle:Core:menu.html.twig', array('list_menu' => $listMenu));
	}
	
	public function contactAction()
	{
		return $this->render('SASCoreBundle:Core:contact.html.twig');
	}
}

?>