<?php

/* TwigBundle:Exception:layout.html.twig */
class __TwigTemplate_b7ef51628406b273d62a3c0d473a187bd803e3af42c065210cbed06727dacdef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 13
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 14
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 16
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "

  ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 19
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

</head>
<body ";
        // line 31
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
  ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "myBanana"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By myBanana";
        }
    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 14
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TwigBundle:Exception:layout.html.twig", 23)->display($context);
        // line 24
        echo "  ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  129 => 24,  126 => 23,  123 => 22,  117 => 14,  111 => 13,  100 => 10,  97 => 9,  92 => 33,  90 => 32,  82 => 31,  75 => 27,  71 => 26,  68 => 25,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  35 => 12,  33 => 9,  24 => 1,);
    }
}
