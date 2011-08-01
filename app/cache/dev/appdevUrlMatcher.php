<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // myapp_article_lister
            if ($pathinfo === '/blog/article/lister') {
                return array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::listerAction',  '_route' => 'myapp_article_lister',);
            }

            // myapp_article_by_category_lister
            if (0 === strpos($pathinfo, '/blog/article/lister') && preg_match('#^/blog/article/lister/(?P<catid>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::listerAction',)), array('_route' => 'myapp_article_by_category_lister'));
            }

            // myapp_article_ajouter
            if ($pathinfo === '/blog/article/ajouter') {
                return array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::editerAction',  '_route' => 'myapp_article_ajouter',);
            }

            // myapp_article_modifier
            if (0 === strpos($pathinfo, '/blog/article/modifier') && preg_match('#^/blog/article/modifier/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::editerAction',)), array('_route' => 'myapp_article_modifier'));
            }

            // myapp_article_supprimer
            if (0 === strpos($pathinfo, '/blog/article/supprimer') && preg_match('#^/blog/article/supprimer/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\ArticleController::supprimerAction',)), array('_route' => 'myapp_article_supprimer'));
            }

            // myapp_category_lister
            if (rtrim($pathinfo, '/') === '/blog/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_category_lister');
                }
                return array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::listerAction',  '_route' => 'myapp_category_lister',);
            }

            // myapp_category_ajouter
            if ($pathinfo === '/blog/category/ajouter') {
                return array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::editerAction',  '_route' => 'myapp_category_ajouter',);
            }

            // myapp_category_modifier
            if (0 === strpos($pathinfo, '/blog/category/modifier') && preg_match('#^/blog/category/modifier/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::editerAction',)), array('_route' => 'myapp_category_modifier'));
            }

            // myapp_category_supprimer
            if (0 === strpos($pathinfo, '/blog/category/supprimer') && preg_match('#^/blog/category/supprimer/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\BlogBundle\\Controller\\CategoryController::supprimerAction',)), array('_route' => 'myapp_category_supprimer'));
            }

        }

        if (0 === strpos($pathinfo, '/myapp')) {
            // myapp_accueil
            if (rtrim($pathinfo, '/') === '/myapp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_accueil');
                }
                return array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'myapp_accueil',);
            }

            // myapp_acteur_lister
            if (rtrim($pathinfo, '/') === '/myapp/acteur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_acteur_lister');
                }
                return array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::listerAction',  '_route' => 'myapp_acteur_lister',);
            }

            // myapp_acteur_ajouter
            if ($pathinfo === '/myapp/acteur/ajouter') {
                return array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::editerAction',  '_route' => 'myapp_acteur_ajouter',);
            }

            // myapp_acteur_modifier
            if (0 === strpos($pathinfo, '/myapp/acteur/modifier') && preg_match('#^/myapp/acteur/modifier/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::editerAction',)), array('_route' => 'myapp_acteur_modifier'));
            }

            // myapp_acteur_supprimer
            if (0 === strpos($pathinfo, '/myapp/acteur/supprimer') && preg_match('#^/myapp/acteur/supprimer/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\ActeurController::supprimerAction',)), array('_route' => 'myapp_acteur_supprimer'));
            }

            // myapp_film_lister
            if (rtrim($pathinfo, '/') === '/myapp/film') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_film_lister');
                }
                return array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::listerAction',  '_route' => 'myapp_film_lister',);
            }

            // myapp_film_ajouter
            if ($pathinfo === '/myapp/film/ajouter') {
                return array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::editerAction',  '_route' => 'myapp_film_ajouter',);
            }

            // myapp_film_modifier
            if (0 === strpos($pathinfo, '/myapp/film/modifier') && preg_match('#^/myapp/film/modifier/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::editerAction',)), array('_route' => 'myapp_film_modifier'));
            }

            // myapp_film_supprimer
            if (0 === strpos($pathinfo, '/myapp/film/supprimer') && preg_match('#^/myapp/film/supprimer/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::supprimerAction',)), array('_route' => 'myapp_film_supprimer'));
            }

            // myapp_film_voir
            if (0 === strpos($pathinfo, '/myapp/film/voir') && preg_match('#^/myapp/film/voir/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\FilmothequeBundle\\Controller\\FilmController::voirAction',)), array('_route' => 'myapp_film_voir'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
