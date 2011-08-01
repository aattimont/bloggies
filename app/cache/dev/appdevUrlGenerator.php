<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'myapp_article_lister' => true,
       'myapp_article_by_category_lister' => true,
       'myapp_article_ajouter' => true,
       'myapp_article_modifier' => true,
       'myapp_article_supprimer' => true,
       'myapp_category_lister' => true,
       'myapp_category_ajouter' => true,
       'myapp_category_modifier' => true,
       'myapp_category_supprimer' => true,
       'myapp_accueil' => true,
       'myapp_acteur_lister' => true,
       'myapp_acteur_ajouter' => true,
       'myapp_acteur_modifier' => true,
       'myapp_acteur_supprimer' => true,
       'myapp_film_lister' => true,
       'myapp_film_ajouter' => true,
       'myapp_film_modifier' => true,
       'myapp_film_supprimer' => true,
       'myapp_film_voir' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getmyapp_article_listerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::listerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/article/lister',  ),));
    }

    private function getmyapp_article_by_category_listerRouteInfo()
    {
        return array(array (  0 => 'catid',), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::listerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'catid',  ),  1 =>   array (    0 => 'text',    1 => '/blog/article/lister',  ),));
    }

    private function getmyapp_article_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::editerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/article/ajouter',  ),));
    }

    private function getmyapp_article_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::editerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/blog/article/modifier',  ),));
    }

    private function getmyapp_article_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::supprimerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/blog/article/supprimer',  ),));
    }

    private function getmyapp_category_listerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::listerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/category/',  ),));
    }

    private function getmyapp_category_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::editerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/category/ajouter',  ),));
    }

    private function getmyapp_category_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::editerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/blog/category/modifier',  ),));
    }

    private function getmyapp_category_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::supprimerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/blog/category/supprimer',  ),));
    }

    private function getmyapp_accueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/',  ),));
    }

    private function getmyapp_acteur_listerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::listerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/acteur/',  ),));
    }

    private function getmyapp_acteur_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::editerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/acteur/ajouter',  ),));
    }

    private function getmyapp_acteur_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::editerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/acteur/modifier',  ),));
    }

    private function getmyapp_acteur_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::supprimerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/acteur/supprimer',  ),));
    }

    private function getmyapp_film_listerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::listerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/film/',  ),));
    }

    private function getmyapp_film_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::editerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/film/ajouter',  ),));
    }

    private function getmyapp_film_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::editerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/film/modifier',  ),));
    }

    private function getmyapp_film_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::supprimerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/film/supprimer',  ),));
    }

    private function getmyapp_film_voirRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::voirAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/film/voir',  ),));
    }
}
