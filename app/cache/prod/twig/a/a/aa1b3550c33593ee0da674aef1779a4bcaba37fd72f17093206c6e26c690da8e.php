<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_aa1b3550c33593ee0da674aef1779a4bcaba37fd72f17093206c6e26c690da8e extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a id=\"create-course\" href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo "</a>
</div>
<div class=\"btn-group\">

\t<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">普通课程</a>


\t<a href=\" ";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">科室课程</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  31 => 6,  22 => 2,  19 => 1,);
    }
}
