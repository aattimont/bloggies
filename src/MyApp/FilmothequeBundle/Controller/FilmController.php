<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\FilmothequeBundle\Entity\Film;
use MyApp\FilmothequeBundle\Form\FilmForm;

class FilmController extends ContainerAware
{
    public function listerAction()
    {        

        $em = $this->container->get('doctrine.orm.entity_manager');
        $films= $em->getRepository('MyAppFilmothequeBundle:Film')->findAll();

        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Film:lister.html.twig', array(
            'films' => $films
        ));
    }
    

    public function voirAction($id = null)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) 
        {
            $film = $em->find('MyAppFilmothequeBundle:Film', $id);
        }            

        return $this->container->get('templating')->renderResponse(
        'MyAppFilmothequeBundle:Film:voir.html.twig',
            array(
            'film' => $film,            
            )
        );
    }
    
    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) 
        {
            $film = $em->find('MyAppFilmothequeBundle:Film', $id);

            if (!$film)
            {
                $message='Aucun film trouvé';
            }
        }
        else 
        {
            $film = new Film();
        }

        $form = $this->container->get('form.factory')->create(new FilmForm());
        $form->setData($film);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em->persist($film);
                $em->flush();
                if (isset($id)) 
                {
                     $message='Film modifié avec succès !';
                }
                else 
                {
                    $message='Film ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
        'MyAppFilmothequeBundle:Film:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $film = $em->find('MyAppFilmothequeBundle:Film', $id);

        if (!$film) 
        {
            throw new NotFoundHttpException("Film non trouvé");
        }

        $em->remove($film);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_film_lister'));
    }
}