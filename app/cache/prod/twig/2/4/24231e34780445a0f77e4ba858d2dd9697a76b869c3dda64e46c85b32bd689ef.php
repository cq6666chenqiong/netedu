<?php

/* TopxiaWebBundle:Default:xsheader.html.twig */
class __TwigTemplate_24231e34780445a0f77e4ba858d2dd9697a76b869c3dda64e46c85b32bd689ef extends Twig_Template
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
        // line 1
        echo "

<li ";
        // line 3
        if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">首页</a>
</li>
<li ";
        // line 6
        if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\">个人设置</a>
</li>
<li ";
        // line 9
        if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("my");
        echo "\">我的学习</a>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:xsheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 9,  40 => 7,  34 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
