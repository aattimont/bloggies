<?php

/* MyAppFilmothequeBundle:Film:voir.html.twig */
class __TwigTemplate_5d2f9e966aa4cfbbc2e78e56898ba7c9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("MyAppFilmothequeBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Fiche du film ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'film'), "titre", array(), "any", false), "html");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<h1>Fiche du film ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'film'), "titre", array(), "any", false), "html");
        echo "</h1>

<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'film'), "description", array(), "any", false), "html");
        echo "</p>

<p>Catégorie : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'film'), "categorie", array(), "any", false), "nom", array(), "any", false), "html");
        echo "</p>

<p>Acteurs</p>
<ul>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'film'), "acteurs", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['a']) {
            // line 17
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'a'), "prenom", array(), "any", false), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'a'), "nom", array(), "any", false), "html");
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</ul>

<p><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_lister"), "html");
        echo "\">Retour à la liste des films</a></p>

";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Film:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
