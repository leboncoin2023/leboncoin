<?php

namespace App\Controller;

use App\Document\Registers;


use App\Document\User;
//use App\Entity\User;

use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;

use App\Form\RegistrationFormType;
use App\Repository\RegistrationsRepository;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class RegistrationController extends AbstractController
{

    private DocumentManager $documentManager;
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier, DocumentManager $documentManager)
    {
        $this->emailVerifier = $emailVerifier;
        $this->documentManager = $documentManager;
    }



    

    //public function __construct(EmailVerifier $emailVerifier)
   // {
      //  $this->emailVerifier = $emailVerifier;
   // }
 

    
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, DocumentManager $dm): Response
    {

        
        
        //$user = new User();

        $user = new User();


        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupérer la valeur du champ "firstname" du formulaire
           // $firstname = $form->get('firstname')->getData();
        
            //dump($user);
            // Définir la valeur du prénom dans l'objet User
           // $user->setFirstname($firstname);

            
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                     $form->get('plainPassword')->getData()
                )
            );
            $dm->persist($user);
            $dm->flush();


            //$entityManager->persist($user);
            //$entityManager->flush();

            // generate a signed url and email it to the user
            /* $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('projet.team.lbc@gmail.com', 'leboncointeam'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            ); */
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }







   /*  #[Route('/register/test', name: 'app_register_test')]
    public function createAction(RegistrationsRepository $RegistrationsRepository)
    {

       $register = new Registers ();
       $register->setemail('kiki@gmail.com');
       
       
       $registers = $RegistrationsRepository->findAllRegister();
       dump($registers);

       return new Response('Created registrory  id ');

        
    } */





}
