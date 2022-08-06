<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Article;
use \DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class MainController extends AbstractController
{


    #[Route('/', name: 'home')]
    public function index(): Response
    {
    $test[]="woof";
    $test[]="woof1";
    $test[]="woof2";
    // var_dump($test);
        return $this->render('main/index.html.twig', 
            array('woof'=> $test)
        );
    }


    /**
     * @Route("/addarticle",  name ="addarticle")
     */
    public function addArticle(ManagerRegistry $doctrine, Request $request ): Response
    {
        // if(!$this->get('session')->has('account')){
        //     throw new AccessDeniedHttpException('Vous n\'est pas connecté');
            
        // }
   
        // si les champs sont vite
        $title = "titre";
        $content ="un peu de contenu !";

        $article = new Article();
        $article->setTitle('Write a blog post');
        $article->setDateCreated(new DateTime);

        $form = $this->createFormBuilder($article)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class, [
                'attr' => ['class' => 'tinymce']])
            ->add('add', SubmitType::class, ['label' => 'Ajouter un article'])
            ->getForm();

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $article = $form->getData();
                // var_dump($article);
                $testcover ="testdd44cover";
                $article->setCover($testcover);

                $entityManager = $doctrine->getManager();
                $entityManager->persist($article);

                $entityManager->flush();
                return $this->json(array('add' => true));
                
            }
            

                
    

        // $title = $request->request->get('title') ?? null;
        // $content = $request->request->get('content') ?? null;
        // $contract = $request->request->get('contractType') ?? null;
        // Si les champs au dessus sont vide ou null , on n'entre pas de la condition et on affiche une erreur.
        // if(isset($title) && isset($content)){
           
            // if(!preg_match("#^.{2,150}$#", $title)){
            //     $errors[] = "Titre invalide ( 2 à 150 caractères)";
            // }

            // if(!preg_match("#^.{2,30000}$#", $content)){
            //     $errors[] = "Contenu ( 2 à 30 000 caractères)";
            // }

            // if(!isset($errors)){
                // $testcover ="testdd44cover";
                // $id=$this->get('session')->get('account')->getId();
                // $entityManager = $doctrine->getManager();
                
                // $articleRepository = $this->getDoctrine()->getRepository(Article::class);

                // $article = new Article();

                // $userRepository= $this->getDoctrine()
                // ->getRepository(User::class);
                // $author= $userRepository->findOneById($id);

                //hydratation de l'objet Advert.
                // $article->setTitle($title);
                // $article->setContent($content);
           
                // $article->setCover($testcover);
                // $article->setDateCreated(new DateTime);
                // $article->setAuthor($author); // author est un objet qui désigne en réalité un User

                // $entityManager->persist($article);

                // $entityManager->flush();
                

            // }

            // if(isset($errors)){
            //     return $this->render('addadvert.html.twig', array("errors" => $errors));
            // }else{
                // return $this->render('addarticle.html.twig', array("success" => "L'annonce a bien été posté"));
            // }


            return $this->renderForm('addarticle.html.twig', [
                'form' => $form,
            ]);
    }


    /**
     * @Route("/editarticle/{id}", name="editarticle", requirements={"id"="[0-9]{1,5}"})
     */
    public function editArticle(Request $request, $id, ManagerRegistry $doctrine):Response
    {
        
        // if(!$this->get('session')->has('account')){
        //     throw new AccessDeniedHttpException('Vous n\'est pas connecté');
            
        // }

        $article = $doctrine->getRepository(Article::class)->find($id);

        // $article = $ar->findOneById($id);


        $title = $article->getTitle();
        $content = $article->getContent();
        
        $article->setTitle($title);
        $article->setContent($content);
        
        $form = $this->createFormBuilder($article)
        ->add('title', TextType::class)
        ->add('content', TextareaType::class, [
            'attr' => ['class' => 'tinymce']])
            ->add('edit', SubmitType::class, ['label' => 'Modifier un article'])
            ->getForm();
            
            // $form->setTitle($title);
            
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $editArticle= $form->getData();

            $editTitle = $editArticle->getTitle();
            $editContent = $editArticle->getContent();
              $article->setTitle($editTitle);
                $article->setContent($editContent);
                $entityManager = $doctrine->getManager();
                $entityManager->flush();
                return $this->json(array('edit' => true));

        }
        // if(!$article){
        //     throw new AccessDeniedHttpException('pas trouvé');
        // }

        // if($this->get('session')->get('account')->getId() != $article->getAuthor()->getId()){
        //     throw new AccessDeniedHttpException('pas auteur');
        // }

        // $title = $request->request->get('title') ?? null;
        // $content = $request->request->get('content') ?? null;
        // $contract = $request->request->get('contractType') ?? null;
    


        // si les champs ne sont pas vide, on peut proccéder à la modification.
        // if(isset($title) && isset($content)){
           
        //     if(!preg_match("#^.{2,150}$#", $title)){
        //         $errors[] = "Titre invalide ( 2 à 150 caractères)";
        //     }

        //     if(!preg_match("#^.{2,30000}$#", $content)){
        //         $errors[] = "Contenu invalide ( 2 à 30 000 caractères)";
        //     }

            // if(!isset($errors)){
                
                // $entityManager = $this->getDoctrine()->getManager(); 
                // $userRepository= $this->getDoctrine()->getRepository(User::class);

                // $article->setTitle($title);
                // $article->setContent($content);
                // $article->setContractType($contract);
                // $article->setLastModified(new DateTime);
                // $entityManager->flush();

                return $this->renderForm('editarticle.html.twig', [
                    'form' => $form,
                ]);

            // }

            // if(isset($errors)){
            //     return $this->render('editadvert.html.twig', array("errors" => $errors, 'advert' => $article));
            // }
        // }

        // return $this->render('editadvert.html.twig', array('advert' => $article));

        
    }

        /**
     * @Route("/deletearticle/{id}", name="api_deletearticle", requirements={"id"="\d+"})
     */
    public function deleteAdvert(Request $request, $id,ManagerRegistry $doctrine):Response
    {
        
        // if(!$this->get('session')->has('account')){
        //     throw new AccessDeniedHttpException('Vous n\'est pas connecté');
        // }

        // on récupère le repository de Advert (une annonce)
        $article = $doctrine->getRepository(Article::class)->find($id);

        // if(!$advert){
        //     throw new NotFoundHttpException('pas trouvé');
        // }

        // if($this->get('session')->get('account')->getId() != $advert->getAuthor()->getId()){
        //     throw new AccessDeniedHttpException('pas auteur');
        // }

        //on récupère l'entity manager
        $entityManager = $this->getdoctrine()->getManager();

        
        $entityManager->remove($article);
        $entityManager->flush();
       


        return $this->json(array('delete' => true));
        
    }


}
