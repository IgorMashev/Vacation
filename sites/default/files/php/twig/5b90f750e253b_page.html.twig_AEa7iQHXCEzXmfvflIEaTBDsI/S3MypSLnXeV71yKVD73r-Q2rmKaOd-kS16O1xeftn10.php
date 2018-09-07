<?php

/* themes/custom/bootstrap_sass/templates/page.html.twig */
class __TwigTemplate_963b7f9fe0e74ebe247260a8eaf6613d6959ac74279297a9872285c81b664c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 57, "block" => 58);
        $filters = array("clean_class" => 63, "t" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        echo "<section class=\"sections\">
";
        // line 57
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 95
        echo "</section>
<section class=\"sections\">    
    <div class=\"row\">
      <div class=\"container\">
            ";
        // line 100
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 101
            echo "              ";
            $this->displayBlock('header', $context, $blocks);
            // line 106
            echo "            ";
        }
        // line 107
        echo "      </div>
    </div>
</section>

<section class=\"sections\">
";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 170
        echo "</section>

<section class=\"sections\">
";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 174
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 180
        echo "<section class=\"sections\">";
    }

    // line 58
    public function block_navbar($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 63
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 66
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 67
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 68
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 70
        echo "      <div class=\"navbar-header\">
        ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 73
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 74
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 81
        echo "      </div>

      ";
        // line 84
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 85
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 89
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 90
            echo "        </div>
      ";
        }
        // line 92
        echo "    </header>
  ";
    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        // line 102
        echo "                <div class=\"col-sm-12\" role=\"heading\">
                  ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
                </div>
              ";
    }

    // line 113
    public function block_main($context, array $blocks = array())
    {
        // line 114
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">


        ";
        // line 119
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 120
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 125
            echo "        ";
        }
        // line 126
        echo "
      ";
        // line 128
        echo "      ";
        // line 129
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 130
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 131
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 132
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 136
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 139
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 140
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 146
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 147
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 150
            echo "        ";
        }
        // line 151
        echo "
        ";
        // line 153
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 157
        echo "      </section>

      ";
        // line 160
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 161
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 166
            echo "      ";
        }
        // line 167
        echo "    </div>
  </div>
";
    }

    // line 120
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 121
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 122
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 140
    public function block_highlighted($context, array $blocks = array())
    {
        // line 141
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 147
    public function block_help($context, array $blocks = array())
    {
        // line 148
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 153
    public function block_content($context, array $blocks = array())
    {
        // line 154
        echo "          <a id=\"main-content\"></a>
          ";
        // line 155
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 161
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 162
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_footer($context, array $blocks = array())
    {
        // line 175
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_sass/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 176,  331 => 175,  328 => 174,  321 => 163,  318 => 162,  315 => 161,  309 => 155,  306 => 154,  303 => 153,  296 => 148,  293 => 147,  286 => 141,  283 => 140,  276 => 122,  273 => 121,  270 => 120,  264 => 167,  261 => 166,  258 => 161,  255 => 160,  251 => 157,  248 => 153,  245 => 151,  242 => 150,  239 => 147,  236 => 146,  233 => 144,  230 => 143,  227 => 140,  224 => 139,  218 => 136,  216 => 133,  215 => 132,  214 => 131,  213 => 130,  212 => 129,  210 => 128,  207 => 126,  204 => 125,  201 => 120,  198 => 119,  190 => 114,  187 => 113,  180 => 103,  177 => 102,  174 => 101,  169 => 92,  165 => 90,  162 => 89,  156 => 86,  153 => 85,  150 => 84,  146 => 81,  137 => 75,  134 => 74,  131 => 73,  127 => 71,  124 => 70,  118 => 68,  116 => 67,  111 => 66,  109 => 63,  108 => 62,  107 => 60,  105 => 59,  102 => 58,  98 => 180,  94 => 174,  92 => 173,  87 => 170,  85 => 113,  78 => 107,  75 => 106,  72 => 101,  69 => 100,  63 => 95,  59 => 58,  57 => 57,  54 => 56,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/bootstrap_sass/templates/page.html.twig", "/var/www/mysite/themes/custom/bootstrap_sass/templates/page.html.twig");
    }
}
