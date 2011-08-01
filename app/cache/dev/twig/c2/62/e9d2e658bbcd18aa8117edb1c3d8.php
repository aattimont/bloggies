<?php

/* KnpMenuBundle:Menu:item.html.twig */
class __TwigTemplate_c262e9d2e658bbcd18aa8117edb1c3d8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'item'), "shouldBeRendered", array(), "any", false)) {
            // line 2
            echo "    <li ";
            echo $this->getAttribute($this->getContext($context, 'menu'), "attributes", array($this->getAttribute($this->getContext($context, 'menu'), "getItemAttributes", array($this->getContext($context, 'item'), ), "method", false), ), "method", false);
            echo ">
        ";
            // line 3
            if ($this->getAttribute($this->getContext($context, 'item'), "shouldBeRenderedAsLink", array(), "any", false)) {
                // line 4
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "uri", array(), "any", false), "html");
                echo "\" ";
                echo $this->getAttribute($this->getContext($context, 'menu'), "attributes", array($this->getAttribute($this->getContext($context, 'item'), "linkAttributes", array(), "any", false), ), "method", false);
                echo ">";
                echo $this->getAttribute($this->getContext($context, 'item'), "label", array(), "any", false);
                echo "</a>
        ";
            } else {
                // line 6
                echo "        <span ";
                echo $this->getAttribute($this->getContext($context, 'menu'), "attributes", array($this->getAttribute($this->getContext($context, 'item'), "labelAttributes", array(), "any", false), ), "method", false);
                echo ">";
                echo $this->getAttribute($this->getContext($context, 'item'), "label", array(), "any", false);
                echo "</span>
        ";
            }
            // line 8
            echo "        ";
            if (($this->getAttribute($this->getContext($context, 'item'), "hasChildren", array(), "any", false) && (twig_test_none($this->getContext($context, 'depth')) || ($this->getContext($context, 'depth') > 1)))) {
                // line 9
                echo "            ";
                $context['depth'] = (($this->getContext($context, 'depth')) ? (($this->getContext($context, 'depth') - 1)) : (null));
                // line 10
                echo "            ";
                $this->env->loadTemplate("KnpMenuBundle:Menu:menu.html.twig")->display(array_merge($context, array("item" => $this->getContext($context, 'item'), "menu" => $this->getContext($context, 'menu'), "depth" => $this->getContext($context, 'depth'))));
                // line 11
                echo "        ";
            }
            // line 12
            echo "    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle:Menu:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
