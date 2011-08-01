<?php

/* MyAppFilmothequeBundle::layout.html.twig */
class __TwigTemplate_0078db25446497dbb3d0387bf35ffc72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappfilmothequebundle/css/main.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"header\">
            ";
        // line 9
        $this->displayBlock('content_header', $context, $blocks);
        // line 15
        echo "        </div>
        
        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "My App";
    }

    // line 9
    public function block_content_header($context, array $blocks = array())
    {
        echo "                
                <ul id=\"menu\">
                    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_film_lister"), "html");
        echo "\">Liste des films</a></li>
                    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_lister"), "html");
        echo "\">Liste des acteurs</a></li>                    
                </ul>
            ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
