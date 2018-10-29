<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_76d173a5bef0c366f90437206f108c9af5272af4918c67fd4020bfa000fed1e8 extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : null), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 3
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 5
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 6
            echo "        ";
            // line 7
            echo "         <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>

           <li role=\"presentation\" ";
            // line 9
            if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料区"), "html", null, true);
            echo "</a></li>
           ";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "       ";
            // line 15
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时列表"), "html", null, true);
            echo "</a></li>
   ";
            // line 17
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资料区"), "html", null, true);
            echo "</a></li>
    ";
            // line 22
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师简介"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 24
        echo "
  </ul>

  ";
        // line 27
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher"))) {
            // line 28
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告"), "html", null, true);
            echo "
      </a>
  </div>
  ";
        }
        // line 35
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  147 => 31,  142 => 29,  139 => 28,  137 => 27,  132 => 24,  112 => 22,  93 => 17,  74 => 15,  72 => 14,  69 => 13,  51 => 9,  31 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
