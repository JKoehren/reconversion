<?php

namespace ReconBundle\Controller;
use ReconBundle\Entity\User; 
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\FormType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class UserController extends Controller
{
    public function indexAction()
    {
        //return $this->render('ReconBundle:Default:index.html.twig');
    }
    
    public function ajouterAction(Request $request) 
        
    {  
        $user = new User();  
        $form = $this->createForm(UserType::class, $user);  
        if ($request->isMethod('POST')) {
    // L'ordre ci-dessous place les données du formulaire dans l'entité $patient
            $form->handleRequest($request); 
        // Si le formulaire est valide (les valeurs entrées sont correctes)   
            if ($form->isValid()) { 
            // On persiste $patient    
                $em = $this->getDoctrine()->getManager();        
                $em->persist($user);    
                $em->flush(); 
                $request->getSession()->getFlashBag()->add('notice', 'Nouvel utilisateur enregistré.'); 
            // On redirige vers la liste des utilisateur 

                return $this->redirectToRoute('userlist', array('id' => $user->getId())); 
            } 
            
        }  
        
        $message='';  
        return $this->render('@Recon/User/ajouter.html.twig', 
        array('form' => $form->createView(), 'message' => $message) 
        ); 
    } 

}
