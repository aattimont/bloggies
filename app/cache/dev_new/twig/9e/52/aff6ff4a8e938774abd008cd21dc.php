<?php

/* MyAppFilmothequeBundle:Acteur:editer.html.twig */
class __TwigTemplate_9e52aff6ff4a8e938774abd008cd21dc extends Twig_Template
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
        echo "Ajouter/Modifier un acteur";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Ajouter un acteur</h1>

";
        // line 9
        if ($this->getContext($context, 'message')) {
            // line 10
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'message'), "html");
            echo "</p>
";
        }
        // line 12
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_lister"), "html");
        echo "\">Retour à la liste des acteurs</a></p>

";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
