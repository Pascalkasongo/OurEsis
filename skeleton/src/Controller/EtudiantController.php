<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends AbstractController{

    

    public function new(Request $request, EntityManagerInterface $em):Response{
        $user = new User();
        $form=$this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('MainHome');
        }
        return $this->render('mine/signin.html.twig',['form'=>$form->createView()]);

    }
}