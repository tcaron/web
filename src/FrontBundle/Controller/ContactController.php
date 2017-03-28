<?php
namespace FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontBundle\Entity\Contact;
use FrontBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function indexAction(Request $request)
    {
    	$contact = new Contact();
    	$form = $this->createForm(ContactType::class,$contact);
    	$form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid()){

    		$em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();       
            unset($contact);
            unset($form);
            $this->addFlash( 'contact','Votre demande de contact à bien été envoyée ! ' );
            $contact = new Contact();
    	    $form = $this->createForm(ContactType::class,$contact);


    	}

    	return $this->render('FrontBundle:Default:contact.html.twig',array('form'=>$form->createView()));
    }



}