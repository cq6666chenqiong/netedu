<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_85d94785ab6c56e9afeb141d094fdd5925b668a3bc520dbb28b73c96924f3981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 3
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", (isset($context["menu"]) ? $context["menu"] : null));
        // line 4
        $context["menu_current"] = twig_last($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null));
        // line 5
        $context["menu_nav"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array"), null)) : (null));
        // line 6
        $context["menu_sidebar"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array"), null)) : (null));
        // line 7
        $context["menu_main"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array"), null)) : (null));
        // line 8
        $context["menu_hiddens"] = $this->env->getExtension('topxia_web_twig')->getSetting("menu_hiddens", array());
        // line 9
        echo "<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
    <title>
        ";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        // line 29
        echo "        ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | myBanana";
        }
        // line 30
        echo "    </title>


    ";
        // line 34
        echo "
    <link rel=\"shortcut icon\" href=\"/favicon1.ico\" type=\"image/x-icon\" />
    <link rel=\"icon\" href=\"/favicon1.ico\" type=\"image/gif\" >
    ";
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    <!--[if lt IE 9]>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
    <style type=\"text/css\">
      .lc{
          display: block;
          padding: 10px 15px;
          background: yellowgreen
      }
    </style>
</head>
<body>
";
        // line 133
        $this->displayBlock('header', $context, $blocks);
        // line 137
        echo "

<div class=\"container\">
  <div class=\"row\">
      ";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        // line 265
        echo "    </div>
</div>



";
        // line 270
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 270)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 282
        echo "</body>
";
        // line 283
        $this->displayBlock('footer', $context, $blocks);
        // line 287
        echo "</html>

";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 22
            echo "                ";
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)))) {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 25
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo " -
                ";
            }
            // line 27
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        ";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 45
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
        ";
        // line 50
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 51
        echo "        ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaAdminBundle::layout.html.twig", 51)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : null), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false)))));
        // line 52
        echo "
    ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 133
    public function block_header($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaAdminBundle::layout.html.twig", 134)->display($context);
        // line 135
        echo "    ";
        $this->loadTemplate("TopxiaAdminBundle:Default:header.html.twig", "TopxiaAdminBundle::layout.html.twig", 135)->display($context);
    }

    // line 141
    public function block_content($context, array $blocks = array())
    {
        // line 142
        echo "      ";
        // line 261
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 262
        echo "        </div>

        ";
    }

    // line 261
    public function block_main($context, array $blocks = array())
    {
    }

    // line 283
    public function block_footer($context, array $blocks = array())
    {
        // line 284
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
    ";
        // line 285
        $this->loadTemplate("TopxiaAdminBundle:Default:footer.html.twig", "TopxiaAdminBundle::layout.html.twig", 285)->display($context);
    }

    // line 289
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 290
            echo "    <a
            ";
            // line 291
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 292
                echo "                class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
            ";
            }
            // line 294
            echo "            ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 295
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
                data-toggle=\"modal\"
                data-target=\"#modal\"
            ";
            } else {
                // line 299
                echo "                href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
            ";
            }
            // line 301
            echo "            ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 302
                echo "                target=\"blank\"
            ";
            }
            // line 304
            echo "    >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array()), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 304,  317 => 302,  314 => 301,  308 => 299,  300 => 295,  297 => 294,  291 => 292,  289 => 291,  286 => 290,  272 => 289,  268 => 285,  263 => 284,  260 => 283,  255 => 261,  249 => 262,  246 => 261,  244 => 142,  241 => 141,  236 => 135,  233 => 134,  230 => 133,  225 => 55,  220 => 52,  217 => 51,  215 => 50,  211 => 49,  207 => 48,  203 => 47,  199 => 46,  194 => 45,  191 => 44,  187 => 28,  173 => 27,  167 => 25,  161 => 23,  158 => 22,  140 => 21,  137 => 20,  131 => 287,  129 => 283,  126 => 282,  124 => 270,  117 => 265,  115 => 141,  109 => 137,  107 => 133,  93 => 58,  89 => 57,  86 => 56,  84 => 55,  81 => 54,  79 => 44,  76 => 43,  71 => 34,  66 => 30,  61 => 29,  59 => 20,  54 => 18,  43 => 9,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  26 => 1,);
    }
}
