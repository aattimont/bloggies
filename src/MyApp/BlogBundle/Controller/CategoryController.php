<?php

namespace MyApp\BlogBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\BlogBundle\Entity\Category;
use MyApp\BlogBundle\Form\CategoryForm;

class CategoryController extends ContainerAware
{
    public function listerAction()
    {        

        $em = $this->container->get('doctrine.orm.entity_manager');
        $categories= $em->getRepository('MyAppBlogBundle:Category')->findAll();

        return $this->container->get('templating')->renderResponse('MyAppBlogBundle:Category:lister.html.twig', array(
            'categories' => $categories
        ));
    }
    
    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) 
        {
            // modification d’un category existant : on recherche ses données
            $category = $em->find('MyAppBlogBundle:Category', $id);

            if (!$category)
            {
                $message='Aucun category trouvé';
            }
        }
        else 
        {
            // ajout d’un nouvel category
            $category = new Category();
        }

        $form = $this->container->get('form.factory')->create(new CategoryForm());
        $form->setData($category);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em->persist($category);
                $em->flush();
                if (isset($id)) 
                {
                     $message='Categorie modifiée avec succès !';
                }
                else 
                {
                    $message='Categorie ajoutée avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
        'MyAppBlogBundle:Category:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $category = $em->find('MyAppBlogBundle:Category', $id);

        if (!$category) 
        {
            throw new NotFoundHttpException("Category non trouvée");
        }

        $em->remove($category);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_category_lister'));
    }
}