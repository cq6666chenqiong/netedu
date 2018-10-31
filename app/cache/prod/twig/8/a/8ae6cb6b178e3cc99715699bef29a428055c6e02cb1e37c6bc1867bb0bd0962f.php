<?php

/* TopxiaWebBundle:Default:top-navigation.html.twig */
class __TwigTemplate_8ae6cb6b178e3cc99715699bef29a428055c6e02cb1e37c6bc1867bb0bd0962f extends Twig_Template
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
        // line 25
        echo "


";
        // line 28
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
            // line 29
            echo "    ";
            // line 34
            echo "
    <li ";
            // line 35
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("admin_course");
            echo "\">课程管理</a>
    </li>

    <li ";
            // line 39
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("admin_classroom");
            echo "\">科室管理</a>
    </li>

    <li ";
            // line 43
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("admin_user");
            echo "\">用户管理</a>
    </li>

    <li ";
            // line 47
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">个人设置</a>
    </li>

    <li ";
            // line 51
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("admin_sorce_statistical");
            echo "\">学分统计</a>
    </li>

";
        } else {
            // line 56
            echo "
   ";
        }
        // line 70
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 70,  92 => 56,  85 => 52,  79 => 51,  73 => 48,  67 => 47,  61 => 44,  55 => 43,  49 => 40,  43 => 39,  37 => 36,  31 => 35,  28 => 34,  26 => 29,  24 => 28,  19 => 25,);
    }
}
