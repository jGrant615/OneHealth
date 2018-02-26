<?php

/* themes/custom/onehealth/page.html.twig */
class __TwigTemplate_7bba18f3520cd8ae868dac130b2f0c710d146b2a670909182c93da4bbacf50bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 4
        echo "
<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>
  <main role=\"main\">
    <div class=\"row container\">
      <div class=\"col-md-8\">
        <a id=\"main-content \" tabindex=\"-1\"></a>";
        // line 14
        echo "        <div class=\"layout-content\">
          ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>";
        // line 17
        echo "      </div>
      <div class=\"col-md-4 sidebar\">
         ";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 20
            echo "          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 24
        echo "        </div>
    </div>
  </main>
  ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 28
            echo "    <footer role=\"contentinfo\">
      ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/onehealth/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  89 => 29,  86 => 28,  84 => 27,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  64 => 17,  60 => 15,  57 => 14,  49 => 8,  43 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# To call a region, use syntax {{ page.region-name }}
 # All regions are defined in onehealth.info.yml 
 # Content included in each region can be changed in drupal site manager under 'Structure'  #}

<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>
  <main role=\"main\">
    <div class=\"row container\">
      <div class=\"col-md-8\">
        <a id=\"main-content \" tabindex=\"-1\"></a>{# link is in html.html.twig #}
        <div class=\"layout-content\">
          {{ page.content }}
        </div>{# /.layout-content #}
      </div>
      <div class=\"col-md-4 sidebar\">
         {% if page.sidebar %}
          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            {{ page.sidebar }}
          </aside>
        {% endif %}
        </div>
    </div>
  </main>
  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}
</div>{# /.layout-container #}
", "themes/custom/onehealth/page.html.twig", "C:\\Users\\Justus\\Documents\\Class\\SS18\\ITM-444\\onehealth\\themes\\custom\\onehealth\\page.html.twig");
    }
}
