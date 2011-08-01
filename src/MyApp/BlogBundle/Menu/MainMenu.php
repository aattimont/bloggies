<?php // src/MyApp/BlogBundle/Menu/MainMenu.php

namespace Myapp\BlogBundle\Menu;

use Knp\Bundle\MenuBundle\Menu;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
//use Symfony\Component\DependencyInjection\ContainerAware;
//use MyApp\BlogBundle\Entity\Category;

class MainMenu extends Menu
{
    /**
     * @param Request $request
     * @param Router $router
     */
    public function __construct(Request $request, Router $router)
    {
        parent::__construct();

        $this->setCurrentUri($request->getRequestUri());

        /*$em = $this->container->get('doctrine.orm.entity_manager');
        $categories= $em->getRepository('MyAppBlogBundle:Category')->findAll();
        
        foreach($categories as $c){
            $this->addChild($c->getName(), $router->generate('myapp_article_by_category_lister', array('catid' => $c->getId())));
        }
        // ... add more children
        
         */
        
        //TODO: find how create menu dynamically
        $this->addChild('Tous', $router->generate('myapp_article_lister'));
        $this->addChild('Sport', $router->generate('myapp_article_by_category_lister', array('catid' => 1)));
        $this->addChild('Musique', $router->generate('myapp_article_by_category_lister', array('catid' => 2)));
        $this->addChild('Art', $router->generate('myapp_article_by_category_lister', array('catid' => 3)));
        $this->addChild('Actu', $router->generate('myapp_article_by_category_lister', array('catid' => 5)));
        
    }
}
