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
                
                try {
                $transport = (new \Swift_SmtpTransport( 'mail.gmx.com', 587, "tls" ))
                ->setUsername("reconv@gmx.fr")
                ->setPassword("Reconv2018.");
                $mailer = new \Swift_Mailer($transport);
                
                $content = (new \Swift_Message('Confirmation inscription'))
                    ->setFrom("reconv@gmx.fr")
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView(
                            // app/Resources/views/Emails/registration.html.twig
                            '@Recon/User/mail.html.twig',
                            ['id' => $user->getId(), 'name' => $user->getNom() . " " . $user->getPrenom()]
                        )
                    )
                    ->setContentType('text/html');
                $mailer->send($content);
                    
                    
                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";die;
                }
                return $this->redirectToRoute('mail', ['id' => $user->getId(), 'name' => $user->getNom() . " " . $user->getPrenom()]); 
            } 

        }

        
        $message='';  
        return $this->render('@Recon/User/form.html.twig', 
        ['form' => $form->createView(), 'message' => $message, 'title' => "Inscription"] 
        ); 
    }

    public function inscriptionsuiteAction(Request $request, $id){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
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
        
        if ($user->getPass()) {
//            echo $_SESSION['connect']['id'] . $id;
            if (isset($_SESSION['connect']) && ($_SESSION['connect']['id'] == $id)) {
                header('location: ../situation/' . $id . '/0');
            } else {
                $message="Inscription terminé ! Vous pouvez maintenant vous connecter";
                return $this->render('@Recon/User/success.html.twig', 
                    ['message' => $message, 'title' => 'Inscription terminé']
                        ); 
            }
             
        }

        return $this->render('@Recon/User/form.html.twig', 
        ['form' => $form->createView(), 'message' => $message, 'title' => 'Inscription suite']
        ); 
    }

    public function situationAction(Request $request, $id, $type = null)

    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
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
        if (!isset($_SESSION['connect'])) {
            header('location: ../../login');
            die;
        }
        if ($_SESSION['connect']['id'] != $id) {
            header('location: ../../..');
            die;
        }
        if ($type == 1){
            $form = $this->createForm(UserSituation1::class, $situation);
        }
        else {
            $form = $this->createForm(UserSituation2::class, $situation);
        }
        $situation->setUser($user);

        if ($request->isMethod('POST')) {
        // L'ordre ci-dessous place les données du formulaire dans l'entité $patient
            $form->handleRequest($request); 
        // Si le formulaire est valide (les valeurs entrées sont correctes)   
            if ($form->isValid()) { 
                $situation->setType($type);
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
        
        return $this->render('@Recon/User/situation.html.twig', 
        ['form' => $form->createView(), 'message' => $message, 'title' => 'Situation', 'id' => ['name' => ($user->getNom() . ' ' . $user->getPrenom()), 'id' => $id]]
        ); 
    }

    public function loginAction(Request $request)

    {  
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

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
                        $id = $userConfirm->getId();
                        // var_dump($userConfirm->getId());die;
                        $message='Connexion réussie';
                        $_SESSION['connect'] = ['id' => $id, 'name' => $userConfirm->getPrenom() . ' ' . $userConfirm->getNom()];
                        return $this->render('@Recon/User/success.html.twig', 
                        ['message' => $message,'id' =>  $_SESSION['connect'],'title' => $message]
                        ); 

                    } else {
                        $message = 'Mot de passe incorrect';  
                    }
                } else {
                    $message = 'Email incorrect';
                }

            } 
            
        }
        if (isset($_SESSION['connect']['id'])) {
            header('location: ../');
            die;
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

        return $this->render('@Recon/User/mail.html.twig', ["id" => $user->getId()]);
    }

}