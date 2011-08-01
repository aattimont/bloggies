<?php

/* MyAppFilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_ee3f603a1ad4c4d6c82d15f09e3642e3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<html>
    <body>
        <h1>Liste des catégories</h1>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'categories'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['cat']) {
            // line 5
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'cat'), "nom", array(), "any", false), "html");
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "            <p>Aucune catégorie n'a été trouvée.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
