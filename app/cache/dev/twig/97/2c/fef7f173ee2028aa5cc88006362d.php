<?php

/* KnpMenuBundle:Menu:menu.html.twig */
class __TwigTemplate_972cfef7f173ee2028aa5cc88006362d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ul ";
        echo $this->getAttribute($this->getContext($context, 'menu'), "attributes", array($this->getAttribute($this->getContext($context, 'item'), "attributes", array(), "any", false), ), "method", false);
        echo ">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'item'), "children", array(), "any", false));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 3
            echo "        ";
            $this->env->loadTemplate("KnpMenuBundle:Menu:item.html.twig")->display(array_merge($context, array("item" => $this->getContext($context, 'child'), "menu" => $this->getContext($context, 'menu'))));
            // line 4
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
