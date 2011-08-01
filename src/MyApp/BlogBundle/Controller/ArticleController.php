<?php

namespace MyApp\BlogBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\BlogBundle\Entity\Article;
use MyApp\BlogBundle\Form\ArticleForm;

class ArticleController extends ContainerAware
{
       
    public function listerAction($catid = null)
    {
        
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($catid)) 
        {
            $articles= $em->getRepository('MyAppBlogBundle:Article')->findBy(array('category'=> $catid));
        }else{
            $articles= $em->getRepository('MyAppBlogBundle:Article')->findAll();
        }

        return $this->container->get('templating')->renderResponse('MyAppBlogBundle:Article:lister.html.twig', array(
            'articles' => $articles
        ));
    }
    
    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) 
        {
            // modification d’un article existant : on recherche ses données
            $article = $em->find('MyAppBlogBundle:Article', $id);

            if (!$article)
            {
                $message='Aucun article trouvé';
            }
        }
        else 
        {
            // ajout d’un nouvel article
            $article = new Article();
        }

        $form = $this->container->get('form.factory')->create(new ArticleForm());
        $form->setData($article);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em->persist($article);
                $em->flush();
                if (isset($id)) 
                {
                     $message='Article modifié avec succès !';
                }
                else 
                {
                    $message='Article ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
        'MyAppBlogBundle:Article:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $article = $em->find('MyAppBlogBundle:Article', $id);

        if (!$article) 
        {
            throw new NotFoundHttpException("Article non trouvé");
        }

        $em->remove($article);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_article_lister'));
    }
}