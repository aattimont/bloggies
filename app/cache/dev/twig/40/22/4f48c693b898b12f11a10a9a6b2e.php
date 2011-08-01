<?php

/* MyAppBlogBundle:Category:lister.html.twig */
class __TwigTemplate_40224f48c693b898b12f11a10a9a6b2e extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("MyAppBlogBundle::layout.html.twig");
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
        echo "Liste des categories";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Liste des categories</h1>

<table>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'categories'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['c']) {
            // line 11
            echo "\t<tr>
<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'c'), "name", array(), "any", false), "html");
            echo "</td>
<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_modifier", array("id" => $this->getAttribute($this->getContext($context, 'c'), "id", array(), "any", false))), "html");
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_supprimer", array("id" => $this->getAttribute($this->getContext($context, 'c'), "id", array(), "any", false))), "html");
            echo "\">Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "\t<tr><td>Aucune catégorie n’a été trouvée.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</table>

<p><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_ajouter"), "html");
        echo "\">Ajouter une catégorie.</a><p>

";
    }

    public function getTemplateName()
    {
        return "MyAppBlogBundle:Category:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
