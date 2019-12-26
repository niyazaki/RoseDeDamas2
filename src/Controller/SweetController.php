<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Sweet;
use App\Repository\SweetRepository;
use App\Form\SweetType;

use App\Entity\Ingredient;
use App\Repository\IngredientRepository;
use App\Form\IngredientType;

class SweetController extends AbstractController
{
    /**
     * @Route("/", name="sweet")
     */
    public function index(SweetRepository $repo)
    {
        $sweets = $repo->findAll();

        return $this->render('sweet/index.html.twig', [
            'sweets' => $sweets,
        ]);
    }
    
    /**
     * @Route("/sweet/{id}", name = "sweetDetails")
     */
    public function sweetDetails(Sweet $sweet) 
    {

        return $this->render('sweet/sweetDetails.html.twig',[
            'sweet' => $sweet,
        ]);
    }
    
    /**
     * @Route("/newSweet", name="newSweet")
     * @Route("/sweet/{id}/edit", name="edit")
     */
    public function formS(Sweet $sweet = null, 
                        Request $request, 
                        EntityManagerInterface $manager)
    {
        if(!$sweet){
            $sweet = new Sweet();
        }

        $form = $this->createForm(SweetType::class, $sweet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager ->persist($sweet);
            $manager->flush();

            return $this->redirectToRoute('sweetDetails', ['id' => $sweet->getId()]);
        }

        return $this->render('sweet/newSweet.html.twig',[
            'formSweet' => $form->createView(),
            'editMode' => $sweet->getId() !==null
        ]);
    }

    /**
     * @Route ("/sweet/{id}/delete", name = "deleteSweet")
     */
    public function deleteSweet(Sweet $sweet)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $sweet = $entityManager->getRepository(Sweet::class)->find($sweet);
        
        if(is_null($sweet)){
            throw $this->createNotFoundException("Aucune pâtisserie trouvée pour l'id :" . $sweet);
        }
        
        $entityManager->remove($sweet);
        $entityManager->flush();
        
        return $this->redirectToRoute('sweet');
    }

    /**
     * @Route("/ingredient/{id}", name="ingredient")
    */
    public function ingredient(Ingredient $ingredient)
    {    
        return $this->render('sweet/ingredient.html.twig', [
            'ingredient' => $ingredient
        ]);
    }
    
    /**
     * @Route ("/ingredient/{id}/delete", name = "deleteIngredient")
     */
    public function deleteIngredient(Ingredient $ingredient)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ingredient = $entityManager->getRepository(Ingredient::class)->find($ingredient);
        
        if(is_null($ingredient)){
            throw $this->createNotFoundException("Aucun ingrédient trouvée pour l'id :" . $ingredient);
        }
        
        $entityManager->remove($ingredient);
        $entityManager->flush();
        
        return $this->redirectToRoute('listIngredients');
    }


    /**
     * @Route("/ingredient", name="listIngredients")
     */
    public function listIngredients(IngredientRepository $repo)
    {
        $ingredients = $repo->findAll();

        return $this->render('sweet/listIngredients.html.twig', [
            'ingredients' => $ingredients,
        ]);
    }

    /**
     * @Route("/newIngredient", name="newIngredient")
     * @Route("/ingredient/{id}/edit", name="editIngredient")
    */
    public function formIngredient(Ingredient $ingredient = null,
                        $sweetId = null, 
                        Request $request, 
                        EntityManagerInterface $manager)
    {
        if(!$ingredient){
            $ingredient = new Ingredient();
        }

        if(!$sweetId){
            $sweetId = $ingredient->getSweet();
        }

        $form = $this->createForm(IngredientType::class, $ingredient);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager ->persist($ingredient);
            $manager->flush();

            return $this->redirectToRoute('newIngredient');
        }

      return $this->render('sweet/newIngredient.html.twig',[
            'formIngredient' => $form->createView(),
            'editMode' => $ingredient->getId() !==null
        ]);
    }

}
