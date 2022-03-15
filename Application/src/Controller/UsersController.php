<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class UsersController extends AbstractController 
{
    #[Route('/users', name: 'users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig');
    }

    #[Route('/users/profil/modifier', name: 'users_profil_modifier')]
    public function editProfile(Request $request, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($user);
            $manager->flush();

            $this->addFlash('message', 'Profil mis à jour');
            return $this->redirectToRoute('users');
        }
        return $this->render('users/editProfile.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/users/pass/modifier', name: 'users_pass_modifier')]
    public function editPass(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $manager)
    {
        if($request->isMethod('POST')){
            $user = $this->getUser();
            
            

            //On vérifie si les 2 mots de passe sont identiques 
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($hasher->hashPassword($user, $request->request->get('pass')));
                $manager->flush();
                $this->addFlash('message', 'Mot de passe mis à jour avec succès');

                return $this->redirectToRoute('users');

            }else{
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }

        }
        return $this->render('users/editPass.html.twig');
    }
}
