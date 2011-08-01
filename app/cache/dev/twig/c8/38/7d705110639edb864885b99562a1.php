<?php

/* MyAppFilmothequeBundle:Acteur:ajouter.html.twig */
class __TwigTemplate_c8387d705110639edb864885b99562a1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Ajouter un acteur</h1>

";
        // line 3
        if ($this->getContext($context, 'message')) {
            // line 4
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'message'), "html");
            echo "</p>
";
        }
        // line 6
        echo "
<form action=\"\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_lister"), "html");
        echo "\">Retour à la liste des acteurs</a></p>";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
