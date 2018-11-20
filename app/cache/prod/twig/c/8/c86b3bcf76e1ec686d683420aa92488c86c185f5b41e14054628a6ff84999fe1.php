<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_c86b3bcf76e1ec686d683420aa92488c86c185f5b41e14054628a6ff84999fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "</title>
    ";
        // line 19
        echo "  <meta content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 22
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  <link rel=\"shortcut icon\" href=\"/favicon1.ico\" type=\"image/x-icon\" />
  <link rel=\"icon\" href=\"/favicon1.ico\" type=\"image/gif\" >
  ";
        // line 31
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "  
  <!--[if lt IE 9]>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 42
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 43
        echo "
</head>
<body ";
        // line 45
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo " >

";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 91)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 92
        echo "
</body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $context["currentTheme"] = $this->env->getExtension('topxia_theme_twig')->getCurrentTheme();
        // line 33
        echo "        ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 33)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : null), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false)))));
        // line 34
        echo "
    ";
    }

    // line 42
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "  <div class=\"es-wrap\">

    ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "    
    ";
        // line 55
        $this->displayBlock('full_content', $context, $blocks);
        // line 64
        echo "
       ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "
       ";
        // line 69
        $this->displayBlock('bottom', $context, $blocks);
        // line 70
        echo "     </div>
   ";
        // line 78
        echo "  ";
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 85
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  
";
    }

    // line 50
    public function block_header($context, array $blocks = array())
    {
        // line 51
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 51)->display($context);
        // line 52
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 52)->display($context);
        // line 53
        echo "    ";
    }

    // line 55
    public function block_full_content($context, array $blocks = array())
    {
        // line 56
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 57
        echo "      
      <div id=\"content-container\" class=\"container\">
        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "      </div>
      
      ";
        // line 62
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 63
        echo "    ";
    }

    // line 56
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "         ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 66)->display($context);
        // line 67
        echo "       ";
    }

    // line 69
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 78
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 80
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 81
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 81)->display($context);
                // line 82
                echo "      ";
            }
            // line 83
            echo "    ";
        }
        // line 84
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 84,  259 => 83,  256 => 82,  253 => 81,  250 => 80,  247 => 79,  244 => 78,  239 => 69,  235 => 67,  232 => 66,  229 => 65,  224 => 62,  219 => 59,  214 => 56,  210 => 63,  208 => 62,  204 => 60,  202 => 59,  198 => 57,  195 => 56,  192 => 55,  188 => 53,  185 => 52,  182 => 51,  179 => 50,  171 => 86,  168 => 85,  165 => 78,  162 => 70,  160 => 69,  157 => 68,  155 => 65,  152 => 64,  150 => 55,  147 => 54,  145 => 50,  141 => 48,  138 => 47,  133 => 42,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  114 => 13,  108 => 92,  106 => 91,  103 => 90,  101 => 47,  92 => 45,  88 => 43,  86 => 42,  80 => 39,  76 => 38,  72 => 36,  69 => 31,  63 => 22,  59 => 21,  55 => 20,  50 => 19,  47 => 16,  45 => 13,  33 => 2,  31 => 1,);
    }
}
