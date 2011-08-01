<?php

/* MyAppBlogBundle::layout.html.twig */
class __TwigTemplate_4ca8f609a3c4af9d58a890e69fd0b7fe extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappblogbundle/css/main.css"), "html");
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
        // line 18
        echo "        </div>
        
        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
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
               <!-- <ul id=\"menu\">
                    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_article_lister"), "html");
        echo "\">List of articles</a></li>
                    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_category_lister"), "html");
        echo "\">List of categories</a></li>                    
                </ul> -->
                <div id=\"nav\">
                    ";
        // line 15
        echo $this->env->getExtension('knp_menu')->render("main");
        echo "
                </div>
            ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "MyAppBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
