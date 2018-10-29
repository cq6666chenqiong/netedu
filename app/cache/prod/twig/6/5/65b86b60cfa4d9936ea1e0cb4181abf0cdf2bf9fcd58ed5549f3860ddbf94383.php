<?php

/* TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig */
class __TwigTemplate_65b86b60cfa4d9936ea1e0cb4181abf0cdf2bf9fcd58ed5549f3860ddbf94383 extends Twig_Template
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
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 2
            echo "    ";
            // line 35
            echo "  ";
            $this->env->getExtension('topxia_web_twig')->loadScript("course/recommend-classroom");
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 35,  21 => 2,  19 => 1,);
    }
}
