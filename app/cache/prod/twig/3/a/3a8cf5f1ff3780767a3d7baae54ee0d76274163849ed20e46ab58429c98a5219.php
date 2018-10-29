<?php

/* TopxiaWebBundle:Default:xsheader.html.twig */
class __TwigTemplate_3a8cf5f1ff3780767a3d7baae54ee0d76274163849ed20e46ab58429c98a5219 extends Twig_Template
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
