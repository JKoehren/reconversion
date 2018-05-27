<?php

namespace ReconBundle\Controller;

use ReconBundle\Entity\User; 
use ReconBundle\Entity\Situation;
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
                        array('id' => $user->getId())
                    ),
                    'text/html'
                );
                $mailer->send($content);
                return $this->redirectToRoute('mail', array('id' => $user->getId())); 
                } 
                
            }

        
        $message='';  
        return $this->render('@Recon/User/form.html.twig', 
        array('form' => $form->createView(), 'message' => $message, 'title' => "Inscription") 
        ); 
    }

    public function inscriptionsuiteAction(Request $request, $id){
        
        $message='';  
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:User');
        $user = $repository->find($id); 
        $form = $this->createForm(UserRegister::class, $user);

        if ($request->isMethod('POST')) {
        // L'ordre ci-dessous place les données du formulaire dans l'entité $patient
            $form->handleRequest($request); 
        // Si le formulaire est valide (les valeurs entrées sont correctes)   
            if ($form->isValid()) { 
                $em = $this->getDoctrine()->getManager(); 
                $em->persist($user); 
                try {
                    $em->flush(); 
                } 
                catch (\PDOException $e){
                    echo "erreur personnalisée";
                }  

            }
            
        }

        return $this->render('@Recon/User/form.html.twig', 
        array('form' => $form->createView(), 'message' => $message, 'title' => 'Inscription suite') 
        ); 
    }

    public function situationAction(Request $request, $id, $type = null)

    {
        $situation = new Situation();  
        $message='';  
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:Situation');
        $repository2 = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:User');
        $user = $repository2->find($id); 
        $form = $this->createForm(UserSituation1::class, $situation);
        $situation->setUser($user);

        if ($request->isMethod('POST')) {
        // L'ordre ci-dessous place les données du formulaire dans l'entité $patient
            $form->handleRequest($request); 
        // Si le formulaire est valide (les valeurs entrées sont correctes)   
            if ($form->isValid()) { 
                $em = $this->getDoctrine()->getManager(); 
                $em->persist($situation); 
                try {
                    $em->flush(); 
                } 
                catch (\PDOException $e){
                    echo "erreur personnalisée";
                }  

            }
            
        }

        return $this->render('@Recon/User/form.html.twig', 
        array('form' => $form->createView(), 'message' => $message, 'title' => 'Situation') 
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
                        return $this->render('@Recon/User/success.html.twig', 
                        array('id' => $userConfirm->getId(), 'message' => $message) 
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
        array('form' => $form->createView(), 'message' => $message, 'title' => 'Connexion') 
        ); 

    }

    public function mailAction(Request $request){
        
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('ReconBundle:User');
        $user = $repository->find($_GET['id']);

        return $this->render('@Recon/User/mail.html.twig', array("user" => $user));
    }

    public function userlistAction(Request $request)
    {
         return $this->render('@Recon/User/userlist.html.twig');
    }

}