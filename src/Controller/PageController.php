<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Patient;
use App\Form\PatientType;
use App\Entity\Commentaire;
use App\Form\CommentaireType;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Formulaire de rendez-vous
        $patient = new Patient();
        $formPatient = $this->createForm(PatientType::class, $patient, [
            'attr' => ['id' => 'form_patient']
        ]);
        $formPatient->handleRequest($request);

        if ($formPatient->isSubmitted() && $formPatient->isValid()) {
            $entityManager->persist($patient);
            $entityManager->flush();
            $this->addFlash('success', 'Rendez-vous enregistré avec succès !');
            return $this->redirectToRoute('app_homepage');
        }

        // Formulaire de commentaire
        $commentaire = new Commentaire();
        $formCommentaire = $this->createForm(CommentaireType::class, $commentaire, [
            'attr' => ['id' => 'form_commentaire']
        ]);
        $formCommentaire->handleRequest($request);

        if ($formCommentaire->isSubmitted() && $formCommentaire->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire ajouté avec succès !');
            return $this->redirectToRoute('app_homepage');
        }

        // Passer les deux formulaires à la vue
        return $this->render('Page/index.html.twig', [
            'form_patient' => $formPatient->createView(),
            'form_commentaire' => $formCommentaire->createView(),
        ]);
    }
}
