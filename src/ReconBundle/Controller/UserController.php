<?php

namespace ReconBundle\Controller;

use ReconBundle\Entity\User; 
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\FormType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class UserController extends Controller {
    
    private $_connect;
    
    
    public function __construct() {
        $this->_connect = false;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['connect'])) {
            $this->_connect = $_SESSION['connect'];
        }
    }
    
    
    public function indexAction() {
        //return $this->render('ReconBundle:Default:index.html.twig');
    }
    
    public function ajouterAction(Request $request)  {  
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
                try {
                    $em->flush(); 
                } 
                catch (\PDOException $e){
                    echo "erreur personnalisée";
                }  
                $request->getSession()->getFlashBag()->add('notice', 'Nouvel utilisateur en attente.'); 

                $transport = (new \Swift_SmtpTransport( 'auth.smtp.1and1.fr', 587 ))
                  ->setUsername("reconv@santhor.com")
                  ->setPassword("Reconvpro2018")
                ;
                $mailer = new \Swift_Mailer($transport);
                
                $content = (new \Swift_Message('Confirmation inscription'))
                ->setFrom('reconv@santhor.com')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        '@Recon/User/mail.html.twig',
                        ["user" => $user]),
                    'text/html'
                );
                $mailer->send($content);
                return $this->redirectToRoute('mail', array('id' => $user->getId())); 
                } 
                
            }

        
        $message='';  
        return $this->render('@Recon/User/form.html.twig', 
        ['form' => $form->createView(), 'message' => $message, 'title' => "Inscription"]
        ); 
    }

    public function loginAction(Request $request)

    {  

        $user = new User();  
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:User');
        $form = $this->createForm(Userlog::class, $user);  
        
        $message='';
        
        if ($request->isMethod('POST')) {
        // L'ordre ci-dessous place les données du formulaire dans l'entité $patient
            $form->handleRequest($request); 
        // Si le formulaire est valide (les valeurs entrées sont correctes)   
            if ($form->isValid()) { 
                $em = $this->getDoctrine()->getManager(); 
                $em->persist($user); 

                $userConfirm = $repository->findOneByEmail($user->getEmail());
                
                if ($userConfirm) {
                
                    if($user->getPass() === $userConfirm->getPass()){
                        // var_dump($userConfirm->getId());die;
                        $message='Connexion réussie';
                        $_SESSION['connect'] = $userConfirm->getId();
                        return $this->render('@Recon/Default/index.html.twig', 
                        ['message' => $message,'id' =>  $_SESSION['connect']]
                        );

                    } else {
                        $message = 'Mot de passe incorrect';  
                    }
                } else {
                    $message = 'Email incorrect';
                }

            } 
            
        }

        return $this->render('@Recon/User/form.html.twig', 
        ['form' => $form->createView(), 'message' => $message, 'title' => 'Connexion']
        ); 

    }

    public function mailAction(Request $request){
        
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:User');
        $user = $repository->find($_GET['id']);

        return $this->render('@Recon/User/mail.html.twig', ["user" => $user]);
    }

    public function userlistAction(Request $request)
    {
         return $this->render('@Recon/User/userlist.html.twig');
    }

}