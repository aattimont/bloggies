<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\FilmothequeBundle\Entity\Acteur;
use MyApp\FilmothequeBundle\Form\ActeurForm;

class ActeurController extends ContainerAware
{
    public function listerAction()
    {        

        $em = $this->container->get('doctrine.orm.entity_manager');
        $acteurs= $em->getRepository('MyAppFilmothequeBundle:Acteur')->findAll();

        return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Acteur:lister.html.twig', array(
            'acteurs' => $acteurs
        ));
    }
    
    public function editerAction($id = null)
    {
        $message='';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) 
        {
            // modification d’un acteur existant : on recherche ses données
            $acteur = $em->find('MyAppFilmothequeBundle:Acteur', $id);

            if (!$acteur)
            {
                $message='Aucun acteur trouvé';
            }
        }
        else 
        {
            // ajout d’un nouvel acteur
            $acteur = new Acteur();
        }

        $form = $this->container->get('form.factory')->create(new ActeurForm());
        $form->setData($acteur);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);

            if ($form->isValid()) 
            {
                $em->persist($acteur);
                $em->flush();
                if (isset($id)) 
                {
                     $message='Acteur modifié avec succès !';
                }
                else 
                {
                    $message='Acteur ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
        'MyAppFilmothequeBundle:Acteur:editer.html.twig',
            array(
            'form' => $form->createView(),
            'message' => $message,
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $acteur = $em->find('MyAppFilmothequeBundle:Acteur', $id);

        if (!$acteur) 
        {
            throw new NotFoundHttpException("Acteur non trouvé");
        }

        $em->remove($acteur);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_acteur_lister'));
    }
}